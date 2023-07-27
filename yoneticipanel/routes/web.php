<?php

use App\Http\Controllers\Blogs\BlogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeGetController;
use App\Http\Controllers\Menus\MenusController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Settings\SettingsController;
use App\Http\Controllers\Sliders\SlidersController;
use App\Http\Controllers\Users\UsersController;
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

Route::get('/',[Controller::class,'laravel']);

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::prefix("admin")->group(function(){
    Route::get('/home',[HomeGetController::class,'index'])->name('index');

    Route::get('/blogs',[BlogController::class,'getBlogs'])->name('blogs');
    Route::get('/blog-add',[BlogController::class,'getBlogsAdd'])->name('blog-add');
    Route::get('/blog-edit',[BlogController::class,'getBlogsEdit'])->name('blog-edit');
    Route::get('/blog-category',[BlogController::class,'getBlogsCategory'])->name('blog-category');
    Route::get('/blog-category-add',[BlogController::class,'getBlogsCategoryAdd'])->name('blog-category-add');
    Route::get('/blog-category-edit',[BlogController::class,'getBlogsCategoryEdit'])->name('blog-category-edit');

    Route::get('/menus',[MenusController::class,'getMenus'])->name('menus');
    Route::get('/menu-add',[MenusController::class,'getMenusAdd'])->name('menu-add');
    Route::get('/menu-edit/{menuId}',[MenusController::class,'getMenusEdit'])->name('menu-edit');
    Route::post('/menus',[MenusController::class,'postMenus'])->name('menus');
    Route::post('/menu-add-post',[MenusController::class,'postMenusAdd'])->name('menu-add-post');
    Route::post('/menu-edit-post/{menuId}',[MenusController::class,'postMenusEdit'])->name('menu-edit-post');
    Route::get('/menu-delete/{menuId}',[MenusController::class,'menusDelete'])->name('menu-delete');

    Route::get('/pages',[PagesController::class,'getPages'])->name('pages');
    Route::get('/page-add',[PagesController::class,'getPagesAdd'])->name('page-add');
    Route::get('/page-edit',[PagesController::class,'getPagesEdit'])->name('page-edit');
    Route::post('/pages',[PagesController::class,'postPages'])->name('pages');
    Route::post('/page-add-post',[PagesController::class,'postPagesAdd'])->name('page-add-post');
    Route::post('/page-edit-post',[PagesController::class,'postPagesEdit'])->name('page-edit-post');

    Route::get('/sliders',[SlidersController::class,'getSliders'])->name('sliders');
    Route::get('/slider-add',[SlidersController::class,'getSlidersAdd'])->name('slider-add');
    Route::get('/slider-edit',[SlidersController::class,'getSlidersEdit'])->name('slider-edit');

    Route::get('/users',[UsersController::class,'getUsers'])->name('users');
    Route::get('/user-add',[UsersController::class,'getUsersAdd'])->name('users-add');
    Route::get('/user-edit',[UsersController::class,'getUsersEdit'])->name('users-edit');

    Route::get('/settings',[SettingsController::class,'getSettings'])->name('settings');
    Route::get('/setting-edit',[SettingsController::class,'getSettingsEdit'])->name('setting-edit');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
