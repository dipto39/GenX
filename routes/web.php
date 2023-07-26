<?php

use App\Http\Controllers\backend\aboutController;
use App\Http\Controllers\backend\brandController;
use App\Http\Controllers\backend\categoryController;
use App\Http\Controllers\backend\couponController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\productController;
use App\Http\Controllers\backend\settingController;
use App\Http\Controllers\backend\shippingController;
use App\Http\Controllers\backend\unitController;
use App\Http\Controllers\backend\ProvidersController;
use App\Http\Controllers\backend\serviceController;
use App\Http\Controllers\backend\sliderController;
use App\Http\Controllers\backend\topcController;
use App\Http\Controllers\frontend\ChartController;
use App\Http\Controllers\frontend\indexController;
use App\Http\Controllers\frontend\loginController as FrontendLoginController;
use App\Http\Controllers\frontend\ProfileController;
use App\Http\Controllers\frontend\SectionController;
use App\Http\Middleware\LoginCheck as MiddlewareLoginCheck;
use App\Models\shipping;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/', [indexController::class,'index']);
// search
Route::get('/search', [indexController::class,'gotosearch']);

Route::group(['middleware' => 'userLogin'],function(){
   // Login View
        Route::get('/login', [FrontendLoginController::class,'index'])->name('frontend_login');
        Route::post('/login', [FrontendLoginController::class,'loginUser']);
        Route::get('/signup', [FrontendLoginController::class,'signup']);
        Route::post('/signup', [FrontendLoginController::class,'storeUser']);
});

// show Cart
Route::get('/cart', [ChartController::class,'index'])->name('cart');
 // Category View
 Route::get('/category/{cname}',[SectionController::class,'getCategory']);
 // single Product view
 Route::get('/product/{cname}',[SectionController::class,'singleProduct']);

Route::group(['middleware' => 'userLogout'],function(){

    // Show Profile 
    Route::get('/profile', [ProfileController::class,'index'])->name('profile');
    Route::get('/address', [ProfileController::class,'getAddress'])->name('address');
    Route::get('/address/add', [ProfileController::class,'getAddress'])->name('address');
    Route::post('/orders', [ProfileController::class,'orders'])->name('frontend_orders');
    Route::get('/checkout', [ChartController::class,'checkout'])->name('checkout');
    Route::post('/checkout', [ChartController::class,'postcheckout']);


    // Get Shipping Charge by Ajax call
    Route::post('/getShippingCarge/{id}', [ChartController::class,'getShipping']);
    Route::post('/getPaymetMethod/{id}', [ChartController::class,'getPaymentMethod']);

    // Logout user
    Route::get('/logout', [FrontendLoginController::class,'logout']);
});



// Brand View

Route::get('/brand', function () {
    return view('frontend.brand');
});

// Solutions View

Route::get('/solutions', function () {
    return view('frontend.solutions');
});

// About View

Route::get('/about', function () {
    return view('frontend.about');
});

// Sell View

Route::get('/sell_on_genx', function () {
    return view('frontend.sell');
});


// Backend Routes


// DashBoard View
Route::group(['prefix' => '/admin','middleware' => 'logout'],function(){

        // login page
        Route::get('/login',function(){
            return view('backend.login');
        })->name('login');
        Route::post('/login',[LoginController::class,'index']);
    

});
Route::get('/admin/logout',[LoginController::class,'logout']);
Route::group(['prefix' => '/admin','middleware' => 'login'], function () {


    Route::get('/', function () {
        return view('backend.dashboard');
    })->name('dashboard');
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    });

    // Categories View


    Route::get('/categories', [categoryController::class, "categories"])->name('categories');

    // Add Categories
    Route::get('/categories/add', [categoryController::class, 'addcategory'])->name('addcate');

    // Store Categories
    Route::post('/categories/store', [categoryController::class, "storecategory"])->name('storecate');

    // Edit Category
    Route::get('/categories/edit/{id}', [categoryController::class, 'eidtcategory'])->name('editcate');

    // update Category 
    Route::post('/categories/update/{id}', [categoryController::class, 'updatecategory'])->name('updatecate');

    // Delete Category
    Route::get('/categories/delete/{id}', [categoryController::class, 'deletecategory'])->name('deletecate');



    // Add subCategories
    Route::get('/subcategories/add', [categoryController::class, 'addsubcategory'])->name('addsubcate');

    // Store subCategories
    Route::post('/subcategories/store', [categoryController::class, "storesubcategory"])->name('storesubcate');

    // Edit SubCategory
    Route::get('/subcategories/edit/{id}', [categoryController::class, 'eidtsubcategory'])->name('editsubcate');

    // update SubCategory 
    Route::post('/subcategories/update/{id}', [categoryController::class, 'updatesubcategory'])->name('updatesubcate');

    // Delete SubCategory
    Route::get('/subcategories/delete/{id}', [categoryController::class, 'deletesubcategory'])->name('deletesubcate');

    // Brands View

    Route::get('/brands', [brandController::class, "index"])->name('brands');

    // Add Brand
    Route::get('/brands/add', [brandController::class, 'addbrand'])->name('addbrand');

    // Store Brand
    Route::post('/brands/store', [brandController::class, "storebrand"])->name('storebrand');

    // Edit brand
    Route::get('/brands/edit/{id}', [brandController::class, 'editbrand'])->name('editbrand');

    // update brand 
    Route::post('/brands/update/{id}', [brandController::class, 'updatebrand'])->name('updatebrand');

    // Delete brand
    Route::get('/brands/delete/{id}', [brandController::class, 'deletebrand'])->name('deletebrand');
    // Change Status
    Route::post('/brands/status/{id}', [brandController::class, 'change_status'])->name('change_status');


    // About Us View

    Route::get('/about', [aboutController::class, "index"])->name('about');

    // Add Brand
    Route::get('/about/add', [aboutController::class, 'addabout'])->name('addabout');

    // Store about
    Route::post('/about/store', [aboutController::class, "storeabout"])->name('storeabout');

    // Edit about
    Route::get('/about/edit/{id}', [aboutController::class, 'editabout'])->name('editabout');

    // update about 
    Route::post('/about/update/{id}', [aboutController::class, 'updateabout'])->name('updateabout');

    // Delete about
    Route::get('/about/delete/{id}', [aboutController::class, 'deleteabout'])->name('deleteabout');
    // Change Status
    Route::post('/about/status/{id}', [aboutController::class, 'change_status'])->name('change_status');


    // Sliders View

    Route::get('/sliders', [sliderController::class, "index"])->name('sliders');

    // Add slider
    Route::get('/slider/add', [sliderController::class, 'addslider'])->name('addslider');

    // Store slider
    Route::post('/slider/store', [sliderController::class, "storeslider"])->name('storeslider');

    // Edit slider
    Route::get('/slider/edit/{id}', [sliderController::class, 'editslider'])->name('editslider');

    // update slider 
    Route::post('/slider/update/{id}', [sliderController::class, 'updateslider'])->name('updateslider');

    // Delete slider
    Route::get('/slider/delete/{id}', [sliderController::class, 'deleteslider'])->name('deleteslider');
    // Change Status
    Route::post('/slider/status/{id}', [sliderController::class, 'change_status'])->name('change_slider_status');


    // Top category view
    Route::get('/topcategory', [topcController::class, "index"])->name('topCategory');
    Route::post('/topcategory/store', [topcController::class, "storetcategory"])->name('storetopCategory');
    Route::post('/topcategory/update/{id}', [topcController::class, "updatetcategory"])->name('updatetopCategory');

    // service View

    Route::get('/services', [serviceController::class, "index"])->name('services');

    // Add service
    Route::get('/service/add', [serviceController::class, 'addservice'])->name('addservice');

    // Store service
    Route::post('/service/store', [serviceController::class, "storeservice"])->name('storeservice');

    // Edit service
    Route::get('/service/edit/{id}', [serviceController::class, 'editservice'])->name('editservice');

    // update service 
    Route::post('/service/update/{id}', [serviceController::class, 'updateservice'])->name('updateservice');

    // Delete service
    Route::get('/service/delete/{id}', [serviceController::class, 'deleteservice'])->name('deleteservice');
    // Change Status
    Route::post('/service/status/{id}', [serviceController::class, 'change_status'])->name('change_service_status');


    // Products View

    Route::get('/products', [productController::class, "index"])->name('products');

    // Add product
    Route::get('/product/add', [productController::class, 'addproduct'])->name('addproduct');

    // // Store product
    Route::post('/product/store', [productController::class, "storeproduct"])->name('storeproduct');

    // // Edit product
    Route::get('/product/edit/{id}', [productController::class, 'editproduct'])->name('editproduct');

    // // update product 
    Route::post('/product/update/{id}', [productController::class, 'updateproduct'])->name('updateproduct');

    // // Delete product
    Route::get('/product/delete/{id}', [productController::class, 'deleteproduct'])->name('deleteproduct');

    // Change Status

    Route::post('/product/status/{id}', [productController::class, 'change_status'])->name('change_product_status');

    // filter & Search 
    Route::post('/product/filter/{val}', [productController::class, 'filter'])->name('filter_products');



    // Units View



    Route::get('/units', [unitController::class, "index"])->name('units');

    // Add unit
    Route::get('/unit/add', [unitController::class, 'addunit'])->name('addunit');

    // Store unit
    Route::post('/unit/store', [unitController::class, "storeunit"])->name('storeunit');

    // Edit unit
    Route::get('/unit/edit/{id}', [unitController::class, 'editunit'])->name('editunit');

    // update unit 
    Route::post('/unit/update/{id}', [unitController::class, 'updateunit'])->name('updateunit');

    // Delete unit
    Route::get('/unit/delete/{id}', [unitController::class, 'deleteunit'])->name('deleteunit');



    // Coupons View

    Route::get('/coupons', [couponController::class, "index"])->name('coupons');

    // Add coupon
    Route::get('/coupon/add', [couponController::class, 'addcoupon'])->name('addcoupon');

    // Store coupon
    Route::post('/coupon/store', [couponController::class, "storecoupon"])->name('storecoupon');

    // Edit coupon
    Route::get('/coupon/edit/{id}', [couponController::class, 'editcoupon'])->name('editcoupon');

    // update coupon 
    Route::post('/coupon/update/{id}', [couponController::class, 'updatecoupon'])->name('updatecoupon');

    // Delete coupon
    Route::get('/coupon/delete/{id}', [couponController::class, 'deletecoupon'])->name('deletecoupon');
    // Change Status
    Route::post('/coupon/status/{id}', [couponController::class, 'change_status'])->name('change_status');



    // Orders View

     Route::get('/orders', [OrderController::class, "index"])->name('orders');

     // See single Order
     Route::get('/order/print/{id}', [OrderController::class, "orderPrint"])->name('OrderPrint');

      // Store coupon
    Route::post('/order/view/{id}', [OrderController::class, "ViewOrder"])->name('OrderView');

    // Users View

    Route::get('/users', function () {
        return view('backend.users');
    });



    // Shipping Charge View

   
    Route::get('/shipping/charge', [shippingController::class, "index"])->name('shipping');

    // Add shipping
    Route::get('/shipping/add', [shippingController::class, 'addshipping'])->name('addshipping');

    // Store shipping
    Route::post('/shipping/store', [shippingController::class, "storeshipping"])->name('storeshipping');

    // Edit shipping
    Route::get('/shipping/edit/{id}', [shippingController::class, 'editshipping'])->name('editshipping');

    // update shipping 
    Route::post('/shipping/update/{id}', [shippingController::class, 'updateshipping'])->name('updateshipping');

    // Change Status
    Route::post('/shipping/allowcod/{id}', [shippingController::class, 'change_allowcod'])->name('change_allowcod');

    // Shipping Providers View

   
    Route::get('/providers', [ProvidersController::class, "index"])->name('providers');

    // Add provider
    Route::get('/provider/add', [ProvidersController::class, 'addprovider'])->name('addprovider');

    // Store provider
    Route::post('/provider/store', [ProvidersController::class, "storeprovider"])->name('storeprovider');

    // Edit provider
    Route::get('/provider/edit/{id}', [ProvidersController::class, 'editprovider'])->name('editprovider');

    // update provider 
    Route::post('/provider/update/{id}', [ProvidersController::class, 'updateprovider'])->name('updateprovider');

    // Delete provider
    Route::get('/provider/delete/{id}', [ProvidersController::class, 'deleteprovider'])->name('deleteprovider');
    // Change Status
    Route::post('/provider/status/{id}', [ProvidersController::class, 'change_status'])->name('change_provider_status');


    // Setting View

    Route::get('/setting', [settingController::class, "index"])->name('setting');
    Route::post('/setting/add', [settingController::class, "storeSetting"])->name('storeSetting');
    Route::post('/setting/update/{id}', [settingController::class, "updateSetting"])->name('UpdateSetting');

    // Update admin Password

    Route::post('/updatepass/{id}', [settingController::class, "updatepass"])->name('updatepass');
});
