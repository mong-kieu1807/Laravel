<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang default</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body id="{{$pageId}}">
    <h2>Tiêu đề từ template</h2>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>
</html>