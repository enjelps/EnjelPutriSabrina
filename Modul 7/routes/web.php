<?php

use Illuminate\Support\Facades\Route;

// Route::get('/data', function () {
//    return view('data');
// });

// Route::get('/input', function () {
//     return view('input');
// });

// Route::get('/about', function () {
//    return view('about');
// });;

// Route::get('/input_edit', function () {
//     return view('input_edit');
// });;

// Route::get('/proses', function () {
//     return view('proses');
// });;

// Route::get('/delete', function () {
//     return view('delete');
// });;

Route::get('/data',['App\Http\Controllers\mahasiswacontroller', 'data'] );

Route::get('/input',['App\Http\Controllers\mahasiswacontroller', 'input'] );

Route::get('/about',['App\Http\Controllers\mahasiswacontroller', 'about'] );

Route::get('/input_edit',['App\Http\Controllers\mahasiswacontroller', 'input_edit'] );

Route::get('/proses',['App\Http\Controllers\mahasiswacontroller', 'proses'] );

Route::get('/delete',['App\Http\Controllers\mahasiswacontroller', 'delete'] );
