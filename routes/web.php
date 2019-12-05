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

/****************************Admin Auth Route Controllers***********************************/
Route::get('/admin/home', 'Admin\AdminController@index');
Route::get('/admin/login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','AdminAuth\LoginController@login');
Route::post('admin/logout', 'AdminAuth\LoginController@logout');
Route::get('admin/password/confirm','AdminAuth\ConfirmPasswordController@showConfirmForm')->name('admin.password.confirm');
Route::post('admin/password/confirm', 'AdminAuth\ConfirmPasswordController@confirm');
Route::post('admin/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('admin.password.update');
Route::get('admin/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm')->name('admin.password.reset');

/****************************Student Auth Route Controllers***********************************/
Route::get('/student/home', 'Student\StudentController@index');
Route::get('/student/login', 'StudentAuth\LoginController@showLoginForm')->name('student.login');
Route::post('/student/login','StudentAuth\LoginController@login');
Route::post('student/logout', 'StudentAuth\LoginController@logout');
Route::get('student/password/confirm','StudentAuth\ConfirmPasswordController@showConfirmForm')->name('student.password.confirm');
Route::post('student/password/confirm', 'StudentAuth\ConfirmPasswordController@confirm');
Route::post('student/password/email', 'StudentAuth\ForgotPasswordController@sendResetLinkEmail')->name('student.password.email');
Route::get('student/password/reset', 'StudentAuth\ForgotPasswordController@showLinkRequestForm')->name('student.password.request');
Route::post('student/password/reset', 'StudentAuth\ResetPasswordController@reset')->name('student.password.update');
Route::get('student/password/reset/{token}', 'StudentAuth\ResetPasswordController@showResetForm')->name('student.password.reset');

/****************************Staff Auth Route Controllers***********************************/
Route::get('/staff/home', 'Staff\StaffController@index');
Route::get('/staff/login', 'StaffAuth\LoginController@showLoginForm')->name('staff.login');
Route::post('/staff/login','StaffAuth\LoginController@login');
Route::post('staff/logout', 'StaffAuth\LoginController@logout');
Route::get('staff/password/confirm','StaffAuth\ConfirmPasswordController@showConfirmForm')->name('staff.password.confirm');
Route::post('staff/password/confirm', 'StaffAuth\ConfirmPasswordController@confirm');
Route::post('staff/password/email', 'StaffAuth\ForgotPasswordController@sendResetLinkEmail')->name('staff.password.email');
Route::get('staff/password/reset', 'StaffAuth\ForgotPasswordController@showLinkRequestForm')->name('staff.password.request');
Route::post('staff/password/reset', 'StaffAuth\ResetPasswordController@reset')->name('staff.password.update');
Route::get('staff/password/reset/{token}', 'StaffAuth\ResetPasswordController@showResetForm')->name('staff.password.reset');
