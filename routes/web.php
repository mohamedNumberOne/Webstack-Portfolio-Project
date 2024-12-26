<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
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



Route::get('/', [ProjectController::class, 'welcome_all_pro'])->name("/");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::prefix("admin")->middleware(["auth", "is_admin"])->group(function () {
    // product
    Route::get('/add_product', [ProductController::class, 'form_add_product'])->name("add_product");
    Route::post('/store_product', [ProductController::class, 'store'])->name("store_product");

    // project  
    Route::get('/add_project', [ProjectController::class, 'index'])->name("add_project");
    Route::post('/add_project', [ProjectController::class, 'store'])->name("store_project");
    Route::post('/delete_project/{id}', [ProjectController::class, 'destroy'])->name("delete_project");

    // msg
    Route::get("/show_messages", [MessageController::class, 'show_msg'])->name('show_messages');
});

// project  
Route::get("/show_all_projects", [ProjectController::class, 'show_all_projects'])->name('show_all_projects')->middleware('auth');
Route::get("show/project/{id}", [ProjectController::class, 'display_project'])->name('display_project');
Route::post("/add_comment/{id}", [ProjectController::class, 'add_comment'])->name('add_comment')->middleware('auth');

// product
Route::get("show/product/{id}", [ProductController::class, 'display_product'])->name('display_product');


// msg
Route::post("/add_msg", [MessageController::class, 'add_msg'])->name('add_msg');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
