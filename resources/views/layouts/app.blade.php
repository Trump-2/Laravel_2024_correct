<!-- resources/views/layouts/app.blade.php -->

<html>

<head>
    <title>03_06 - @yield('title')</title>
</head>

<body>
    This is the master sidebar.
    <!-- @section('sidebar')
    @show -->

    <div class="container">
        @yield('content')
    </div>
</body>

</html>