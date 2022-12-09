<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmpolyeeController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\WorktimeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/',[DashboardController::class,'index']);


Route::get('/employees',[EmpolyeeController::class,'index']);
Route::post('/add-employee',[EmpolyeeController::class,'add']);
Route::get('/add-employee',[EmpolyeeController::class,'create']);
Route::get('/edit-employee/{id}',[EmpolyeeController::class,'edit']);
Route::post('/edit-employee/{employee}',[EmpolyeeController::class,'update']);
Route::get('/delete-employee/{id}',[EmpolyeeController::class,'destroy']);

Route::get('/profile',[ProfileController::class,'index']);
Route::get('/edit-profile',[ProfileController::class,'edit']);
Route::post('/edit-profile',[ProfileController::class,'update']);



Route::get('/worktimes',[WorktimeController::class,'index']);
Route::get('/edit-worktimes',[WorktimeController::class,'edit']);
Route::post('/edit-worktimes',[WorktimeController::class,'update']);


Route::get('/gallaries',[GallaryController::class,'index']);
Route::post('/add-gallary',[GallaryController::class,'add']);
Route::get('/add-gallary',[GallaryController::class,'create']);
Route::get('/edit-gallary/{id}',[GallaryController::class,'edit']);
Route::post('/edit-gallary/{gallary}',[GallaryController::class,'update']);
Route::get('/delete-gallary/{id}',[GallaryController::class,'destroy']);


Route::get('/products',[ProductController::class,'index']);
Route::post('/add-product',[ProductController::class,'add']);
Route::get('/add-product',[ProductController::class,'create']);
Route::get('/edit-product/{id}',[ProductController::class,'edit']);
Route::post('/edit-product/{product}',[ProductController::class,'update']);
Route::get('/delete-product/{id}',[ProductController::class,'destroy']);



Route::get('/offers',[OfferController::class,'index']);
Route::post('/add-offer',[OfferController::class,'add']);
Route::get('/add-offer',[OfferController::class,'create']);
Route::get('/edit-offer/{id}',[OfferController::class,'edit']);
Route::post('/edit-offer/{offer}',[OfferController::class,'update']);
Route::get('/delete-offer/{id}',[OfferController::class,'destroy']);


Route::get('/results',[ResultController::class,'index']);
Route::post('/add-result',[ResultController::class,'add']);
Route::get('/add-result',[ResultController::class,'create']);
Route::get('/edit-result/{id}',[ResultController::class,'edit']);
Route::post('/edit-result/{result}',[ResultController::class,'update']);
Route::get('/delete-result/{id}',[ResultController::class,'destroy']);

Route::get('/comments',[CommentController::class,'index']);
Route::get('/delete-comment/{id}',[CommentController::class,'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
