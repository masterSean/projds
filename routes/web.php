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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function() {
    Route::get('/admin/signout', function() {
        auth()->logout();
        return redirect()->back();
    });

    Route::get('/admin/dashboard', function() {
        return view('admin.dashboard');
    });

    Route::get('/admin/citizen_charter', function() {
        return view('admin.citizen_charter');
    });

    Route::resource('/admin/officials_positions', 'CitizenCharter\OfficialsPositions');
    Route::resource('/admin/organization_functions', 'CitizenCharter\OrganizationFunctions');
    Route::resource('/admin/citizen_charter/vm', 'CitizenCharter\VisionMission');
    Route::resource('/admin/organization_structure', 'OrganizationStructure');
    Route::resource('/admin/faqs', 'FAQs');
});

Route::group(['middleware' => 'guest', 'prefix' => 'client'], function() {
    Route::get('dashboard', 'Client\ClientController@dashboard'); 
    Route::get('faqs', 'Client\ClientController@faqs'); 
    Route::get('organization_structure', 'Client\ClientController@organization_structure'); 
    Route::group(['prefix' => 'citizen_charter', 'namespace' => 'Client'], function() {
        Route::get('vision_mission', 'ClientController@vision_mission');
        Route::get('dswd_officials', 'ClientController@officials_positions');
        Route::get('organization_functions', 'ClientController@organization_functions');
    });
});
