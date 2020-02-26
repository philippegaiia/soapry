<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact' ,'ContactFormController@store')->name('contact.store');

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
Route::resource('product_categories', 'ProductCategoryController')->except(['create', 'show']);
Route::resource('tasks', 'TaskController');
Route::resource('suppliers', 'SupplierController');
Route::resource('ingredient_categories', 'IngredientCategoryController');
Route::resource('ingredients', 'IngredientController');

Route::resource('suppliers.listings', 'SupplierListingController');
Route::resource('suppliers.supplier_orders', 'SupplierSupplierOrderController')->only(['create', 'store']);

Route::get('/batches/{batch}/followups/create', 'followupController@create');
Route::post('/batches/{batch}/followups', 'followupController@store');
Route::delete('/batches/{batch}/followups/{followup}', 'followupController@destroy');

Route::get('/followups/{followup}/edit', 'FollowupController@edit');
Route::patch('/followups/{followup}', 'FollowupController@update');
Route::get('/followups', 'FollowupController@index');
Route::delete('/followups/{followup}', 'FollowupController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
