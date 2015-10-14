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

// Set and get language for website
$cookie_lang = Cookie::get('lang');
($cookie_lang) ? App::setLocale(Crypt::decrypt($cookie_lang)) : false;
Route::get('lang/{lang}', function($lang){
    Cookie::queue(Cookie::forever('lang', $lang));
    return back();
});


Route::filter('odczytDanychStudentow', function() { if (!Entrust::can('odczytDanychStudentow')) { return 'Brak uprawnień'; } });
Route::when('students*', 'odczytDanychStudentow');


Route::group(['as' => 'public::'], function () { 
    Route::get('/', 'StartController@index');
    Route::controller('profil/password', 'Auth\PasswordController');
    Route::controller('profil', 'Auth\AuthController');
    
    Route::get('pdf', 'Pdf\PdfController@index');
    Route::get('geocoder', 'Other\GeocoderController@index');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('back', function() { return view('back.back'); });
    Route::get('ftp', 'Other\FtpController@index');
    Route::resource('postman', 'Postman\PostmanController');
    Route::resource('hall', 'School\HallController');
    Route::resource('students', 'StudentController');
    Route::match(['get', 'post'], 'scraper', 'Scraper\ScraperController@index');
});


Route::group(['prefix' => 'oauth2'], function () {
    Route::get('', ['middleware' => 'auth', 'uses' => 'Oauth2\Oauth2Controller@index']);
    Route::get('generate_token', ['middleware' => 'auth', 'uses' => 'Oauth2\Oauth2Controller@generatetoken']);
    Route::get('get_user', ['middleware' => 'oauth', 'uses' => 'Oauth2\Oauth2Controller@getuser']);
});



