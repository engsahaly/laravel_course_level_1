<?php

use App\Http\Controllers\TestController;
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

Route::get('/mahmoud', [TestController::class, 'mahmoud']);

Route::get('/printName/{name?}', [TestController::class, 'printName'])->name('printMyNameRoute');

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
