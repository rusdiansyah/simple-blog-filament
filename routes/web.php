<?php

use App\Livewire\CategoryIndex;
use App\Livewire\HomeIndex;
use App\Livewire\PostIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeIndex::class)->name('home');
Route::get('/category/{slug}', CategoryIndex::class)->name('category');
Route::get('/post/{slug}', PostIndex::class)->name('post');
