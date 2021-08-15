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


Route::get('/',function(){
    return view('site.index');
})->name('home');
Route::get('/category/{name}',function(){
    return view('site.subcategory');
})->name('subcategory');
Route::get('/subcategory/details',function(){
    return view('site.categoryDetails');
})->name('subcategory.details');
Route::get('/product/details',function(){
    return view('site.productDetails');
})->name('product.details');

Route::get('/wishlist',function(){
    return view('site.wishlist');
})->name('wishlist');
Route::get('/subscription',function(){
    return view('site.subscription');
})->name('subscription');

Route::get('/login',function(){
    return view('site.login');
})->name('login');

Route::get('/register/info',function(){
    return view('site.registerInfo');
})->name('register.info');

Route::get('/register/subscription',function(){
    return view('site.registerSubscription');
})->name('register.subscription');

Route::get('/register/address',function(){
    return view('site.registerAddress');
})->name('register.address');

Route::get('/register/social',function(){
    return view('site.registerSocial');
})->name('register.social');

Route::get('/profile/maintenance', function () {
    return view('site.profileMaintenance');
})->name('profile/maintenance');
Route::get('/profile/seller', function () {
    return view('site.profileSeller');
})->name('profile/seller');


Route::get('/admin', function () {
    return view('admin.home');
});

Route::resource('admins','Admin\AdminController'); //1
Route::resource('advandages','Admin\AdvandageController'); //2 done
Route::resource('carsRentals','Admin\CarsRentalProductController'); //2
Route::resource('categories','Admin\CategoryController'); //done
Route::resource('cities','Admin\CityController'); //done
Route::resource('districts','Admin\DistrictController'); //done
Route::resource('fuelTypes','Admin\FuelTypeController'); //done
Route::resource('gearboxes','Admin\GearboxController'); //done
Route::resource('maintenanceCenters','Admin\MaintenanceCenterController'); //done
Route::resource('makes','Admin\MakeController'); //done
Route::resource('products','Admin\ProductController'); //2
Route::resource('profileMaintenance','Admin\ProfileMaintenanceController'); //1
Route::resource('sections','Admin\SectionController'); //done
Route::resource('sellTypes','Admin\SellTypeController'); //done
Route::resource('specializations','Admin\SpecializationController'); //2 done
Route::resource('statuses','Admin\StatusController'); //2 done
Route::resource('subcategories','Admin\SubcategoryController'); //2 done
Route::resource('subsriptions','Admin\SubsriptionController'); //1
Route::resource('typeCategories','Admin\TypeCategoryController'); //2 done
Route::resource('users','Admin\UsersController'); //1