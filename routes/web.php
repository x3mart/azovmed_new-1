<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AdminsHomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RobotTxtController;
use App\Http\Controllers\SendBidController;
use App\Http\Controllers\ShowProductController;
use App\Http\Controllers\ShowCategoryController;
use App\Http\Controllers\SiteMapController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/category/{catAlias}/item/{productAlias}', ShowProductController::class)->name('product');
Route::get('/category/{catAlias}', ShowCategoryController::class)->name('category');
Route::post('/sendBid', ['before' => 'csrf', SendBidController::class, '__invoke']);
Route::get('/sitemap.xml', SiteMapController::class);
Route::get('robots.txt', RobotTxtController::class);
Route::get('register');
Route::post('register');

Route::group([
    'namespace' => '',
    'prefix' => 'admin',
    'middleware' => 'auth',
    'as' => ''
], function () {
    Route::get('/', AdminsHomeController::class)->name('admin');
    Route::resource('product', ProductController::class)->except(['destroy', 'index', 'show']);
    Route::resource('category', CategoryController::class)->only(['create', 'store']);
    Route::get('admin/product/{product}/delete',[ProductController::class, 'delete'])->name('product.delete');
    Route::get('image/{image}/delete', [ImageController::class, 'destroy'])->name('image.delete');
    Route::post('ajax/product/position', [ProductController::class, 'ajaxProductPosition'])->name('ajax.productPosition');
});


