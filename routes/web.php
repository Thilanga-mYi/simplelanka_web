<?php

use App\Http\Controllers\AdMainCategoriesController;
use App\Http\Controllers\Admin\AD\AdminADController;
use App\Http\Controllers\Admin\Category\AdminSubCategoryController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Shop\AdminShopController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::prefix('/control/admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
    Route::prefix('/enrollment')->group(function () {
        Route::prefix('/category')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('admin.enrollment.category');
            Route::get('/manage', [CategoryController::class, 'manage'])->name('admin.enrollment.category.manage');
            Route::post('/enroll', [CategoryController::class, 'enroll'])->name('admin.enrollment.category.add');
            Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('admin.enrollment.category.delete');
        });

        Route::prefix('/sub-category')->group(function () {
            Route::get('/', [AdminSubCategoryController::class, 'index'])->name('admin.enrollment.sub-category');
            Route::get('/manage', [AdminSubCategoryController::class, 'manage'])->name('admin.enrollment.sub-category.manage');
            Route::post('/enroll', [AdminSubCategoryController::class, 'enroll'])->name('admin.enrollment.sub-category.add');
            Route::get('/delete/{id}', [AdminSubCategoryController::class, 'delete'])->name('admin.enrollment.sub-category.delete');
        });
    });

    Route::prefix('/shop')->group(function () {
        Route::get('/', [AdminShopController::class, 'index'])->name('admin.shop');
        Route::get('/approve', [AdminShopController::class, 'approve'])->name('admin.shop.approve');
        Route::get('/delete/{id}', [AdminShopController::class, 'delete'])->name('admin.shop.delete');
    });

    Route::prefix('/ad')->group(function () {
        Route::get('/', [AdminADController::class, 'index'])->name('admin.ad');
        Route::get('/approve', [AdminADController::class, 'approve'])->name('admin.ad.approve');
        Route::get('/delete/{id}', [AdminADController::class, 'delete'])->name('admin.ad.delete');
    });
});

Route::get('/', function () {
    return view('home');
});

Route::prefix("/register-user")->middleware("auth:sanctum")->group(function () {
    Route::get("dashboard", [UserController::class, 'userProfilePage']);
    Route::get("profile", [UserController::class, 'userProfilePage']);
    Route::get("ad-post", [UserController::class, 'userEnrollPost']);
    Route::get("ad-list", [UserController::class, 'userListAds']);
    Route::get("create-shop", [UserController::class, 'userCreateShop']);
    Route::get("settings", [UserController::class, 'userProfilePage']);
    Route::get("notifications", [UserController::class, 'userProfilePage']);

    Route::post("enroll-adpost", [PostController::class, 'enrollPost']);
    Route::get("ads-list", [PostController::class, 'ListAds']);

    Route::post("update", [UserController::class, 'updateUser']);
    Route::post("enroll-shop", [ShopController::class, 'enrollShop']);
    Route::get("list-sub-categories", [AdMainCategoriesController::class, 'listSubCategories']);
});


Route::get('/all-ads', function () {
    return view('all_ads');
});

Route::get('/ad/asus-gforce-gt-1030-2GB-graphic-card', function () {
    return view('inner_ad');
});

// Route::get('/member-profile/add-ad', function () {
//     return view('member_post_ad');
// });

// Route::get('/member-profile/profile', function () {
//     return view('member_profile');
// });

Route::get('/member-profile/my-ads', function () {
    return view('member_my_ads');
});

Route::get('/member-profile/settings', function () {
    return view('member_settings');
});

Route::get('/member-profile/notifications', function () {
    return view('member_notification');
});

Route::get('/member-profile/create-shop', function () {
    return view('member_create_shop');
});

Route::get('/member-profile/create-web-panel', function () {
    return view('member_create_web_panel');
});

// Route::get('/ad/asus-gforce-gt-1030-2GB-graphic-card', function () {
//     return view('inner_ad');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
