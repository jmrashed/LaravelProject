<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('course','CourseController');




Route::resource('employee','EmployeeController');

Route::get('/login', function () {
    return view('employee.login');
}); 
Route::get('/afterlogin', function () {
    return view('employee.login');
}); 



Route::get('/index', function () {
    return view('welcome');
}); 


Route::get("/AddUser", "AddUser@adduser");

Route::post("/AddUser", "AddUser@addusersubmit");


