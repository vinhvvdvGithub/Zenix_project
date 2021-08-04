<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
   
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="{{url('vendor/chartist/css/chartist.min.css')}}">
    <link href="{{url('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{url('vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>
<body>
    <!--*******************
    Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <div id="main-wrapper">
        {{-- Header --}}
        @include('layouts.header')

        {{-- Content --}}
        @yield('content')
     
        {{-- Footer --}}
       @include('layouts.footer')
    </div>

    
    <!-- Required vendors -->
    <script src="{{url('vendor/global/global.min.js')}}"></script>
    <script src="{{url('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}."></script>
    <script src="{{url('vendor/chart.js/Chart.bundle.min.js')}}"></script>
    
    <!-- Chart piety plugin files -->
    <script src="{{url('vendor/peity/jquery.peity.min.js')}}"></script>
    
    <!-- Apex Chart -->
    <script src="{{url('vendor/apexchart/apexchart.js')}}"></script>
    
    <!-- Dashboard 1 -->
    <script src="{{url('js/dashboard/dashboard-1.js')}}"></script>
    
    <script src="{{url('vendor/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{url('js/custom.min.js')}}"></script>
    <script src="{{url('js/deznav-init.js')}}"></script>


</body>
</html>