<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
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

Route::get('/', [HomeController::class, 'index']);

// {friend} = Paramètre obligatoire
// {friend?} = Paramètre optionnel
// HomeController -> friend
Route::get('/fiorella/{friend?}', [HomeController::class, 'friend']);

// AboutController -> index
Route::get('/a-propos', [AboutController::class, 'index']);

// AboutController -> show
Route::get('/a-propos/{user}', [AboutController::class, 'show']);

<<<<<<< HEAD
// CRUD Catégoeries
Route::get('/categories', [CategoryController::class,'index']);
//Afficher le formulaire
Route::get('/categories/creer', [CategoryController::class,'create']);
//Traiter le formulaire
Route::post('/categories/creer', [CategoryController::class,'store']);

Route::get('/films', [MovieController::class,'index']);
// Route::get('/films/{id}', [MovieController::class,'show']);
Route::get('/films/creer', [MovieController::class,'create']);
Route::post('/films/creer', [MovieController::class,'store']);
=======
// CRUD Catégories
Route::get('/categories', [CategoryController::class, 'index']);
// Afficher le formulaire
Route::get('/categories/creer', [CategoryController::class, 'create']);
// Traiter le formulaire
Route::post('/categories/creer', [CategoryController::class, 'store']);
>>>>>>> b337dd46bf856f49d0a7ba5dcb0396c4a06fa887