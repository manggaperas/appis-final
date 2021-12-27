<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ArmrollController;
use App\Http\Controllers\DumptruckController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContainerController;
use App\Http\Controllers\TimelineController;
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

Route::view('/', 'welcome')->name('welcome');

// Route::view('/', 'home')->name('home');
// Route::view('/data', 'data')->name('data');
// Route::view('/formula', 'formula')->name('formula');
// Route::view('/posting', 'posting')->name('posting');
// Route::view('/access', 'access')->name('access');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'verified'])->group(function () {

    // Route Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route Armroll
    Route::get('/armroll', function () {
        return view('armroll');
    })->name('armroll');
    Route::get('armroll', [ArmrollController::class, 'index'])->name('armroll');
    Route::post('armroll', [ArmrollController::class, 'store'])->name('armroll.store');
    Route::put('armroll/{id}', [ArmrollController::class, 'update'])->name('armroll.update');
    Route::get('create-armroll', [ArmrollController::class, 'create'])->name('armroll.create');
    Route::get('armroll/{id}/edit', [ArmrollController::class, 'edit'])->name('armroll.edit');
    Route::post('armroll/{id}/delete', [ArmrollController::class, 'delete'])->name('armroll.delete');


    // Route Dumptruck
    Route::get('/dumptruck', function () {
        return view('dumptruck');
    })->name('dumptruck');
    Route::get('dumptruck', [DumptruckController::class, 'index'])->name('dumptruck');
    Route::get('create-dumptruck', [DumptruckController::class, 'create'])->name('dumptruck.create');
    Route::get('dumptruck/{id}/edit', [DumptruckController::class, 'edit'])->name('dumptruck.edit');
    Route::post('dumptruck', [DumptruckController::class, 'store'])->name('dumptruck.store');
    Route::put('dumptruck', [DumptruckController::class, 'update'])->name('dumptruck.update');
    Route::post('dumptruck/{id}/delete', [DumptruckController::class, 'delete'])->name('dumptruck.delete');

    // Route Kontainer
    Route::get('/container', function () {
        return view('container');
    })->name('container');
    Route::get('container', [ContainerController::class, 'index'])->name('container');

    Route::get('create-container', [ContainerController::class, 'create'])->name('container.create');
    Route::get('container/{id}/edit', [ContainerController::class, 'edit'])->name('container.edit');
    Route::put('container/{id}', [ContainerController::class, 'update'])->name('container.update');
    Route::post('container', [ContainerController::class, 'store'])->name('container.store');
    Route::post('container/{id}/delete', [ContainerController::class, 'delete'])->name('container.delete');

    // Route Account Manager
    Route::get('/access', function () {
        return view('access');
    })->name('access');

    Route::get('timeline', TimelineController::class)->name('timeline'); //Route untuk Timeline

    //MANAGEMENT USER
    Route::get('/user', function () {
        return view('admin.users.index');
    })->name('user');
    Route::get('user', [UserController::class, 'index'])->name('user');

    Route::get('create-user', [UserController::class, 'create'])->name('user.create');
    Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::post('user', [UserController::class, 'store'])->name('user.store');
    Route::post('user/{id}/delete', [UserController::class, 'delete'])->name('user.delete');
});

require __DIR__ . '/auth.php';
