<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 原本的
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('test');
// });

Route::get('/', function () {
    return view('index');
});


Route::get('/', function () {
    return view(
        'index',
        [
            'name' => 'YiHong',
            'mobile' => "0911-111-111"
        ]
    );
});

Route::get('/go_taishan', function () {
    return view('taishan');
});


Route::get('/tesla/f1', function () {
    // 這個 route.f1 => route 專案中的資料夾名稱；f1 則是其底下的檔案

    return view('hotel.f1');
})->name('route.f1');

Route::get('/tesla/f2', function () {
    return view('hotel.f2');
})->name('route.f2');

Route::get('/tesla/f3', function () {
    return view('hotel.f3');
})->name('route.f3');


Route::get('/students', function () {
    // 這個 student.index => student 專案中的資料夾名稱；index 則是其底下的檔案
    return view('student.index');
});


Route::get('/user/{id}', function (string $id) {
    return 'User ' . $id;
    // $text =  'User ' . $id;
    // dd($text);
});

Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
    $text = $postId . "_" . $commentId;
    dd($text);
});
