<!DOCTYPE html>
<html lang="en" data-style-switcher-options="{'showBordersStyle': true, 'showLayoutStyle': true, 'showBackgroundColor': true}">

    <head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>SPIRIT AUTOMOBILE</title>

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="SPIRIT AUTOMOBILE - Vente de pieces auto et location et vente de bus et engin">
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

		<style>
			@media (max-width:990px){
				#mainNav li {
					line-height: 40px !important;
		 		}

				 
    @media (max-width: 991px){
		#header .header-logo img{
            height: 50px !important;
        }
    }
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


        

	</body>

</html>
