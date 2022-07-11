<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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

Route::get('/test', [TestController::class,'test']);
Route::get('/', function () {
    return view('welcome');
});
Route::group(["prefix"=>"admin"], function(){

    Route::get("/", function(){
        return "index";
    });
    Route::get("/logout", function(){
        return "logout";
    });

    Route::group(["prefix"=>"product"], function(){
        Route::get("/", function(){
            return "index";
        });
        Route::get("/create", function(){
            return "create";
        });
        Route::post("/store", function(){
            return "store";
        });
        Route::get("/edit", function(){
            return "edit";
        });
        Route::post("/update", function(){
            return "update";
        });
        Route::get("/delete", function(){
            return "delete";
        });
    });
});
