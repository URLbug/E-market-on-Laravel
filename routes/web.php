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

/*
 * Home and other
 */

Route::get(
    '/',
    '\App\Http\Controllers\HomeController@index'
)->name('home');

Route::get('/about', function() {
    return view('content.about');
})->name('about');

Route::get('/contact', function() {
   return view('content.contact');
})->name('contact');

/*
 * Login route
 */
Route::get(
    '/login',
    '\App\Http\Controllers\login\LoginController@index_login'
)->name('login');

Route::post(
    '/login',
    '\App\Http\Controllers\login\LoginController@login'
);

/*
 * Register route
 */
Route::get('/register', function(){
    return view('content.user.register');
})->name('register');


/*
 * Shop page
 */
Route::prefix('shop')->group(function(){
    Route::get('/', function() {
        return view('content.shop.index');
    })->name('shop_list');

    Route::get('/{name}/{id}', function(string $name, string $id) {
        return view('content.shop.detail');
    })->name('shop_detail');
});

/*
 * Blog page
 */
Route::prefix('blog')->group(function() {
    Route::get('/', function() {
        return view('content.blog.index');
    })->name('blog_list');

    Route::get('/{name}/{id}', function(string $name, string $id) {
        return view('content.blog.detail');
    })->name('blog_detail');
});

/*
 * User page
 */
Route::prefix('user')
    ->middleware('auth')
    ->middleware([\App\Http\Middleware\IsUserAccount::class])
    ->group(function() {
        Route::get('account/{name}', function(string $name){
            return view('content.user.index');
        })->name('home_user');

        Route::get(
            '/logout',
            '\App\Http\Controllers\login\LoginController@logout'
        )->name('logout');

        Route::get('/{name}/wishlist', function(string $name) {
            return view('content.user.basket.wish');
        })->name('wishlist');

        Route::get('/{name}/checkout', function(string $name){
           return view('content.user.basket.checkout');
        })->name('basket');
    });
