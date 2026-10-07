<?php
/**
 * Plantilla para la página de Iglesias Afiliadas
 */
get_header(); 

// Arreglo con la información de las iglesias afiliadas
$iglesias = [
    [
        'nombre'   => 'Iglesia Apostólica Monte Sión',
        'pastores' => 'Pastor Jean Carlos Cuicas y Pastora Lennis de Cuicas',
        'zona'     => 'Oeste de Barquisimeto',
        'estado'   => 'Lara',
    ],
    [
        'nombre'   => 'Casa Paternal por Amor a Sión',
        'pastores' => 'Pastora Glorisay Amaro Ocanto',
        'zona'     => 'Cabudare',
        'estado'   => 'Lara',
    ],
    [
        'nombre'   => 'Ministerio Internacional Remanente Fiel',
        'pastores' => 'Pastor Daniel Oropeza',
        'zona'     => 'Pavia',
        'estado'   => 'Lara',
    ],
    [
        'nombre'   => 'Iglesia Templo del Espíritu Santo',
        'pastores' => 'Pastor Yorlan Montes',
        'zona'     => 'Valle Verde',
        'estado'   => 'Lara',
    ],
    [
        'nombre'   => 'Iglesia Casa de Oración Fuente de Bendición',
        'pastores' => 'Pastora Indhira Castillo',
        'zona'     => 'Guanare',
        'estado'   => 'Portuguesa',
    ],
    [
        'nombre'   => 'Aguas del Jordán',
        'pastores' => 'Pastor Beltrán de Jesús Molina Nuñez',
        'zona'     => 'Cabudare',
        'estado'   => 'Lara',
    ]
];
?>

<!-- 1. HERO SECTION INSTITUCIONAL -->
<section class="relative bg-dark text-white py-24 md:py-32 overflow-hidden border-b border-primary/30">
    <!-- Fondos decorativos abstractos de alta gama (sin imágenes externas innecesarias) -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-yellow-600/10 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 bg-[radial-gradient(#d4af37_1px,transparent_1px)] [background-size:32px_32px] opacity-10"></div>
    </div>
    
    <div class="container mx-auto px-4 md:px-6 text-center max-w-4xl relative z-10">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-zinc-900/80 border border-primary/30 text-primary text-xs font-bold uppercase tracking-widest mb-6">
            <span class="w-2 h-2 rounded-full bg-primary animate-ping"></span>
            Red Nacional de Comunión & Cobertura
        </div>

        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 tracking-tight">
            Iglesias <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-yellow-200 to-primary">Afiliadas</span>
        </h1>
        
        <p class="text-base md:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed font-light">
            Una red nacional de congregaciones unidas en el Espíritu, comprometidas con la proclamación del Evangelio y la transformación integral de nuestra nación.
        </p>

        <!-- Métricas Rápidas -->
        <div class="mt-12 grid grid-cols-2 md:grid-cols-3 gap-4 max-w-2xl mx-auto">
            <div class="bg-zinc-900/70 border border-zinc-800 p-4 rounded-2xl">
                <div class="text-2xl md:text-3xl font-extrabold text-primary"><?php echo count($iglesias); ?>+</div>
                <div class="text-xs uppercase tracking-wider text-gray-400 font-medium">Congregaciones</div>
            </div>
            <div class="bg-zinc-900/70 border border-zinc-800 p-4 rounded-2xl">
                <div class="text-2xl md:text-3xl font-extrabold text-white">100%</div>
                <div class="text-xs uppercase tracking-wider text-gray-400 font-medium">Compromiso Bíblico</div>
            </div>
            <div class="col-span-2 md:col-span-1 bg-zinc-900/70 border border-zinc-800 p-4 rounded-2xl">
                <div class="text-2xl md:text-3xl font-extrabold text-primary">Nacional</div>
                <div class="text-xs uppercase tracking-wider text-gray-400 font-medium">Alcance & Cobertura</div>
            </div>
        </div>
    </div>
</section>

<!-- 2. DIRECTORIO DE CONGREGACIONES -->
<section class="py-20 md:py-28 bg-white px-4 md:px-6">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-16">
            <span class="text-primary font-bold text-xs uppercase tracking-[0.3em] block mb-2">Comunión Fraternal</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-dark tracking-tight">Directorio Oficial de Congregaciones</h2>
            <div class="h-1 w-20 bg-primary mx-auto mt-4 rounded-full"></div>
            <p class="text-muted text-sm md:text-base mt-4 max-w-2xl mx-auto">
                Conoce las iglesias que forman parte activa de nuestra federación bajo principios de santidad, servicio y visión de avivamiento.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php foreach ($iglesias as $iglesia) : ?>
                <div class="group bg-white border border-gray-200/80 hover:border-primary p-7 md:p-8 rounded-3xl shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    
                    <!-- Acento decorativo superior al hover -->
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-primary to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <div>
                        <div class="flex items-start justify-between gap-4 mb-6">
                            <!-- Icono Institucional de Templo / Iglesia SVG -->
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 border border-primary/20 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-dark transition-colors duration-300 flex-shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            
                            <!-- Badge de Estado / Región -->
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-700 border border-gray-200">
                                <?php echo esc_html($iglesia['estado'] ?? 'Venezuela'); ?>
                            </span>
                        </div>

                        <h3 class="text-xl md:text-2xl font-bold text-dark mb-4 group-hover:text-primary transition-colors leading-snug">
                            <?php echo esc_html($iglesia['nombre']); ?>
                        </h3>

                        <div class="space-y-3.5 pt-2 border-t border-gray-100">
                            <!-- Pastores con icono SVG de liderazgo -->
                            <div class="flex items-start gap-3 text-sm text-gray-700">
                                <div class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center text-primary flex-shrink-0 mt-0.5 border border-gray-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="leading-relaxed">
                                    <span class="text-xs uppercase tracking-wider text-gray-600 font-bold block">Pastorado Principal</span>
                                    <span class="font-medium"><?php echo esc_html($iglesia['pastores']); ?></span>
                                </div>
                            </div>

                            <!-- Ubicación con icono SVG de mapa -->
                            <div class="flex items-start gap-3 text-sm text-gray-700">
                                <div class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center text-primary flex-shrink-0 mt-0.5 border border-gray-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="leading-relaxed">
                                    <span class="text-xs uppercase tracking-wider text-gray-600 font-bold block">Sector / Ciudad</span>
                                    <span class="font-medium"><?php echo esc_html($iglesia['zona']); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-4 border-t border-gray-100 flex items-center justify-between text-xs text-muted">
                        <span class="font-medium text-emerald-600 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                            Afiliación Activa
                        </span>
                        <span class="text-gray-600">FENAV Venezuela</span>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 3. LLAMADO A LA AFILIACIÓN CON DISEÑO INSTITUCIONAL ELEGANTE -->
<section class="py-20 bg-gray-50 border-t border-gray-200 px-4 md:px-6">
    <div class="container mx-auto max-w-5xl">
        <div class="bg-gradient-to-br from-zinc-950 via-dark to-zinc-900 rounded-3xl p-8 md:p-14 border border-primary/30 shadow-2xl relative overflow-hidden">
            
            <!-- Resplandor dorado de fondo -->
            <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-primary/20 rounded-full blur-[100px] pointer-events-none"></div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
                <div class="lg:col-span-8 space-y-4">
                    <span class="text-primary font-bold text-xs uppercase tracking-widest">¿Lideras una congregación?</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white tracking-tight">
                        Afíliate a la Federación Nacional de Avivamiento
                    </h2>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed">
                        Forma parte de una estructura que brinda respaldo ministerial, cobertura legal, capacitación continua y comunión genuina con iglesias en todo el país.
                    </p>
                </div>

                <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-4">
                    <a href="<?php echo esc_url(home_url('/nosotros')); ?>" class="text-center bg-gradient-to-r from-primary to-yellow-600 text-dark font-extrabold py-4 px-6 rounded-2xl shadow-lg hover:shadow-primary/30 hover:scale-[1.02] transition-all uppercase tracking-wider text-xs">
                        Requisitos de Afiliación
                    </a>
                    <a href="mailto:correo@fenav.org" class="text-center bg-zinc-900 border border-zinc-700 text-gray-200 hover:text-white hover:border-primary font-bold py-4 px-6 rounded-2xl transition-all uppercase tracking-wider text-xs">
                        Contactar Secretaría
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>