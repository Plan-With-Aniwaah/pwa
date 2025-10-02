<?php


use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function (){
    Route::get('welcome', \App\Livewire\User\Landing::class)->name('user.welcome');
    Route::get('about', \App\Livewire\User\About::class)->name('user.about');
    Route::get('contact', \App\Livewire\User\Contact::class)->name('user.contact');
    Route::get('gallery', \App\Livewire\User\Gallery::class)->name('user.gallery');
});
