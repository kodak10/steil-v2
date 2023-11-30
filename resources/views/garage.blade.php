@extends('layouts.app')
@section('content')

<section class="page-header page-header-classic page-header-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 data-title-border>PIECES AUTOMOBILE / BUS / ENGIN</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-end">
                    <li><a href="#">Accueil</a></li>
                    <li class="active">Pieces Automobile / Bus / Engin</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-4 my-5">
    <div class="row mb-4 pb-2">
        <div class="col">
            <p class="text-4 font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Get reliable & affordable auto services for your facility with a 100% satisfaction guaranteed! </p>
            <p class="pb-1 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus. Praesent mauris eros, tincidunt id enim sodales, rhoncus malesuada ligula. </p>
            <p class="mb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Vivamus quis purus nec sapien pellentesque imperdiet. Nullam porttitor augue mi, sit amet luctus est tincidunt sed. Donec tempus bibendum ex, nec vehicula elit. </p>
        </div>
    </div>
    <div class="row row-gutter-sm mb-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="950">
        <div class="col-sm-6 col-lg-3 text-center mb-4">
            <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="img/demos/auto-services/services/service-small-1.jpg" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Entretien</h3>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 text-center mb-4">
            <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="img/demos/auto-services/services/service-small-2.jpg" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Réparation de moteur</h3>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 text-center mb-4">
            <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="img/demos/auto-services/services/service-small-3.jpg" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Réparation de la transmission</h3>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 text-center">
            <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="img/demos/auto-services/services/service-small-4.jpg" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Réparation du système électrique</h3>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-lg-3 text-center mb-lg-0">
            <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="img/demos/auto-services/services/service-small-4.jpg" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Réparation de la climatisation et du système de refroidissement</h3>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 text-center mb-4 mb-lg-0">
            <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="img/demos/auto-services/services/service-small-3.jpg" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Réparation de la carrosserie</h3>
                </div>
            </a>
        </div>
       
    </div>
</div>

@include('layouts.temoignage')
@endsection