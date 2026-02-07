<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\chiSiamoController;



Route::get('/', [  PublicController::class , 'home'  ])->name('home');


Route::get( 'chi-siamo' , [chiSiamoController::class , 'gruppoChiSiamo']  ) ->name('about-us');
