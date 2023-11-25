<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get( "/", [PortfolioController::class, "home"] )->name( "home" );
Route::get( "/about", [PortfolioController::class, "about"] )->name( "about" );
Route::get( "/contact", [PortfolioController::class, "contact"] )->name( "contact" );
Route::post( "/contact", [PortfolioController::class, "submitContactForm"] );
Route::get( "/projects", [PortfolioController::class, "projects"] )->name( "projects" );