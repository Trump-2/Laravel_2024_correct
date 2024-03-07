<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MobileController;
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

Route::get('/', function () {
    // return view('welcome');

    // 轉址用
    return redirect('/cats');
});


// Route::get('/child', function () {
//     return view('child');
// });




Route::resource('/dogs', DogController::class);


Route::get('/cats_multiple', [CatController::class, 'multiple'])->name('cats.multiple');
Route::resource('/cats', CatController::class);

// student 學生
Route::resource('/students', StudentController::class);


// mobile 學生
Route::resource('/mobiles', MobileController::class);
