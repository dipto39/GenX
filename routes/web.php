<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Routes

// Index view

Route::get('/', function () {
    return view('frontend.index');
});

// Brand View

Route::get('/brand',function(){
    return view('frontend.brand');
});

// Solutions View

Route::get('/solutions',function(){
    return view('frontend.solutions');
});

// About View

Route::get('/about',function(){
    return view('frontend.about');
});

// Sell View

Route::get('/sell_on_genx',function(){
    return view('frontend.sell');
});


// Backend Routes

// DashBoard View

Route::get('/admin/dashboard', function () {
    return view('backend.dashboard');
});

// Categories View

Route::get('/admin/categories', function () {
    return view('backend.categories');
});

// Brands View

Route::get('/admin/brands', function () {
    return view('backend.brands');
});

// About Us View

Route::get('/admin/about', function () {
    return view('backend.about');
});

// Sliders View

Route::get('/admin/sliders', function () {
    return view('backend.sliders');
});

// Products View

Route::get('/admin/products', function () {
    return view('backend.productlist');
});

// Units View

Route::get('/admin/products/units', function () {
    return view('backend.units');
});

// Sliders View

Route::get('/admin/sliders', function () {
    return view('backend.sliders');
});

// Coupons View

Route::get('/admin/coupons', function () {
    return view('backend.coupone');
});

// Orders View

Route::get('/admin/orders', function () {
    return view('backend.order');
});

// Users View

Route::get('/admin/users', function () {
    return view('backend.users');
});

// Shipping Charge View

Route::get('/admin/shipping/charge', function () {
    return view('backend.shippingCharge');
});

// Shipping Providers View

Route::get('/admin/shipping/providers', function () {
    return view('backend.shippingProviders');
});

// Setting View

Route::get('/admin/setting', function () {
    return view('backend.setting');
});



