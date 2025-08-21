<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ env('WEBSITE_TITLE') }} | Inicio</title>
    @include('partials.header')
</head>

<body>
    <!-- Spinner Start -->
    @include('partials.spinner')
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid p-0">
        <!-- Navbar Start -->
        @include('partials.navbar')
        <!-- Navbar End -->
    </div>
    <!-- Navbar & Hero End -->
    <!-- Carousel Start -->
    <div class="index-page-carousel">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src={{ asset('img/carousel/carousel-img-1.jpg') }} alt="carousel-img">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('img/carousel/carousel-img-2.jpg') }}  alt="carousel-img">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-------- section about us  --------->
    <div class="container-fluid pt-3 pb-1 mt-3">
        <div class="container-lg">
            <h2 class="text-center">NUESTRA EMPRESA</h2>
            <p class="text-center">Acerca de Nosotros</p>
            <div class="row g-4 mt-4">
                <!----- img --->
                <div class="col-md-6 col-sm-12 text-center">
                    <img class="img-fluid w-100" src={{ asset('img/sobre-nosotros-index-section.jpg') }}
                        alt="buquetanque-sección-sobre-nosotros">
                </div>
                <div class="col-md-6 col-sm-12">
                    <p>
                        Somos una empresa dinámica cuyo principal objetivo es la entera satisfacción de nuestros
                        clientes. Somos Comercializadores de Combustibles para el sector Marítimo con una vasta
                        experiencia de más de 15 años a través de nuestra estación de servicio marítima avalado por
                        el
                        ministerio de minas y energía, Lubricantes y Petroquímicos en Colombia y actuamos como
                        Bróker en
                        negociaciones internacionales de crudo y derivados.
                    </p>
                    <h5>Nuestros Mayores Objetivos Son:</h5>
                    <ul>
                        <li>La entera satisfacción de nuestros clientes</li>
                        <li>Entregas oportunas</li>
                        <li>Precios competitivos</li>
                        <li>Producto de excelente calidad</li>
                        <li>Asesorías técnicas</li>
                        <li>Cantidades exactas</li>
                    </ul>
                    <p>
                        Operamos en toda la zona Norte de Colombia, nuestra oficina base se encuentra en la ciudad
                        de
                        Cartagena de Indias con cobertura en todo el territorio Colombiano y en los principales
                        puertos como son Cartagena, Barranquilla, Santa Marta, Coveñas, Puerto Bolívar y el puerto
                        de
                        Buenaventura; Como también para casos puntuales tenemos alianzas estratégicas para hacer
                        entregas en Ciudad de Panamá, Centro América y el Caribe.
                    </p>
                    <p>
                        Contamos con personal altamente calificado para atender y satisfacer las necesidades de
                        nuestros
                        clientes.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-------- End section about us  --------->

    <!-------- section environment duty --------->
    <div class="container-fluid pt-3 pb-1 my-3">
        <div class="container-lg">
            <h2 class="text-center">NUESTRO COMPROMISO CON EL MEDIO AMBIENTE</h2>
            <p class="text-center mt-3">Responsables con el planeta</p>
            <div class="row g-4">
                <div class="col-md-6 col-sm-12">
                    <p class="mt-5 pt-5">
                        <i>COLTAGAS DEL CARIBE S.A.S</i> es una empresa comprometida con la conservación y cuidado
                        del medio ambiente por lo que todos sus procesos y procedimientos son realizados con el
                        cumplimiento de la normatividad vigente en esta área.
                    </p>
                </div>
                <div class="col-md-6 col-sm-12 text-center">
                    <img class="img-fluid w-100" src={{ asset('img/compromiso-con-el-medio-ambiente.jpg') }} alt="">
                </div>
            </div>
        </div>
    </div>
    <!-------- End environment --------->

    <!------------ clients ------------>
    <div class=" clients container-fluid py-5 my-5">
        <div class="container-lg">
            <h2 class="text-center">CONOZCA A NUESTROS CLIENTES</h2>
            <p class="text-center">Testimonios de nuestra calidad y servicio conforme</p>
            <div class="row g-4">
                <div class="col-md-4 col-sm-12">
                    <div class="img-container">
                        <img src={{ asset('img/clients/client-1.png') }} alt="client-testimonial">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center">
                    <div class="img-container">
                        <img src={{ asset('img/clients/client-2.png') }} alt="client-testimonial">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center">
                    <div class="img-container">
                        <img src={{ asset('img/clients/client-3.png') }} alt="client-testimonial">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------ End clients ------------>

    <!------------- image gallery ------------>
    <div class="container-fluid gallery py-5 my-5">
        <div class="container-lg">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Galeria</h5>
                <h2 class="mb-4">CONOZCA ALGUNAS DE NUESTRAS ENTREGAS</h2>
                <p class="mb-0">
                    Evidencia de nuestro compromiso & calidad
                </p>
            </div>
            <div class="tab-class text-center">
                <div class="tab-content">
                    <div class="tab-pane fade show p-0 active">
                        <div class="row g-2 mb-2">
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <div class="gallery-item h-100">
                                    <img src={{ asset('img/entregas/Delivery-Infrastructure-Marine-DIESEL-MN-Ana-Maria-TANKER-3.png') }} class="img-fluid w-100 h-100 rounded" alt="Image">
                                        <div class="gallery-content">
                                            <div class="gallery-info">
                                                <h5 class="text-white text-uppercase mb-2">Ana Maria Tanker</h5>
                                                <p class="btn-hover text-white">Entrega de Diesel</p>
                                            </div>
                                        </div>
                                        <div class="gallery-plus-icon">
                                            <a href={{ asset('img/entregas/Delivery-Infrastructure-Marine-DIESEL-MN-Ana-Maria-TANKER-3.png') }} data-lightbox="gallery-4" class="my-auto"><i
                                                class="fas fa-plus fa-2x text-white"></i></a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <div class="gallery-item h-100">
                                    <img src={{ asset('img/entregas/ENTREGA-DE-MGO-BARRANQUILLA-PALERMO-1.png') }} class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">Barranquilla palermo</h5>
                                            <p class="btn-hover text-white">Entrega de MGO</p>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href={{ asset('img/entregas/ENTREGA-DE-MGO-BARRANQUILLA-PALERMO-1.png') }}
                                            data-lightbox="gallery-2" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <div class="gallery-item h-100">
                                    <img src={{ asset('img/entregas/IMG-20240308-WA0016.jpg') }}
                                        class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">Entrega en puerto</h5>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href={{ asset('img/entregas/IMG-20240308-WA0016.jpg') }}
                                            data-lightbox="gallery-5" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <div class="gallery-item h-100">
                                    <img src={{ asset('img/entregas/entrega-1.png') }}
                                        class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">Despacho en fondeo</h5>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href={{ asset('img/entregas/entrega-1.png') }}
                                        data-lightbox="gallery-6" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <div class="gallery-item h-100">
                                    <img src={{ asset('img/entregas/ENTREGA-DE-LUBRICANTES-MARINOS-COTECMAR-1.jpg') }}
                                        class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">Cotecmar</h5>
                                            <p class="btn-hover text-white">Entrega de Lubricantes</p>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href={{ asset('img/entregas/ENTREGA-DE-LUBRICANTES-MARINOS-COTECMAR-1.jpg') }} data-lightbox="gallery-1" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-center mt-4">LAS ENTREGAS SON REALIZADAS POR CAMIONES CISTERNAS O BARCAZAS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------- End image gallery ------------>

    <!------------- authorities ------------>
    <div class="authorities container-fluid pt-3 pb-1 mt-3">
        <div class="container-lg">
            <div class="row  g-4">
                <div class="col-sm-12 col-md-4">
                    <div class="img-container text-center">
                        <img src={{ asset('img/cardique-300x300.png') }} alt="autoridades-logo">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="img-container text-center">
                        <img src={{ asset('img/incotec-300x300.png') }} alt="autoridades-logo">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="img-container">
                        <img src={{ asset('img/ministerio-minas-300x300.png') }} alt="autoridades-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------- End authorities ------------>


    <!---------- JAVASCRIPT ---------->
    @include('partials.footer')
</body>
<footer>
    @include('partials.footer-info')
</footer>

</html>