<?php

use App\Http\Controllers\backend\aboutController;
use App\Http\Controllers\backend\brandController;
use App\Http\Controllers\backend\categoryController;
use App\Http\Controllers\backend\couponController;
use App\Http\Controllers\backend\productController;
use App\Http\Controllers\backend\settingController;
use App\Http\Controllers\backend\unitController;
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
        Route::get('/admin/brands/edit/{id}', [brandController::class,'editbrand'])->name('editbrand');

        // update brand 
        Route::post('/admin/brands/update/{id}', [brandController::class,'updatebrand'])->name('updatebrand');

        // Delete brand
        Route::get('/admin/brands/delete/{id}', [brandController::class,'deletebrand'])->name('deletebrand');
        // Change Status
        Route::post('/admin/brands/status/{id}', [brandController::class,'change_status'])->name('change_status');


// About Us View

        Route::get('/admin/about', [aboutController::class,"index"])->name('about');

        // Add Brand
        Route::get('/admin/about/add', [aboutController::class,'addabout'])->name('addabout');

        // Store about
        Route::post('/admin/about/store', [aboutController::class,"storeabout"])->name('storeabout');

        // Edit about
        Route::get('/admin/about/edit/{id}', [aboutController::class,'editabout'])->name('editabout');

        // update about 
        Route::post('/admin/about/update/{id}', [aboutController::class,'updateabout'])->name('updateabout');

        // Delete about
        Route::get('/admin/about/delete/{id}', [aboutController::class,'deleteabout'])->name('deleteabout');
        // Change Status
        Route::post('/admin/about/status/{id}', [aboutController::class,'change_status'])->name('change_status');


// Sliders View

Route::get('/admin/sliders', function () {
    return view('backend.sliders');
});

// Products View

        Route::get('/admin/products',[productController::class,"index"])->name('products');

        // Add product
        Route::get('/admin/product/add', [productController::class,'addproduct'])->name('addproduct');

        // // Store product
        Route::post('/admin/product/store', [productController::class,"storeproduct"])->name('storeproduct');

        // // Edit product
        Route::get('/admin/product/edit/{id}', [productController::class,'editproduct'])->name('editproduct');

        // // update product 
        Route::post('/admin/product/update/{id}', [productController::class,'updateproduct'])->name('updateproduct');

        // // Delete product
        Route::get('/admin/product/delete/{id}', [productController::class,'deleteproduct'])->name('deleteproduct');

        // Change Status

        Route::post('/admin/product/status/{id}', [productController::class,'change_status'])->name('change_product_status');
        
        // filter & Search 
        Route::post('/admin/product/filter/{val}', [productController::class,'filter'])->name('filter_products');

// Units View

        Route::get('/admin/units',[unitController::class,"index"])->name('units');

        // Add unit
        Route::get('/admin/unit/add', [unitController::class,'addunit'])->name('addunit');

        // Store unit
        Route::post('/admin/unit/store', [unitController::class,"storeunit"])->name('storeunit');

        // Edit unit
        Route::get('/admin/unit/edit/{id}', [unitController::class,'editunit'])->name('editunit');

        // update unit 
        Route::post('/admin/unit/update/{id}', [unitController::class,'updateunit'])->name('updateunit');

        // Delete unit
        Route::get('/admin/unit/delete/{id}', [unitController::class,'deleteunit'])->name('deleteunit');



// Sliders View

Route::get('/admin/sliders', function () {
    return view('backend.sliders');
});

// Coupons View

        Route::get('/admin/coupons', [couponController::class,"index"])->name('coupons');

        // Add coupon
        Route::get('/admin/coupon/add', [couponController::class,'addcoupon'])->name('addcoupon');

        // Store coupon
        Route::post('/admin/coupon/store', [couponController::class,"storecoupon"])->name('storecoupon');

        // Edit coupon
        Route::get('/admin/coupon/edit/{id}', [couponController::class,'editcoupon'])->name('editcoupon');

        // update coupon 
        Route::post('/admin/coupon/update/{id}', [couponController::class,'updatecoupon'])->name('updatecoupon');

        // Delete coupon
        Route::get('/admin/coupon/delete/{id}', [couponController::class,'deletecoupon'])->name('deletecoupon');
        // Change Status
        Route::post('/admin/coupon/status/{id}', [couponController::class,'change_status'])->name('change_status');

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

Route::get('/admin/setting',[settingController::class,"index"])->name('setting');
Route::post('/admin/setting/add',[settingController::class,"storeSetting"])->name('storeSetting');
Route::post('/admin/setting/update/{id}',[settingController::class,"updateSetting"])->name('UpdateSetting');

// Update admin Password

Route::post('/admin/updatepass/{id}',[settingController::class,"updatepass"])->name('updatepass');



// test route
// Route::post('/admin/test/{data?}',[productController::class,"test"])->name('testdata');
