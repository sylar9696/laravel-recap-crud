<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    {{-- cdn --}}
    @yield('cdns')
    <title>@yield('title')</title>
</head>
<body>

    @include('partials.header')

    @yield('content')


    {{-- Bootstrap --}}
    <script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>
