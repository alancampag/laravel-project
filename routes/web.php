<?php
use App\Events\ImportDoneEvent;
use App\Events\AllDoneEvent;
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

Route::post('/file', 'FileController@receiveFile')->name('upload');
Route::post('/import', 'FileController@importData')->name('import');

Route::get('/event', function() {
    event(new AllDoneEvent('hello world'));
    dump('event send');

    }
);

