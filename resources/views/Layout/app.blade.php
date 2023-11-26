<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f9c3b6d4dd.js" crossorigin="anonymous"></script>
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
</head>
<body>
    @include('Layout.header')

    @yield('content')

    @include('Layout.footer')
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>