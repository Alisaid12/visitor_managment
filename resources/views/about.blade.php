@extends('dashboard')

@section('content')

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>About us</title>
        <link rel="stylesheet" href="{% static 'about.css' %}" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="icon" href="{% static 'PICO-LOGO-SHORT.png' %}" type="image/gif">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    </head>

    <body>
        <div class="company">
            <div class="img">
                <img src="{{ asset('img/about-team.jpg') }}" alt="" />
            </div>
            <div class="company-info">
                <span>CCIS <span class="our">SOUSS MASSA</span></span>
                <p>
                    Les chambres de commerce d'industrie et de Services (CCIS) sont,
                    au Maroc comme dans d'autres pays, des organismes chargés de représenter les intérêts des entreprises
                    commerciales, industrielles et de services dans leurs circonscription et de leur apporter certains
                    services.
                    Ce sont des établissements publics, leur organisation actuelle a été fixée par le Dahir portant loi
                    n° 1-77-42 du 7 Safar 1397 (28 janvier 1977) formant statut des Chambres de commerce d'industrie
                    et de services, comme il a été promulgué.
                </p>
            </div>
        </div>
        <div class="team"><span>NOTRE ÉQUIPE</span></div>
        <div class="container">
            @foreach ($teamMembers as $teamMember)
                <div class="card">
                    <div class="card-image loading"><img src="{{ asset('imgs/' . $teamMember->profile_image) }}"
                            alt="" /></div>
                    <div class="card-info">
                        <h3 class="card-title loading"><span>Mr (s) <span class="yellow-surname">{{ $teamMember->name }}
                                </span></span>
                        </h3>
                        <p class="card-description loading">
                            <span class="personal-info">
                                <span class="info">{{ $teamMember->type }}</span> <br>
                                <u> <b>Departement:</b></u> {{ $teamMember->departement }} <u><b>Service:</b></u>
                                {{ $teamMember->service }}<br>
                                Email: <a href="mailto:'{{ $teamMember->email }}'">{{ $teamMember->email }}</a>
                            </span>
                        </p>

                    </div>
                </div>
            @endforeach


            {{-- <div class="card">
                    <div class="card-info">
                        <img class="img-fluid" src="{{ asset('imgs/' . $teamMember->profile_image) }}" alt="..." />
                        <h4 class="card-title loading"><span class="info">{{ $teamMember->name }} </span></h4>
                        <p class="card-description loading">
                            <span class="personal-info">
                                <h4>Type: <span class="info">{{ $teamMember->type }}</span></h4> <br>
                                <h4>Departement: <span class="info">{{ $teamMember->departement }}</span> </h4> <br>
                                <h4>Service: <span class="info">{{ $teamMember->service }}</span> </h4><br>
                                <h4> Email: <a href="mailto:'{{ $teamMember->email }}">{{ $teamMember->email }}</a></h4>
                            </span>
                        </p> --}}
            {{-- <div class="card-mediaIcons">
            <a href="#" class="loading" target="on_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/yashfalke77/" class="loading" target="on_blank"><i class="fab fa-instagram"></i></a>
          </div> --}}
            {{-- </div>
                </div> --}}
        </div>


        <footer>
            <div class="content">
                <div class="top">
                    <div class="logo-details">
                        <span class="logo_name">CCIS</span>
                    </div>
                    <div class="media-icons">
                        <a target="on_blank" href="https://www.facebook.com/ccissm/?locale=fr_FR"><i
                                class="fab fa-facebook"></i></a>
                        <a target="on_blank" href="https://instagram.com/ccissoussmassa?igshid=YmMyMTA2M2Y="><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="link-boxes">
                    <ul class="box">
                        <li class="link_name">Links</li>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a target="on_blank" href="http://www.ccis-agadir.com/">Site Web</a></li>

                    </ul>
                    <ul class="box">
                        <li class="link_name">Contact</li>
                        <li><a target="on_blank" href="tel:+212 680513957">+212 680513957</a></li>
                        <li><a target="on_blank" href="mailto:'ccisa@ccis-agadir.com'">ccisa@ccis-agadir.com</a></li>
                    </ul>
                    <ul class="box">
                        {{-- <li class="link_name">Recommended</li>
          <li><a>Maroc</li>
          <li><a>Art and Culture</a></li>
          <li><a>People</a></li>
          <li><a>Travel</a></li>

        </ul>
        <ul class="box">
          <li class="link_name">Legal Info</li>
          <li><a>Licence</a></li>
          <li><a>Terms and Conditions</a></li>
          <li><a>Privacy Policies</a></li>

        </ul> --}}

                </div>
            </div>

            <div class="bottom-details">
                <div class="bottom_text">
                    <span class="copyright_text">Copyright © 2023 <a target="on_blank"
                            href="http://www.ccis-agadir.com/">CCIS.</a></span>
                    <div class="col-12 col-sm-8 col-md-6">
                        <p class="fs--1 my-2 text-center text-md-end text-200 text-light">Realise par : &nbsp;
                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12"
                                height="12" fill="#F95C19" viewBox="0 0 16 16">
                                <path
                                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                                </path>
                            </svg>&nbsp;&nbsp;<a class="fw-bold text-primary" href="https://www.ofppt.ma/"
                                target="_blank">OFPPT devlopers </a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>


        <script src="{{ asset('js/app.js') }}"></script>

        </html>
    @endsection
