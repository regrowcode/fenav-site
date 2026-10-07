<?php

if (is_file(__DIR__.'/vendor/autoload_packages.php')) {
    require_once __DIR__.'/vendor/autoload_packages.php';
}

// Cargar sistema de traducciones multilingüe (ES, EN, PT)
require_once __DIR__ . '/inc/translations.php';

function tailpress(): TailPress\Framework\Theme
{
    return TailPress\Framework\Theme::instance()
        ->assets(fn($manager) => $manager
            ->withCompiler(new TailPress\Framework\Assets\ViteCompiler, fn($compiler) => $compiler
                ->registerAsset('resources/css/app.css')
                ->registerAsset('resources/js/app.js')
                ->editorStyleFile('resources/css/editor-style.css')
            )
            ->enqueueAssets()
        )
        ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
        ->menus(fn($manager) => $manager->add('primary', __( 'Primary Menu', 'tailpress')))
        ->themeSupport(fn($manager) => $manager->add([
            'title-tag',
            'custom-logo',
            'post-thumbnails',
            'align-wide',
            'wp-block-styles',
            'responsive-embeds',
            'html5' => [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        ]));
}

add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
    if ($args->theme_location == 'primary') {
        $atts['class'] = 'text-white hover:text-primary transition-colors duration-300 no-underline';
    }
    return $atts;
}, 10, 3);

// Traducción dinámica de elementos del menú primario
add_filter('wp_nav_menu_objects', function($items, $args) {
    if ($args->theme_location == 'primary') {
        $menu_map = [
            'inicio' => ['en' => 'Home', 'pt' => 'Início'],
            'home' => ['en' => 'Home', 'pt' => 'Início'],
            'nosotros' => ['en' => 'About Us', 'pt' => 'Sobre Nós'],
            'quienes somos' => ['en' => 'About Us', 'pt' => 'Quem Somos'],
            'departamentos' => ['en' => 'Departments', 'pt' => 'Departamentos'],
            'direcciones' => ['en' => 'Directorates', 'pt' => 'Diretorias'],
            'iglesias afiliadas' => ['en' => 'Affiliated Churches', 'pt' => 'Igrejas Afiliadas'],
            'iglesias' => ['en' => 'Churches', 'pt' => 'Igrejas'],
            'sala de prensa' => ['en' => 'Press Room', 'pt' => 'Sala de Imprensa'],
            'prensa' => ['en' => 'Press', 'pt' => 'Imprensa'],
            'eventos' => ['en' => 'Events', 'pt' => 'Eventos'],
            'contacto' => ['en' => 'Contact', 'pt' => 'Contato'],
        ];

        $lang = fenav_get_current_lang();
        if ($lang !== 'es') {
            foreach ($items as &$item) {
                $clean_title = mb_strtolower(trim($item->title), 'UTF-8');
                if (isset($menu_map[$clean_title][$lang])) {
                    $item->title = $menu_map[$clean_title][$lang];
                }
            }
        }
    }
    return $items;
}, 10, 2);

tailpress();
