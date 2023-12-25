<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SingleController;
use App\Http\Middleware\CheckIfNameIsAhmed;

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
    $data = ['1', '2', '3'];
    return view('posts.create.index.mahmoud', compact('data'));
});

// Route::get('/mahmoud', [TestController::class, 'mahmoud']);

Route::get('/printName/{name?}', [TestController::class, 'printName'])->name('printMyNameRoute');

// Route::view('/mahmoud', 'welcome');
// Route::redirect('/here', 'https://www.google.com/');

// Route::get('/ahmed', function () {
//     dd("I'm Ahmed Anwar");
// });

// ROUTES GROUPS
// Route::controller(TestController::class)->name('test.')->middleware('check_ahmed')->group(function () {
//     Route::get('/mahmoud', 'mahmoud')->name('index');
//     Route::get('/printName/{name?}', 'printName')->name('printMyNameRoute');
// });

// Route::get('/hello', [UserController::class, 'index']);
// Route::get('/hello', SingleController::class);
// Route::get('/hello2', SingleController::class);

Route::resource('posts', PostController::class);
