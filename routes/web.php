<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about',[DemoController::class,'index']);
Route::get('/contact',[DemoController::class,'contactMethod']);

// Route::get('/contact', function () {
//     echo "this is contact page";
// });

// Route::get('/about', function () {
//     return view('about');
// });