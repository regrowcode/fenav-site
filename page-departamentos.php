<?php
/**
 * Plantilla para la página de Departamentos
 */
get_header(); 

// Obtener la información de todos los departamentos en el idioma activo (ES, EN, PT)
$departamentos = fenav_get_departamentos_data();
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
            <?php echo __t('Estructura Organizacional', 'Organizational Structure', 'Estrutura Organizacional'); ?>
        </div>
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 tracking-tight">
            <?php echo __t('Departamentos', 'Departments', 'Departamentos'); ?> <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-yellow-200 to-primary">FENAV</span>
        </h1>
        <p class="text-base md:text-xl text-gray-300 leading-relaxed font-light max-w-2xl mx-auto">
            <?php echo __t(
                'Nuestra estructura nacional diseñada para servir, capacitar y ejecutar la visión del avivamiento con excelencia, orden y transparencia.',
                'Our national structure designed to serve, equip, and execute the vision of revival with excellence, order, and transparency.',
                'Nossa estrutura nacional projetada para servir, capacitar e executar a visão do avivamento com excelência, ordem e transparência.'
            ); ?>
        </p>
    </div>
</section>

<!-- 2. GRID DE DEPARTAMENTOS INSTITUCIONALES -->
<section class="py-20 md:py-28 bg-gray-50/60 px-4 md:px-6">
    <div class="container mx-auto max-w-7xl">
        
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <span class="text-primary font-bold text-xs uppercase tracking-[0.3em] block mb-2">
                <?php echo __t('14 Direcciones Nacionales', '14 National Directorates', '14 Diretorias Nacionais'); ?>
            </span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-dark tracking-tight">
                <?php echo __t('Ejes de Gestión & Servicio', 'Management & Service Areas', 'Eixos de Gestão & Serviço'); ?>
            </h2>
            <div class="h-1 w-20 bg-primary mx-auto mt-4 rounded-full"></div>
            <p class="text-muted text-sm md:text-base mt-4">
                <?php echo __t(
                    'Cada área cuenta con directrices claras y líderes consagrados a cumplir los objetivos fijados para el fortalecimiento de la iglesia en Venezuela.',
                    'Each area has clear guidelines and consecrated leaders committed to achieving the goals set for strengthening the church in Venezuela.',
                    'Cada área conta com diretrizes claras e líderes consagrados para cumprir os objetivos estabelecidos para o fortalecimento da igreja na Venezuela.'
                ); ?>
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
                            <span class="text-[11px] font-bold uppercase tracking-wider text-primary block mb-3">
                                <?php echo __t('Funciones Principales:', 'Key Responsibilities:', 'Funções Principais:'); ?>
                            </span>
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
                        <span class="font-medium text-gray-500">
                            <?php echo __t('Dirección Oficial', 'Official Directorate', 'Diretoria Oficial'); ?>
                        </span>
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
        <span class="text-primary font-bold text-xs uppercase tracking-[0.3em] block mb-2">
            <?php echo __t('Vocación de Servicio', 'Vocation of Service', 'Vocação de Serviço'); ?>
        </span>
        <h3 class="text-2xl md:text-3xl font-extrabold text-dark mb-4">
            <?php echo __t(
                '¿Deseas servir en alguna de nuestras direcciones?',
                'Would you like to serve in one of our directorates?',
                'Deseja servir em uma de nossas diretorias?'
            ); ?>
        </h3>
        <p class="text-muted text-sm md:text-base mb-8 leading-relaxed">
            <?php echo __t(
                'Si eres un ministro o profesional cristiano con vocación de servicio, integridad y deseo de colaborar con la expansión de la obra de Dios, contáctanos hoy.',
                'If you are a minister or Christian professional with a heart for service, integrity, and a passion to collaborate with the expansion of God\'s work, contact us today.',
                'Se você é um ministro ou profissional cristão com vocação de serviço, integridade e desejo de colaborar com a expansão da obra de Deus, entre em contato hoje.'
            ); ?>
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="mailto:contacto@fenav.org" class="bg-gradient-to-r from-primary to-yellow-600 text-dark font-extrabold py-3.5 px-8 rounded-full shadow-lg hover:shadow-primary/30 transition-all uppercase text-xs tracking-wider">
                <?php echo __t('Contactar a la Federación', 'Contact the Federation', 'Contatar a Federação'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/nosotros')); ?>" class="border border-zinc-300 hover:border-primary text-dark font-bold py-3.5 px-8 rounded-full transition-all uppercase text-xs tracking-wider">
                <?php echo __t('Conoce Nuestra Visión', 'Discover Our Vision', 'Conheça Nossa Visão'); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>