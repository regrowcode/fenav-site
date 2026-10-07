<?php
/**
 * Theme footer template.
 *
 * @package TailPress
 */
?>
        </main>

        <?php do_action('tailpress_content_end'); ?>
    </div> <!-- Cierra .site-content -->

    <?php do_action('tailpress_content_after'); ?>

    <footer id="colophon" class="bg-dark border-t border-primary/30 text-white pt-16 pb-10" role="contentinfo">
        <div class="container mx-auto px-4 md:px-6">
            <?php do_action('tailpress_footer'); ?>
            
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-12">
                
                <!-- Columna 1: Marca y Misión (5 cols) -->
                <div class="md:col-span-5 space-y-5">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-fenav-preview.png" alt="FENAV" class="h-16 w-auto object-contain">
                    </a>
                    <p class="text-sm text-gray-400 leading-relaxed max-w-sm">
                        Federación Nacional de Avivamiento: Promoviendo el avivamiento por medio de la unidad y cooperación entre las iglesias evangélicas, fortaleciendo su misión y su crecimiento integral.
                    </p>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-zinc-900 border border-primary/20 text-xs text-primary font-medium">
                        <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                        Unidad • Santidad • Excelencia
                    </div>
                </div>

                <!-- Columna 2: Navegación Rápida (3 cols) -->
                <div class="md:col-span-3">
                    <h3 class="text-primary font-bold text-xs uppercase tracking-widest mb-6">Enlaces Rápidos</h3>
                    <nav>
                        <?php
                        if ( has_nav_menu('primary') ) {
                            wp_nav_menu([
                                'theme_location'  => 'primary',
                                'container'       => false,
                                'menu_class'      => 'flex flex-col space-y-3 text-sm text-gray-300',
                                'fallback_cb'     => false,
                            ]);
                        } else {
                            echo '<ul class="space-y-2 text-sm text-gray-400">
                                <li><a href="' . esc_url(home_url('/')) . '" class="hover:text-primary transition-colors">Inicio</a></li>
                                <li><a href="' . esc_url(home_url('/nosotros')) . '" class="hover:text-primary transition-colors">Nosotros</a></li>
                                <li><a href="' . esc_url(home_url('/departamentos')) . '" class="hover:text-primary transition-colors">Departamentos</a></li>
                                <li><a href="' . esc_url(home_url('/iglesias-afiliadas')) . '" class="hover:text-primary transition-colors">Iglesias Afiliadas</a></li>
                            </ul>';
                        }
                        ?>
                    </nav>
                </div>

                <!-- Columna 3: Contacto y Ubicación (4 cols) -->
                <div class="md:col-span-4">
                    <h3 class="text-primary font-bold text-xs uppercase tracking-widest mb-6">Sede & Contacto</h3>
                    <ul class="text-sm text-gray-400 space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>Carrera 19 entre calles 31 y 32, Barquisimeto, Estado Lara, Venezuela</span>
                        </li>
        
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:correo@fenav.org" class="hover:text-primary transition-colors">correo@fenav.org</a>
                        </li>

                        <li class="pt-2">
                            <a href="https://www.instagram.com/avivadoresve/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3 px-4 py-2 rounded-xl bg-zinc-900 border border-zinc-800 text-gray-300 hover:text-primary hover:border-primary/40 transition-all text-xs font-semibold">
                                <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>
                                Síguenos en @avivadoresve
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Barra inferior: Copyright y Créditos -->
            <div class="border-t border-zinc-800/80 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500 gap-4">
                <p>&copy; <?php echo esc_html(date_i18n('Y')); ?> FENAV — Federación Nacional de Avivamiento. Todos los derechos reservados.</p>
                <p class="text-zinc-600">Edición Oficial • Venezuela</p>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>