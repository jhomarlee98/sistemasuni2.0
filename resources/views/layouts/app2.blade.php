<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') SistemasUNI  </title>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('md-bt/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('md-bt/css/main.css')}}">
    <link rel="icon" type="image/png" href="{{asset('images/icon.png')}}" />
    <script src="https://kit.fontawesome.com/22a95f274b.js" crossorigin="anonymous"></script>
    @livewireStyles
</head>
<body>
@include('components.header')
@include('components.menu')

@yield('content')
@yield('modales')

@include('components.footer')
<script type="text/javascript" src="{{ asset('md-bt/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('md-bt/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('md-bt/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('md-bt/js/mdb.min.js') }}" ></script>
@livewireScripts

</body>
</html>
