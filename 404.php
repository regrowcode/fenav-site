<?php
/**
 * Plantilla de error 404
 */
get_header(); ?>

<section class="min-h-[60vh] flex items-center justify-center py-20 px-4 bg-gray-50">
    <div class="text-center max-w-lg mx-auto bg-white p-10 md:p-14 rounded-3xl border border-gray-200 shadow-xl">
        <span class="inline-block text-6xl md:text-8xl font-black text-transparent bg-clip-text bg-gradient-to-r from-primary to-yellow-600 mb-4">
            404
        </span>
        <h1 class="text-2xl md:text-3xl font-extrabold text-dark mb-4">
            Página No Encontrada
        </h1>
        <p class="text-muted text-sm md:text-base leading-relaxed mb-8">
            Lo sentimos, el enlace al que intentas acceder no existe o ha sido reubicado en nuestra plataforma.
        </p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center gap-2 bg-gradient-to-r from-primary to-yellow-600 text-dark font-extrabold px-8 py-3.5 rounded-full uppercase text-xs tracking-wider shadow-lg hover:shadow-primary/30 transition-all">
            Volver al Inicio
        </a>
    </div>
</section>

<?php get_footer(); ?>
