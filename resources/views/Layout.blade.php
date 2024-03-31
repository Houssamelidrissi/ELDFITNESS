<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('image/ELD.png') }}" type="image/png">
    <title>@yield('title', 'EldFitness')</title>

    <style>
        body {
            background-image: url("{{ asset('image/homepg.jpeg') }}");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>


</head>

<body>
    @include('include.Header')
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>