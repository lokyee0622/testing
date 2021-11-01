<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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



Route::get('insert',[EventController::class,'insertform']);
Route::post('/create',[EventController::class,'insert']);


//show record
Route::get('/view', function () {

    $viewdata = DB::table('posts')->get();

    return view('view', ['viewdata' => $viewdata]);
});




//delete record
Route::get('delete/{id}','App\Http\Controllers\ViewController@destroy');






