<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <!-- Header -->
    @include('partials.header')

    <!-- Main Contents -->
    @yield('main-app')

    <!-- Footer -->
    @include('partials.footer')

</body>

</html>