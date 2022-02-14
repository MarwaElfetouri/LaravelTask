<?php
use App\Http\Controllers\task;
use Illuminate\Support\Facades\Route;

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

Route::post('/', function () {
    return redirect('/task');
});

Route::post('/task', [task::class,'getAllPost']);

Route::post('/addbook', [task::class,'add']);

Route::get("/editview/{id}",[task::class,"editview"]);

Route::post("/update/{id}",[task::class,"update"]);

Route::get("/search", [task::class, 'search'])->BookName('search');


