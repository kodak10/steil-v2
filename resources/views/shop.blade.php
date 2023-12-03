@extends('layouts.app')
@section('pieces_auto')

    <section class="page-header page-header-classic page-header-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 data-title-border>PIECES AUTOMOBILE / BUS / ENGIN</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end">
                        <li><a href="/">Accueil</a></li>
                        <li class="active">Pieces Automobile / Bus / Engin</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <img src="{{asset('img/Banner_pieces_auto.png')}}" class="img-fluid w-100" alt="">
        </div>
    </section>

    <div class="container">
        <form action="{{ route('recherche') }}" method="GET">
            <div class="row align-items-center justify-content-between mb-4 mt-3">
                <div class="col-md-4 mb-3 mb-md-0 order-md-3">
                    <div class="d-flex align-items-center">
                        <select class="form-select form-control border px-3 py-2 h-auto" name="category">
                            <option value="" selected="selected">Toutes les pièces</option>
                            <option value="boites" >Boites</option>
                            <option value="moteurs">Moteurs</option>
                            <option value="pieces">Pièces</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0 order-md-2">
                    <button type="submit" class="form-control w-100" style="border: 1px solid #000000; font-weight:400">Rechercher</button>

                </div>

                <div class="col-md-4 order-md-1 W-100">
                    <form method="get" class="w-100">
                        <input class="p-2 form-control" type="text" name="keyword" placeholder="Entrer le nom de la pièce ici">
                    </form>
                </div>
            </div>
        </form>
        <div class="masonry-loader masonry-loader-showing">
            <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">

                @foreach ($pieces as $piece )
                    <div class="col-12 col-sm-6 col-lg-3 mb-3">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <a href="#" class="quick-view text-uppercase font-weight-semibold text-2">
                                    APPELER
                                </a>
                                <a href="#">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="/{{ $piece->image }}">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">{{$piece->categorie_pieces}}</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary">{{$piece->nom}}</a></h3>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach




            </div>
            <div class="row mt-4">
                <div class="col">
                    <ul class="pagination float-end">
                        <li class="page-item">
                            {{ $pieces->links() }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <section class="section section-height-4 border-0 m-0">
        <div class="container-fluid">
            <div class="row justify-content-center pb-3 mb-4">
                <div class="col-lg-8 text-center">
                    <div class="overflow-hidden">
                        <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Bus</h2>
                    </div>
                    <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                        <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600">
                    </div>
                </div>
            </div>
            <div class="row">
                @include('layouts.page_bus')
            </div>
        </div>
    </section>
    
    <section class="section section-height-4 border-0 m-0">
        <div class="container-fluid">
            <div class="row justify-content-center pb-3 mb-4">
                <div class="col-lg-8 text-center">
                    <div class="overflow-hidden">
                        <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Engins</h2>
                    </div>
                    <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                        <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600">
                    </div>
                </div>
            </div>
            <div class="row">
                @include('layouts.page_engin')
            </div>
        </div>
    </section>

    @include('layouts.marque')


@include('layouts.temoignage')
@endsection
