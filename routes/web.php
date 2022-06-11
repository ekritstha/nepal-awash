<?php

use App\Http\Controllers\Backend\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

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

Route::group([
    'namespace' => 'Backend',
    'middleware' => ['auth'],
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    foreach (config('custom.menu') as $menu) {
        Route::resource($menu['slug'], str_replace(' ', '', ucwords(str_replace("-", " ", $menu['slug']) . 'Controller')));
    }
    Route::post('gallery/store-image/{id}', 'GalleryController@storeImage')->name('gallery.store-image');
    Route::delete('gallery/destroy', 'GalleryController@destroy')->name('gallery.destroy');
    Route::get('gallery/get-images/{id}', 'GalleryController@getImages')->name('gallery.get-images');
});

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/property', [FrontendController::class, 'property'])->name('property');
Route::get('/property/{slug}', [FrontendController::class, 'singleProperty'])->name('single-property');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [FrontendController::class, 'singleBlog'])->name('single-blog');
Route::get('/{slug}', [FrontendController::class, 'extra'])->name('link-page');

Route::post('/send-mail', [FrontendController::class, 'sendMail'])->name('sendmail');
