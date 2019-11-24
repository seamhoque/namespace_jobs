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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('job','JobController');

Route::get('applicant/home','ApplicantController@index');
Route::get('applicant','Applicant\LoginController@showLoginForm')->name('applicant.login');
Route::post('applicant','Applicant\LoginController@login');
Route::get('applicant/register','Applicant\RegisterController@show_reg_form')->name('applicant.register');
Route::post('applicant/register','Applicant\RegisterController@create')->name('applicant.register.store');


Route::get('applicant/show_jobs','JobController@show_all_jobs')->name('applicant.show_jobs');

Route::resource('applicant/profile','ProfileController');

