<?php

use Illuminate\Support\Facades\Route;

Route::get('/addon', function(){
    return view( 'addon::dashboard');
})->name('addon.dashboard');
