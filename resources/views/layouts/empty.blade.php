<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">

    <title>Project A</title>
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
</head>
<body>
    <div class="preloader">

        <svg class="circular" viewBox="25 25 50 50">

            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>

    </div>

    @yield('content')

    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/popper/popper.min.js') }}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('js/waves.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}" defer></script>
    <script src="{{ asset('js/custom.min.js') }}" defer></script>
</body>



</html>