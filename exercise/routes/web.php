<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact/{id}', "Contact@show");
// Route::post('/contact/{id}', function (Request $request, $id) {
//     return App\Contact::find($id);
// });
// Route::put('/contact/{id}', function (Request $request, $id) {
//     return App\Contact::find($id);
// });
// Route::delete('/contact/{id}', function (Request $request, $id) {
//     return App\Contact::find($id);
// });
