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
    return view('home');
})->name('main');

Route::post('/sendMessage','sendMessage@sendMessageViaEmail')->name('sendMessage');

// Route::get('envio-email', function(){
//     $user = new stdClass();
//     $user->name = 'Michel Versiani';
//     $user->email = 'bettercallmiguel@gmail.com';
// });
