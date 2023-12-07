@extends('layouts.app')
@section('content')

<style>
    .custom-icon-style-1 {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 95px;
        height: 95px;
    }
    a:active {
        color: var(--primary-100);
    }
    a {
        color: var(--primary);
    }

    .ours_services i{
        font-size: 32px;
    }
    .thumb-info-wrapper:hover{
        border: 3px solid var(--primary) !important;
        transition: 0.3s all ease-in-out;

    }
    .products .product img{
        height: 200px;
        width: 100%;
    }
</style>

<!-- Carousel -->
<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['670px','670px','670px','550px','500px']" style="height: 670px;">
    <div class="owl-stage-outer">
        <div class="owl-stage">

            <!-- Carousel Slide 1 -->
            <div class="owl-item position-relative" style="background-image: url(img/slides/IMG-1.jpg); background-color: #2E3136; background-size: cover; background-position: center;">
                <div class="container position-relative z-index-1 h-100">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                        <h2 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">

                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                <img src="img/lazy.png" data-src="img/slides/slide-title-border.png" class="w-auto appear-animation lazyload" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
                            </span>
                            VENTE DE PIECES AUTOMOBILE, BUS, ENGIN
                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                <img src="img/lazy.png" data-src="img/slides/slide-title-border.png" class="w-auto appear-animation lazyload" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
                            </span>
                        </h2>


                        <p class="text-4 text-color-light font-weight-light opacity-7 mb-0"  data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">Explorez, découvrez plusieurs pièces automobile et d'engins dont vous avez besoins pour votre activitée.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Slide 2 -->
            <div class="owl-item position-relative overlay overlay-show overlay-op-8 lazyload" data-bg-src="img/slides/IMG-4.JPG " style="background-size: cover; background-position: center;">
                <div class="container position-relative z-index-2 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column align-items-center">

                                <h2 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                        <img src="img/lazy.png" data-src="img/slides/slide-title-border.png" class="w-auto appear-animation lazyload" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
                                    </span>
                                    GARAGE
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                        <img src="img/lazy.png" data-src="img/slides/slide-title-border.png" class="w-auto appear-animation lazyload" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
                                    </span>

                                </h2>

                                {{-- <p class="text-4 text-color-light font-weight-light opacity-7 mb-0"  data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">Explorez, découvrez plusieurs pièces automobile et d'engins dont vous avez besoins pour votre activitée.</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Slide 3 -->
            <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8 lazyload" data-bg-src="img/slides/slide-bg-6.jpg" style="background-size: cover; background-position: center;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h2 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                        <img src="img/lazy.png" data-src="img/slides/slide-title-border.png" class="w-auto appear-animation lazyload" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
                                    </span>
                                    VENTE ET LOCATION D'ENGIN
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                        <img src="img/lazy.png" data-src="img/slides/slide-title-border.png" class="w-auto appear-animation lazyload" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h2>
                                {{-- <p class="text-4 text-color-light font-weight-light opacity-7 mb-0"  data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">Explorez, découvrez plusieurs pièces automobile et d'engins dont vous avez besoins pour votre activitée.</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="owl-nav">
        <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
        <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
    </div>
    <div class="owl-dots mb-5">
        <button role="button" class="owl-dot active"><span></span></button>
        <button role="button" class="owl-dot"><span></span></button>
        <button role="button" class="owl-dot"><span></span></button>
    </div>
</div>

<!-- Phrase Intro -->
<div class="home-intro bg-primary" id="home-intro">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-8">
                <p>
                    Propulsez vos projets avec notre <span class="highlighted-word">expertise</span> en vente et location d'engins, fourniture de pièces auto de qualité, et services de garage fiables.
                </p>
            </div>
            <div class="col-lg-4">
                <div class="get-started text-start text-lg-end">
                    <a href="/pieces" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Voir nos articles</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- About -->
<div class="container my-5 pt-md-4 pt-xl-0 mt-5 mb-5">

    <div class="row align-items-center justify-content-center pb-4 mb-5">
        <div class="col-lg-6 pb-sm-4 pb-lg-0 mb-5 mb-lg-0">
            <div class="overflow-hidden">
                <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation mb-5" data-appear-animation="maskUp" data-appear-animation-delay="300">A PROPOS DE STEIL AUTOMOBILE</h2>
            </div>
            <div class="custom-divider divider divider-primary divider-small my-3 mb-5">
                <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700">
            </div>
            <p class="font-weight-light text-3-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">
                Nous sommes spécialisés dans la vente de pièces automobiles de haute qualité. Nous proposons une large gamme de pièces détachées provenant de marques réputées, couvrant différents modèles et types de véhicules.

                Mais notre expertise ne s'arrête pas là. En plus de la vente de pièces auto, nous offrons également des services complémentaires tels que la location et la réparation d'engins.

                Chez <strong>STEIL AUTOMOBILE</strong>, nous mettons un point d'honneur à fournir des pièces et un service client de qualité. Notre équipe dévouée est là pour vous offrir des conseils d'experts et des solutions personnalisées, en travaillant en étroite collaboration avec vous pour répondre à vos besoins spécifiques.
            </p>
            <div class="d-flex align-items-start align-items-sm-center flex-column flex-sm-row">
                <a href="#" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 px-5 btn-py-3 me-sm-2 mb-3 mb-sm-0 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="950">PLUS D'INFOS</a>
                <div class="feature-box align-items-center border border-top-0 border-end-0 border-bottom-0 custom-remove-mobile-xs-border-left ms-sm-4 ps-sm-4 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1200">
                    <div class="feature-box-icon bg-transparent">
                        <i class="icons icon-phone text-6 text-color-dark"></i>
                    </div>
                    <div class="feature-box-info line-height-2 ps-1">
                        <span class="d-block text-1 font-weight-semibold text-color-default">CONTACTS</span>
                        <strong class="text-4-5">
                            <a href="tel:0777424405" class="text-color-dark text-color-hover-primary text-decoration-none">0777424405</a> <br>
                            <a href="tel:0707636245" class="text-color-dark text-color-hover-primary text-decoration-none">0707636245</a>
                        </strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-10 col-md-9 col-lg-6 ps-lg-5 pe-5 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1450" data-plugin-options="{'accY': -200}">
            <div class="position-relative">
                <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                    <img src="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/generic-1.png" class="img-fluid" alt="" />
                </div>
                <div class="position-absolute transform3dxy-n50" style="top: 25%; left: 7%;">
                    <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.5, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': false}">
                        <img src="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/generic-1-1.png" class="appear-animation" alt="" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1700" />
                    </div>
                </div>
                <div class="position-absolute transform3dxy-n50 ms-5 pb-5 ms-xl-0" style="top: 32%; left: 85%;">
                    <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 1, 'transition': true, 'transitionDuration': 1500, 'isInsideSVG': false}">
                        <img src="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/generic-1-2.png" class="appear-animation" alt="" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1900" />
                    </div>
                </div>
                <div class="position-absolute transform3dxy-n50" style="top: 90%; left: 19%;">
                    <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 2, 'transition': true, 'transitionDuration': 2500, 'isInsideSVG': false}">
                        <img src="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/generic-1-3.png" class="appear-animation" alt="" data-appear-animation="fadeInDownShorterPlus" data-appear-animation-delay="2100" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container ours_services mb-5">
    <!-- Ours service -->
    <div class="row justify-content-center pb-3 mb-4">
        <div class="col-lg-8 text-center">
            <div class="overflow-hidden">
                <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Nos Services</h2>
            </div>
            <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600">
            </div>
        </div>
    </div>
    <div class="row pb-2">
        <div class="col-lg-4 text-center px-lg-5 mb-5 mb-lg-0">
            <a href="#" class="text-decoration-none">
                <div class="custom-icon-box-style-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250" data-plugin-options="{'accY': -200}">
                    <div class="custom-icon-style-1 mb-4">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        {{-- <img width="50" src="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/icons/checklist.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" /> --}}
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-3 px-xl-5 my-2">Vente de pièces automobile, engin et bus</h3>
                    <p>Boostez votre productivité avec notre service de vente et location d'engins, offrant des solutions flexibles pour répondre à tous vos besoins professionnel</p>
                </div>
            </a>
        </div>
        <div class="col-lg-4 text-center px-lg-5 mb-5 mb-lg-0">
            <a href="#" class="text-decoration-none">
                <div class="custom-icon-box-style-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="500" data-plugin-options="{'accY': -200}">
                    <div class="custom-icon-style-1 mb-4">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        {{-- <img width="50" src="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/icons/wheel-disk.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" /> --}}
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-xl-5 my-2 mx-4">Garage</h3> <br> <br>
                    <p>Optimisez la performance de votre véhicule avec notre service de garage expert, où l'efficacité rencontre la qualité</p>
                </div>
            </a>
        </div>
        <div class="col-lg-4 text-center px-lg-5">
            <a href="#" class="text-decoration-none">
                <div class="custom-icon-box-style-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="750" data-plugin-options="{'accY': -200}">
                    <div class="custom-icon-style-1 mb-4">
                        <i class="fa-solid fa-cart-shopping"></i>
                        {{-- <img width="50" src="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/icons/car-safe.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" /> --}}
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-4 px-xl-5 my-2">Vente et location d'engin</h3> <br>
                    <p>Optimisez vos projets avec notre service de vente et location d'engins, offrant des solutions adaptées pour propulser votre réussite</p>
                </div>
            </a>
        </div>
    </div>
</div>


<div class="container">
    <div class="row text-center pt-3">
        <div class="col-md-10 mx-md-auto">
            <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                <span>Chez <strong>Steil Automobile</strong>, notre priorité est de répondre à vos attentes en matière de</span>
                <span class="word-rotator-words bg-dark text-center m-auto">

                    <b class="is-visible m-auto text-center">pièces automobile</b>
                    <b class="m-auto text-center">engin</b>
                    <b class="m-auto text-center">bus</b>
                    <b class="m-auto text-center">garage</b>

                </span>

            </h1>

        </div>
    </div>
</div>


<!-- 04 images -->
<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
    <div class="home-concept mt-5">
        <div class="container">

            <div class="row text-center">
                <span class="sun"></span>
                <span class="cloud"></span>
                <div class="col-lg-2 ms-lg-auto">
                    <div class="process-image">
                        <img class="img-fluid w-100 h-100" src="{{asset('img/engin/5.jpeg')}}" alt="" />
                        <strong>Engin</strong>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="process-image process-image-on-middle">
                        <img class="img-fluid w-100 h-100" src="{{asset('img/04_images/garage.jpg')}}" alt="" />
                        <strong>Garage</strong>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="process-image">
                        <img class="img-fluid w-100 h-100" src="{{asset('img/bus/6.jpeg')}}" alt="" />
                        <strong>Bus</strong>
                    </div>
                </div>
                <div class="col-lg-4 ms-lg-auto">
                    <div class="project-image">
                        <div id="fcSlideshow" class="fc-slideshow">
                            <ul class="fc-slides">
                                <li><a aria-label=""><img class="img-fluid w-100" src="{{asset('img/04_images/piece_1.jpeg')}}" alt="" /></a></li>
                                <li><a aria-label=""><img class="img-fluid w-100" src="{{asset('img/04_images/piece_2.jpg')}}" alt="" /></a></li>
                                <li><a aria-label=""><img class="img-fluid w-100" src="{{asset('img/04_images/piece_3.jpg')}}" alt="" /></a></li>
                            </ul>
                        </div>
                        <strong class="our-work">Pièces Automobile</strong>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Section Garage -->
<div class="container py-5 my-5">
    <div class="row justify-content-center">
        <div class="col-lg-9 col-xl-8 text-center">
            <div class="overflow-hidden">
                <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Service de Garage</h2>
            </div>
            <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600">
            </div>
        </div>
    </div>
    <div class="row row-gutter-sm mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
        <div class="col-sm-6 col-lg-3 text-center mb-4 mb-lg-0">
            <a href="#" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="{{asset('img/garage/Entretien.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Entretien</h3>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 text-center mb-4 mb-lg-0">
            <a href="#" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="{{asset('img/garage/Reparation.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Réparation de moteur
                    </h3>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 text-center mb-4 mb-sm-0">
            <a href="#" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="{{asset('img/garage/transmission.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Réparation de la transmission</h3>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 text-center">
            <a href="#" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="{{asset('img/garage/reparation_vehicule.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Réparation du système électrique
                    </h3>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="/garage" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="850">VOIR TOUT LES SERVICES</a>
        </div>
    </div>
</div>


<section class="section section-height-3 bg-primary border-0 m-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-7 text-center text-lg-start mb-4 mb-lg-0">
                <h2 class="text-color-light font-weight-medium text-3-5 line-height-2 line-height-sm-1 ls-0 mb-2 mb-lg-2">VOUS CHERCHEZ DES SERVICES HONNÊTES ET FIABLES ?</h2>
            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                    <div class="feature-box align-items-center mb-3 mb-lg-0">
                        <div class="feature-box-icon bg-transparent">
                            <i class="icons icon-phone text-6 text-color-light"></i>
                        </div>

                        <div class="feature-box-info line-height-2 ps-1">
                            <span class="d-block text-1 font-weight-semibold text-color-light mb-1 text-center">APPELER NOUS AU</span>
                            <strong class="text-4-5">
                                <a href="tel:+2250777424405" class="text-color-light text-decoration-none">+225 0777424405</a> <br>
                                <a href="tel:+2250707636245" class="text-color-light text-decoration-none">+225 0707636245</a>
                            </strong>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-md-3 px-0">
                <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/generic/generic-square-1.jpg">
                    <img class="img-fluid rounded-0" src="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/generic/generic-square-1.jpg" alt="" />
                </a>
            </div>
            <div class="col-6 col-md-3 px-0">
                <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/generic/generic-square-2.jpg">
                    <img class="img-fluid rounded-0" src="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/generic/generic-square-2.jpg" alt="" />
                </a>
            </div>
            <div class="col-6 col-md-3 px-0">
                <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/generic/generic-square-3.jpg">
                    <img class="img-fluid rounded-0" src="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/generic/generic-square-3.jpg" alt="" />
                </a>
            </div>
            <div class="col-6 col-md-3 px-0">
                <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/generic/generic-square-4.jpg">
                    <img class="img-fluid rounded-0" src="https://www.okler.net/previews/porto/10.0.0/img/demos/auto-services/generic/generic-square-4.jpg" alt="" />
                </a>
            </div>
        </div>
    </div>
</div>


<!-- Pieces disponible -->
<section class="shop section section-height-4 border-0 m-0 lightbox">
    <div class="container">
        <div class="row justify-content-center pb-3 mb-4">
            <div class="col-lg-8 text-center">
                <div class="overflow-hidden">
                    <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Pièces Disponibles</h2>
                </div>
                <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                    <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600">
                </div>
            </div>
        </div>
        <div class="products row row-gutter-sm mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
            @foreach ($pieces_recentes as $pieces_recente)
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-3">
                <div class="product mb-0">
                    <div class="product-thumb-info border-0 mb-3">
                        <a href="#" class="quick-view text-uppercase font-weight-semibold text-2">
                            APPELER
                        </a>
                        <a href="#">
                            <div class="product-thumb-info-image bg-light">
                                <img alt="" class="img-fluid" src="/{{ $pieces_recente->image }}">
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">{{$pieces_recente->categorie_pieces}}</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary">{{$pieces_recente->nom}}</a></h3>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col text-center">

                <a href="/pieces" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">VOIR TOUTES LES PIECES</a>
            </div>
        </div>
    </div>
</section>


    @include('layouts.page_engin')
    @include('layouts.page_bus')





{{-- @include('layouts.marque') --}}


@include('layouts.temoignage')
@endsection
