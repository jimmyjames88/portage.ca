<?php

use App\Porter;
use App\Sender;

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
});

Route::post('submit-contact', 'FormController@contactForm');

Route::get('submit-form', 'FormController@store');
Route::post('submit-form', 'FormController@store');


Route::get('porters', function(){
    $porters = Porter::whereDate('departure', '>', now())->paginate(10);
    return view('porterList', compact('porters'));
});

Route::get('senders', function(){
    $senders = Sender::whereDate('latestDeliveryDate', '>', now())->paginate(10);
    return view('senderList', compact('senders'));
});

Route::get('auth/login', 'auth\LoginController@create')->name('login');
Route::post('auth/login', 'auth\LoginController@store');
Route::get('auth/logout', 'auth\LoginController@destroy')->name('logout');

//Route::get('auth/register', 'auth\UserController@create');
//Route::post('auth/register', 'auth\UserController@store');

Route::get('admin', function(){
    return view('admin.dashboard');
})->middleware('auth');

Route::get('admin/porters/archives', 'admin\PorterController@archives');
Route::resource('admin/porters', 'admin\PorterController');
Route::get('admin/porters/{porter}/delete', 'admin\PorterController@delete');

Route::get('admin/senders/archives', 'admin\SenderController@archives');
Route::resource('admin/senders', 'admin\SenderController');
Route::get('admin/senders/{sender}/delete', 'admin\SenderController@delete');

Route::resource('admin/locations', 'admin\LocationController');

Route::get('admin', function(){
    return redirect('admin/dashboard');
});
Route::get('admin/dashboard', function(){
    $porters = Porter::whereDate('created_at', date('Y-m-d'))->paginate(10, ['*'], 'porters');
    $senders = Sender::whereDate('created_at', date('Y-m-d'))->paginate(10, ['*'], 'senders');
    return view('admin.dashboard', compact('porters', 'senders'));
})->middleware('auth');
