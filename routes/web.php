<?php

use App\Http\Controllers\backend\brandController;
use App\Http\Controllers\backend\categoryController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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

Route::get('/admin', function () {
    return view('backend.dashboard');
});
Route::get('/admin/dashboard', function () {
    return view('backend.dashboard');
});

// Categories View


        Route::get('/admin/categories', [categoryController::class,"categories"])->name('categories');

        // Add Categories
        Route::get('/admin/categories/add', [categoryController::class,'addcategory'])->name('addcate');

        // Store Categories
        Route::post('/admin/categories/store', [categoryController::class,"storecategory"])->name('storecate');

        // Edit Category
        Route::get('/admin/categories/edit/{id}', [categoryController::class,'eidtcategory'])->name('editcate');

        // update Category 
        Route::post('/admin/categories/update/{id}', [categoryController::class,'updatecategory'])->name('updatecate');

        // Delete Category
        Route::get('/admin/categories/delete/{id}', [categoryController::class,'deletecategory'])->name('deletecate');



        // Add subCategories
        Route::get('/admin/subcategories/add', [categoryController::class,'addsubcategory'])->name('addsubcate');

        // Store subCategories
        Route::post('/admin/subcategories/store', [categoryController::class,"storesubcategory"])->name('storesubcate');

        // Edit SubCategory
        Route::get('/admin/subcategories/edit/{id}', [categoryController::class,'eidtsubcategory'])->name('editsubcate');

        // update SubCategory 
        Route::post('/admin/subcategories/update/{id}', [categoryController::class,'updatesubcategory'])->name('updatesubcate');

        // Delete SubCategory
        Route::get('/admin/subcategories/delete/{id}', [categoryController::class,'deletesubcategory'])->name('deletesubcate');

// Brands View

        Route::get('/admin/brands', [brandController::class,"index"])->name('brands');

        // Add Brand
        Route::get('/admin/brands/add', [brandController::class,'addbrand'])->name('addbrand');

        // Store Brand
        Route::post('/admin/brands/store', [brandController::class,"storebrand"])->name('storebrand');

        // Edit brand
        Route::get('/admin/brands/edit/{id}', [brandController::class,'eidtbrand'])->name('editbrand');

        // update brand 
        Route::post('/admin/brands/update/{id}', [brandController::class,'updatebrand'])->name('updatebrand');

        // Delete brand
        Route::get('/admin/brands/delete/{id}', [brandController::class,'deletebrand'])->name('deletebrand');


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



