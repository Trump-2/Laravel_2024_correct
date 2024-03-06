<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php



    $url = route("route.f3");
    // laravel 的 dd() 顯示完變數後，會中斷後面的程式碼
    // dd($url);
    dump($url);

    $text = "Hello, $name - Mobile : $mobile";
    echo $text;
    ?>
    <br>
    {{-- href 中的寫法是 php 框架中常見的模板表達式，用來輸出資料 --}}
    <a href=" {{route('route.f1')}} ">go_f1</a><br>
    <a href=" {{route("route.f2")}}">go_f2</a><br>
    <a href="{{route("route.f3")}}">go_f3</a>
</body>

</html>