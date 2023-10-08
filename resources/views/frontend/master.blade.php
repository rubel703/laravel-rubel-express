<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>rubel-express</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/frontend-assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend-assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/frontend-assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/frontend-assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


   @include('includes.header')


   @yield('home-page')
   @yield('about-page')
   @yield('product-page')
   @yield('contact-page')
   @yield('feature-page')
   @yield('testimonial-page')
   @yield('blog-page')
   @yield('details-page')


    @include('includes.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/frontend-assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/frontend-assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/frontend-assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/frontend-assets/lib/owlcarousel/assets/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/frontend-assets/js/main.js')}}"></script>

     <!-- sweet alert message for contact page -->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>