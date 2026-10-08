<?php
/**
 * Modelos de Afiliación y Cobertura FENAV
 * Configuración editable de Beneficios, Requisitos y Métodos de Pago
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Retorna los datos estructurados y editables de los modelos de afiliación
 */
function fenav_get_modelos_afiliacion_data() {
    return [
        'afiliadas' => [
            'id' => 'afiliadas',
            'tag' => __t('Membresía Mensual', 'Monthly Membership', 'Assinatura Mensal'),
            'titulo' => __t('Iglesias Afiliadas', 'Affiliated Churches', 'Igrejas Filiadas'),
            'subtitulo' => __t('Para congregaciones constituidas que buscan respaldo institucional, legal y bienestar pastoral.', 'For established congregations seeking institutional, legal backing and pastoral wellness.', 'Para congregações estabelecidas que buscam respaldo institucional, legal e bem-estar pastoral.'),
            'tipo_cuota' => __t('Suscripción / Cuota Mensual', 'Monthly Subscription / Fee', 'Mensalidade / Assinatura'),
            'cuota_nota' => __t('Aporte mensual destinado al fondo de salud, asesoría legal y sostenimiento federativo.', 'Monthly contribution allocated to the health fund, legal advice, and federative operations.', 'Contribuição mensal destinada ao fundo de saúde, assessoria jurídica e manutenção federativa.'),
            'badge_color' => 'from-primary to-yellow-500 text-dark',
            'icono' => '🏛️',
            'beneficios' => [
                [
                    'icono' => '🩺',
                    'titulo' => __t('Fondo de Salud y Asistencia Médica', 'Health Fund & Medical Assistance', 'Fundo de Saúde e Assistência Médica'),
                    'desc' => __t('Acceso a convenios médicos preferenciales, atención en emergencias y jornadas de salud preventivas para el pastor titular y su núcleo familiar directo.', 'Access to preferential medical agreements, emergency assistance, and preventive health drives for the senior pastor and immediate family.', 'Acesso a convênios médicos preferenciais, atendimento de emergência e jornadas de saúde preventiva para o pastor titular e sua família.'),
                ],
                [
                    'icono' => '⚖️',
                    'titulo' => __t('Asesoría Jurídica & Respaldo Legal', 'Legal Advice & Institutional Backing', 'Assessoria Jurídica e Respaldo Legal'),
                    'desc' => __t('Acompañamiento en registro y adecuación de actas constitutivas, estatutos, solvencias institucionales y representación ministerial ante organismos públicos.', 'Guidance in registering and updating bylaws, institutional clearances, and ministerial representation before public agencies.', 'Orientação no registro e adequação de atas constitutivas, estatutos, certidões institucionais e representação ministerial perante órgãos públicos.'),
                ],
                [
                    'icono' => '🎓',
                    'titulo' => __t('Capacitaciones y Diplomados Continuos', 'Continuous Training & Diplomas', 'Capacitações e Certificações Contínuas'),
                    'desc' => __t('Becas y aranceles especiales en la Escuela de Liderazgo FENAV, diplomados teológicos, talleres de finanzas ministeriales y cumbres anuales.', 'Scholarships and special rates at the FENAV Leadership School, theological diplomas, ministerial finance workshops, and annual summits.', 'Bolsas e taxas especiais na Escola de Liderança FENAV, certificações teológicas, oficinas de finanças ministeriais e cúpulas anuais.'),
                ],
                [
                    'icono' => '🪪',
                    'titulo' => __t('Credencial Pastoral Oficial FENAV', 'Official FENAV Pastoral Credential', 'Credencial Pastoral Oficial FENAV'),
                    'desc' => __t('Emisión de carnet y certificado ministerial nacional que acredita al pastor como ministro federado activo en Venezuela y el extranjero.', 'Issuance of national pastoral ID and certificate credentialing the minister as an active federated leader in Venezuela and abroad.', 'Emissão de crachá e certificado pastoral nacional credenciando o pastor como ministro federado ativo na Venezuela e exterior.'),
                ],
                [
                    'icono' => '🗳️',
                    'titulo' => __t('Voz y Voto en Asambleas Generales', 'Voice and Vote in General Assemblies', 'Voz e Voto nas Assembleias Gerais'),
                    'desc' => __t('Participación plena en la toma de decisiones estatutarias, elección de autoridades y rumbo estratégico de la federación.', 'Full participation in statutory decisions, election of board members, and strategic governance of the federation.', 'Participação plena em decisões estatutárias, eleição de autoridades e governança estratégica da federação.'),
                ],
            ],
            'requisitos' => [
                [
                    'titulo' => __t('Personalidad Jurídica & RIF Vigente', 'Legal Identity & Active Tax ID (RIF)', 'Personalidade Jurídica e RIF Ativo'),
                    'desc' => __t('Documento constitutivo registrado de la congregación con RIF actualizado a nombre de la iglesia.', 'Registered church constitution document with active tax ID (RIF) under the church name.', 'Documento constitutivo registrado da igreja com RIF ativo em nome da congregação.'),
                    'obligatorio' => true,
                ],
                [
                    'titulo' => __t('Carta de Trayectoria / Recomendación Ministerial', 'Ministerial Recommendation Letter', 'Carta de Recomendação Ministerial'),
                    'desc' => __t('Constancia de trayectoria pastoral o aval emitido por un ministro federado o directivo regional de FENAV.', 'Pastoral track record certificate or endorsement from an active FENAV minister or regional director.', 'Certificado de trajetória pastoral ou endosso emitido por um ministro filiado ou diretor regional da FENAV.'),
                    'obligatorio' => true,
                ],
                [
                    'titulo' => __t('Aceptación de Declaración de Fe y Estatutos', 'Acceptance of Statement of Faith & Bylaws', 'Aceitação da Declaração de Fé e Estatutos'),
                    'desc' => __t('Suscripción y apego voluntario a los lineamientos bíblicos, doctrinales y éticos que rigen a FENAV.', 'Voluntary endorsement and adherence to the biblical, doctrinal, and ethical principles governing FENAV.', 'Assinatura e adesão voluntária aos princípios bíblicos, doutrinários e éticos que regem a FENAV.'),
                    'obligatorio' => true,
                ],
                [
                    'titulo' => __t('Compromiso de Solvencia Mensual', 'Monthly Membership Commitment', 'Compromisso de Quitação Mensal'),
                    'desc' => __t('Cumplimiento puntual del aporte mensual federado (manejado vía Pago Móvil o pasarela digital).', 'Punctual compliance with the monthly federated contribution (handled via Pago Móvil or digital payment gateway).', 'Cumprimento pontual da contribuição mensal federativa (gerenciada via Pago Móvil ou gateway de pagamento).'),
                    'obligatorio' => true,
                ],
                [
                    'titulo' => __t('Datos Personales del Cuerpo Pastoral', 'Pastoral Identification Details', 'Dados Pessoais do Corpo Pastoral'),
                    'desc' => __t('Cédula de identidad, fotografía formal y ficha de datos de los pastores principales y cónyuge.', 'ID cards, formal photos, and data sheets of senior pastors and their spouse.', 'Documento de identidade, foto formal e ficha cadastral dos pastores titulares e cônjuge.'),
                    'obligatorio' => true,
                ],
            ],
            'cta' => [
                'texto' => __t('Postular Iglesia Afiliada', 'Apply as Affiliated Church', 'Candidatar Igreja Filiada'),
                'tipo' => 'afiliada',
            ]
        ],
        'hijas' => [
            'id' => 'hijas',
            'tag' => __t('Bajo Cobertura Espiritual', 'Under Spiritual Covering', 'Sob Cobertura Espiritual'),
            'titulo' => __t('Iglesias Hijas (Bajo Cobertura)', 'Daughter Churches (Under Covering)', 'Igrejas Filhas (Sob Cobertura)'),
            'subtitulo' => __t('Para congregaciones en formación, obras misioneras o sedes nacientes que anhelan paternidad y tutela ministerial.', 'For planting churches, missions, or emerging sites longing for spiritual fatherhood and ministerial guidance.', 'Para igrejas em formação, missões ou congregações nascentes que anseiam por paternidade e tutoria ministerial.'),
            'tipo_cuota' => __t('Sin Suscripción Mensual Fija', 'No Fixed Monthly Subscription', 'Sem Mensalidade Fixa Obrigatória'),
            'cuota_nota' => __t('Modelo basado en relación de discipulado, paternidad pastoral y primicias voluntarias.', 'Model based on discipleship, pastoral fatherhood, and voluntary mission freewill offerings.', 'Modelo baseado em relacionamento de discipulado, paternidade pastoral e ofertas voluntárias.'),
            'badge_color' => 'from-blue-600 to-cyan-500 text-white',
            'icono' => '🌿',
            'beneficios' => [
                [
                    'icono' => '🛡️',
                    'titulo' => __t('Paternidad & Cobertura Apostólica Directa', 'Fatherhood & Direct Apostolic Covering', 'Paternidade e Cobertura Apostólica Direta'),
                    'desc' => __t('Acompañamiento espiritual cercano de los líderes y apóstoles de la federación en momentos de decisiones clave y confrontación espiritual.', 'Close spiritual mentorship from federation leaders and apostles during strategic decisions and spiritual counsel.', 'Mentoria espiritual próxima dos líderes e apóstolos da federação em momentos estratégicos e aconselhamento.'),
                ],
                [
                    'icono' => '🌱',
                    'titulo' => __t('Acompañamiento en Plantación & Discipulado', 'Planting & Discipleship Mentorship', 'Acompanhamento na Plantação e Discipulado'),
                    'desc' => __t('Acceso a manuales de discipulado estandarizados, estructura para grupos en casas y apoyo misionero en la consolidación del altar de adoración.', 'Access to standardized discipleship manuals, small-group structure, and missionary support to establish strong local worship altars.', 'Acesso a manuais de discipulado padronizados, estrutura de células e apoio missionário na consolidação local.'),
                ],
                [
                    'icono' => '🕊️',
                    'titulo' => __t('Ordenación y Acreditación de Obreros', 'Ordination & Workers Commissioning', 'Ordenação e Credenciamento de Obreiros'),
                    'desc' => __t('Evaluación, confirmación ministerial y unción de líderes y diáconos bajo el aval espiritual de la federación.', 'Evaluation, ministerial confirmation, and commissioning of local workers and leaders under federation spiritual backing.', 'Avaliação, confirmação ministerial e unção de líderes e diáconos sob o respaldo espiritual da federação.'),
                ],
                [
                    'icono' => '🎪',
                    'titulo' => __t('Integración en Campamentos y Cumbres', 'Summits & Camp Integration', 'Integração em Acampamentos e Cúpulas'),
                    'desc' => __t('Participación plena de la juventud, líderes y congregación en congresos, retiros espirituales y vigilias nacionales FENAV.', 'Full participation of youth, leaders, and congregation in national FENAV conferences, spiritual retreats, and vigils.', 'Participação plena de jovens, líderes e congregação em congressos nacionais FENAV, retiros e vigílias.'),
                ],
                [
                    'icono' => '📜',
                    'titulo' => __t('Respaldo Institucional Temporal', 'Interim Institutional Backing', 'Respaldo Institucional Provisório'),
                    'desc' => __t('Cobertura formal mientras la congregación avanza en su madurez organizativa y jurídica autónoma.', 'Official institutional support while the local plant advances toward structural and legal maturity.', 'Apoio institucional oficial enquanto a congregação avança rumo à maturidade organizacional e jurídica.'),
                ],
            ],
            'requisitos' => [
                [
                    'titulo' => __t('Carta de Solicitud de Cobertura Paternal', 'Letter of Request for Pastoral Covering', 'Carta de Solicitação de Cobertura Paternal'),
                    'desc' => __t('Solicitud formal dirigida a la Junta Directiva FENAV exponiendo la visión de la obra y el deseo de cobertura.', 'Formal request addressed to FENAV Board explaining the local vision and heartfelt desire for covering.', 'Solicitação formal dirigida à Diretoria FENAV expondo a visão da congregação e o desejo de cobertura.'),
                    'obligatorio' => true,
                ],
                [
                    'titulo' => __t('Entrevista de Alineación Ministerial', 'Ministerial Alignment Interview', 'Entrevista de Alinhamento Ministerial'),
                    'desc' => __t('Encuentro personal o virtual con el consejo pastoral FENAV para evaluar testimonio, doctrina y llamado.', 'In-person or virtual interview with the pastoral board to discern testimony, sound doctrine, and calling.', 'Encontro presencial ou virtual com a liderança para discernir testemunho, sã doutrina e chamado.'),
                    'obligatorio' => true,
                ],
                [
                    'titulo' => __t('Adopción de la Visión Doctrinal de FENAV', 'Adoption of FENAV Doctrinal Vision', 'Adoção da Visão Doutrinária da FENAV'),
                    'desc' => __t('Alineamiento con los pilares del avivamiento, la santidad bíblica, el evangelismo activo y el orden eclesiástico.', 'Alignment with the pillars of spiritual revival, biblical holiness, active evangelism, and ecclesiastical order.', 'Alinhamento com os pilares do avivamento, santidade bíblica, evangelismo ativo e ordem eclesiástica.'),
                    'obligatorio' => true,
                ],
                [
                    'titulo' => __t('Rendición de Cuentas & Reportes Periódicos', 'Periodic Ministry Progress Reports', 'Prestação de Contas e Relatórios Periódicos'),
                    'desc' => __t('Envío de informe trimestral sobre avance congregacional, almas ganadas y bautismos.', 'Quarterly submission of congregation progress reports, conversions, and baptisms.', 'Envio de relatório trimestral sobre o progresso congregacional, conversões e batismos.'),
                    'obligatorio' => true,
                ],
                [
                    'titulo' => __t('Asistencia a Convocatorias Mandatarias', 'Attendance at Mandatory Convocations', 'Presença em Convocações Obrigatórias'),
                    'desc' => __t('Compromiso de asistencia de los pastores líderes a los retiros de cobertura y asambleas institucionales.', 'Commitment of lead pastors to attend mandatory covering retreats and annual summits.', 'Compromisso de presença dos pastores titulares nos retiros de cobertura e cúpulas anuais.'),
                    'obligatorio' => true,
                ],
            ],
            'cta' => [
                'texto' => __t('Solicitar Cobertura Espiritual', 'Request Spiritual Covering', 'Solicitar Cobertura Espiritual'),
                'tipo' => 'hija',
            ]
        ]
    ];
}

/**
 * Retorna la configuración editable de Pago Móvil y Pasarela de Pagos
 */
function fenav_get_pagos_config() {
    return [
        'pago_movil' => [
            'activo' => true,
            'banco' => 'Banesco (0134)', // EDITABLE
            'telefono' => '0414-555-0000', // EDITABLE
            'rif' => 'J-12345678-9', // EDITABLE
            'titular' => 'Federación Nacional de Avivamiento FENAV',
            'concepto_sugerido' => 'Membresía Mensual FENAV - [Nombre Iglesia]',
            'whatsapp_reporte' => '584145550000', // Teléfono para reportar vía WhatsApp con mensaje pre-armado
        ],
        'pasarela' => [
            'activo' => false, // Cambiar a true cuando se active la pasarela
            'mensaje_proximamente' => __t('Pasarela de pago online en desarrollo. Próximamente tarjetas de débito/crédito nacionales e internacionales.', 'Online payment gateway in progress. National and international debit/credit cards coming soon.', 'Gateway de pagamento online em desenvolvimento. Em breve cartões de débito/crédito nacionais e internacionais.')
        ]
    ];
}
