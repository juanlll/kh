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
	$categories = App\Page::all();
    return view('welcome',['categories'=> $categories]);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('post/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});


Route::get('page/{slug}', function($slug){
	$posts = App\Post::all();
	$page = App\Page::where('slug', '=', $slug)->firstOrFail();
	return view('page', ['page'=>$page,'posts'=>$posts]);
});


