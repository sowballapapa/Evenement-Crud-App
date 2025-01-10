<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navActive{
            text-decoration: underline;
            text-decoration-color: black;
            font-weight: 500;
        }
    </style>

    <title>@yield('title')</title>
</head>
<body>
    @include('partials/navbar')
    @if (session('created'))
            <div class="alert alert-success">
                {{session('created')}}
            </div>
        @endif
        @if (session('edited'))
            <div class="alert alert-warning">
                {{session('edited')}}
            </div>
        @endif
        @if (session('deleted'))
            <div class="alert alert-danger">
                {{session('deleted')}}
            </div>
        @endif
    @yield('content')

    @include('partials.footer')
</body>
</html>
