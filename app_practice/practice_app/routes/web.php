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

// Route::get('/', function () {
//     return view('welcome', ['name' => 'Maki']);
// });

Route::get('/', function () {

    $data['name'] = 'Maki2';
    $data['food'] = 'nori';
    $data['number'] = ['1', '2', '3', '4'];

    return view('welcome', compact('data'));
});

Route::get('/laravel', function () {
    return view('laravel');
});

Route::get('/homework_20190422', function () {
    return view('homework_20190422');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {  
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/activity', function () {

    $data['name'] = 'Maki2';
    $data['image'] = 'image';
    $data['age'] = 'age';
    $data['address'] = 'address';
    $data['sex'] = 'female';
    
    $data['email'] = 'mk1282130@gmail.com';
    $data['phoneNumber'] = '080-6410-2688';
    
    $data['employer'] = "Bob";
    $data['jobTitle'] = "sales";
    $data['jobDescription'] = "selling products";

    return view('activity', compact('data'));
});

Route::get('/20190425_HW_home', function () {
    return view('20190425_HW_home');
});

Route::get('/20190425_HW_profile', function () {
    return view('20190425_HW_profile');
});

Route::get('/20190425_HW_sidebar', function () {
    return view('20190425_HW_sidebar');
});

Route::get('/20190425_HW_chatbox', function () {
    return view('20190425_chatbox');
});

Route::get('/20190425_HW_footer', function () {
    return view('20190425_HW_footer');
});

Route::get('/20190425_HW_about', function () {

        $data['name'] = 'Maki';
        $data['favoriteFood'] = 'Fruits';
        $data['age'] = '25';
        $data['address'] = 'Door22, Cebu';
        $data['favoriteColor'] = 'white, black, pink';

        return view('20190425_HW_about', compact('data'));
});

Route::get('/20190425_HW_header', function () {
    return view('20190425_HW_header');
});

Route::get('/20190425_HW_login', function () {  
    return view('20190425_HW_login');
});

Route::get('/20190425_HW_chatbox', function () {  
    return view('20190425_HW_chatbox');
});

Route::get('/20190425_HW_master', function () {  
    return view('20190425_HW_master');
});

Route::get('/books', 'BookController@index');

Route::get('/book/create', 'BookController@index');