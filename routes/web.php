<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Session;
use Illuminate\Support\Facades\Route;
use App\Models\user;

Route::group(['middleware' => 'check-login'], function () {


    Route::group(['middleware' => 'check-user'], function () {
        Route::post('/logoutUser', 'App\Http\Controllers\userController@logoutUser')->name('logoutUser');
        Route::group(['prefix' => 'user'], function(){
            Route::get('/', 'App\Http\Controllers\UserController@viewUser')->name('user');
            // Route::get('/edit-user/{id}', 'App\Http\Controllers\UserController@editUser')->name('edit-user');

            Route::get('/editForm/{id}', 'App\Http\Controllers\UserController@editForm')->name('editForm');
            Route::post('/updateUser/{id}', 'App\Http\Controllers\UserController@updateUser')->name('updateUser');

            Route::post('/add-to-cart/{id}', 'App\Http\Controllers\UserController@addToCart')->name('addToCart');
            Route::get('/cart', 'App\Http\Controllers\UserController@showCart')->name('userCart');

            // Route::get('/products', 'App\Http\Controllers\UserController@showProducts')->name('products');
 
        });
    });

    Route::group(['middleware' => 'check-admin'], function () {
        Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
        Route::group(['prefix'=>'admin'], function(){
            Route::get('/user', 'App\Http\Controllers\UserController@viewUser')->name('userAdmin');
            Route::get('/', 'App\Http\Controllers\AdminController@viewAdmin')->name('admin');
            Route::post('/categories', 'App\Http\Controllers\AdminController@store')->name('storeCategory');
            Route::get('/addingCategory',  'App\Http\Controllers\AdminController@showFormToAddCategory')->name('addCategory');
            Route::get('/showAddProduct', 'App\Http\Controllers\AdminController@showFormToAddProduct')->name('showAddProduct');
            Route::post('/addProduct', 'App\Http\Controllers\AdminController@addProduct')->name('addProduct');
            Route::get('/showInfoProduct', 'App\Http\Controllers\AdminController@infoProduct')->name('infoProduct');
            Route::get('/editProduct/{id}', 'App\Http\Controllers\AdminController@editProduct')->name('editProduct');
            Route::put('/updateProduct/{id}', 'App\Http\Controllers\AdminController@updateProduct')->name('updateProduct');
            Route::delete('/deleteProduct/{id}', 'App\Http\Controllers\AdminController@deleteProduct')->name('deleteProduct');

            Route::get('/edit/{id}', 'App\Http\Controllers\AdminController@edit')->name('admin.edit');
            Route::put('/update/{id}', 'App\Http\Controllers\AdminController@update')->name('admin.update');

        });
    });
});
Route::get('/product/detail/{id}', 'App\Http\Controllers\indexController@showDetail')->name('detailProduct');
Route::get('/','App\Http\Controllers\indexController@index')->name('index');

Route::get('/products/red-wine', 'App\Http\Controllers\UserController@showRedWines')->name('redWines');

Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login-check');
Route::get('/register', 'App\Http\Controllers\AuthController@showRegister')->name('showRegister');
Route::post('/register', 'App\Http\Controllers\AuthController@register')->name('register');

Route::get('/hello','App\Http\Controllers\indexController@product')->name('product');
Route::get('/testcart','App\Http\Controllers\indexController@cart')->name('cart');
Route::get('/forgotPassword','App\Http\Controllers\indexController@forgotPassword')->name('forgotPassword');
// Route::post('/place-order', 'App\Http\Controllers\UserController@placeOrder')->name('placeOrder');

Route::get('/checkout', 'App\Http\Controllers\UserController@showCheckout')->name('checkout');
Route::post('/place-order', 'App\Http\Controllers\UserController@placeOrder')->name('place-order');
Route::get('/order-success', 'App\Http\Controllers\UserController@orderSuccess')->name('order-success');
Route::get('/products/search', 'App\Http\Controllers\UserController@search')->name('products.search');


Route::get('/paypal-checkout', 'App\Http\Controllers\UserController@showCheckout')->name('paypal-checkout');
Route::post('/paypal-make-payment', 'App\Http\Controllers\UserController@makePayment')->name('paypal-make-payment');
Route::get('/paypal-payment-success', 'App\Http\Controllers\UserController@paymentSuccess')->name('paypal-payment-success');
