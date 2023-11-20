<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// assignment
Route::get("/about",function(){
    $pageName="About";
    return view("about",['pageName'=>$pageName]);
});

Route::get("/contact",function(){
    $pageName="Contact";
    return view("contact",['pageName'=>$pageName]);
});

Route::get("/service",function(){
    $pageName="Contact";
    return view("service",['pageName'=>$pageName]); 
});

Route::get('/redirect-1', function () {
    return redirect('/about');
});
Route::get('/redirect-2', function () {
    return redirect('/contact');
});
Route::get('/redirect-3', function () {
    return redirect('/service');
});
//redirect

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return redirect('/');
});

