<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ApiController;

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

Route::group(['prefix' => 'api'], function(){
Route::get('/',[ApiController::class,'index'])->name('api.index');
Route::post('/distance',[ApiController::class,'distance'])->name('api.distance');
Route::get('/meteo',[ApiController::class,'meteo'])->name('api.meteo');
});

Route::get('/mail',[MailController::class,'sendEmail']);

Route::get('/index',[PdfController::class,'index'])->name('index');
Route::get('/pdf',[PdfController::class,'businessCard'])->name('pdf');