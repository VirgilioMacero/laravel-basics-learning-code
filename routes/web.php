<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

/*One Way to do it*/

/*

Route::get('/', [PageController::class,'home'])->name('home');


Route::get('/blog', [PageController::class,'blog'])->name('blog');



Route::get('/blog/{slug}',[PageController::class,'post'])->name('post');

*/


/*The rigth wy to do it and make it fast*/

Route::controller(PageController::class)->group(function(){

    Route::get('/','home')->name('home');

    Route::get('blog','blog')->name('blog');

    Route::get('blog/{post:slug}','post')->name('post');

});


/*if you want to reuse a route you will have to put an ending ->name() tag*/

Route::get('buscar',function(Request $request){

    return $request->all();

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('posts',PostController::class)->except(['show']);

require __DIR__.'/auth.php';
