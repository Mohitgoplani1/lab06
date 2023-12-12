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

// Route::get('/', function () {
//     return "<h1 >Hello from Aditya </h1>";
// });
// Route::get('/aboutus', function () {
//     return view('aboutus');
// });
Route::view('/aboutus','aboutus',[
    'name'=> 'Aditya',
]);
Route::get('/', function (){
    return view('welcome');
});
Route::get('/person/{name}', function ($name) {
    return "The name is $name";
})->name('person.index');
