<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\LiHeroController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PorfolioController;
use App\Http\Controllers\ServicesController;
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

Route::get(
    '/',
    [MainController::class, 'index']
);



// HERO

Route::get(
    '/editHero',
    [HeroController::class, 'index']
);

Route::post(
    '/updateHero',
    [HeroController::class, 'update']
);


// HERO ICONS
Route::get(
    '/showHeroIcon/{id}',
    [LiHeroController::class, 'show']
);
Route::get(
    '/addHeroIcon',
    [LiHeroController::class, 'add']
);
Route::post(
    '/storeHeroIcon',
    [LiHeroController::class, 'store']
);



Route::post(
    '/updateHeroIcon/{id}',
    [LiHeroController::class, 'update']
);
Route::post(
    '/destroyHeroIcon/{id}',
    [LiHeroController::class, 'destroy']
);



// ABOUT
Route::get(
    '/editAbout',
    [AboutController::class, 'index']
);

Route::post(
    '/updateAbout',
    [AboutController::class, 'update']
);



// SERVICES


Route::get(
    '/editServices',
    [ServicesController::class, 'index']
);
Route::get(
    '/addServices',
    [ServicesController::class, 'add']
);
Route::post(
    '/updateServices/{id}',
    [ServicesController::class, 'update']
);
Route::post(
    '/storeServices',
    [ServicesController::class, 'store']
);


// PORTFOLIO

Route::get('/editPorfolio',[PorfolioController::class,'index']);
Route::get('/showPorfolio/{id}',[PorfolioController::class,'show']);
Route::get('/addCard',[PorfolioController::class,'add']);
Route::get('/download-image/{id}',[PorfolioController::class,'download']);



Route::post('/updatePorfolio/{id}',[PorfolioController::class,'update']);
Route::post('/deletePorfolio/{id}',[PorfolioController::class,'destroy']);
Route::post('/storePorfolio',[PorfolioController::class,'store']);



// CONTACT

Route::get('/editContact', [ContactController::class,'index']);
Route::post('/updateContact', [ContactController::class,'update']);



