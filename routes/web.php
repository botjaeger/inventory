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
use App\User;

Route::get('/adduser', function(){
	$user = new User;
	$user->username = 'staff';
	$user->role_id = 2;
	$user->lastname = 'tabor';
	$user->firstname = 'bob';
	$user->middlename = 'evangelist';
	$user->email = 'tutorial123s@yahoo.com';
	$user->gender = 'Male';
	$user->address = 'Dumaguete city';
	$user->password = bcrypt('staff');
	$user->save();
});

Route::get('/', [
	'as'=> 'index',
	'uses'=> 'AuthController@index'
]);
Route::post('login', [
	'as'=> 'login',
	'uses'=> 'AuthController@login'
]);

//Admin Routes

Route::get('/admin', [
	'as'=> 'admin_main',
	'uses'=> 'AdminController@main'
]);

//Staff Routes

Route::get('/staff', [
	'as'=> 'staff_main',
	'uses'=> 'StaffController@main'
]);