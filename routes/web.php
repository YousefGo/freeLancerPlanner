<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SubTaskController;


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


Route::middleware(['auth'])->group(function () {
  Route::get('/dashboard', function () { return view('index');})->name('dashboard');
  Route::get('/', function () {return view('index');});
  // Route::resource('user',User::class);
  Route::resource('client',ClientController::class);
  Route::post('/storeClient',[ClientController::class,'storeClient'])->name('store.client');
  Route::get('/deleteClient/{id}',[ClientController::class,'deleteClient'])->name('delete.client');
  Route::get('/update/{id}',[ClientController::class,'updateClient'])->name('update.client');
  Route::post('/updatePost',[ClientController::class,'updatePost'])->name('updatepost.client');


  


  Route::resource('project',ProjectController::class);
  Route::post('/storeProject',[ProjectController::class,'storeProject'])->name('store.project');
  Route::get('/deleteProject/{id}',[ProjectController::class,'deleteProject'])->name('delete.project');
  Route::get('/updateProject/{id}',[ProjectController::class,'updateProject'])->name('update.project');
  Route::post('/updatePost',[ProjectController::class,'updateProject'])->name('updatepost.project');



  Route::resource('task',TaskController::class);
  Route::resource('subTask',SubTaskController::class);

});

require __DIR__.'/auth.php';
