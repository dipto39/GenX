<?php

use App\Http\Controllers\backendController;
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

Route::get('/admin/dashboard', function () {
    return view('backend.dashboard');
});

// Categories View


Route::get('/admin/categories', [backendController::class,"categories"])->name('categories');

// Add Categories
Route::get('/admin/categories/add', [backendController::class,'addcategory'])->name('addcate');

// Store Categories
Route::post('/admin/categories/store', [backendController::class,"storecategory"])->name('storecate');

// Edit Category
Route::get('/admin/categories/edit/{id}', [backendController::class,'eidtcategory'])->name('editcate');

// update Category 
Route::post('/admin/categories/update/{id}', [backendController::class,'updatecategory'])->name('updatecate');

// Delete Category
Route::get('/admin/categories/delete/{id}', [backendController::class,'deletecategory'])->name('deletecate');



// Add subCategories
Route::get('/admin/subcategories/add', [backendController::class,'addsubcategory'])->name('addsubcate');

// Store subCategories
Route::post('/admin/subcategories/store', [backendController::class,"storesubcategory"])->name('storesubcate');

// Edit SubCategory
Route::get('/admin/subcategories/edit/{id}', [backendController::class,'eidtsubcategory'])->name('editsubcate');

// update SubCategory 
Route::post('/admin/subcategories/update/{id}', [backendController::class,'updatesubcategory'])->name('updatesubcate');

// Delete SubCategory
Route::get('/admin/subcategories/delete/{id}', [backendController::class,'deletesubcategory'])->name('deletesubcate');

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



