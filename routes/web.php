<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// ROTA PARA IR NO INDEX DO SITE
Route::get('/', [SiteController::class, 'index'])->name('site.index');
