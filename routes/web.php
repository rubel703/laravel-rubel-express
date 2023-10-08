<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ErrorPageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FeatureController;
use App\http\Controllers\HowToUseController;
use App\Http\Controllers\backend\AdminDashboardController;
use App\Http\Controllers\backend\AddProductController;
use App\Http\Controllers\backend\WidgetsController;
use App\Http\Controllers\backend\ViewContactController;


//route for clients
Route::get('/', [HomeController::class,'index'])->name('home'); 
Route::get('/about', [AboutController::class,'about'])->name('about');
Route::get('/product', [ProductController::class,'product'])->name('product');
Route::get('/feature', [FeatureController::class,'feature'])->name('feature');
Route::get('/how-to-use', [HowToUseController::class,'how-to-use'])->name('how-to-use');
Route::get('/testimonial', [TestimonialController::class,'testimonial'])->name('testimonial');
Route::get('/blog', [BlogController::class,'blog'])->name('blog');
Route::get('/404-page', [ErrorPageController::class,'404-page'])->name('404-page');
Route::get('/contact', [ContactController::class,'contact'])->name('contact');
Route::POST('/msg', [ContactController::class,'sendmsg'])->name('msg');


//route for admin or backend
Route::get('/dashboard', [AdminDashboardController::class,'AdminDashboard'])->name('dashboard'); 
Route::get('/addProduct', [AddProductController::class,'addProduct'])->name('addProduct');
Route::POST('/pushProduct', [AddProductController::class,'store'])->name('pushProduct');
Route::get('/viewProducts', [AddProductController::class,'viewProduct'])->name('viewProducts');
Route::get('/delete-products/{id}', [AddProductController::class,'destroy'])->name('destroy');
Route::get('/widgets', [WidgetsController::class,'widgets'])->name('widgets');
Route::get('/view-contact',[ViewContactController::class,'viewAllContact'])->name('view-contact');
Route::get('/delete-message/{id}',[ViewContactController::class,'destroyMessage'])->name('delete-message');
Route::get('/edit-products/{id}', [AddProductController::class,'edit'])->name('edit');
Route::POST('/update-products/{id}', [AddProductController::class,'update'])->name('update');
Route::get('/details-products/{id}', [AddProductController::class,'details'])->name('details');