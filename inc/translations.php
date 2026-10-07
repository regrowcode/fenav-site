<?php
/**
 * FENAV Multilingual System (ES, EN, PT)
 * Manejo dinámico de idiomas para FENAV
 */

// Registrar cookie al cambiar de idioma
add_action('init', 'fenav_handle_language_switch');

function fenav_handle_language_switch() {
    if (isset($_GET['lang'])) {
        $lang = sanitize_text_field($_GET['lang']);
        if (in_array($lang, ['es', 'en', 'pt'])) {
            setcookie('fenav_lang', $lang, time() + (86400 * 30), COOKIEPATH ? COOKIEPATH : '/', COOKIE_DOMAIN, is_ssl(), false);
            $_COOKIE['fenav_lang'] = $lang;
        }
    }
}

/**
 * Obtener el idioma activo ('es', 'en', 'pt')
 */
function fenav_get_current_lang() {
    if (isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'en', 'pt'])) {
        return sanitize_text_field($_GET['lang']);
    }
    if (isset($_COOKIE['fenav_lang']) && in_array($_COOKIE['fenav_lang'], ['es', 'en', 'pt'])) {
        return sanitize_text_field($_COOKIE['fenav_lang']);
    }
    
    // Fallback a locale de WordPress si está configurado
    $locale = get_locale();
    if (strpos($locale, 'en') === 0) return 'en';
    if (strpos($locale, 'pt') === 0) return 'pt';
    
    return 'es'; // Por defecto Español
}

/**
 * Función helper de traducción rápida
 * @param string $es Texto en Español
 * @param string $en Texto en Inglés
 * @param string $pt Texto en Portugués
 * @return string Texto según el idioma activo
 */
function __t($es, $en = '', $pt = '') {
    $lang = fenav_get_current_lang();
    if ($lang === 'en' && !empty($en)) {
        return $en;
    }
    if ($lang === 'pt' && !empty($pt)) {
        return $pt;
    }
    return $es;
}

/**
 * Renderizar Selector de Idiomas con Banderas Vectoriales
 */
function fenav_language_switcher($is_mobile = false) {
    $current_lang = fenav_get_current_lang();
    
    // Banderas vectoriales SVG ultra nítidas y consistentes en cualquier dispositivo
    $flag_es = '<svg class="w-3.5 h-3.5 rounded-full overflow-hidden shrink-0 shadow-sm border border-black/20" viewBox="0 0 640 480"><path fill="#c60b1e" d="M0 0h640v480H0z"/><path fill="#ffc400" d="M0 120h640v240H0z"/></svg>';
    $flag_en = '<svg class="w-3.5 h-3.5 rounded-full overflow-hidden shrink-0 shadow-sm border border-black/20" viewBox="0 0 640 480"><path fill="#bd3d44" d="M0 0h640v480H0z"/><path stroke="#fff" stroke-width="37" d="M0 55.4h640M0 129.2h640M0 203.1h640M0 276.9h640M0 350.8h640M0 424.6h640"/><path fill="#192f5d" d="M0 0h260v221.5H0z"/><circle cx="130" cy="110" r="16" fill="#fff"/></svg>';
    $flag_pt = '<svg class="w-3.5 h-3.5 rounded-full overflow-hidden shrink-0 shadow-sm border border-black/20" viewBox="0 0 640 480"><path fill="#009c3b" d="M0 0h640v480H0z"/><path fill="#ffdf00" d="M320 50L600 240 320 430 40 240z"/><circle cx="320" cy="240" r="95" fill="#002776"/><path fill="#fff" d="M225 240a105 105 0 00190-20 95 95 0 01-190 20z"/></svg>';

    $languages = [
        'es' => ['code' => 'ES', 'name' => 'Español', 'svg' => $flag_es],
        'en' => ['code' => 'EN', 'name' => 'English', 'svg' => $flag_en],
        'pt' => ['code' => 'PT', 'name' => 'Português', 'svg' => $flag_pt]
    ];

    // Obtener la URL actual sin el parámetro lang previo
    $current_url = remove_query_arg('lang');

    if ($is_mobile) {
        echo '<div class="flex items-center gap-2 pt-4 border-t border-zinc-800">';
        echo '<span class="text-xs uppercase text-gray-400 font-bold tracking-wider mr-1">' . __t('Idioma:', 'Language:', 'Idioma:') . '</span>';
        foreach ($languages as $code => $data) {
            $active_class = ($current_lang === $code)
                ? 'bg-primary text-dark font-extrabold shadow-sm'
                : 'bg-zinc-900 text-gray-300 hover:text-primary hover:border-primary/40 border border-zinc-800';
            $url = add_query_arg('lang', $code, $current_url);
            echo '<a href="' . esc_url($url) . '" class="px-2.5 py-1.5 rounded-lg text-xs font-bold transition-all flex items-center gap-1.5 ' . $active_class . '">';
            echo $data['svg'] . ' <span>' . $data['code'] . '</span>';
            echo '</a>';
        }
        echo '</div>';
    } else {
        echo '<div class="flex items-center gap-1 bg-zinc-900/90 border border-zinc-800/80 rounded-full p-1 shadow-inner">';
        foreach ($languages as $code => $data) {
            $active_class = ($current_lang === $code)
                ? 'bg-gradient-to-r from-primary to-yellow-500 text-dark font-extrabold shadow-sm'
                : 'text-gray-400 hover:text-white hover:bg-zinc-800';
            $url = add_query_arg('lang', $code, $current_url);
            echo '<a href="' . esc_url($url) . '" title="' . esc_attr($data['name']) . '" class="flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold tracking-wider transition-all ' . $active_class . '">';
            echo $data['svg'] . ' <span>' . $data['code'] . '</span>';
            echo '</a>';
        }
        echo '</div>';
    }
}

/**
 * Obtener Departamentos traducidos
 */
function fenav_get_departamentos_data() {
    $lang = fenav_get_current_lang();

    $data = [
        [
            'slug'   => 'juridica',
            'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3-1m0 0l3 1m-3-1v13m-6-1a5 5 0 006 0m6-12l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M18 7l3-1m-3 1v13m-6-1a5 5 0 006 0"/></svg>',
            'nombre' => [
                'es' => 'Dirección Jurídica',
                'en' => 'Legal Department',
                'pt' => 'Diretoria Jurídica',
            ],
            'funciones' => [
                'es' => ['Asesoría legal y ministerial', 'Redacción y revisión de contratos', 'Representación legal ante organismos', 'Gestión de riesgos normativos', 'Cumplimiento legal institucional', 'Investigación y análisis legal'],
                'en' => ['Legal and ministerial counseling', 'Drafting and reviewing contracts', 'Legal representation before institutions', 'Regulatory risk management', 'Institutional legal compliance', 'Legal research and analysis'],
                'pt' => ['Assessoria jurídica e ministerial', 'Redação e revisão de contratos', 'Representação legal perante órgãos', 'Gestão de riscos regulatórios', 'Conformidade legal institucional', 'Pesquisa e análise jurídica'],
            ]
        ],
        [
            'slug'   => 'administrativa',
            'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>',
            'nombre' => [
                'es' => 'Dirección Administrativa',
                'en' => 'Administrative Department',
                'pt' => 'Diretoria Administrativa',
            ],
            'funciones' => [
                'es' => ['Gestión eficiente de recursos', 'Supervisión y control administrativo', 'Gestión y archivo documental', 'Comunicación interna y externa', 'Atención protocolar a ministerios', 'Logística de actividades centrales'],
                'en' => ['Efficient resource management', 'Administrative control and supervision', 'Document management and archiving', 'Internal and external communication', 'Protocol care for ministries', 'Central event logistics'],
                'pt' => ['Gestão eficiente de recursos', 'Supervisão e controle administrativo', 'Gestão e arquivamento de documentos', 'Comunicação interna e externa', 'Atendimento protocolar aos ministérios', 'Logística de atividades centrais'],
            ]
        ],
        [
            'slug'   => 'general',
            'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>',
            'nombre' => [
                'es' => 'Dirección General',
                'en' => 'General Directorate',
                'pt' => 'Diretoria Geral',
            ],
            'funciones' => [
                'es' => ['Gestión de divisiones federativas', 'Administración territorial nacional', 'Supervisión de sedes e instalaciones', 'Articulación directiva institucional'],
                'en' => ['Management of federation divisions', 'National territorial administration', 'Supervision of venues and facilities', 'Institutional executive coordination'],
                'pt' => ['Gestão de divisões federativas', 'Administração territorial nacional', 'Supervisão de sedes e instalações', 'Articulação diretiva institucional'],
            ]
        ],
        [
            'slug'   => 'financiera',
            'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
            'nombre' => [
                'es' => 'Dirección Financiera',
                'en' => 'Financial Department',
                'pt' => 'Diretoria Financeira',
            ],
            'funciones' => [
                'es' => ['Gestión transparente de finanzas', 'Control de presupuestos y tesorería', 'Planificación y auditoría interna', 'Gestión de aportes y proyectos', 'Rendición de cuentas periódica'],
                'en' => ['Transparent financial management', 'Budget control and treasury', 'Internal planning and auditing', 'Contribution and project management', 'Periodic financial accountability'],
                'pt' => ['Gestão transparente das finanças', 'Controle orçamentário e tesouraria', 'Planejamento e auditoria interna', 'Gestão de contribuições e projetos', 'Prestação periódica de contas'],
            ]
        ],
        [
            'slug'   => 'social',
            'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>',
            'nombre' => [
                'es' => 'Dirección Social',
                'en' => 'Social Welfare Department',
                'pt' => 'Diretoria Social',
            ],
            'funciones' => [
                'es' => ['Atención integral a familias vulnerables', 'Gestión de programas de ayuda humanitaria', 'Asistencia comunitaria ante emergencias', 'Orientación social y banco de alimentos'],
                'en' => ['Comprehensive care for vulnerable families', 'Humanitarian relief programs management', 'Community assistance in emergencies', 'Social guidance and food bank initiatives'],
                'pt' => ['Atenção integral a famílias vulneráveis', 'Gestão de programas de ajuda humanitária', 'Assistência comunitária em emergências', 'Orientação social e banco de alimentos'],
            ]
        ],
        [
            'slug'   => 'espiritual',
            'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>',
            'nombre' => [
                'es' => 'Dirección Espiritual',
                'en' => 'Spiritual Department',
                'pt' => 'Diretoria Espiritual',
            ],
            'funciones' => [
                'es' => ['Comisiones nacionales de intercesión', 'Cruzadas y programas de avivamiento', 'Consejería pastoral y acompañamiento', 'Consolidación de ministerios'],
                'en' => ['National intercession commissions', 'Revival campaigns and crusades', 'Pastoral counseling and mentoring', 'Consolidation of local ministries'],
                'pt' => ['Comissões nacionais de intercessão', 'Cruzadas e programas de avivamento', 'Aconselhamento pastoral e mentoria', 'Consolidação de ministérios'],
            ]
        ],
        [
            'slug'   => 'educativa',
            'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>',
            'nombre' => [
                'es' => 'Dirección Educativa',
                'en' => 'Education Department',
                'pt' => 'Diretoria Educacional',
            ],
            'funciones' => [
                'es' => ['Convenios académicos e institucionales', 'Capacitación teológica y ministerial', 'Diseño curricular modular de excelencia', 'Aulas virtuales y talleres presenciales'],
                'en' => ['Academic and institutional agreements', 'Theological and ministerial training', 'Modular curriculum design of excellence', 'Virtual classrooms and on-site workshops'],
                'pt' => ['Convênios acadêmicos e institucionais', 'Capacitação teológica e ministerial', 'Design curricular modular de excelência', 'Salas virtuais e oficinas presenciais'],
            ]
        ],
        [
            'slug'   => 'planificacion',
            'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>',
            'nombre' => [
                'es' => 'Dirección de Planificación',
                'en' => 'Planning & Strategy Department',
                'pt' => 'Diretoria de Planejamento',
            ],
            'funciones' => [
                'es' => ['Planificación estratégica y prospectiva', 'Seguimiento de metas e indicadores', 'Asesoría para decisiones ejecutivas', 'Coordinación entre direcciones'],
                'en' => ['Strategic planning and forecasting', 'Goal and KPI monitoring', 'Executive decision-making advisory', 'Interdepartmental coordination'],
                'pt' => ['Planejamento estratégico e prospectivo', 'Acompanhamento de metas e indicadores', 'Assessoria para decisões executivas', 'Coordenação entre diretorias'],
            ]
        ],
        [
            'slug'   => 'servicios',
            'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>',
            'nombre' => [
                'es' => 'Dirección Servicios Generales',
                'en' => 'General Services Department',
                'pt' => 'Diretoria de Serviços Gerais',
            ],
            'funciones' => [
                'es' => ['Mantenimiento preventivo de instalaciones', 'Seguridad, control y logística operativa', 'Gestión de transporte e infraestructura', 'Soporte técnico y suministros'],
                'en' => ['Preventive maintenance of facilities', 'Security and operational control', 'Transportation and infrastructure', 'Technical support and supplies'],
                'pt' => ['Manutenção preventiva de instalações', 'Segurança, controle e logística operacional', 'Gestão de transporte e infraestrutura', 'Suporte técnico e suprimentos'],
            ]
        ],
        [
            'slug'   => 'salud',
            'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 4v16m8-8H4"/></svg>',
            'nombre' => [
                'es' => 'Dirección de Salud',
                'en' => 'Health & Medical Department',
                'pt' => 'Diretoria de Saúde',
            ],
            'funciones' => [
                'es' => ['Jornadas de atención médica integral', 'Banco de insumos y medicamentos', 'Capacitación en primeros auxilios comunitarios', 'Prevención y orientación sanitaria'],
                'en' => ['Comprehensive healthcare medical days', 'Medical supplies and pharmacy bank', 'Community first aid training', 'Sanitary prevention and health guidance'],
                'pt' => ['Jornadas de atendimento médico integral', 'Banco de suprimentos e medicamentos', 'Capacitação em primeiros socorros comunitários', 'Prevenção e orientação sanitária'],
            ]
        ],
        [
            'slug'   => 'rescate',
            'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>',
            'nombre' => [
                'es' => 'Dirección de Salvación y Rescate',
                'en' => 'Salvation & Rescue Brigade',
                'pt' => 'Diretoria de Salvação e Resgate',
            ],
            'funciones' => [
                'es' => ['Brigadas capacitadas en rescate y emergencia', 'Gestión de equipamiento especializado', 'Respuesta rápida en contingencias', 'Cooperación con cuerpos de protección civil'],
                'en' => ['Brigades trained in rescue and emergency', 'Specialized equipment management', 'Rapid response in contingencies', 'Cooperation with civil protection agencies'],
                'pt' => ['Brigadas capacitadas em resgate e emergência', 'Gestão de equipamentos especializados', 'Resposta rápida em contingências', 'Cooperação com órgãos de proteção civil'],
            ]
        ],
        [
            'slug'   => 'logistica',
            'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>',
            'nombre' => [
                'es' => 'Dirección de Logística',
                'en' => 'Logistics Department',
                'pt' => 'Diretoria de Logística',
            ],
            'funciones' => [
                'es' => ['Control de inventario e insumos', 'Procesos operativos de almacenamiento', 'Coordinación de transporte nacional', 'Distribución eficiente para eventos'],
                'en' => ['Inventory and supplies management', 'Warehouse operational processes', 'National transport coordination', 'Efficient distribution for major events'],
                'pt' => ['Controle de estoque e suprimentos', 'Processos operacionais de armazenagem', 'Coordenação de transporte nacional', 'Distribuição eficiente para eventos'],
            ]
        ],
        [
            'slug'   => 'rrhh',
            'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>',
            'nombre' => [
                'es' => 'Dirección de Recursos Humanos',
                'en' => 'Human Resources Department',
                'pt' => 'Diretoria de Recursos Humanos',
            ],
            'funciones' => [
                'es' => ['Convocatoria y selección de colaboradores', 'Acompañamiento del personal ministerial', 'Formación de equipos y evaluación', 'Bienestar integral del voluntariado'],
                'en' => ['Staff and volunteer recruitment', 'Ministerial staff care and mentoring', 'Team training and evaluation', 'Comprehensive volunteer welfare'],
                'pt' => ['Convocação e seleção de colaboradores', 'Acompanhamento do pessoal ministerial', 'Formação de equipes e avaliação', 'Bem-estar integral do voluntariado'],
            ]
        ],
        [
            'slug'   => 'marketing',
            'icono'  => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>',
            'nombre' => [
                'es' => 'Dirección de Marketing',
                'en' => 'Communications & Media Department',
                'pt' => 'Diretoria de Marketing e Mídia',
            ],
            'funciones' => [
                'es' => ['Estrategia de comunicación e imagen de marca', 'Creación de contenido audiovisual oficial', 'Gestión de redes sociales e información', 'Cobertura de eventos y prensa digital'],
                'en' => ['Communications strategy and branding', 'Official multimedia content production', 'Social media and press management', 'Live event coverage and digital press'],
                'pt' => ['Estratégia de comunicação e imagem institucional', 'Criação de conteúdo audiovisual oficial', 'Gestão de redes sociais e informação', 'Cobertura de eventos e imprensa digital'],
            ]
        ]
    ];

    // Mapear los datos al idioma actual
    $result = [];
    foreach ($data as $item) {
        $result[] = [
            'slug'      => $item['slug'],
            'icono'     => $item['icono'],
            'nombre'    => $item['nombre'][$lang] ?? $item['nombre']['es'],
            'funciones' => $item['funciones'][$lang] ?? $item['funciones']['es']
        ];
    }
    return $result;
}
