<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\BookController;
use App\Http\Controllers\User\RegisterUserController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\ProfileUserController;
use App\Http\Controllers\User\PublicUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\ReservationController;

use App\Http\Controllers\ContactUsFormController;
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
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('admin.welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
Route::middleware(['auth','verified','admin'])->name('admin.')->prefix('admin')->group(function()
{
Route::get('/',[AdminController::class,'index'])->name('index');
Route::resource('/users',UserController::class);
Route::resource('/activity',ActivityController::class);
Route::resource('/reservation',ReservationController::class);
});
require __DIR__.'/auth.php';



Route::get('/contact', [ContactUsFormController::class, 'destroy'])->name('contact.destroy');
Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('contact.createForm');

// Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

// ________________________


// // Route::get('/contactus',function () {
// //     return view('contactus');
// // });
// Route::get('/contact', [ContactUsFormController::class, 'destroy'])->name('contact.destroy');

// Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('contact.createForm');

// // Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');


// Route::get('home', function () {
//     return view('welcomeuser');
// });
// Route::get('about', function () {
//     return view('about');
// });
// // Route::get('contact', function () {
// //     return view('contact');
// // });
// Route::get('profile', function () {
//     return view('profile');
// });
// Route::get('book', function () {
//     return view('book');
// });
// Route::get('single', function () {
//     return view('single');
// });

// ________________________________________________
// Route::get('/gg',[PublicUserController::class,'index'])->name('index');
Route::prefix('user')->name('user.')->group(function () {



    Route::get('/',[PublicUserController::class,'index'])->name('index');
    
    Route::get('/about',function(){
        return view('about');
    })->name('about');
    
    Route::get('/contact',function(){
        return view('publicUser.contact');
    })->name('contact');
    
    Route::resource('/signup',RegisterUserController::class);
    // Route::post('/search' , [Search::class , 'search'])->name('search');
    Route::get('/login',[LoginUserController::class,'index'])->name('login');
    Route::get('/login/check',[LoginUserController::class,'LoginPost'])->name('login.check');
    Route::get('/login/destroy',[LoginUserController::class,'destroy'])->name('login.destroy');
    
    Route::resource('/profile',ProfileUserController::class);
    
    
    Route::get('/activity_details/{id}',[ActivityDetailsController::class,'index'])->name('activity.details');


    Route::get('/booking/{id}', [BookController::class, 'index'])->name('book')->middleware('CheckLogin');
    Route::get('/booking/create/{id}',[BookController::class,'create'])->name('book.create')->middleware('CheckLogin');
    
    });


