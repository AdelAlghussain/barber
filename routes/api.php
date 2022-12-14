<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EmpolyeeController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\WorktimeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/comments',[CommentController::class,'comments']);
Route::post('/add-comment',[CommentController::class,'add']);
Route::post('/booking',[BookingController::class,'booking']);

Route::get('/gallaries',[GallaryController::class,'gallaries']);
Route::get('/results',[ResultController::class,'results']);
Route::get('/worktimes',[WorktimeController::class,'worktimes']);
Route::get('/employees',[EmpolyeeController::class,'employees']);
Route::get('/products',[ProductController::class,'products']);
Route::get('/offers',[OfferController::class,'offers']);
Route::get('/profile',[ProfileController::class,'profile']);
    
