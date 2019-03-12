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
    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'brand', 'as' => 'brand.'], function()
{
    Route::get('story', 'StoryController@index')->name('story');
    Route::get('ceo', 'StoryController@ceo')->name('ceo');
    Route::get('julien','StoryController@julien')->name('julien');
    Route::get('kid','StoryController@kid')->name('kid');
    Route::get('coffe_and_waffle','StoryController@cofwaf')->name('cofwaf');
    Route::get('kims','StoryController@kims')->name('kims');
    Route::get('direction','StoryController@direction')->name('direc');
});

Route::group(['prefix'=>'franchise','as'=>'franchise.'], function()
{
    Route::get('competitive','FranchiseController@competitive')->name('competitive');
    Route::get('join','FranchiseController@join')->name('join');
    Route::get('cost','FranchiseController@cost')->name('cost');
    Route::get('guide','FranchiseController@guide')->name('guide');
    Route::get('explain','FranchiseController@explain')->name('explain');

});
// 프랜차이즈어드민
Route::get('/adminfran', 'FranchiseController@index')->name('fran.admin');
Route::get('/adminfran/create', 'FranchiseController@create')->name('fran.create');
Route::post('/adminfran', 'FranchiseController@store')->name('fran.store');
Route::get('/adminfran/{id}', 'FranchiseController@show')->name('fran.show');
Route::get('/adminfran/{id}/edit', 'FranchiseController@edit')->name('fran.edit');
Route::put('/adminfran{id}', 'FranchiseController@update')->name('fran.update');
Route::delete('/adminfran{id}', 'FranchiseController@destroy')->name('fran.destroy');


Route::group(['prefix'=>'store','as'=>'store.'],function()
{
    Route::get('success','StoreController@success')->name('success');
    Route::get('recent','StoreController@recent')->name('recent');
    Route::get('find','StoreController@find')->name('find');
    Route::get('finding/{area}','StoreController@finding')->name('finding');

});
Route::group(['prefix'=>'menu','as'=>'menu.'],function()
{
    Route::get('waffle','MenuController@waffle')->name('waffle');
    Route::get('coffee','MenuController@coffee')->name('coffee');
    Route::get('drinking','MenuController@drinking')->name('drinking');

});
Route::group(['prefix'=>'community','as'=>'community.'],function()
{
    Route::get('{type}', 'DocumentController@index')->name('index');
    Route::get('{type}/{id}', 'DocumentController@show')->name('show');
    
});
// 커뮤니티어드민
Route::get('/admindocu', 'DocumentController@admin')->name('docu.admin');
Route::get('/admindocu/create', 'DocumentController@create')->name('docu.create');
Route::post('/admindocu', 'DocumentController@store')->name('docu.store');
Route::get('/admindocu/{id}', 'DocumentController@adshow')->name('docu.adshow');
Route::get('/admindocu/{id}/edit', 'DocumentController@edit')->name('docu.edit');
Route::put('/admindocu/{id}', 'DocumentController@update')->name('docu.update');
Route::delete('/admindocu/{id}', 'DocumentController@destroy')->name('docu.destroy');


Route::get('/commu/show58',function(){
    return view('community.show58');
});
Route::get('gallery2',function(){
    return view('community.gallery2');
});