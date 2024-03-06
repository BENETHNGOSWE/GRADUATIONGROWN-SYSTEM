<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>Graduation Gown</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset ('frontend/assets/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('frontend/assets/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('frontend/assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('frontend/assets/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset ('frontend/assets/vendors/owl-carousel/owl.carousel.min.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/responsive.css')}}">
</head>

<body>

    @include('frontend/layouts/heading')
    @yield('content')
    @include('frontend/layouts/footer')
        

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset ('frontend/assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/popper.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/mail-script.js')}}"></script>
    <script src="{{ asset ('frontend/assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/vendors/nice-select/js/jquery.nice-select.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/mail-script.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/stellar.js')}}"></script>
    <script src="{{ asset ('frontend/assets/vendors/lightbox/simpleLightbox.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/custom.js')}}"></script>
    
</body>

</html>
