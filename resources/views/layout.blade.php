<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('title') }}</title>
    <!--== bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!--== animate -->
    <link href="/css/animate.css" rel="stylesheet" type="text/css" />

    <!--== fontawesome -->
    <link href="/css/fontawesome-all.css" rel="stylesheet" type="text/css" />

    <!--== line-awesome -->
    <link href="/css/line-awesome.min.css" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="/css/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

    <!--== owl-carousel -->
    <link href="/css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="/css/base.css" rel="stylesheet" type="text/css" />

    <!--== shortcodes -->
    <link href="/css/shortcodes.css" rel="stylesheet" type="text/css" />

    <!--== default-theme -->
    <link href="/css/style.css" rel="stylesheet" type="text/css" />

    <!--== responsive -->
    <link href="/css/responsive.css" rel="stylesheet" type="text/css" />

    <!--== color-customizer -->
    <link href="/css/color-customize/color-customizer.css" rel="stylesheet" type="text/css" />

    @yield('styles')

</head>
<body>

<!-- page wrapper start -->
<div class="page-wrapper">


@include('partials.header')


    @yield('hero')


    <div class="page-content">
        @yield('content')
    </div>



@include('partials.footer')

</div>


<script src="{{ asset('js/app.js') }}"></script>

<!--== jquery -->
<script src="js/jquery.3.3.1.min.js"></script>

<!--== popper -->
<script src="js/popper.min.js"></script>

<!--== bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!--== appear -->
<script src="js/jquery.appear.js"></script>

<!--== modernizr -->
<script src="js/modernizr.js"></script>

<!--== easing -->
<script src="js/jquery.easing.min.js"></script>

<!--== menu -->
<script src="js/menu/jquery.smartmenus.js"></script>

<!--== owl-carousel -->
<script src="js/owl-carousel/owl.carousel.min.js"></script>

<!--== magnific-popup -->
<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!--== counter -->
<script src="js/counter/counter.js"></script>

<!--== countdown -->
<script src="js/countdown/jquery.countdown.min.js"></script>

<!--== canvas -->
<script src="js/canvas.js"></script>

<!--== step animation -->
<script src="js/snap.svg.js"></script>
<script src="js/step.js"></script>

<!--== contact-form -->
<script src="js/contact-form/contact-form.js"></script>

<!--== validate -->
<script src="js/contact-form/jquery.validate.min.js"></script>

<!--== map api -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<!--== map -->
<script src="js/map.js"></script>

<!--== wow -->
<script src="js/wow.min.js"></script>

<!--== color-customize -->
<script src="js/color-customize/color-customizer.js"></script>

<!--== theme-script -->
<script src="js/theme-script.js"></script>
@yield('scripts')
</body>
</html>