<?php

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

Route::resource('member', 'MemberController');

Route::resource('department', 'DepartmentController');

Route::get('/', 'AuthController@index');
Route::get('/login', 'AuthController@login');
Route::post('/loginPost', 'AuthController@loginPost');
Route::get('/logout', 'AuthController@logout');

Route::get('/edom', 'EdomController@index');
Route::get('/edom/{id}', 'EdomController@create');
Route::post('/edom/{id}', 'EdomController@insert');