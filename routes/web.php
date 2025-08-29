<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/Struktur-Organisasi', function () {
    return view('StrukturOrganisasi');
})->name('struktur')        ;

Route::get('/Program-Kerja', function () {
    return view('Program-Kerja');
})->name('program');

Route::get('/Kegiatan-Mahasiswa', function () {
        return view('Kegiatan-Mahasiswa');
    })->name('kegiatan');