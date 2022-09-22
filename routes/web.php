<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manageCategory;
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
    Route::get('/',[manageCategory::class,'home']);
    Route::view('/chart','admin/layout/chart'); 
    Route::get('/manage-category',[manageCategory::class,'ManageCatrgory']);
});