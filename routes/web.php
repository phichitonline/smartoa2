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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/consent', function () {
    return view('consent');
});

// Route::get('/recaptcha', function () {
//     return view('recaptcha');
// });

Route::get('/test', function () {
    return view('patient.test');
});

Route::resource('recaptcha', 'RecaptchaController');
Route::resource('vaccine', 'VaccineController');
Route::resource('emr', 'EmrController');

Route::resource('setting', 'SettingController');
Route::resource('userman', 'UsermanController');
Route::resource('sessionregister', 'SessionregisterController');
Route::resource('ptregister', 'PtRegisterController');
Route::get('ptcheck', 'PtRegisterController@ptcheck')->name('ptcheck');
Route::get('ptinfo', 'PtRegisterController@ptinfo')->name('ptinfo');
Route::get('ptregisted', 'PtRegisterController@registed')->name('ptregisted');

Route::get('province', 'ProvinceController@index')->name('province');
Route::get('amphure', 'ProvinceController@amphure')->name('amphure');
Route::get('district', 'ProvinceController@district')->name('district');

Route::get('/liff', function () {
    return view('liff');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homeregister', 'HomeController@register')->name('homeregister');
Route::get('/main', 'MainController@index')->name('main');
Route::get('/search', 'SearchController@index')->name('search');
Route::get('/book', 'BookController@index')->name('book');
Route::get('/bookcalendar', 'BookController@calendar')->name('bookcalandar');
Route::get('/booktime', 'BookController@time')->name('booktime');
Route::post('/bookcc', 'BookController@quecc')->name('bookcc');
Route::post('/bookstore', 'BookController@store')->name('bookstore');

Route::get('/card', 'CardController@index')->name('card');

Route::get('/oapp', 'OappController@index')->name('oapp');
Route::get('/oappdetail', 'OappController@detail')->name('oappdetail');
Route::get('/checkin', 'OappController@checkin')->name('checkin');
Route::get('/statusq', 'OappController@statusq')->name('statusq');
Route::get('/oappman', 'OappController@oappman')->name('oappman');
Route::get('/oappconfirm', 'OappController@oappconfirm')->name('oappconfirm');

Route::get('/showimage', 'ShowimageController@index')->name('showimage');

Auth::routes();

Route::resource('emr', 'EmrController');
Route::resource('vaccine', 'VaccineController');
Route::get('/notify', 'NotifyController@index')->name('notify');
Route::get('/notify/today', 'NotifyController@today')->name('notify');
Route::get('/notify/tomorrow', 'NotifyController@tomorrow')->name('notify');

Route::get('/other', function () {
    return view('other');
});

Route::resource('covaccine', 'CovaccineController');
Route::get('cocheck', 'CovaccineController@cocheck')->name('cocheck');
Route::get('coinfo', 'CovaccineController@coinfo')->name('coinfo');
