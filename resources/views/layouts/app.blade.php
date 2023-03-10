<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


        @vite(['resources/css/app.css', 'resources/js/app.js'])
        

        <!-- Inclure les styles CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        <!-- Inclure les scripts JavaScript -->
        <script src="{{ asset('js/script.js') }}" defer></script>
        
    </head>
    <body>

        <!-- Contenu du header pour l'interface d'administration va ici -->
        <!-- ======= Header ======= -->
        <section id="topbar" class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center">
            <div class="contact-info d-flex align-items-right">
                <span>Découvrez nos <strong>OFFRES PROMO</strong> du moment !&nbsp;&nbsp;&nbsp;</span>
            </div>
            <div class="social-links d-none d-md-flex align-items-left">
                <span><strong>Cap’Inta Fidelity </strong> & <strong>Filtre AR</strong></span>
            </div>
            </div>
        </section><!-- End Top Bar -->

        <header id="header" class="container header d-flex align-items-center">

            <div id="menu-principal" class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('/images/logo.png') }}" alt="">
            </a>

            <img class="trait-image mobile-only align-items-center justify-content-between" src="{{ asset('/images/trait.png') }}" alt="">

            <div class="blog-menu-mobile mobile-only align-items-center justify-content-between">
                <ul>
                    <li><a href="#">Le Blog</a></li>
                </ul>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#">Notre agence</a></li>
                    <li class="dropdown"><a href="#"><span>Nos dispositifs</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">La Capsule</a></li>
                            <li><a href="#">Le miroir</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>1 miroir 1000 utilisations</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">7 facettes</a></li>
                            <li><a href="#">Essayage virtuel</a></li>
                            <li><a href="#">Etagère virtuelle</a></li>
                            <li><a href="#">Catalogue interactif</a></li>
                            <li><a href="#">Jeux interactifs</a></li>
                            <li><a href="#">FILTRE & Photo FUN</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Tarifs</a></li>
                    <li><a href="#">Info réservation</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->


            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            </div>
        </header><!-- End Header -->
        <!-- End Header -->

        <!-- Définir la section pour le contenu principal de la page -->
        <div class="container">
            @yield('content')
        </div>

        <footer>
            <div class="footer-widget justify-content-around pt-5 pb-0 ">
                <hr class="mx-10 px-10">
                <div class="container">
                    <div class="col-12">
                        <div class="row justify-content-between"> 
                            <div class="col-md-3 col-12 font-italic">
                                <h5>
                                    <span> 
                                        <img class="footer-logo" src="{{ asset('/images/logo.png') }}" alt="">
                                    </span>
                                </h5>
                                <div class="social-links footer d-md-flex align-items-center mt-5">
                                    <a href="#" class="linkedin"><img class="icon-in" src="{{ asset('/images/in.png') }}" alt=""></a>
                                    <a href="#" class="instagram"><img class="icon-insta" src="{{ asset('/images/insta.png') }}" alt=""></a>
                                    <a href="#" class="youtube"><img class="icon-youtube" src="{{ asset('/images/youtube.png') }}" alt=""></a>
                                 </div>
                            </div>
                            <div class="col-md-3 col-12 mt-5 mb-5">
                                <h6 class="mb-5"><b>La newsletter Capsul Events</b></h6>
                                <div class="input-group-lg newsletter-footer">
                                    <input type="text" class="form-control w-100 mt-4" placeholder="Votre adresse mail" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append mt-4">
                                        <button class="btn btn-success w-100 pt-2 pb-2" type="button" id="button-addon1">S'inscrire</button>
                                    </div>
                                </div>     
                            </div>
                            <div class="col-md-3 col-12 mt-5 mb-5">
                                <h6 class="mb-5"><b>S'inscrire à une journée démo</b></h6>
                                <div class="input-group-lg newsletter-footer">
                                    <input type="text" class="form-control w-100 mt-4" placeholder="Votre adresse mail" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append mt-4">
                                        <button class="btn btn-success w-100 pt-2 pb-2" type="button" id="button-addon2">Lancez-vous !</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-auto col-md-3 col-12 mt-5 mb-5 contact-footer">
                                <h6 class="mb-5"><b>Contactez-nous</b></h6>
                                <p><img class="icon-in" src="{{ asset('/images/phone.png') }}" alt=""><a href="tel:+33 06 XX XX XX XX">+33 06 XX XX XX XX</a></p>
                                <p><img class="icon-in" src="{{ asset('/images/calendar.png') }}" alt=""><span><a href="#">Réserver un Meeting<br>avec un conseiller</a></span></p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div class="text-center p-3 copyright">
                <div class="copyright-text">
                    Copyright © 2023. Tous droits réservés Capsul events
                </div>
            </div>
            <!-- Copyright -->       
        </footer>
    </body>
</html>