<?php
/**
 * Plantilla de la página de inicio (Home) - FENAV Edición Premium
 */
get_header(); ?>

<!-- 1. HERO SECTION INSTITUCIONAL -->
<section class="relative bg-dark text-white py-28 md:py-40 px-4 md:px-6 overflow-hidden">
    <!-- Video de Background -->
    <div class="absolute inset-0 w-full h-full overflow-hidden pointer-events-none z-0">
        <video 
            id="hero-bg-video"
            class="w-full h-full object-cover object-center"
            autoplay 
            muted 
            loop 
            playsinline
            preload="auto">
            <source src="<?php echo esc_url(get_template_directory_uri() . '/video/avivamiento-fuego.mp4'); ?>" type="video/mp4">
        </video>
        <!-- Overlay equilibrado para garantizar la visibilidad del video y la lectura del texto -->
        <div class="absolute inset-0 bg-black/45"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-dark/70 via-transparent to-dark"></div>
    </div>
    <script>
        (function() {
            var v = document.getElementById('hero-bg-video');
            if (v) {
                var setSpeed = function() { v.playbackRate = 0.75; };
                setSpeed();
                v.addEventListener('loadedmetadata', setSpeed);
                v.addEventListener('play', setSpeed);
            }
        })();
    </script>

    <!-- Efecto de iluminación y textura CSS nativa de alta gama -->
    <div class="absolute inset-0 pointer-events-none z-0">
        <div class="absolute top-0 right-1/4 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-0 left-1/4 w-[400px] h-[400px] bg-yellow-600/10 rounded-full blur-[100px]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(#d4af37_1px,transparent_1px)] [background-size:40px_40px] opacity-[0.05]"></div>
    </div>
    
    <!-- Líneas doradas con resplandor sutil -->
    <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary/60 to-transparent z-10"></div>
    <div class="absolute bottom-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary/40 to-transparent z-10"></div>

    <div class="container mx-auto relative z-10 text-center max-w-5xl">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-zinc-900/90 border border-primary/30 text-primary text-xs font-bold uppercase tracking-widest mb-8">
            <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
            Movimiento Eclesiástico & Social • Venezuela
        </div>

        <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold mb-8 tracking-tight drop-shadow-2xl leading-[1.1]">
            Federación Nacional de <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-yellow-200 to-primary">Avivamiento</span>
        </h1>

        <p class="text-base sm:text-lg md:text-xl text-gray-300 mb-12 leading-relaxed max-w-3xl mx-auto font-light drop-shadow">
            Preparando y provocando el último y gran despertar del avivamiento en la nación de Venezuela y en toda Latinoamérica a través de la unidad, la santidad y la excelencia ministerial.
        </p>

        <div class="flex flex-col sm:flex-row justify-center items-center gap-5">
            <a href="#quienes-somos" class="w-full sm:w-auto bg-gradient-to-r from-primary via-yellow-500 to-primary text-dark px-10 py-4 rounded-full font-extrabold uppercase text-xs tracking-widest shadow-[0_0_25px_rgba(212,175,55,0.35)] hover:scale-105 hover:shadow-[0_0_35px_rgba(212,175,55,0.6)] transition-all duration-300">
                Conoce Más
            </a>
            <a href="<?php echo esc_url(home_url('/nosotros')); ?>" class="w-full sm:w-auto border border-primary/70 text-primary hover:text-dark px-10 py-4 rounded-full font-bold uppercase text-xs tracking-widest hover:bg-primary transition-all duration-300 backdrop-blur-sm bg-dark/40">
                Únete a FENAV
            </a>
        </div>
    </div>
</section>

<!-- 2. ¿QUIÉNES SOMOS? Y VISIÓN INSTITUCIONAL -->
<section id="quienes-somos" class="py-24 bg-white relative">
    <div class="container mx-auto px-4 md:px-6 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            <!-- Columna Izquierda: Texto e Identidad (7 columnas) -->
            <div class="lg:col-span-7 space-y-8">
                <div>
                    <span class="text-primary font-bold text-xs uppercase tracking-[0.35em] block mb-3">Nuestra Identidad</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-dark mb-6 tracking-tight">¿Quiénes Somos?</h2>
                    <p class="text-base md:text-lg text-muted leading-relaxed text-justify">
                        Somos una organización que nace de la profunda convicción de responder a la necesidad moral, espiritual y ética que atraviesa la iglesia contemporánea. Surge como una federación consagrada a servir, capacitar y representar a las iglesias evangélicas con excelencia, integridad, santidad, honestidad y reverente temor a Dios.
                    </p>
                </div>

                <!-- Tarjeta Flotante de Visión -->
                <div class="bg-gradient-to-br from-white to-gray-50 border border-primary/30 p-8 rounded-3xl shadow-[0_15px_40px_rgba(212,175,55,0.12)] relative group hover:shadow-[0_20px_50px_rgba(212,175,55,0.2)] transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-primary/10 border border-primary/20 flex items-center justify-center text-primary flex-shrink-0">
                            <!-- Icono de Visión SVG profesional -->
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-dark mb-3">Nuestra Visión</h3>
                            <p class="text-muted text-sm leading-relaxed text-justify">
                                Ser una red nacional de iglesias avivadas y unidas en el Espíritu, comprometidas con la transformación espiritual y social de nuestra nación a través del Evangelio de Cristo; fortaleciendo el cuidado integral de ministros y congregaciones para glorificar a Dios y expandir su Reino.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: Módulo Gráfico Institucional de Presencia Nacional (5 columnas) -->
            <div class="lg:col-span-5 relative">
                <!-- Marco de fondo con desenfoque dorado -->
                <div class="absolute inset-0 bg-primary/15 rounded-3xl transform translate-x-3 translate-y-3 -z-10 blur-sm"></div>
                
                <div class="rounded-3xl overflow-hidden shadow-2xl relative bg-zinc-950 p-8 md:p-10 border border-primary/30 text-white flex flex-col justify-between min-h-[460px]">
                    <!-- Brillo de fondo -->
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-primary/20 rounded-full blur-2xl pointer-events-none"></div>
                    
                    <div>
                        <div class="flex items-center justify-between mb-8">
                            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-zinc-900 border border-primary/30 text-[11px] font-bold text-primary uppercase tracking-widest">
                                <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                Cobertura Integral
                            </span>
                            <span class="text-xs text-gray-500 font-mono">EST. VENEZUELA</span>
                        </div>

                        <h4 class="text-2xl md:text-3xl font-extrabold leading-snug mb-4">
                            Uniendo el Cuerpo de Cristo en una sola voz
                        </h4>
                        
                        <p class="text-gray-400 text-sm leading-relaxed mb-8">
                            Articulamos el trabajo ministerial y social con presencia activa en múltiples estados venezolanos y proyección hacia toda Latinoamérica.
                        </p>

                        <!-- Indicadores Clave -->
                        <div class="grid grid-cols-2 gap-4 pt-6 border-t border-zinc-800">
                            <div>
                                <span class="block text-2xl font-black text-primary">14</span>
                                <span class="text-xs uppercase tracking-wider text-gray-400">Direcciones Activas</span>
                            </div>
                            <div>
                                <span class="block text-2xl font-black text-white">100%</span>
                                <span class="text-xs uppercase tracking-wider text-gray-400">Enfoque Bíblico</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-zinc-800/80 flex items-center justify-between">
                        <a href="<?php echo esc_url(home_url('/iglesias-afiliadas')); ?>" class="inline-flex items-center gap-2 text-primary hover:text-white transition-colors text-xs font-bold uppercase tracking-wider group">
                            Explorar Iglesias Afiliadas
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 3. VALORES Y ÁREAS DE ENFOQUE -->
<section class="py-24 bg-gray-50/50 px-4 md:px-6 border-t border-gray-100">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-16">
            <span class="text-primary font-bold text-xs uppercase tracking-[0.3em] block mb-2">Pilares Fundamentales</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-dark tracking-tight">Áreas Estratégicas de Enfoque</h2>
            <div class="h-1 w-20 bg-primary mx-auto mt-4 rounded-full"></div>
            <p class="text-muted text-sm md:text-base mt-4 max-w-2xl mx-auto">
                Líneas de acción coordinadas para el avance de la Iglesia y el impacto comunitario.
            </p>
        </div>
        
        <!-- Grid de 4 columnas estilizadas con alta jerarquía visual -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">
            
            <!-- Tarjeta 1: Avivamiento -->
            <div class="flex flex-col bg-white border border-gray-200/80 hover:border-primary/50 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="p-8 text-center flex-grow flex flex-col items-center justify-center">
                    <div class="w-16 h-16 rounded-2xl bg-amber-500/10 text-primary flex items-center justify-center mb-6 transform group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl text-dark uppercase tracking-wide mb-3">Avivamiento</h3>
                    <p class="text-muted text-sm leading-relaxed">Fomentando la unidad de oración, intercesión y manifestación del poder de Dios en cada región.</p>
                </div>
                <div class="bg-zinc-950 p-4 text-center border-t border-primary/30">
                    <p class="text-gray-400 text-xs">Unidad, comunión y renovación espiritual.</p>
                </div>
            </div>

            <!-- Tarjeta 2: Evangelismo -->
            <div class="flex flex-col bg-white border border-gray-200/80 hover:border-primary/50 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="p-8 text-center flex-grow flex flex-col items-center justify-center">
                    <div class="w-16 h-16 rounded-2xl bg-amber-500/10 text-primary flex items-center justify-center mb-6 transform group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl text-dark uppercase tracking-wide mb-3">Evangelismo</h3>
                    <p class="text-muted text-sm leading-relaxed">Movilizando a las congregaciones hacia la evangelización de impacto y la plantación de obras.</p>
                </div>
                <div class="bg-zinc-950 p-4 text-center border-t border-primary/30">
                    <p class="text-gray-400 text-xs">Alcance masivo de comunidades y almas.</p>
                </div>
            </div>

            <!-- Tarjeta 3: Educación -->
            <div class="flex flex-col bg-zinc-950 border border-primary/30 rounded-3xl overflow-hidden shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="p-8 text-center flex-grow flex flex-col items-center justify-center">
                    <div class="w-16 h-16 rounded-2xl bg-primary/20 text-primary flex items-center justify-center mb-6 transform group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl text-white uppercase tracking-wide mb-3">Educación</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">Capacitación teológica y liderazgo ministerial con altos estándares éticos y pedagógicos.</p>
                </div>
                <div class="bg-black p-4 text-center border-t border-primary/30">
                    <p class="text-gray-400 text-xs">Formación ministerial continua y rigurosa.</p>
                </div>
            </div>

            <!-- Tarjeta 4: Ayuda Social -->
            <div class="flex flex-col bg-zinc-950 border border-primary/30 rounded-3xl overflow-hidden shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="p-8 text-center flex-grow flex flex-col items-center justify-center">
                    <div class="w-16 h-16 rounded-2xl bg-primary/20 text-primary flex items-center justify-center mb-6 transform group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl text-white uppercase tracking-wide mb-3">Ayuda Social</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">Respuesta humanitaria, jornadas médicas y programas de alimentación en zonas vulnerables.</p>
                </div>
                <div class="bg-black p-4 text-center border-t border-primary/30">
                    <p class="text-gray-400 text-xs">Solidaridad y compasión con el prójimo.</p>
                </div>
            </div>

        </div>

        <!-- Fila de Valores Institucionales -->
        <div class="mt-16 text-center">
            <div class="flex flex-wrap justify-center items-center gap-2.5 max-w-4xl mx-auto">
                <span class="text-xs font-bold text-gray-500 uppercase tracking-widest mr-2 block w-full md:w-auto mb-2 md:mb-0">Nuestros Valores:</span>
                <?php 
                $valores = ['Unidad', 'Santidad', 'Integridad', 'Honestidad', 'Transparencia', 'Humildad', 'Compromiso', 'Servicio'];
                foreach ($valores as $valor) : ?>
                    <span class="px-4 py-2 bg-white border border-primary/30 text-dark font-bold rounded-xl text-xs uppercase tracking-wider shadow-sm hover:border-primary hover:bg-primary/10 transition-all cursor-default">
                        <?php echo $valor; ?>
                    </span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- 4. SALA DE PRENSA / EVENTOS -->
<section class="py-24 bg-dark text-white px-4 md:px-6 border-t border-primary/30">
    <div class="container mx-auto max-w-7xl">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-16 border-b border-zinc-800 pb-6 gap-4">
            <div>
                <span class="text-primary font-bold text-xs uppercase tracking-[0.3em] block mb-2">Sala de Prensa</span>
                <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">Próximos Eventos & Jornadas</h2>
            </div>
            <a href="<?php echo esc_url(home_url('/sala-de-prensa')); ?>" class="group inline-flex items-center text-primary hover:text-white transition-colors font-bold text-xs tracking-wider uppercase">
                Ver todos los eventos 
                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Evento 1 -->
            <div class="group bg-zinc-900/60 border border-zinc-800 hover:border-primary/50 rounded-3xl p-8 transition-all duration-300">
                <div class="flex items-center justify-between mb-6">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-primary/20 text-primary border border-primary/30 uppercase tracking-wider">
                        Salud Comunitaria
                    </span>
                    <span class="text-xs text-zinc-400 font-mono">Santa Rosa</span>
                </div>
                <h3 class="text-2xl font-bold mb-3 group-hover:text-primary transition-colors duration-300">
                    Jornada Integral de Salud Comunitaria
                </h3>
                <p class="text-zinc-400 text-sm leading-relaxed mb-6 text-justify">
                    Atención médica primaria, despistaje preventivo, entrega de medicamentos esenciales y asistencia general en alianza estratégica con especialistas y voluntarios.
                </p>
                <div class="pt-4 border-t border-zinc-800/80 flex items-center justify-between text-xs text-primary font-bold uppercase tracking-wider">
                    <span>Cronograma 2025 - 2026</span>
                    <span class="text-zinc-500">Dirección de Salud FENAV</span>
                </div>
            </div>

            <!-- Evento 2 -->
            <div class="group bg-zinc-900/60 border border-zinc-800 hover:border-primary/50 rounded-3xl p-8 transition-all duration-300">
                <div class="flex items-center justify-between mb-6">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-primary/20 text-primary border border-primary/30 uppercase tracking-wider">
                        Evangelismo & Misión
                    </span>
                    <span class="text-xs text-zinc-400 font-mono">Valle Verde</span>
                </div>
                <h3 class="text-2xl font-bold mb-3 group-hover:text-primary transition-colors duration-300">
                    Impacto Evangelístico y Transformación de Sectores
                </h3>
                <p class="text-zinc-400 text-sm leading-relaxed mb-6 text-justify">
                    Actividades públicas de calle, proclamación del mensaje de fe, obras de teatro y programas infantiles coordinados junto a congregaciones locales de la zona.
                </p>
                <div class="pt-4 border-t border-zinc-800/80 flex items-center justify-between text-xs text-primary font-bold uppercase tracking-wider">
                    <span>Cronograma 2025 - 2026</span>
                    <span class="text-zinc-500">Dirección Espiritual FENAV</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>