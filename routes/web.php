<?php

use App\Http\Controllers\Admin_auth;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\front\Posts;
use Illuminate\Support\Facades\Route;


// Front Routes
Route::get('/', [Posts::class, 'home']);
Route::get('/post/{id}', [Posts::class, 'post']);
Route::get('/page/{id}', [Posts::class, 'page']);

// Admin login and logout
Route::view('/admin/login', 'admin/login');
Route::post('/admin/login_submit', [Admin_auth::class, 'login_submit']);

Route::get('/admin/logout', function () {
    session()->forget('BLOG_USER_ID');
    return redirect('admin/login');
});

Route::group(['middleware' => ['admin_auth']], function () {
    // Post routes
    Route::get('/admin/post/list', [PostController::class, 'listing']);
    Route::view('/admin/post/add', 'admin.post.add');
    Route::post('/admin/post/submit', [PostController::class, 'submit']);
    Route::get('/admin/post/delete/{id}', [PostController::class, 'delete']);
    Route::get('/admin/post/edit/{id}', [PostController::class, 'edit']);
    Route::post('/admin/post/update/{id}', [PostController::class, 'update']);
    Route::get('/admin/post/status/{status}/{id}', [PostController::class, 'status']);

    // Page routes
    Route::get('/admin/page/list', [PageController::class, 'listing']);
    Route::view('/admin/page/add', 'admin.page.add');
    Route::post('/admin/page/submit', [PageController::class, 'submit']);
    Route::get('/admin/page/delete/{id}', [PageController::class, 'delete']);
    Route::get('/admin/page/edit/{id}', [PageController::class, 'edit']);
    Route::post('/admin/page/update/{id}', [PageController::class, 'update']);
    Route::get('/admin/page/status/{status}/{id}', [PageController::class, 'status']);

    // User routes
    Route::get('/admin/user/list', [UserController::class, 'listing']);
    Route::view('/admin/user/add', 'admin.user.add');
    Route::post('/admin/user/submit', [UserController::class, 'submit']);
    Route::get('/admin/user/delete/{id}', [UserController::class, 'delete']);
    Route::get('/admin/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/admin/user/update/{id}', [UserController::class, 'update']);
    Route::get('/admin/user/status/{status}/{id}', [UserController::class, 'status']);

    // Contact Us routes
    Route::get('/admin/contact/list', [ContactController::class, 'listing']);

});
