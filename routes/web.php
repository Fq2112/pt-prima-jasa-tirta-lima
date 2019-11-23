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

Route::group(['prefix' => '/'], function () {

    Route::get('/', [
        'uses' => 'MainController@index',
        'as' => 'home'
    ]);

    Route::group(['prefix' => 'about'], function (){

        Route::get('president-message', [
            'uses' => 'MainController@presidentMessage',
            'as' => 'president-message'
        ]);

        Route::get('brief-history', [
            'uses' => 'MainController@briefHistory',
            'as' => 'brief-history'
        ]);

        Route::get('vision-mission', [
            'uses' => 'MainController@visionMission',
            'as' => 'vision-mission'
        ]);

        Route::get('organization-chart', [
            'uses' => 'MainController@organizationChart',
            'as' => 'organization-chart'
        ]);

    });

    Route::get('services', [
        'uses' => 'MainController@services',
        'as' => 'services'
    ]);

    Route::get('qhse-commitment', [
        'uses' => 'MainController@QhseCommitment',
        'as' => 'qhse-commitment'
    ]);

    Route::get('project-experiences', [
        'uses' => 'MainController@projectsExperiences',
        'as' => 'project-experiences'
    ]);

    Route::get('contact', [
        'uses' => 'MainController@contact',
        'as' => 'contact'
    ]);

    Route::post('contact', [
        'uses' => 'MainController@postContact',
        'as' => 'contact.submit'
    ]);

});
