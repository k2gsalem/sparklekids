<?php

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

use App\Http\Response;

Route::get('/', function () {
    return view('index');
});
Route::get('/about_sparkle_kidss', function () {
    return view('about_sparkle_kidss');
});
Route::get('/curriculam_summary', function () {
    return view('curriculam_summary');
});
Route::get('/contact_form', function () {
    return view('contact_form');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
// Route::get('/gallery', function () {
//     return view('gallery');
// });
Route::get('/test_children', function () {
    return view('test_children');
});
Route::get('/test_teacher', function () {
    return view('test_teacher');
});
Route::get('/test_sportsr', function () {
    return view('test_sports');
});
Route::get('contact-form', 'ContactController@getContact');
Route::post('contact-form', 'ContactController@saveContact');

Route::get('/gallery','AlbumController@index');

Route::get('/albums/{id}','PhotoController@index');


// Route::get('imager/{src?}', 'PhotoController@imageresize');
