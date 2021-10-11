<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="/js/jquery.min.js"></script>
    <title>Posts</title>
</head>

<body>
    <div id="app">
    @include('web.partials.navbar')
    <div class="container mt-3 mb-3" id="app">
        @yield('content')
    </div>
    @include('web.partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
    </div>
</body>

</html>
