<?php


use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function (){
    Route::get('welcome', \App\Livewire\User\Landing::class)->name('user.welcome');
});
