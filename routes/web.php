<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\NineController;
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


Route::get('/hello', function () {
    return redirect('/');
});

Route::get("/page-1",function(){
    return view('page1');
});

Route::get("/page-2",function(){
    return view('page2');
});

Route::get("/page-3",function(){
    return view('page3');
});

// Route::view('path','viewname');

Route::get('/student/{name}',[StudentsController::class, 'homeView']);

Route::get('/orders',[OrdersController::class, 'ordersView']);

// Route::get('/login',[OrdersController::class, 'getData']);
Route::put('/get-data',[OrdersController::class, 'getData']);

Route::get("/noaccess", function(){
return view('noaccess');
});

Route::get("/year", function(){
return view('year');
});

Route::group(['middleware'=>['protectedpage']],function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::view('login','login')->middleware('no_js');
});


Route::get('register', function(){
    if(!session()->has('keyvalue')){
        return view('register');
    }else{
        return view('profile');
    }
});

Route::get('profile', function(){
    if(session()->has('keyvalue')){
        return view('profile');
    }else{
        return view('register');
    }
});

Route::get('/students',[StudentsController::class, 'index']);
Route::get('/all-students',[StudentsController::class, 'getUsers']);
Route::get('/all-users',[StudentsController::class, 'getHttp']);
Route::get('/records',[StudentsController::class, 'studentRecord']);
Route::put('/get-session',[StudentsController::class, 'getSession']);

Route::get('/logout',function(){
    if(session()->has('keyvalue')){
        session()->pull('keyvalue');
        return redirect("/register");
    }
})->name('logout');

Route::view("upload","upload");

Route::post("/handle-upload", [StudentsController::class,'uploadFile']);

Route::get("/nine-users",[NineController::class, 'index']);

Route::view("register-nine", "register");

Route::post("/create-nine-user",[NineController::class, 'createUser']);

//display user profile view
Route::get('edit/{nine}',[NineController::class, 'editUser']);


//update user profile
Route::put("update/{nine}",[NineController::class, 'updateUser']);

//delete user profile
Route::get("delete/{nine}",[NineController::class, 'deleteUser']);
