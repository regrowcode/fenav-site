<?php
/**
 * Plantilla para la Sala de Prensa (Lista de entradas)
 */
get_header(); ?>

<!-- HERO SECTION - SALA DE PRENSA -->
<section class="relative bg-dark text-white py-24 md:py-32 border-b border-primary/30 overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-32 right-10 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 left-10 w-96 h-96 bg-yellow-600/10 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 bg-[radial-gradient(#d4af37_1px,transparent_1px)] [background-size:36px_36px] opacity-10"></div>
    </div>

    <div class="container mx-auto px-4 md:px-6 text-center max-w-4xl relative z-10">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-zinc-900/80 border border-primary/30 text-primary text-xs font-bold uppercase tracking-widest mb-6">
            <span class="w-2 h-2 rounded-full bg-primary"></span>
            Comunicación Oficial
        </div>
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 tracking-tight">
            Sala de <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-yellow-200 to-primary">Prensa</span>
        </h1>
        <p class="text-base md:text-xl text-gray-300 font-light max-w-2xl mx-auto">
            Comunicados oficiales, jornadas ministeriales, eventos y noticias del avivamiento en Venezuela.
        </p>
    </div>
</section>

<!-- LISTADO DE ENTRADAS -->
<section class="py-20 bg-gray-50/60 px-4 md:px-6">
    <div class="container mx-auto max-w-6xl">
        
        <?php if ( have_posts() ) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="bg-white rounded-3xl shadow-sm overflow-hidden border border-gray-200/80 hover:border-primary/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                        
                        <div>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="h-52 overflow-hidden relative">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition duration-500']); ?>
                                    </a>
                                </div>
                            <?php else : ?>
                                <div class="h-44 bg-zinc-950 flex items-center justify-center p-6 relative border-b border-primary/20">
                                    <div class="text-center">
                                        <span class="inline-block px-3 py-1 rounded-full bg-zinc-900 border border-primary/30 text-primary text-[10px] uppercase font-bold tracking-widest">FENAV Prensa</span>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <div class="p-7">
                                <div class="flex items-center justify-between text-xs text-muted mb-3">
                                    <span class="text-primary font-bold uppercase tracking-wider"><?php echo get_the_date('d M, Y'); ?></span>
                                    <span><?php echo get_the_author(); ?></span>
                                </div>
                                <h2 class="text-xl font-bold text-dark mb-3 leading-snug group-hover:text-primary transition-colors">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p class="text-muted text-sm leading-relaxed mb-4">
                                    <?php echo wp_trim_words( get_the_excerpt(), 22 ); ?>
                                </p>
                            </div>
                        </div>

                        <div class="px-7 pb-6 pt-2 border-t border-gray-100 flex items-center justify-between">
                            <a href="<?php the_permalink(); ?>" class="text-primary font-extrabold text-xs uppercase tracking-wider inline-flex items-center gap-1.5 hover:gap-2.5 transition-all">
                                Leer comunicado 
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Paginación -->
            <div class="mt-16 text-center">
                <?php echo paginate_links(['class' => 'pagination']); ?>
            </div>

        <?php else : ?>
            <div class="bg-white rounded-3xl p-12 text-center max-w-xl mx-auto border border-gray-200">
                <div class="w-16 h-16 rounded-2xl bg-amber-500/10 text-primary flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-dark mb-2">Próximamente más publicaciones</h3>
                <p class="text-muted text-sm">Actualmente estamos redactando los próximos comunicados y crónicas de eventos de la federación.</p>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>