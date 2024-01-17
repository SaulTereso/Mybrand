<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CorreoController;


Route::get('/', function () {
    return view('inicio');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('images', [GalleryController::class, 'images']);

Route::name('store')->post('store/',[CorreoController::class,'store']);
Route::name('lista')->get('/home',[CorreoController::class, 'lista']);
Route::name('borrar')->delete('borrar/{id}',[CorreoController::class,'borrar']);
Route::name('editar')->get('editar/{id}',[CorreoController::class,'editar']);
Route::name('salvar')->put('salvar/{id}',[CorreoController::class,'salvar']);


Route::get('/informacion/{id}', [GalleryController::class, 'informacion'])->name('informacion');
Route::get('/collage/{nombre}', [GalleryController::class, 'collage'])->name('collage');

