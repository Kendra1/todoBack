<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('auth/test/home', function(){
    return "home";
});

Route::get('auth/testG', "PracticeController@testG")->name('testGet')->middleware('checkAge');

Route::post('auth/testP', "PracticeController@testP")->name('testPost');

Route::put('auth/testPut', "PracticeController@testPut")->name('testPut');

Route::patch('auth/testPatch', "PracticeController@testPatch")
->name('testPatch');

Route::delete('auth/testDelete/{id}', "PracticeController@testDelete")
->name('testDelete');

Route::get('auth/hello', function(){
    return view('hello', ['first_name' => 'Stefan']);
});
