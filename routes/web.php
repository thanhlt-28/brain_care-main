<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\DepressionController;
use App\Http\Controllers\DiaController;
use App\Http\Controllers\DianoseController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SymptomController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserCustomerController;
use App\Http\Requests\TypeRequest;
use Illuminate\Console\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });J


Route::view('register', 'auth.register')->name('register');
Route::post('register', [RegisterController::class, 'postRegister'])->name('auth.postRegister');

Route::view('login', 'auth.login')->name('login');
Route::post('login', [LoginController::class, 'postLogin']);
Route::any('logout', function () {
    Auth::logout();
    return redirect(route('login'));
})->name('logout');

Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::get('gioi-thieu', function () {
        return view('about');
    })->name('about');
    Route::get('tin-tuc', function () {
        return view('news');
    })->name('news');
    Route::get('lien-he', function () {
        return view('contact');
    })->name('contact');

    Route::prefix('chan-doan')->group(function () {
        //........Trầm cảm
        Route::get('ket-qua', [DianoseController::class, 'index'])->name('tram-cam.views');
        Route::get('them-chan-doan', [DianoseController::class, 'create'])->name('tram-cam.create');
        Route::post('luu-lai', [DianoseController::class, 'store'])->name('tram-cam.store');
        Route::get('xoa-ket-qua/{id}', [DianoseController::class, 'destroy'])->name('tram-cam.destroy');
        Route::get('chi-tiet/{id}', [DianoseController::class, 'detail'])->name('tram-cam.index');
        Route::post('update/{id}', [DianoseController::class, 'update'])->name('tram-cam.update');
        // Route::get('dieu-tri-tram-cam', [TreatmentController::class, 'indexof'])->name('tram-cam.index-2');
        //........Nghiện rượu
        Route::get('ket-qua-nr', [DianoseController::class, 'index_ngruou'])->name('nghien-ruou.views');
        Route::get('them-chan-doan-nr', [DianoseController::class, 'create_ngruou'])->name('nghien-ruou.create');
        Route::post('luu-lai-nr', [DianoseController::class, 'store_ngruou'])->name('nghien-ruou.store_ngruou');
        Route::get('xoa-ket-qua-nr/{id}', [DianoseController::class, 'destroy_ngruou'])->name('nghien-ruou.destroy');
        Route::get('nghien-ruou/{id}', [DianoseController::class, 'detail_ngruou'])->name('nghien-ruou.index');
        Route::post('nghien-ruou/{id}', [DianoseController::class, 'update_ngruou'])->name('nghien-ruou.update');
    });
});

Route::prefix('dieu-tri')->group(function () {
    Route::get('dieu-tri-tc', [TreatmentController::class, 'index'])->name('tramcam.views');
    Route::get('theo-doi-tc', [TreatmentController::class, 'create'])->name('tramcam.create');
    Route::post('luu-lai-tc', [TreatmentController::class, 'store'])->name('tramcam.store');
    Route::get('chi-tiet/{id}', [TreatmentController::class, 'details'])->name('tramcam.index');
    Route::post('dieu-tri-update/{id}', [TreatmentController::class, 'updated'])->name('tramcam.updated');
    Route::get('xoa/{id}', [TreatmentController::class, 'destroy'])->name('tramcam.destroy');
});

Route::prefix('admin')->middleware('check-admin-role')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::prefix('cates')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('cates.index');
        Route::get('them-danh-muc', [CategoryController::class, 'create'])->name('cates.add');
        Route::post('them-danh-muc', [CategoryController::class, 'store'])->name('cates.store');
        Route::get('remove/{id}', [CategoryController::class, 'destroy'])->name('cates.destroy');
        Route::get('sua-danh-muc/{id}', [CategoryController::class, 'edit'])->name('cates.edit');
        Route::post('sua-danh-muc/{id}', [CategoryController::class, 'update'])->name('cates.update');
    });

    Route::prefix('posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('posts.index');
        Route::get('them-bai-viet', [PostController::class, 'create'])->name('posts.create');
        Route::post('them-bai-viet', [PostController::class, 'store'])->name('posts.store');
        Route::get('sua-bai-viet/{id}', [PostController::class, 'edit'])->name('posts.edit');
        Route::post('sua-bai-viet/{id}', [PostController::class, 'update'])->name('posts.update');
        Route::get('remove/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    });

    // ---------Types
    Route::prefix('type')->group(function () {
        Route::get('/', [TypeController::class, 'show'])->name('type.index');
        Route::get('loai-benh', [TypeController::class, 'create'])->name('type.add');
        Route::post('loai-benh', [TypeController::class, 'store'])->name('type.store');
        Route::get('remove/{id}', [TypeController::class, 'destroy'])->name('type.destroy');
        Route::get('edit/{id}', [TypeController::class, 'edit'])->name('type.edit');
        Route::post('edit/{id}', [TypeController::class, 'update'])->name('type.update');
    });

    // ---------Syms
    Route::prefix('sym')->group(function () {
        Route::get('/', [TypeController::class, 'index'])->name('sym.index');
        Route::get('them-trieu-chung', [TypeController::class, 'addnew'])->name('sym.addnew');
        Route::post('them-trieu-chung', [TypeController::class, 'storage'])->name('sym.storage');
        Route::get('remove/{id}', [TypeController::class, 'remove'])->name('sym.remove');
        Route::get('edited/{id}', [TypeController::class, 'edited'])->name('sym.edited');
        Route::post('edited/{id}', [TypeController::class, 'updated'])->name('sym.updated');
    });
    // ---------Fields
    Route::prefix('field')->group(function () {
        Route::get('/', [FieldController::class, 'show'])->name('field.index');
        Route::get('them', [FieldController::class, 'create'])->name('field.add');
        Route::post('them', [FieldController::class, 'store'])->name('field.store');
        Route::get('remove/{id}', [FieldController::class, 'remove'])->name('field.remove');
        Route::get('edit/{id}', [FieldController::class, 'edit'])->name('field.edit');
        Route::post('edit/{id}', [FieldController::class, 'update'])->name('field.update');
    });
});

Route::get('chi-tiet/{id}', [PostController::class, 'details'])->name('posts.details');

Route::resource('diagnose', DiaController::class)->only(['index', 'create', 'store', 'edit', 'destroy']);
Route::post('diagnose/{id}', [DiaController::class, 'update'])->name('diagnose.update');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');
