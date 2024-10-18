<style>
    .button-head {
        border: 2px solid var(--primary-100);
        color: #000000;
    }
    .engin .products .product img{
        height: 100%;
        width: 100%;
    }
    .marques {
    background-color: var(--primary) !important;
    width: 100vw !important; /* Prend 100% de la largeur de l'écran */
    margin-left: -15px; /* Enlève le padding par défaut de la grille */
    margin-right: -15px; /* Enlève le padding par défaut de la grille */
}
</style>

<section class="section engin border-0 m-0">
    <div class="container-fluid pb-3 my-5">
        <div class="row justify-content-center pb-3 mb-4">
            <div class="col text-center">
                <h2 class="font-weight-bold text-color-dark line-height-1 mb-0">
                    Les Engins Automobiles</h2>
                <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                    <hr class="my-0">
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <div class="owl-carousel owl-theme">
                    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=1" data-src-retina="https://placehold.it/350x250&text=1-retina" alt="">
                    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=2" data-src-retina="https://placehold.it/350x250&text=2-retina" alt="">
                    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=3" alt="">
                    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=4" alt="">
                    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=5" alt="">
                    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=6" alt="">
                    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=7" alt="">
                    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=8" alt="">
                    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=9" alt="">
                    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=10" alt="">
                    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=11" alt="">
                </div>
            </div>


           
            
        </div>
    </div>
</section>

<script>
    $('.owl-carousel').owlCarousel({
    items:4,
    lazyLoad:true,
    loop:true,
    margin:10
});
</script>
