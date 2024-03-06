<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
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

    <form action="{{route('cats.store')}}" method="post">
        <!-- 加上底下這行，避免 419 錯誤 -->
        @csrf
        <div class="container mt-3">
            <h1>Cat create</h1>
            <div class="row">
                <div class="col">name</div>
            </div>
            <div class="row">
                <div class="col"><input type="text" name="name" id="" class="form-control"></div>
            </div>
            <div class="row">
                <div class="col">mobile</div>
            </div>
            <div class="row">
                <div class="col"><input type="text" name="mobile" id="" class="form-control"></div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="d-grid gap-2">
                        <input type="submit" name="" value="新增" class="btn btn-outline-primary">
                        <input type="reset" name="" value="重置" class="btn btn-outline-warning">
                    </div>
                </div>
            </div>
        </div>

    </form>



</body>

</html>