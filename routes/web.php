<?php

use App\Livewire\Form;
use Illuminate\Support\Facades\Route;

Route::get('form', Form::class);

Route::redirect('login-redirect', 'login')->name('login');
