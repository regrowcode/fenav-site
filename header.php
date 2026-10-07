<?php
/**
 * Theme header template.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-white text-zinc-900 antialiased font-sans'); ?>>

<div id="page" class="min-h-screen flex flex-col">
    <!-- Header Profesional FENAV -->
    <header class="sticky top-0 z-50 bg-dark/95 backdrop-blur-md border-b border-primary/30 py-3 shadow-xl transition-all duration-300">
        <div class="container mx-auto flex justify-between items-center px-4 md:px-6">
            
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 group">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-fenav-preview.png" alt="FENAV" class="h-14 md:h-16 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
            </a>

            <!-- Navegación Escritorio -->
            <nav id="primary-navigation" class="hidden md:flex items-center space-x-1 lg:space-x-2">
                <?php
                if ( has_nav_menu('primary') ) {
                    wp_nav_menu([
                        'theme_location'  => 'primary',
                        'container'       => false,
                        'menu_class'      => 'flex items-center space-x-6 lg:space-x-8 font-semibold uppercase text-xs tracking-wider',
                        'fallback_cb'     => false,
                    ]);
                } else {
                    echo '<a href="' . admin_url('nav-menus.php') . '" class="text-primary text-xs hover:underline uppercase tracking-wider">Crear menú en WordPress</a>';
                }
                ?>
            </nav>

            <!-- Botón Móvil -->
            <button id="primary-menu-toggle" type="button" aria-expanded="false" aria-label="Abrir menú" class="md:hidden text-white hover:text-primary p-2 rounded-lg border border-zinc-800 hover:border-primary/40 transition-colors focus:outline-none">
                <svg class="w-6 h-6 menu-open-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg class="w-6 h-6 menu-close-icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Contenedor Menú Móvil desplegable -->
        <div id="mobile-navigation" class="hidden md:hidden border-t border-zinc-800 bg-dark px-4 py-6 shadow-2xl">
            <?php
            if ( has_nav_menu('primary') ) {
                wp_nav_menu([
                    'theme_location'  => 'primary',
                    'container'       => false,
                    'menu_class'      => 'flex flex-col space-y-4 font-semibold uppercase text-sm tracking-wider',
                    'fallback_cb'     => false,
                ]);
            } else {
                echo '<a href="' . admin_url('nav-menus.php') . '" class="text-primary text-sm hover:underline uppercase tracking-wider">Crear menú en WordPress</a>';
            }
            ?>
        </div>
    </header>

    <div id="content" class="site-content grow flex flex-col">
        <main class="w-full grow">