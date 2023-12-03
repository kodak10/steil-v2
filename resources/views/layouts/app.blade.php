<!DOCTYPE html>
<html lang="en" data-style-switcher-options="{'showBordersStyle': true, 'showLayoutStyle': true, 'showBackgroundColor': true}">

    <head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Steil Automobile</title>

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Steil Automobile - Vente de pieces auto et location et vente de bus et engin">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


        <style>
            .bus_engin .swiper-pagination {
      position: absolute;
      bottom: 10px;
      text-align: center;
      width: 100%;
    }
    .bus_engin .swiper-pagination-bullet {
      width: 8px;
      height: 8px;
      display: inline-block;
      background-color: #999;
      border-radius: 50%;
      margin: 0 5px;
    }
    .bus_engin .swiper-pagination-bullet-active {
      background-color: #3498db;
    }
        </style>
	</head>

	<body data-plugin-page-transition>
		<div class="body">

            @include('layouts.header')
			<!-- Header -->

			<div role="main" class="main">
                @yield('content')
			</div>

            <div role="main" class="main shop pt-4">
                @yield('pieces_auto')
			</div>

			@include('layouts.footer')

		</div>



		<!-- Vendor -->
		<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/plugins/js/plugins.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Circle Flip Slideshow Script -->
		<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<!-- Current Page Views -->
		<script src="js/views/view.home.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>


        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script>
            // Premier diaporama
            var swiper1 = new Swiper('#swiper1', {
              slidesPerView: 6,
              spaceBetween: 10,
              navigation: {
                nextEl: '#swiper1 .swiper-button-next',
                prevEl: '#swiper1 .swiper-button-prev',
              },
              pagination: {
                el: '#swiper1 .swiper-pagination',
                clickable: true,
              },
              breakpoints: {
                1024: {
                  slidesPerView: 4,
                  spaceBetween: 10,
                },
                999: {
                  slidesPerView: 1,
                  spaceBetween: 10,
                },
              }
            });

            // Deuxième diaporama
            var swiper2 = new Swiper('#swiper2', {
              slidesPerView: 3,
              spaceBetween: 20,
              navigation: {
                nextEl: '#swiper2 .swiper-button-next',
                prevEl: '#swiper2 .swiper-button-prev',
              },
              pagination: {
                el: '#swiper2 .swiper-pagination',
                clickable: true,
              },
              breakpoints: {
                1024: {
                  slidesPerView: 4,
                  spaceBetween: 10,
                },
                999: {
                  slidesPerView: 1,
                  spaceBetween: 10,
                },
              }
            });
          </script>

        {{-- <script>
            var swiper = new Swiper('.swiper-container', {
              slidesPerView: 6, // Nombre d'éléments à afficher sur écran d'ordinateur
              spaceBetween: 10,
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
              breakpoints: {
                1024: {
                  slidesPerView: 4, // Nombre d'éléments à afficher sur tablette
                  spaceBetween: 10,
                },
                768: {
                  slidesPerView: 1, // Nombre d'éléments à afficher sur mobile
                  spaceBetween: 10,
                },
              }
            });
          </script> --}}

	</body>

</html>
