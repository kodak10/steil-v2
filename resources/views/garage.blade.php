@extends('layouts.app')
@section('content')

<style>
    .thumb-info-wrapper:hover{
        border: 3px solid var(--primary) !important;
        transition: 0.3s all ease-in-out;

    }
</style>
<section class="page-header page-header-classic page-header-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 data-title-border>Garage</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-end">
                    <li><a href="/">Accueil</a></li>
                    <li class="active">Garage</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-4 my-5">
    <div class="row mb-4 pb-2">
        <div class="col">
            <p class="text-4 font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Obtenez des services automobiles fiables et abordables pour votre installation avec une satisfaction garantie à 100% </p>
        </div>
    </div>
    <div class="row row-gutter-sm mb-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="950">

        <div class="col-sm-6 col-lg-4 text-center mb-4 mb-lg-0 mb-5">
            <a href="#" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="{{asset('img/garage/img_6.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Mécanique Générale</h3>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-lg-4 text-center mb-5">
            <a href="#" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="{{asset('img/garage/img_1.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Vidange</h3>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4 text-center mb-5">
            <a href="#" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="{{asset('img/garage/img_2.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Tolleterie</h3>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4 text-center mb-5">
            <a href="#" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="{{asset('img/garage/img_3.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Electricité</h3>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4 text-center mb-5">
            <a href="#" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="{{asset('img/garage/img_4.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Peinture</h3>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-lg-4 text-center mb-lg-0 mb-5">
            <a href="#" class="text-decoration-none">
                <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                    <div class="thumb-info-wrapper">
                        <img src="{{asset('img/garage/img_5.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Maintenance</h3>
                </div>
            </a>
        </div>
        

    </div>
</div>

{{-- @include('layouts.marque') --}}

@include('layouts.temoignage')
@endsection
