<?php
/**
 * Plantilla para la página de Departamentos
 */
get_header(); 

// Arreglo multidimensional con la información de todos los departamentos y sus iconos SVG profesionales
$departamentos = [
    [
        'nombre' => 'Dirección Jurídica',
        'slug'   => 'juridica',
        'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3-1m0 0l3 1m-3-1v13m-6-1a5 5 0 006 0m6-12l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M18 7l3-1m-3 1v13m-6-1a5 5 0 006 0"/></svg>',
        'funciones' => ['Asesoría legal y ministerial', 'Redacción y revisión de contratos', 'Representación legal ante organismos', 'Gestión de riesgos normativos', 'Cumplimiento legal institucional', 'Investigación y análisis legal']
    ],
    [
        'nombre' => 'Dirección Administrativa',
        'slug'   => 'administrativa',
        'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>',
        'funciones' => ['Gestión eficiente de recursos', 'Supervisión y control administrativo', 'Gestión y archivo documental', 'Comunicación interna y externa', 'Atención protocolar a ministerios', 'Logística de actividades centrales']
    ],
    [
        'nombre' => 'Dirección General',
        'slug'   => 'general',
        'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>',
        'funciones' => ['Gestión de divisiones federativas', 'Administración territorial nacional', 'Supervisión de sedes e instalaciones', 'Articulación directiva institucional']
    ],
    [
        'nombre' => 'Dirección Financiera',
        'slug'   => 'financiera',
        'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
        'funciones' => ['Gestión transparente de finanzas', 'Control de presupuestos y tesorería', 'Planificación y auditoría interna', 'Gestión de aportes y proyectos', 'Rendición de cuentas periódica']
    ],
    [
        'nombre' => 'Dirección Social',
        'slug'   => 'social',
        'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>',
        'funciones' => ['Atención integral a familias vulnerables', 'Gestión de programas de ayuda humanitaria', 'Asistencia comunitaria ante emergencias', 'Orientación social y banco de alimentos']
    ],
    [
        'nombre' => 'Dirección Espiritual',
        'slug'   => 'espiritual',
        'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>',
        'funciones' => ['Comisiones nacionales de intercesión', 'Cruzadas y programas de avivamiento', 'Consejería pastoral y acompañamiento', 'Consolidación de ministerios']
    ],
    [
        'nombre' => 'Dirección Educativa',
        'slug'   => 'educativa',
        'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>',
        'funciones' => ['Convenios académicos e institucionales', 'Capacitación teológica y ministerial', 'Diseño curricular modular de excelencia', 'Aulas virtuales y talleres presenciales']
    ],
    [
        'nombre' => 'Dirección de Planificación',
        'slug'   => 'planificacion',
        'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>',
        'funciones' => ['Planificación estratégica y prospectiva', 'Seguimiento de metas e indicadores', 'Asesoría para decisiones ejecutivas', 'Coordinación entre direcciones']
    ],
    [
        'nombre' => 'Dirección Servicios Generales',
        'slug'   => 'servicios',
        'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>',
        'funciones' => ['Mantenimiento preventivo de instalaciones', 'Seguridad, control y logística operativa', 'Gestión de transporte e infraestructura', 'Soporte técnico y suministros']
    ],
    [
        'nombre' => 'Dirección de Salud',
        'slug'   => 'salud',
        'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 4v16m8-8H4"/></svg>',
        'funciones' => ['Jornadas de atención médica integral', 'Banco de insumos y medicamentos', 'Capacitación en primeros auxilios comunitarios', 'Prevención y orientación sanitaria']
    ],
    [
        'nombre' => 'Dirección de Salvación y Rescate',
        'slug'   => 'rescate',
        'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>',
        'funciones' => ['Brigadas capacitadas en rescate y emergencia', 'Gestión de equipamiento especializado', 'Respuesta rápida en contingencias', 'Cooperación con cuerpos de protección civil']
    ],
    [
        'nombre' => 'Dirección de Logística',
        'slug'   => 'logistica',
        'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>',
        'funciones' => ['Control de inventario e insumos', 'Procesos operativos de almacenamiento', 'Coordinación de transporte nacional', 'Distribución eficiente para eventos']
    ],
    [
        'nombre' => 'Dirección de Recursos Humanos',
        'slug'   => 'rrhh',
        'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>',
        'funciones' => ['Convocatoria y selección de colaboradores', 'Acompañamiento del personal ministerial', 'Formación de equipos y evaluación', 'Bienestar integral del voluntariado']
    ],
    [
        'nombre' => 'Dirección de Marketing',
        'slug'   => 'marketing',
        'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>',
        'funciones' => ['Estrategia de comunicación e imagen de marca', 'Creación de contenido audiovisual oficial', 'Gestión de redes sociales e información', 'Cobertura de eventos y prensa digital']
    ]
];
?>

<!-- 1. HERO SECTION - DEPARTAMENTOS -->
<section class="relative bg-dark text-white py-24 md:py-32 border-b border-primary/30 overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-32 right-10 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 left-10 w-96 h-96 bg-yellow-600/10 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 bg-[radial-gradient(#d4af37_1px,transparent_1px)] [background-size:36px_36px] opacity-10"></div>
    </div>

    <div class="container mx-auto px-4 md:px-6 text-center max-w-4xl relative z-10">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-zinc-900/80 border border-primary/30 text-primary text-xs font-bold uppercase tracking-widest mb-6">
            <span class="w-2 h-2 rounded-full bg-primary"></span>
            Estructura Organizacional
        </div>
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 tracking-tight">
            Departamentos <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-yellow-200 to-primary">FENAV</span>
        </h1>
        <p class="text-base md:text-xl text-gray-300 leading-relaxed font-light max-w-2xl mx-auto">
            Nuestra estructura nacional diseñada para servir, capacitar y ejecutar la visión del avivamiento con excelencia, orden y transparencia.
        </p>
    </div>
</section>

<!-- 2. GRID DE DEPARTAMENTOS INSTITUCIONALES -->
<section class="py-20 md:py-28 bg-gray-50/60 px-4 md:px-6">
    <div class="container mx-auto max-w-7xl">
        
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <span class="text-primary font-bold text-xs uppercase tracking-[0.3em] block mb-2">14 Direcciones Nacionales</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-dark tracking-tight">Ejes de Gestión & Servicio</h2>
            <div class="h-1 w-20 bg-primary mx-auto mt-4 rounded-full"></div>
            <p class="text-muted text-sm md:text-base mt-4">
                Cada área cuenta con directrices claras y líderes consagrados a cumplir los objetivos fijados para el fortalecimiento de la iglesia en Venezuela.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
            
            <?php foreach ($departamentos as $depto) : ?>
                <div class="bg-white rounded-3xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-xl hover:border-primary/50 hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    
                    <div>
                        <!-- Cabecera de la Tarjeta -->
                        <div class="bg-zinc-950 p-6 border-b border-primary/30 flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-primary/10 border border-primary/20 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-dark transition-colors duration-300 flex-shrink-0">
                                <?php echo $depto['icono']; ?>
                            </div>
                            <h3 class="text-lg font-bold text-white leading-tight">
                                <?php echo esc_html($depto['nombre']); ?>
                            </h3>
                        </div>

                        <!-- Cuerpo de la Tarjeta (Lista de Funciones) -->
                        <div class="p-6 md:p-7">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-primary block mb-3">Funciones Principales:</span>
                            <ul class="space-y-3">
                                <?php foreach ($depto['funciones'] as $funcion) : ?>
                                    <li class="flex items-start gap-3 text-gray-700 text-xs md:text-sm leading-relaxed">
                                        <span class="text-primary mt-1 flex-shrink-0">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </span>
                                        <span><?php echo esc_html($funcion); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Pie de Tarjeta -->
                    <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex items-center justify-between text-xs text-muted">
                        <span class="font-medium text-gray-500">Dirección Oficial</span>
                        <span class="text-primary font-bold">FENAV</span>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- 3. CALL TO ACTION - INTEGRACIÓN -->
<section class="py-20 bg-white border-t border-gray-200 text-center px-4 md:px-6">
    <div class="container mx-auto max-w-3xl">
        <span class="text-primary font-bold text-xs uppercase tracking-[0.3em] block mb-2">Vocación de Servicio</span>
        <h3 class="text-2xl md:text-3xl font-extrabold text-dark mb-4">¿Deseas servir en alguna de nuestras direcciones?</h3>
        <p class="text-muted text-sm md:text-base mb-8 leading-relaxed">
            Si eres un ministro o profesional cristiano con vocación de servicio, integridad y deseo de colaborar con la expansión de la obra de Dios, contáctanos hoy.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="mailto:contacto@fenav.org" class="bg-gradient-to-r from-primary to-yellow-600 text-dark font-extrabold py-3.5 px-8 rounded-full shadow-lg hover:shadow-primary/30 transition-all uppercase text-xs tracking-wider">
                Contactar a la Federación
            </a>
            <a href="<?php echo esc_url(home_url('/nosotros')); ?>" class="border border-zinc-300 hover:border-primary text-dark font-bold py-3.5 px-8 rounded-full transition-all uppercase text-xs tracking-wider">
                Conoce Nuestra Visión
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>