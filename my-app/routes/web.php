<?php

use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('contact');
});


Route::post('/student/store', [FirstController::class, 'Studentstore'])->name('student.store');



Route::post('/store/contact', [FirstController::class, 'store'])->name('store.contact');
