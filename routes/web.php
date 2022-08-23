<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

// Route::get('/text', function () {
//     return "Hello World view('simpletext')";
// });

Route::get('/text', function () {
    //only go to that view if some certain data is passed to that view
    return view('form');//->with('sname','')->with('gender','');
});

Route::get('/comingsoon', function () {
    return view('soon')->with('pop','raw');
    //$pop = 'raw'
});

// Route::get('/hi', 'HomeController@test');
Route::get('/hi',[HomeController::class, 'test'])->name('test.hi');
// Route::get('/hi',[HomeController::class, 'test']);
Route::post('/hi',[HomeController::class, 'getData'])->name('test.show');
