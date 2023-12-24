<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Users\UserController;
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
    return view('index');
});

// Route::get('/mahmoud', [TestController::class, 'mahmoud']);

// Route::get('/printName/{name?}', [TestController::class, 'printName'])->name('printMyNameRoute');

// Route::view('/mahmoud', 'welcome');
// Route::redirect('/here', 'https://www.google.com/');

// Route::get('/ahmed', function () {
//     dd("I'm Ahmed Anwar");
// });

// ROUTES GROUPS
// Route::controller(TestController::class)->name('test.')->group(function () {
//     Route::get('/mahmoud', 'mahmoud')->name('index');
//     Route::get('/printName/{name?}', 'printName')->name('printMyNameRoute');
// });

// Route::get('/hello', [UserController::class, 'index']);
// Route::get('/hello', SingleController::class);

Route::resource('posts', PostController::class)->except(['index', 'show']);
