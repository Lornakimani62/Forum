<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RemarkController;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Routes for logged in users.
$router->group(['middleware' => ['auth']], function($router) {
    Route::get('dashboard', [RemarkController::class, 'index'])->name('dashboard'); 
    Route::get('create', [RemarkController::class, 'create'])->name('create'); 
    
});

Route::get('/', [CustomAuthController::class, 'index']);
Route::post('store', [RemarkController::class, 'store'])->name('store'); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
