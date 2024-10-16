@extends('layouts.app')
@section('content')

<section class="page-header page-header-classic page-header-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 data-title-border>Contact</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-end">
                    <li><a href="/">Accueil</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-4 my-5">
    <div class="row align-items-center">
        <div class="col-lg-5 col-xl-4 offset-xl-1 mb-5 mb-lg-0">
            <div class="overflow-hidden">
                <h2 class="text-color-dark font-weight-bold line-height-3 text-5-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Abidjan, Yopougon en face de UNIWAX sur l'autoroute du nord</h2>
            </div>

            <ul class="list list-unstyled text-color-dark font-weight-bold text-4 py-2 my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                <li class="d-flex align-items-center mb-2">
                    <i class="icons icon-envelope text-color-dark me-2"></i>
                    Email: <a href="#" class="text-color-dark text-color-hover-primary text-decoration-none ms-1"><span class="">infos@steilautomobile.com

                    </span></a>
                </li>
                <li class="d-flex align-items-center mb-0">
                    <i class="icons icon-phone text-color-dark me-2"></i>
                    Téléphone: <a href="tel:0777424405" class="text-color-dark text-color-hover-primary text-decoration-none ms-1">+225 0777424405</a> <br>
                    <a href="tel:0707636245" class="text-color-dark text-color-hover-primary text-decoration-none ms-1">+225 0707636245</a>
                </li>
            </ul>
            <p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                Nous sommes là pour vous aider avec vos besoins de réparation et d'entretien automobile. Entrez, appelez-nous ou envoyez-nous un email. Nous vous répondrons dès que possible pendant les heures normales de bureau.            </p>
        </div>
        <div class="col-lg-6 col-xl-5 offset-lg-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250">
            <form class="contact-form custom-form-style-1" action="{{route('mail')}}" method="post">

                @csrf
                <div class="row">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>

                <div class="row row-gutter-sm">
                    <div class="form-group col mb-3">
                        <input type="text" value=""  maxlength="100" class="form-control" name="name" id="name" required placeholder="Entrer votre nom et prénoms">
                    </div>
                </div>
                <div class="row row-gutter-sm">
                    <div class="form-group col mb-3">
                        <input type="email" value=""   maxlength="100" class="form-control" name="email" id="email" required placeholder="Entrer votre adresse Email">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col mb-3">
                        <textarea maxlength="5000" rows="4" class="form-control" name="message" id="message" required placeholder="Saisisser votre message"></textarea>
                    </div>
                </div>
                <div class="row appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1500">
                    <div class="form-group col mb-0">
                        <button type="submit" class="btn btn-primary btn-modern font-weight-bold custom-btn-border-radius custom-btn-arrow-effect-1 text-3 px-5 py-3" data-loading-text="Loading...">
                            Envoyer
                            <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
<div class="position-relative appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="750">
    <div class="container-fluid">
        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d127109.37359526935!2d-3.998058399999977!3d5.391362400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sci!4v1687642056615!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>

@include('layouts.temoignage')

@endsection
