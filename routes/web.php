<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\MerkController;
Use App\Http\Controllers\DistributorController;
Use App\Http\Controllers\ItemController;
Use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('index');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::resource('products', ProductController::class);
Route::resource('students', StudentController::class);
Route::resource('rayons', RayonController::class);
Route::resource('rombels', RombelController::class);
Route::resource('merks', MerkController::class);
Route::resource('distributors', DistributorController::class);
Route::resource('items', ItemController::class);
Route::resource('transactions', TransactionController::class);

