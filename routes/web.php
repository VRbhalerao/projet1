<?php
use Illuminate\Support\Facades\Route;
use App\http\controllers\Basecontroller;
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
    return view('welcome');
});
route::get('/home',[Basecontroller::class,'home']);
route::get('/services',[Basecontroller::class,'services']);
route::get('/company',[Basecontroller::class,'company']);
route::get('/contact_us',[Basecontroller::class,'contact_us']);