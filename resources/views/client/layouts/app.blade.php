<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <base href="/">
    <title>Trang Chủ</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="client/css/main.css" />
    @yield('styles')
    @livewireStyles
</head>

<body class="animsition">
    <div class="home">
        @include('client.layouts.navbar')
        @yield('content')
    </div>
    @include('client.layouts.footer')

    <script src="client/js/library/jquery.min.js"></script>
    <script src="client/js/library/bootstrap.min.js"></script>
    <script src="client/js/function-check-viewport.js"></script>
    <script src="client/js/library/slick.min.js"></script>
    <script src="client/js/library/select2.full.min.js"></script>
    <script src="client/js/library/imagesloaded.pkgd.min.js"></script>
    <script src="client/js/library/jquery.mmenu.all.min.js"></script>
    <script src="client/js/library/rellax.min.js"></script>
    <script src="client/js/library/isotope.pkgd.min.js"></script>
    <script src="client/js/library/bootstrap-notify.min.js"></script>
    <script src="client/js/library/bootstrap-slider.js"></script>
    <script src="client/js/library/in-view.min.js"></script>
    <script src="client/js/library/countUp.js"></script>
    <script src="client/js/library/animsition.min.js"></script>
    <link rel="stylesheet" type="text/css" href="client/revolution/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="client/revolution/css/layers.css" />
    <link rel="stylesheet" type="text/css" href="client/revolution/css/navigation.css" />
    <script src="client/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="client/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="client/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="client/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="client/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="client/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="client/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="client/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="client/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="client/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="client/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="client/js/global.js"></script>
    <script src="client/js/config-banner-home-1.js">


    </script>
    <script src="client/js/config-mm-menu.js"></script>
    <script src="client/js/config-set-bg-blog-thumb.js"></script>
    <script src="client/js/config-isotope-product-home-1.js">


    </script>
    <script src="client/js/config-carousel-thumbnail.js"></script>
    <script src="client/js/config-carousel-product-quickview.js"></script>



    @livewireScripts
</body>


</html>
