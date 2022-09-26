<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manageCategory;
use App\Http\Controllers\ProductManageController;
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
    return view('welcome');
});
Route::group(['prefix'=>'admin/'],function()
{
    Route::view('/','admin.layout.chart')->name('dashboard');
    Route::get('/manage-category-list',[manageCategory::class,'home'])->name('manage-category-list');
});