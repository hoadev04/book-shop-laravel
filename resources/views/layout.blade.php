<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags For Seo + Page Optimization -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description"
        content="Woman Store is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and HTML5 template with 14 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords"
        content="creative, modern, clean, bootstrap responsive, h tml5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, faq">
    <!-- Page Title -->
    <title>Book Store | @yield('title')</title>
    <!-- Fonts Awaysome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" href="layout/dummy-img/favicon.ico">
    <!-- Bundle -->
    <link rel="stylesheet" href="{{ asset('css\bundle.min.css') }}">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{ asset('css\jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\wow.css') }}">
    <link rel="stylesheet" href="{{ asset('css\LineIcons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\range-slider.css') }}">
    <!-- Slider Setting Css  -->
    <link rel="stylesheet" href="{{ asset('css\settings.css') }}">
    <!-- Mega Menu  -->
    <link rel="stylesheet" href="{{ asset('css\megamenu.css') }}">
    <!-- StyleSheet  -->
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
    <!-- Custom Css  -->
    <link rel="stylesheet" href="{{ asset('css\custom.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" />

</head>

<body>

    {{-- <a class="scroll-top-arrow" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a> --}}

    <!--LOADER-->
    <!-- <div class="loader">
    <div class="loader-spinner"></div>
</div> -->
    <!--LOADER-->

    @include('header')

    <main>
        @yield('content')
    </main>

    @include('footer')

    <!--START SEARCH AREA-->

   
    

    
    <!--END SEARCH AREA -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- JavaScript -->
    <script src="{{ asset('js\bundle.min.js') }}"></script>
    <!-- Plugin Js -->
    <script src="{{ asset('js\jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js\owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js\swiper.min.js') }}"></script>
    <script src="{{ asset('js\jquery.cubeportfolio.min.js') }}"></script>
    <script src="{{ asset('js\wow.min.js') }}"></script>
    <script src="{{ asset('js\bootstrap-input-spinner.js') }}"></script>
    <script src="{{ asset('js\parallaxie.min.js') }}"></script>
    <script src="{{ asset('js\stickyfill.min.js') }}"></script>
    <script src="{{ asset('js\nouislider.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhrdEzlfpnsnfq4MgU1e1CCsrvVx2d59s"></script>
    <script src="{{ asset('js\map.js') }}"></script>
    <script src="{{ asset('js\jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js\jquery.themepunch.revolution.min.js') }}"></script>
    <!-- SLIDER REVOLUTION EXTENSIONS -->
    <script src="{{ asset('js\extensions\revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('js\extensions\revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('js\extensions\revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('js\extensions\revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('js\extensions\revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('js\extensions\revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('js\extensions\revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('js\extensions\revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('js\extensions\revolution.extension.video.min.js') }}"></script>

    <!-- Custom Script -->
    <script src="{{ asset('js\script.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>

</body>

</html>
