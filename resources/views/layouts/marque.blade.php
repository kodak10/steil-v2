<!-- Marques -->
<section class="section bg-transparent position-relative border-0 z-index-1 m-0 p-0">
    <div class="container py-4">

        <div class="row justify-content-center pb-3 mb-4">
            <div class="col-lg-8 text-center">
                <div class="overflow-hidden">
                    <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Les Marques Automobile</h2>
                </div>
                <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                    <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600">
                </div>
            </div>
        </div>

        <div class="row align-items-center text-center py-5">
            @foreach ($marques as $marque )
                <div class="col-sm-2 col-lg-2 mb-5 mb-lg-0">
                    <img src="{{$marque->chemin) }}" alt class="img-fluid" style="max-width: 90px;" />
                </div>
            @endforeach

        </div>



    </div>
    {{-- <svg class="custom-svg-3" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 193 495">
        <path fill="#1C5FA8" d="M193,25.73L18.95,247.93c-13.62,17.39-10.57,42.54,6.82,56.16L193,435.09V25.73z"/>
        <path fill="none" stroke="#FFF" stroke-width="1.5" stroke-miterlimit="10" d="M196,53.54L22.68,297.08c-12.81,18-8.6,42.98,9.4,55.79L196,469.53V53.54z"/>
    </svg> --}}
</section>
