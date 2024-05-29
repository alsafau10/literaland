<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;
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

route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/home',[AdminController::class, 'index']);


// get routers
route::get('/category_page',[AdminController::class, 'category_page']);
route::get('/cat_delete/{id}',[AdminController::class, 'cat_delete']);
route::get('/edit_data/{id}',[AdminController::class, 'edit_data']);
route::get('/add_book',[AdminController::class, 'add_book']);
route::get('/show_book',[AdminController::class, 'show_book']);
route::get('/delete_book/{id}',[AdminController::class, 'delete_book']);
route::get('/edit_book/{id}',[AdminController::class, 'edit_book']);
route::get('details/{id}',[AdminController::class, 'details']);
// post route
route::post('/add_category',[AdminController::class, 'add_category']);
route::post('/update_category/{id}',[AdminController::class, 'update_category']);
route::post('/store_book',[AdminController::class, 'store_book']);
route::post('/update_book/{id}',[AdminController::class, 'update_book']);