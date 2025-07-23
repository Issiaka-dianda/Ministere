<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/a-propos', function () {
    return view('a-propos');
})->name('a-propos');

Route::get('/reformes', function () {
    return view('reformes');
})->name('reformes');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/contacte', function () {
    return view('contacte');
})->name('contacte');

Route::get('/etablissement', function () {
    return view('etablissement');
})->name('etablissement');
Route::get('/actualite', function () {
    return view('actualite');
})->name('actualite');
