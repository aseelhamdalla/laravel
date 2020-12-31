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

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/edit_user_info', function () {
    return view('user.edit_user_info');
});
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/index', function () {
    return view('user.index');
});
Route::get('/user_profile', function () {
    return view('user.user_profile');
});
Route::get('/user_public', function () {
    return view('user.user_public');
});
Route::get('/edit', function () {
    return view('user.edit');
});
Route::get('/applied_job', function () {
    return view('user.applied_job');
});
Route::get('/single', function () {
    return view('single');
});
Route::get('/editrecruiter', function () {
    return view('recruiter.editrecruiter');
});
Route::get('/job_post', function () {
    return view('recruiter.job_post');
});
Route::get('/view_post', function () {
    return view('recruiter.view_post');
});

// *************************** dashboard
Route::get('/Category', function () {
    return view('Category');
});
Route::get('/Jobs', function () {
    return view('Manage_Jobs');
});
Route::get('/Users', function () {
    return view('Manage_Users');
});
Route::get('/recruiters', function () {
    return view('Mange_Recruiters');
});
Route::post('/Category/create', 'CategoryController@store');
Route::get('/Category/{category}/delete', 'CategoryController@delete');
Route::get('/Category', 'CategoryController@create')->name('Category');

Route::get('/Category/{category}/edit', 'CategoryController@edit');
Route::post('/category/{category}/update', 'CategoryController@update');
