<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>Front Salud | Centro de Diagnóstico y Laboratorio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Front Salud - Centro de Diagnóstico y Laboratorio de la Fundación Valle de Hebrón. Consulta médica especializada, laboratorio clínico, imagenología y diagnóstico cardiovascular en La Romana, República Dominicana.">
    <meta name="author" content="Front Salud - Fundación Valle de Hebrón" />

    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">

    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/frontsalud.css') }}" rel="stylesheet" type="text/css" />

</head>

@php
    $telefono = '(849) 581-2991';
    $whatsapp = '18495812991';
    $correo = 'info@frontsalud.com';
    $direccion = 'C/ Romana - San Pedro, Plaza Bonita, 1er Nivel, Local 01, Villa Hermosa, La Romana, República Dominicana';
    $horario = 'Lunes a viernes: 8:00 a.m. – 5:00 p.m. (horario de referencia, sujeto a confirmación)';

    $servicios = [
        [
            'icono' => 'ri-stethoscope-line',
            'titulo' => 'Consulta de Medicina Especializada',
            'detalle' => 'Medicina Interna, Medicina Familiar y Comunitaria, Ginecología y Obstetricia, Cardiología, Terapia Familiar.',
        ],
        [
            'icono' => 'ri-test-tube-line',
            'titulo' => 'Servicio de Laboratorio Clínico',
            'detalle' => 'Análisis clínicos Nivel I para apoyar diagnósticos confiables, seguros y oportunos.',
        ],
        [
            'icono' => 'ri-radar-line',
            'titulo' => 'Servicio de Imagenología',
            'detalle' => 'Ultrasonografía para estudios diagnósticos con equipos de alta tecnología.',
        ],
        [
            'icono' => 'ri-heart-pulse-line',
            'titulo' => 'Diagnóstico Cardiovascular',
            'detalle' => 'Electrocardiograma, Holter, MAPA y Ecocardiograma para el cuidado de tu corazón.',
        ],
    ];

    $equipo = [
        ['nombre' => 'Dr. Froilán Valdez Lorenzo', 'rol' => 'Director Médico · Sonografía y Terapia Familiar', 'foto' => 'assets/images/users/avatar-2.jpg'],
        ['nombre' => 'Lic. Ronasis Reyes Ramírez Ogando', 'rol' => 'Bioanálisis', 'foto' => 'assets/images/users/avatar-10.jpg'],
        ['nombre' => 'Dr. Miguel Antonio Reyes Carrasco', 'rol' => 'Medicina Interna · Cardiología', 'foto' => 'assets/images/users/avatar-3.jpg'],
        ['nombre' => 'Dr. Yory Junior Ávila Castillo', 'rol' => 'Obstetricia y Ginecología', 'foto' => 'assets/images/users/avatar-8.jpg'],
        ['nombre' => 'Dr. Gerald Aquino Rosado', 'rol' => 'Medicina Familiar y Comunitaria', 'foto' => 'assets/images/users/avatar-5.jpg'],
        ['nombre' => 'Dr. Juan Antonio Del Villar Bastardo', 'rol' => 'Medicina Interna', 'foto' => 'assets/images/users/avatar-4.jpg'],
        ['nombre' => 'Lic. Cheila Rijo Guerrero', 'rol' => 'Enfermería', 'foto' => 'assets/images/users/avatar-6.jpg'],
    ];

    $valores = [
        ['icono' => 'ri-scales-3-line', 'titulo' => 'Justicia', 'detalle' => 'La noción que se tiene sobre el bien común que busca lo mejor para todos.'],
        ['icono' => 'ri-heart-line', 'titulo' => 'Amor', 'detalle' => 'Nos completa, alegra y da energía para convivir, comunicarnos y crear junto a nuestros pacientes.'],
        ['icono' => 'ri-shield-check-line', 'titulo' => 'Verdad', 'detalle' => 'Veracidad, autenticidad y exactitud en cada diagnóstico y resultado que entregamos.'],
        ['icono' => 'ri-hand-heart-line', 'titulo' => 'Honestidad', 'detalle' => 'Ser sinceros, veraces y sin engaño en cada etapa de tu atención.'],
    ];
@endphp

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#hero">
                    <img src="{{ asset('assets/images/landing/frontsalud/logo-front-salud.png') }}" alt="Front Salud" height="48">
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item"><a class="nav-link active" href="#hero">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="#cartera">Cartera de servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#preguntas-frecuentes">Preguntas frecuentes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#equipo">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                    </ul>

                    <div class="">
                        <a href="https://wa.me/{{ $whatsapp }}" target="_blank" rel="noopener" class="btn btn-link fw-medium text-decoration-none text-dark">
                            <i class="ri-whatsapp-line align-middle me-1"></i> {{ $telefono }}
                        </a>
                        <a href="#contacto" class="btn btn-primary">Agendar cita</a>
                    </div>
                </div>

            </div>
        </nav>
        <!-- end navbar -->

        <!-- start hero section -->
        <section class="section pb-0 hero-section" id="hero">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="mt-lg-5 pt-5">
                            <span class="badge bg-verde-claro rounded-pill px-3 py-2 mb-3">Centro de Diagnóstico y Laboratorio</span>
                            <h1 class="display-6 fw-semibold mb-3 lh-base">Cuidado integral para <span class="text-success">tu salud</span>, con calidad y calidez humana</h1>
                            <p class="lead text-muted lh-base">Front Salud, de la Fundación Valle de Hebrón, ofrece consulta médica especializada, laboratorio clínico, imagenología y diagnóstico cardiovascular en un solo lugar.</p>

                            <div class="d-flex d-lg-none gap-2 mt-4">
                                <a href="#contacto" class="btn btn-primary">Agendar cita <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                                <a href="#servicios" class="btn btn-outline-primary">Ver servicios <i class="ri-eye-line align-middle ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-4 mt-lg-0 text-center">
                            <img src="{{ asset('assets/images/landing/frontsalud/hero-equipo-ct.jpg') }}" alt="Equipo de Front Salud junto a equipo de tomografía" class="img-fluid rounded-4 shadow-lg">
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">
                        <path d="M 0,118 C 288,98.6 1152,40.4 1440,21L1440 140L0 140z">
                        </path>
                    </g>
                </svg>
            </div>
            <!-- end shape -->
        </section>
        <!-- end hero section -->

        <!-- start services -->
        <section class="section" id="servicios">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h5 class="fs-12 text-uppercase text-success fw-semibold">Nuestra cartera de servicios</h5>
                            <h1 class="mb-3 ff-secondary fw-semibold lh-base">Cuidado integral para tu salud</h1>
                            <p class="text-muted">Servicios de salud habilitados por el Ministerio de Salud Pública de la República Dominicana, brindados por un equipo humano y certificado.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row g-4">
                    @foreach ($servicios as $servicio)
                        <div class="col-lg-3 col-sm-6">
                            <div class="card-servicio p-4 text-center bg-white">
                                <div class="avatar-sm icon-effect mx-auto mb-3">
                                    <div class="avatar-title bg-brand-soft rounded-circle">
                                        <i class="{{ $servicio['icono'] }} fs-24"></i>
                                    </div>
                                </div>
                                <h5 class="fs-16">{{ $servicio['titulo'] }}</h5>
                                <p class="text-muted mb-0 ff-secondary fs-14">{{ $servicio['detalle'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end services -->

        <!-- start features (por qué elegirnos) -->
        <section class="section bg-light py-5" id="nosotros">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 col-sm-7 mx-auto">
                        <div>
                            <img src="{{ asset('assets/images/landing/frontsalud/lectura-estudios.jpg') }}" alt="Equipo de Front Salud analizando estudios de imagen" class="img-fluid mx-auto rounded-4 shadow-sm">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-muted">
                            <div class="avatar-sm icon-effect mb-4">
                                <div class="avatar-title bg-brand-soft rounded-circle h1">
                                    <i class="ri-award-line fs-36"></i>
                                </div>
                            </div>
                            <h3 class="mb-3 fs-20">¿Por qué elegir Front Salud?</h3>
                            <p class="mb-4 ff-secondary fs-16">Contamos con equipos de diagnóstico por imágenes de alta tecnología y un equipo humano certificado ante el Ministerio de Salud Pública, comprometido con un servicio confiable, seguro y cercano.</p>

                            <div class="row pt-3">
                                <div class="col-4">
                                    <div class="text-center">
                                        <h4 class="text-primary">4</h4>
                                        <p>Servicios de salud</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-center">
                                        <h4 class="text-primary">7</h4>
                                        <p>Profesionales certificados</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-center">
                                        <h4 class="text-primary">1er</h4>
                                        <p>Nivel de atención habilitado</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end features -->

        <!-- start cta -->
        <section class="py-5 bg-primary position-relative">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">¿Necesitas agendar una consulta o estudio?</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="https://wa.me/{{ $whatsapp }}" target="_blank" rel="noopener" class="btn bg-gradient btn-danger"><i class="ri-whatsapp-line align-middle me-1"></i> Escríbenos por WhatsApp</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->

        <!-- start misión / visión -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="text-muted">
                            <h5 class="fs-12 text-uppercase text-success">Misión</h5>
                            <h4 class="mb-3">Un centro diagnóstico plenamente humano</h4>
                            <p class="mb-4 ff-secondary">Buscamos ofrecer servicios de salud y educación. Servir a nuestro mundo siendo un centro diagnóstico y laboratorio plenamente humano.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/landing/frontsalud/logo-front-salud.png') }}" alt="Front Salud" class="img-fluid" style="max-width: 260px;">
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center mt-5 pt-lg-5 gy-4">
                    <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                        <div>
                            <img src="{{ asset('assets/images/landing/frontsalud/equipo-tomografo.jpg') }}" alt="Tecnología de diagnóstico por imágenes en Front Salud" class="img-fluid rounded-4 shadow-sm">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-muted ps-lg-5">
                            <h5 class="fs-12 text-uppercase text-success">Visión</h5>
                            <h4 class="mb-3">Liderazgo en diagnóstico por imágenes</h4>
                            <p class="mb-4">Transformar los diagnósticos por imágenes con equipos de alta tecnología y expandirnos con nuestro liderazgo global para servir mejor a los pacientes.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row justify-content-center mt-5 pt-lg-3">
                    <div class="col-lg-8 text-center mb-4">
                        <h5 class="fs-12 text-uppercase text-success fw-semibold">Lo que nos guía</h5>
                        <h3 class="fw-semibold">Nuestros valores</h3>
                    </div>
                </div>
                <div class="row g-4">
                    @foreach ($valores as $valor)
                        <div class="col-lg-3 col-sm-6">
                            <div class="text-center p-3">
                                <div class="avatar-sm icon-effect mx-auto mb-3">
                                    <div class="avatar-title bg-brand-soft rounded-circle">
                                        <i class="{{ $valor['icono'] }} fs-24"></i>
                                    </div>
                                </div>
                                <h5 class="fs-16">{{ $valor['titulo'] }}</h5>
                                <p class="text-muted mb-0 ff-secondary fs-14">{{ $valor['detalle'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end misión / visión -->

        <!-- start cartera de servicios -->
        <section class="section bg-light" id="cartera">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-4">
                            <h3 class="mb-3 fw-semibold">Cartera de Servicios Aprobada</h3>
                            <p class="text-muted mb-3 ff-secondary">Certificada por la Dirección de Habilitación de Servicios y Establecimientos de Salud (DHSES) del Ministerio de Salud Pública de la República Dominicana.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row g-4">
                    @foreach ($servicios as $i => $servicio)
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm icon-effect">
                                                <div class="avatar-title bg-brand-soft rounded-circle">
                                                    <i class="{{ $servicio['icono'] }} fs-24"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="mb-0">{{ $i + 1 }}. {{ $servicio['titulo'] }}</h5>
                                        </div>
                                    </div>
                                    <p class="text-muted ff-secondary mb-3">{{ $servicio['detalle'] }}</p>
                                    <a href="https://wa.me/{{ $whatsapp }}?text=Hola%2C%20quisiera%20informaci%C3%B3n%20sobre%3A%20{{ urlencode($servicio['titulo']) }}" target="_blank" rel="noopener" class="fs-13 fw-medium">
                                        Consultar disponibilidad <i class="ri-arrow-right-s-line align-bottom"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cartera de servicios -->

        <!-- start faqs -->
        <section class="section" id="preguntas-frecuentes">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Preguntas frecuentes</h3>
                            <p class="text-muted mb-4 ff-secondary">Si no encuentras la respuesta que buscas, escríbenos y con gusto te ayudamos.</p>

                            <div class="">
                                <a href="mailto:{{ $correo }}" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i> Escríbenos</a>
                                <a href="https://wa.me/{{ $whatsapp }}" target="_blank" rel="noopener" class="btn btn-info btn-label rounded-pill"><i class="ri-whatsapp-line label-icon align-middle rounded-pill fs-16 me-2"></i> WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row g-lg-5 g-4">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 me-1">
                                <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fw-semibold">Sobre tu cita</h5>
                            </div>
                        </div>
                        <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box" id="genques-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseOne" aria-expanded="true" aria-controls="genques-collapseOne">
                                        ¿Cómo agendo una cita en Front Salud?
                                    </button>
                                </h2>
                                <div id="genques-collapseOne" class="accordion-collapse collapse show" aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        Puedes escribirnos por WhatsApp, llamarnos o completar el formulario de contacto de esta página indicando el servicio que necesitas. Te confirmaremos fecha y hora disponibles.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseTwo" aria-expanded="false" aria-controls="genques-collapseTwo">
                                        ¿Necesito una orden médica para hacerme un estudio?
                                    </button>
                                </h2>
                                <div id="genques-collapseTwo" class="accordion-collapse collapse" aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        Para la mayoría de los estudios de imagenología y laboratorio se solicita una orden médica. Si tienes dudas sobre tu caso particular, contáctanos antes de tu visita.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseThree" aria-expanded="false" aria-controls="genques-collapseThree">
                                        ¿Cuánto tiempo tardan mis resultados?
                                    </button>
                                </h2>
                                <div id="genques-collapseThree" class="accordion-collapse collapse" aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        El tiempo de entrega varía según el tipo de estudio o análisis. Nuestro equipo te indicará el tiempo estimado al momento de tu cita.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseFour" aria-expanded="false" aria-controls="genques-collapseFour">
                                        ¿Dónde están ubicados?
                                    </button>
                                </h2>
                                <div id="genques-collapseFour" class="accordion-collapse collapse" aria-labelledby="genques-headingFour" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        {{ $direccion }}.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->

                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 me-1">
                                <i class="ri-shield-keyhole-line fs-24 align-middle text-success me-1"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fw-semibold">Pagos y convenios</h5>
                            </div>
                        </div>

                        <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box" id="privacy-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="privacy-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseOne" aria-expanded="false" aria-controls="privacy-collapseOne">
                                        ¿Trabajan con seguros o ARS?
                                    </button>
                                </h2>
                                <div id="privacy-collapseOne" class="accordion-collapse collapse" aria-labelledby="privacy-headingOne" data-bs-parent="#privacy-accordion">
                                    <div class="accordion-body ff-secondary">
                                        Te invitamos a consultar con nuestro equipo los convenios vigentes al momento de tu cita, ya que pueden actualizarse periódicamente.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="privacy-headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseTwo" aria-expanded="true" aria-controls="privacy-collapseTwo">
                                        ¿Mis datos y resultados son confidenciales?
                                    </button>
                                </h2>
                                <div id="privacy-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="privacy-headingTwo" data-bs-parent="#privacy-accordion">
                                    <div class="accordion-body ff-secondary">
                                        Sí. Tu información y resultados clínicos se manejan de forma confidencial, conforme a la normativa de salud vigente en República Dominicana.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="privacy-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseThree" aria-expanded="false" aria-controls="privacy-collapseThree">
                                        ¿Cuál es el horario de atención?
                                    </button>
                                </h2>
                                <div id="privacy-collapseThree" class="accordion-collapse collapse" aria-labelledby="privacy-headingThree" data-bs-parent="#privacy-accordion">
                                    <div class="accordion-body ff-secondary">
                                        {{ $horario }}.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="privacy-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseFour" aria-expanded="false" aria-controls="privacy-collapseFour">
                                        ¿El centro está habilitado oficialmente?
                                    </button>
                                </h2>
                                <div id="privacy-collapseFour" class="accordion-collapse collapse" aria-labelledby="privacy-headingFour" data-bs-parent="#privacy-accordion">
                                    <div class="accordion-body ff-secondary">
                                        Sí. Front Salud (Fundación Valle de Hebrón) cuenta con Licencia de Habilitación otorgada por el Ministerio de Salud Pública, vigente hasta el 15 de septiembre de 2027.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end faqs -->

        <!-- start compromiso -->
        <section class="section bg-primary" id="reviews">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center">
                            <div>
                                <i class="ri-double-quotes-l text-success display-3"></i>
                            </div>
                            <h4 class="text-white mb-5">Nuestro compromiso <span class="text-success">contigo</span></h4>

                            <!-- Swiper -->
                            <div class="swiper client-review-swiper rounded" dir="ltr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="text-white-50">
                                                    <p class="fs-20 ff-secondary mb-4">"Justicia: buscamos siempre el bien común, brindando a cada paciente la mejor atención posible."</p>
                                                    <div>
                                                        <h5 class="text-white">Equipo Front Salud</h5>
                                                        <p>Fundación Valle de Hebrón</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide -->
                                    <div class="swiper-slide">
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="text-white-50">
                                                    <p class="fs-20 ff-secondary mb-4">"Verdad: trabajamos con veracidad y exactitud en cada diagnóstico, porque tu salud merece certeza."</p>
                                                    <div>
                                                        <h5 class="text-white">Equipo Front Salud</h5>
                                                        <p>Fundación Valle de Hebrón</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide -->
                                    <div class="swiper-slide">
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="text-white-50">
                                                    <p class="fs-20 ff-secondary mb-4">"Amor y honestidad: te atendemos con calidez humana, siendo siempre sinceros contigo y con tu proceso de salud."</p>
                                                    <div>
                                                        <h5 class="text-white">Equipo Front Salud</h5>
                                                        <p>Fundación Valle de Hebrón</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide -->
                                </div>
                                <div class="swiper-button-next bg-white rounded-circle"></div>
                                <div class="swiper-button-prev bg-white rounded-circle"></div>
                                <div class="swiper-pagination position-relative mt-2"></div>
                            </div>
                            <!-- end slider -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end compromiso -->

        <!-- start Work Process -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">¿Cómo funciona tu visita?</h3>
                            <p class="text-muted mb-4 ff-secondary">Tres pasos sencillos para recibir atención en Front Salud.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row text-center">
                    <div class="col-lg-4">
                        <div class="process-card mt-4">
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-brand-soft rounded-circle h1">
                                    <i class="ri-calendar-check-line"></i>
                                </div>
                            </div>

                            <h5>Agenda tu cita</h5>
                            <p class="text-muted ff-secondary">Contáctanos por WhatsApp, teléfono o el formulario de esta página.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="process-card mt-4">
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-brand-soft rounded-circle h1">
                                    <i class="ri-hospital-line"></i>
                                </div>
                            </div>

                            <h5>Recibe tu atención</h5>
                            <p class="text-muted ff-secondary">Nuestro equipo certificado te atiende con la tecnología adecuada para tu estudio o consulta.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="process-card mt-4">
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-brand-soft rounded-circle h1">
                                    <i class="ri-file-list-3-line"></i>
                                </div>
                            </div>

                            <h5>Retira tus resultados</h5>
                            <p class="text-muted ff-secondary">Recibe tus resultados en el tiempo indicado por nuestro equipo.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end Work Process -->

        <!-- start team -->
        <section class="section bg-light" id="equipo">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Nuestro <span class="text-success">equipo</span></h3>
                            <p class="text-muted mb-4 ff-secondary">Profesionales aprobados por el Ministerio de Salud Pública para brindarte atención de calidad. (Fotos referenciales, en actualización)</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row g-4">
                    @foreach ($equipo as $miembro)
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ asset($miembro['foto']) }}" alt="{{ $miembro['nombre'] }}" class="img-fluid rounded-circle">
                                    </div>
                                    <h5 class="mb-1 text-body">{{ $miembro['nombre'] }}</h5>
                                    <p class="text-muted mb-0 ff-secondary fs-13">{{ $miembro['rol'] }}</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    @endforeach
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end team -->

        <!-- start contact -->
        <section class="section" id="contacto">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Ponte en contacto</h3>
                            <p class="text-muted mb-4 ff-secondary">Escríbenos y con gusto te ayudamos a agendar tu consulta o estudio.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                @if (session('contacto_enviado'))
                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-8">
                            <div class="alert alert-success">
                                ¡Gracias! Tu mensaje fue enviado correctamente, te contactaremos pronto.
                            </div>
                        </div>
                    </div>
                @endif

                @if (session('contacto_error'))
                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-8">
                            <div class="alert alert-danger">
                                No pudimos enviar tu mensaje por un problema temporal de conexión. Por favor intenta de nuevo o escríbenos directamente por WhatsApp.
                            </div>
                        </div>
                    </div>
                @endif

                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Dirección:</h5>
                                <div class="ff-secondary fw-semibold">{{ $direccion }}</div>
                            </div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Teléfono / WhatsApp:</h5>
                                <div class="ff-secondary fw-semibold">{{ $telefono }}</div>
                            </div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Correo:</h5>
                                <div class="ff-secondary fw-semibold">{{ $correo }}</div>
                            </div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Horario:</h5>
                                <div class="ff-secondary fw-semibold">{{ $horario }}</div>
                            </div>
                            <div class="mt-4 contact-map">
                                <iframe
                                    src="https://maps.google.com/maps?q={{ urlencode($direccion) }}&output=embed"
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                    title="Ubicación de Front Salud"></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-8">
                        <div>
                            <form method="POST" action="{{ route('contacto.enviar') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="name" class="form-label fs-13">Nombre</label>
                                            <input name="name" id="name" type="text" value="{{ old('name') }}" class="form-control bg-light border-light @error('name') is-invalid @enderror" placeholder="Tu nombre*">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="email" class="form-label fs-13">Correo</label>
                                            <input name="email" id="email" type="email" value="{{ old('email') }}" class="form-control bg-light border-light @error('email') is-invalid @enderror" placeholder="Tu correo*">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="phone" class="form-label fs-13">Teléfono</label>
                                            <input name="phone" id="phone" type="text" value="{{ old('phone') }}" class="form-control bg-light border-light @error('phone') is-invalid @enderror" placeholder="Tu teléfono">
                                            @error('phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="subject" class="form-label fs-13">Asunto</label>
                                            <input type="text" class="form-control bg-light border-light @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Servicio de tu interés" />
                                            @error('subject')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="comments" class="form-label fs-13">Mensaje</label>
                                            <textarea name="comments" id="comments" rows="3" class="form-control bg-light border-light @error('comments') is-invalid @enderror" placeholder="Cuéntanos qué necesitas...">{{ old('comments') }}</textarea>
                                            @error('comments')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-end">
                                        <button type="submit" id="submit" name="send" class="submitBnt btn btn-primary">Enviar mensaje</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end contact -->

        <!-- Start footer -->
        <footer class="custom-footer py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div>
                            <div class="logo-badge">
                                <img src="{{ asset('assets/images/landing/frontsalud/logo-front-salud.png') }}" alt="Front Salud" height="44">
                            </div>
                            <div class="mt-4 fs-13">
                                <p class="text-white-50">Centro de Diagnóstico y Laboratorio</p>
                                <p class="ff-secondary text-white-50">Front Salud es un servicio de la Fundación Valle de Hebrón, habilitado por el Ministerio de Salud Pública de la República Dominicana.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 ms-lg-auto">
                        <div class="row">
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Enlaces</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="#servicios">Servicios</a></li>
                                        <li><a href="#nosotros">Nosotros</a></li>
                                        <li><a href="#cartera">Cartera de servicios</a></li>
                                        <li><a href="#equipo">Equipo</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Soporte</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="#preguntas-frecuentes">Preguntas frecuentes</a></li>
                                        <li><a href="#contacto">Contacto</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Contacto</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="https://wa.me/{{ $whatsapp }}" target="_blank" rel="noopener">{{ $telefono }}</a></li>
                                        <li><a href="mailto:{{ $correo }}">{{ $correo }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row text-center text-sm-start align-items-center mt-5">
                    <div class="col-sm-12">
                        <div>
                            <p class="copy-rights mb-0 text-white-50">
                                © {{ date('Y') }} Front Salud · Fundación Valle de Hebrón
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

    </div>
    <!-- end layout wrapper -->


    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- landing init -->
    <script src="{{ asset('assets/js/pages/landing.init.js') }}"></script>
</body>

</html>
