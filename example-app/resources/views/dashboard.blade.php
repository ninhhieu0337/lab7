<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light mb-5 justify-content-center">
    <ul class="navbar-nav" >
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.loginIndex') }}">Đăng Nhập</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.createUserIndex') }}">Đăng Ký</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('signout') }}">Đăng Xuất</a>
            </li>
        @endguest
    </ul>
</nav>
@yield('content')

</body>
</html>
