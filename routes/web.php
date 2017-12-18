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

Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function() {
    Route::get('/admin/dashboard', function() {
        return view('admin.dashboard');
    });

    Route::get('/admin/citizen_charter', function() {
        return view('admin.citizen_charter');
    });

    Route::get('/admin/organization_structure', function() {
        return view('admin.organization_structure');
    });

    Route::resource('/admin/citizen_charter/vm', 'CitizenCharter\VisionMission');
    Route::resource('/admin/organization_structure', 'OrganizationStructure');
});
