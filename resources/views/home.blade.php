@extends('dashboard')


@section('content')

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title> CCIS | Souss Masa</title>


        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/favicon-16x16.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicons/favicon.ico') }}">
        <link rel="manifest" href="{{ asset('img/favicons/manifest.json') }}">
        <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff">

        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> --}}


        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet" />

    </head>


    <body>

        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">

            <section class="pt-7 pb-0">

                <div class="container">
                    <div class="row pt-4 mt-4">
                        <div class="col-6 col-lg mb-5 py-2 my-2">
                            <div class="text-center"><img src="{{ asset('img/icons/awards.png') }}" alt="..." />
                                <h1 class="text-primary mt-2">{{ $globalVisiteurs->count() }}</h1>
                                <h5 class="text-800">Visiteurs Total</h5>
                            </div>
                        </div>
                        <div class="col-6 col-lg mb-5 py-2 my-2">
                            <div class="text-center"><img src="{{ asset('img/icons/states.png') }}" alt="..." />
                                <h1 class="text-primary mt-4">{{ $visitsCompleted->count() }}</h1>
                                <h5 class="text-800">Visites Totale</h5>
                            </div>
                        </div>
                        <div class="col-6 col-lg mb-5 py-2 my-2">
                            <div class="text-center"><img src="{{ asset('img/icons/clients.png') }}" alt="..." />
                                <h1 class="text-primary mt-4">{{ $visiteursSatisfied->count() }}</h1>
                                <h5 class="text-800">Visiteurs Satisfaits</h5>
                            </div>
                        </div>
                        {{-- <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="{{asset('img/icons/business.png')}}" alt="..." />
                <h1 class="text-primary mt-4">130M+</h1>
                <h5 class="text-800">Business hours</h5>
              </div>
            </div>
          </div> --}}
                    </div>
                    <!-- end of .container-->

            </section>
            <section class="py-xxl-10 pb-0" id="home">
                <div class="bg-holder bg-size"
                    style="background-image:url({{ asset('img/gallery/hero-header-bg.png') }});background-position:top center;background-size:cover;">
                </div>
                <!--/.bg-holder-->

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100"
                                src="{{ asset('img/illustrations/hero.png') }}" alt="hero-header" /></div>
                        <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-8">
                            <h1 class="fw-normal fs-6 fs-xxl-7">Nous sommes la meilleure
                                chambre de commerce pour les entreprises </h1>
                        </div>
                    </div>
                </div>
                <!-- ============================================-->
                <!-- <section> begin ============================-->

            </section>


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-7" id="services" container-xl="container-xl">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-5 text-center mb-3">
                            <h5 class="text-danger">Utilisateurs</h5>
                        </div>
                    </div>
                    <div class="row h-100 justify-content-center">
                        <div class="col-md-4 pt-4 px-md-2 px-lg-3">
                            <div class="card h-100 px-lg-5 card-span">
                                <div class="card-body d-flex flex-column justify-content-around">
                                    <div class="text-center pt-5"><img class="img-fluid"
                                            src="{{ asset('img/icons/services-1.png') }}" alt="..." />
                                        <h5 class="my-4">Espace Admin</h5>
                                    </div>
                                    <div class="text-center my-5">
                                        <div class="d-grid">
                                            <a href="{{ route('login') }}" class="btn btn-outline-danger"
                                                type="submit">Connexion </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pt-4 px-md-2 px-lg-3">
                            <div class="card h-100 px-lg-5 card-span">
                                <div class="card-body d-flex flex-column justify-content-around">
                                    <div class="text-center pt-5"><img class="img-fluid"
                                            src="{{ asset('img/icons/services-2.svg') }}" alt="..." />
                                        <h5 class="my-4">Espace Responsable</h5>
                                    </div>
                                    <div class="text-center my-5">
                                        <div class="d-grid">
                                            <a href="{{ route('login_respo') }}" class="btn btn-outline-danger"
                                                type="submit">Connexion</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pt-4 px-md-2 px-lg-3">
                            <div class="card h-100 px-lg-5 card-span">
                                <div class="card-body d-flex flex-column justify-content-around">
                                    <div class="text-center pt-5"><img class="img-fluid"
                                            src="{{ asset('img/icons/services-3.png') }}" alt="..." />
                                        <h5 class="my-4">Espace Accuile</h5>
                                    </div>
                                    <div class="text-center my-5">
                                        <div class="d-grid">
                                            <a href="{{ route('login') }}" class="btn btn-outline-danger"
                                                type="submit">Connexion</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>

            <section class="bg-900 pb-0 pt-5">

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none"
                                href="{{ route('home') }}"><img src="{{ asset('img/gallery/footer-logo.png') }}"
                                    height="51" alt="" /></a>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
                            <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Autres links </h5>
                            <ul class="list-unstyled mb-md-4 mb-lg-0">
                                <li class="lh-lg"><a class="text-500" target="on_blank"
                                        href="http://www.ccis-agadir.com/">CCIS</a></li>
                                <li class="lh-lg"><a class="text-500" target="on_blank"
                                        href="https://www.facebook.com/ccissm/?locale=fr_FR">Facebook</a></li>
                                <li class="lh-lg"><a class="text-500" target="on_blank"
                                        href="https://instagram.com/ccissoussmassa?igshid=YmMyMTA2M2Y=">Instagram</a></li>
                                <li class="lh-lg"><a class="text-500" target="on_blank"
                                        href="{{ route('about') }}">About Us</a></li>
                                <li class="lh-lg"><a class="text-500" target="on_blank"
                                        href="{{ route('home') }}">Home</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
                            <ul class="list-unstyled mb-md-4 mb-lg-0">

                            </ul>
                        </div>
                    </div>
                </div>

            </section>

            <section class="py-0 bg-1000">

                <div class="container">
                    <div class="row justify-content-md-between justify-content-evenly py-4">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                            <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; CCIS, 2023</p>
                        </div>
                        <div class="col-12 col-sm-8 col-md-6">
                            <p class="fs--1 my-2 text-center text-md-end text-200">Realise par :&nbsp;
                                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12"
                                    height="12" fill="#F95C19" viewBox="0 0 16 16">
                                    <path
                                        d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                                    </path>
                                </svg>&nbsp;&nbsp;<a class="fw-bold text-primary" href="https://www.ofppt.ma/"
                                    target="_blank">OFPPT devlopeurs </a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>







        </main>




        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="vendors/@popperjs/popper.min.js"></script>
        <script src="vendors/bootstrap/bootstrap.min.js"></script>
        <script src="vendors/is/is.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="vendors/fontawesome/all.min.js"></script>
        <script src="assets/js/theme.js"></script>

        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;800&amp;display=swap"
            rel="stylesheet">
    </body>
@endsection
