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
    return view('home');
});

//Route::get('admin/home', 'AdminController@index')->name('admin.home');
Route::get('admin/product/create', 'AdminController@create')->name('add.product');

################################## Admin Routes ##################################

Route::group(['namespace' => 'Admin','prefix'=>'admin'],function () {

        Route::match(['post','get'],'','AdminController@login')->name('adminLogin');
        Route::get('dashboard', 'AdminController@dashboard')->name('adminDashboard');
        Route::get('logout', 'AdminController@logout')->name('adminLogout');
        Route::get('settings', 'AdminController@settings')->name('adminSettings');
        Route::post('settings', 'AdminController@updatePassword')->name('adminSettings');
        Route::get('forgot-password', 'AdminController@forgotPassword')->name('adminForgotPassword');
        Route::post('forgot-password', 'ForgotPasswordController@resetPassword')->name('adminForgotPassword');

        #******************* Route product *******************#
        Route::get('create/product', 'ProductController@create')->name('create.product');
        Route::post('create/store/product', 'ProductController@store');
        Route::get('view/products', 'ProductController@index')->name('view.products');


        #******************* Route SubCategory *******************#
        Route::get('create/subcategory', 'SubCategoryController@create')->name('create.subcategory');
        Route::post('store/subcategory', 'SubCategoryController@store');

        #******************* Route Category *******************#
        Route::get('create/category', 'CategoryController@create')->name('create.category');
        Route::post('store/category', 'CategoryController@store');

    }
);



