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
    return view('welcome');
});


Route::get('about-us', function(){
    return "First route in Laravel";
});


Route::get('view1', function(){
    return view('view1');
});


Route::get('view3', function(){
    return view('view3');
});


Route::get('/data/param1/{id}', function($id){
    return "Parameter entered: {$id}";
});


Route::get('/name/{name}/id/{id}/nickname/{nickname?}', function($name, $id, $nickname=''){
    if($nickname){
        return "Name: {$name} -- Id: {$id} -- Nickname: {$nickname}";
    }else{
        return "Name: {$name} -- Id: {$id} -- No nickname";
    }
})->where(['id' => '[\d]+'])->where(['nickname' => '1|2|3']);


Route::get('crud/{option}', function ($slug) { 
    return "Option: $slug"; 
})->where(['option' => 'create|delete|update']);


Route::get('view2-controller', 'TestController@view1');


Route::get('view4-controller', 'TestController@view2');





Route::post('route-post', function(){
    return "Route post";
});


