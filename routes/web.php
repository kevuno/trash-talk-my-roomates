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
use App\Complain;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('complains','ComplainsController');

Route::get('complains/{complain}/up_vote',function(App\Complain $complain){
	$complain->votes++;
	$complain->save();
	return redirect('/complains');
});

Route::get('about',function(){
	return view('about');
})->name('about');