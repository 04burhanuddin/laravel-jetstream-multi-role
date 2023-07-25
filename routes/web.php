<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Category\CategoryIndex;
use App\Http\Livewire\Ordered\OrderedIndex;
use App\Http\Livewire\Product\ProductCreate;
use App\Http\Livewire\Product\ProductEdit;
use App\Http\Livewire\Product\ProductIndex;
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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/products', ProductIndex::class)->name('products.index');
    Route::get('/products/create', ProductCreate::class)->name('products.create');
    Route::get('/products/{product}/edit', ProductEdit::class)->name('products.edit');
    Route::get('/categories', CategoryIndex::class)->name('categories.index');
    Route::get('/ordered', OrderedIndex::class)->name('ordered.index');
});
