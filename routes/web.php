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
Route::get('/',function()
{
    return view('admin/layout/master-dashboard');
});
Route::group(['prefix'=>'admin/'],function()
{
    Route::view('/','admin/layout/master-dashboard');
    Route::view('/chart','admin/layout/chart');
    Route::view('/add-category','admin.pages.catogery.add-catogery');
    Route::view('/manage-category','admin.pages.catogery.manage-catogery');
});