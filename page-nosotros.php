<?php
/**
 * Plantilla para la página de Nosotros
 */
get_header(); ?>

<!-- 1. HERO SECTION - NOSOTROS -->
<section class="relative bg-dark text-white py-24 md:py-32 border-b border-primary/30 overflow-hidden">
    <!-- Luces y malla abstracta de fondo -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-32 right-10 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 left-10 w-96 h-96 bg-yellow-600/10 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 bg-[radial-gradient(#d4af37_1px,transparent_1px)] [background-size:36px_36px] opacity-10"></div>
    </div>

    <div class="container mx-auto px-4 md:px-6 text-center max-w-4xl relative z-10">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-zinc-900/80 border border-primary/30 text-primary text-xs font-bold uppercase tracking-widest mb-6">
            <span class="w-2 h-2 rounded-full bg-primary"></span>
            Historia • Propósito • Fundamentos
        </div>
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 tracking-tight">
            Nuestra <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-yellow-200 to-primary">Identidad</span>
        </h1>
        <p class="text-base md:text-xl text-gray-300 leading-relaxed font-light max-w-2xl mx-auto">
            Conoce los orígenes, los valores y el compromiso que impulsan a la Federación Nacional de Avivamiento a servir a las iglesias de Venezuela.
        </p>
    </div>
</section>

<!-- 2. SECCIÓN: QUIÉNES SOMOS -->
<section class="py-20 bg-white px-4 md:px-6">
    <div class="container mx-auto max-w-4xl text-center">
        <span class="text-primary font-bold text-xs uppercase tracking-[0.3em] block mb-2">Fundamento</span>
        <h2 class="text-3xl md:text-4xl font-extrabold text-dark mb-6 tracking-tight">¿Quiénes Somos?</h2>
        <div class="h-1 w-20 bg-primary mx-auto mb-8 rounded-full"></div>
        <p class="text-base md:text-lg text-muted leading-relaxed text-justify md:text-center">
            Somos una organización que nace de la crisis moral, espiritual y ética que atraviesa la iglesia cristiana evangélica contemporánea, donde surge la propuesta de una federación que sirva, capacite y represente a las iglesias evangélicas con excelencia, integridad, santidad, honestidad y reverente temor a Jehová; preparando y provocando así el último y gran despertar del avivamiento en la nación de Venezuela y en toda Latinoamérica.
        </p>
    </div>
</section>

<!-- 3. SECCIÓN: VISIÓN Y MISIÓN -->
<section class="py-20 bg-gray-50/70 px-4 md:px-6 border-t border-b border-gray-200/70">
    <div class="container mx-auto max-w-6xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 items-stretch">
            
            <!-- Visión -->
            <div class="bg-white p-8 md:p-12 rounded-3xl shadow-sm border border-gray-200/80 hover:border-primary/50 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 rounded-2xl bg-amber-500/10 border border-primary/20 flex items-center justify-center text-primary flex-shrink-0">
                            <!-- Icono SVG Visión -->
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs uppercase tracking-widest text-primary font-bold">Proyección</span>
                            <h3 class="text-2xl font-extrabold text-dark">Nuestra Visión</h3>
                        </div>
                    </div>
                    <p class="text-muted text-sm md:text-base leading-relaxed text-justify">
                        Ser una red nacional de iglesias avivadas y unidas en el Espíritu, comprometidas con la transformación espiritual y social de nuestra nación a través del Evangelio de Cristo; fortaleciendo el cuidado integral (físico y espiritual) de los ministros y creyentes que la conforman; para glorificar a Dios y expandir su Reino en cada nación.
                    </p>
                </div>
                <div class="mt-8 pt-4 border-t border-gray-100 flex items-center gap-2 text-xs font-semibold text-primary">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                    Alcance Nacional & Global
                </div>
            </div>

            <!-- Misión -->
            <div class="bg-zinc-950 p-8 md:p-12 rounded-3xl shadow-xl border border-primary/30 text-white hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 rounded-2xl bg-primary/20 border border-primary/30 flex items-center justify-center text-primary flex-shrink-0">
                            <!-- Icono SVG Misión / Objetivo -->
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" stroke-width="1.8"></circle>
                                <circle cx="12" cy="12" r="6" stroke-width="1.8"></circle>
                                <circle cx="12" cy="12" r="2" stroke-width="1.8"></circle>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs uppercase tracking-widest text-primary font-bold">Compromiso</span>
                            <h3 class="text-2xl font-extrabold text-white">Nuestra Misión</h3>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify">
                        Promover el avivamiento por medio de la unidad y cooperación entre las iglesias evangélicas, fortaleciendo su misión, su crecimiento espiritual y social. Movilizando a las iglesias hacia la evangelización, la plantación de nuevas congregaciones y la transformación integral de comunidades, representando y apoyando a las iglesias miembros ante instancias públicas, velando por la libertad religiosa y la ética cristiana en la nación, para glorificar a Dios y servir a la sociedad.
                    </p>
                </div>
                <div class="mt-8 pt-4 border-t border-zinc-800 flex items-center gap-2 text-xs font-semibold text-primary">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                    Unidad, Representación & Acción
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 4. SECCIÓN: VALORES Y ENFOQUE -->
<section class="py-20 bg-white px-4 md:px-6">
    <div class="container mx-auto max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <!-- Valores Fundamentales (7 cols) -->
            <div class="lg:col-span-7">
                <span class="text-primary font-bold text-xs uppercase tracking-[0.3em] block mb-2">Ética & Conducta</span>
                <h3 class="text-2xl md:text-3xl font-extrabold text-dark mb-6">Valores Fundamentales</h3>
                <div class="flex flex-wrap gap-2.5">
                    <?php
                    $valores = ['Unidad', 'Santidad', 'Integridad', 'Honestidad', 'Transparencia', 'Humildad', 'Lealtad', 'Sinceridad', 'Compromiso', 'Respeto', 'Servicio'];
                    foreach ($valores as $valor) {
                        echo "<span class='px-4 py-2 bg-gray-50 text-dark font-semibold text-xs md:text-sm rounded-xl border border-gray-200 hover:border-primary hover:bg-primary/5 transition-colors shadow-sm'>$valor</span>";
                    }
                    ?>
                </div>
                <p class="text-xs text-gray-500 mt-6 italic">* Principios irrenunciables que norman cada decisión y acción ministerial de la institución.</p>
            </div>

            <!-- Áreas de Enfoque y Metas (5 cols) -->
            <div class="lg:col-span-5 bg-gray-50 p-8 rounded-3xl border border-gray-200/80">
                <span class="text-primary font-bold text-xs uppercase tracking-[0.3em] block mb-2">Estrategia</span>
                <h3 class="text-xl font-extrabold text-dark mb-4">Áreas Clave de Acción</h3>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-gray-700 text-sm font-medium">
                        <span class="w-2.5 h-2.5 bg-primary rounded-full"></span> Avivamiento y Renovación Espiritual
                    </li>
                    <li class="flex items-center gap-3 text-gray-700 text-sm font-medium">
                        <span class="w-2.5 h-2.5 bg-primary rounded-full"></span> Evangelismo y Plantación
                    </li>
                    <li class="flex items-center gap-3 text-gray-700 text-sm font-medium">
                        <span class="w-2.5 h-2.5 bg-primary rounded-full"></span> Educación Teológica y Liderazgo
                    </li>
                    <li class="flex items-center gap-3 text-gray-700 text-sm font-medium">
                        <span class="w-2.5 h-2.5 bg-primary rounded-full"></span> Ayuda y Transformación Social
                    </li>
                </ul>

                <h4 class="text-sm font-bold uppercase tracking-wider text-dark mb-2">Meta a Largo Plazo</h4>
                <div class="p-4 rounded-2xl bg-white border border-primary/30 text-dark text-sm leading-relaxed font-semibold">
                    “Despertar y consolidar la Iglesia de Jesucristo como un solo cuerpo en victoria.”
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 5. SECCIÓN: ALIANZAS Y AVAL LEGAL -->
<section id="afiliacion" class="py-24 bg-dark text-white px-4 md:px-6 border-t border-primary/30">
    <div class="container mx-auto max-w-6xl">
        
        <!-- Alianzas Estratégicas -->
        <div class="text-center mb-16">
            <span class="text-primary font-bold text-xs uppercase tracking-[0.3em] block mb-2">Cooperación Institucional</span>
            <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">Nuestras Alianzas</h2>
            <div class="h-1 w-20 bg-primary mx-auto mt-4 rounded-full"></div>
            <p class="text-gray-400 text-sm max-w-xl mx-auto mt-4">
                Organizaciones e instituciones que comparten la visión de servicio y respaldo a la comunidad.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 mb-20 max-w-5xl mx-auto">
            <div class="bg-zinc-900/80 p-6 rounded-2xl border border-zinc-800 hover:border-primary/50 transition-colors flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary font-bold">01</div>
                <p class="font-bold text-gray-200 text-sm">Clínica Corazón y Vasos</p>
            </div>
            <div class="bg-zinc-900/80 p-6 rounded-2xl border border-zinc-800 hover:border-primary/50 transition-colors flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary font-bold">02</div>
                <p class="font-bold text-gray-200 text-sm">Fundación Vive Más</p>
            </div>
            <div class="bg-zinc-900/80 p-6 rounded-2xl border border-zinc-800 hover:border-primary/50 transition-colors flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary font-bold">03</div>
                <p class="font-bold text-gray-200 text-sm">Fundación Casa de Misericordia</p>
            </div>
            <div class="bg-zinc-900/80 p-6 rounded-2xl border border-zinc-800 hover:border-primary/50 transition-colors flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary font-bold">04</div>
                <p class="font-bold text-gray-200 text-sm">Capellanía Policial de Barinas</p>
            </div>
            <div class="sm:col-span-2 lg:col-span-2 bg-zinc-900/80 p-6 rounded-2xl border border-zinc-800 hover:border-primary/50 transition-colors flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary font-bold">05</div>
                <p class="font-bold text-gray-200 text-sm">Confederación Pentecostal Evangélica de Venezuela</p>
            </div>
        </div>

        <!-- Aval Legal y Documentación para Descarga -->
        <div class="border-t border-zinc-800 pt-16">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-primary font-bold text-xs uppercase tracking-[0.3em] block mb-2">Trámites y Requisitos</span>
                <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight mb-4">Documentación Oficial de Afiliación</h2>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Para formalizar su ingreso a la Federación Nacional de Avivamiento, descargue los siguientes formularios oficiales. Una vez completados y suscritos, deben remitirse escaneados en formato PDF a nuestra secretaría general.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                
                <!-- Tarjeta: Hoja de Vida -->
                <div class="bg-zinc-950 p-8 rounded-3xl border border-zinc-800 hover:border-primary/50 transition-all duration-300 flex flex-col justify-between shadow-xl">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-12 h-12 rounded-2xl bg-primary/10 border border-primary/20 flex items-center justify-center text-primary">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-zinc-900 text-[10px] font-mono uppercase tracking-wider text-gray-400 border border-zinc-800">
                                Formato Oficial PDF
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Hoja de Vida FENAV</h3>
                        <p class="text-sm text-gray-400 leading-relaxed mb-8">
                            Instrumento detallado para el registro de datos personales, familiares, trayectoria ministerial/académica y perfil general del ministro solicitante.
                        </p>
                    </div>

                    <a href="http://fenav.org/wp-content/uploads/2026/06/HOJA-DE-VIDA-FENAV-1.pdf" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-primary to-yellow-600 text-dark font-extrabold py-3.5 px-6 rounded-2xl hover:brightness-110 transition-all uppercase text-xs tracking-wider">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                        Descargar Hoja de Vida
                    </a>
                </div>

                <!-- Tarjeta: Solicitud de Afiliación -->
                <div class="bg-zinc-950 p-8 rounded-3xl border border-zinc-800 hover:border-primary/50 transition-all duration-300 flex flex-col justify-between shadow-xl">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-12 h-12 rounded-2xl bg-primary/10 border border-primary/20 flex items-center justify-center text-primary">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                </svg>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-zinc-900 text-[10px] font-mono uppercase tracking-wider text-gray-400 border border-zinc-800">
                                Formato Oficial PDF
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Solicitud de Afiliación</h3>
                        <p class="text-sm text-gray-400 leading-relaxed mb-8">
                            Documento legal para postular la incorporación de la congregación como Miembro Afiliado, Patrocinador u Honorario, adjuntando soportes requeridos.
                        </p>
                    </div>

                    <a href="http://fenav.org/wp-content/uploads/2026/06/SOLICITUD-AFILIACION-FEDERACION.pdf" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 bg-transparent border-2 border-primary text-primary hover:bg-primary hover:text-dark font-extrabold py-3.5 px-6 rounded-2xl transition-all uppercase text-xs tracking-wider">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                        Descargar Formulario
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>