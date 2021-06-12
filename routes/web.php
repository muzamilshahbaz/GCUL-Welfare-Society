<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [PagesController::class, 'home']);
Route::get('about', [PagesController::class, 'about']);
Route::get('mission', [PagesController::class, 'mission']);
Route::get('join', [PagesController::class, 'join']);
Route::get('donate', [PagesController::class, 'donate']);

Route::post('submit',[JoinController::class,'AddMember']);

Route::post('send-message', [ContactController::class,''] );
