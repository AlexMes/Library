<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ($pageTitle ?? '') }}</title>
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="./favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">

    @stack('style-lib')

    @stack('style')
</head>
<body>

    @yield('content')


<!-- jQuery library -->
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>



@stack('script-lib')

@stack('script')


</body>
</html>
