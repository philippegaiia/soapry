<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact' ,'ContactFormController@store')->name('contact.store');
Route::get('/test', function(){
    return view('sidebartest');
});

Route::view('about', 'about');

// Route::get('batches', 'BatchController@index');
// Route::get('batches/create', 'BatchController@create');
// Route::post('batches', 'BatchController@store');
// Route::get('batches/{batch}', 'BatchController@show');
// Route::get('batches/{batch}/edit', 'BatchController@edit');
// Route::patch('batches/{batch}', 'BatchController@update');
// Route::delete('batches/{batch}', 'BatchController@destroy');

Route::resource('batches', 'BatchController');//->middleware('auth');
Route::resource('products', 'ProductController');
Route::resource('product_categories', 'ProductCategoryController');
Route::resource('tasks', 'TaskController');
Route::resource('suppliers', 'SupplierController');

Route::get('/batches/{batch}/followups/create', 'followupController@create');
Route::post('/batches/{batch}/followups', 'followupController@store');

Route::get('/followups/{followup}/edit', 'FollowupController@edit');
Route::patch('/followups/{followup}', 'FollowupController@update');
Route::get('/followups', 'FollowupController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
