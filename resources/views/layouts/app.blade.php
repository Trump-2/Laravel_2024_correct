<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>03_06 - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- 載入自訂的 css 檔案，寫法一 -->
    <!-- <link rel="stylesheet" href="http://final.com/css/style.css"> -->

    <!-- 載入自訂的 css 檔案，寫法二 -->
    <!-- <link rel="stylesheet" href="{{asset("css/style.css")}}"> -->
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dogs.index')}}">Dog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cats.index')}}">Cat</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>