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
    return view('welcome');
});
Route::get('foo', function () {
    return 'Hello World';
});
Route::get('thinh/fo', function () {
    return 'Hello';
});
Route::get('name/{rr}', function ($name) {
    return 'Hello World' . $name;
}); 
Route::get('aa/{a?}' , function($name="01"){
    return 'hello' . $name;
})->where(['a' => '[0-9]+']);
Route::get('myroute' , ['as' => "route1",function(){
    echo 'helloroute';
}]);
Route::get('redirect' , function(){
    return redirect()->route('route1');
});
Route::get('route' , function(){
    echo 'day la dinh danh name';
})->name('route2');
Route::get('redirect1' , function(){
    return redirect()->route('route2');
});

//route group
Route::group(['prefix' => 'myGroup'], function(){
    Route::get('user1' , function(){
        echo 'user1';
    });
    Route::get('user2' , function(){
        echo 'user2';
    });
    Route::get('user3' , function(){
        echo 'user3';
    });
});