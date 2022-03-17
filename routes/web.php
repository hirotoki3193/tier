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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware'=>'set.locale'],function(){
    Route::get('/', 'App\Http\Controllers\PagesController@getHome') -> name('index');
    Route::get('/lang/{locale}', function($locale){
        if(! in_array($locale,['en','ja'])){
            abort(400);
        }
        session()->put('locale',$locale);
        return redirect()->back();
    })->name('locale');
    Route::get('/test1', 'App\Http\Controllers\PagesController@getTest') -> name('test');
    Route::get('/{page_name}', 'App\Http\Controllers\PagesController@getPage'); 
});