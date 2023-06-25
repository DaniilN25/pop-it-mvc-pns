<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth', 'admin');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/workers', [Controller\Site::class, 'workers']);
Route::add(['GET', 'POST'], '/divisions_view', [Controller\Site::class, 'divisions_view'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/divisions_name', [Controller\Site::class, 'divisions_name'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_division', [Controller\Site::class, 'add_division'])
    ->middleware('auth', 'admin');
Route::add(['GET', 'POST'], '/add_workers', [Controller\Site::class, 'add_workers'])
    ->middleware('auth', 'admin');
Route::add(['GET', 'POST'], '/room', [Controller\Site::class, 'room'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_room', [Controller\Site::class, 'add_room'])
    ->middleware('auth', 'admin');
Route::add('GET', '/chairs', [Controller\Site::class, 'chairs'])
    ->middleware('auth');
Route::add('GET', '/chairs_mat', [Controller\Site::class, 'chairs_mat'])
    ->middleware('auth');
Route::add('GET', '/chairs_tex', [Controller\Site::class, 'chairs_tex'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_division_name', [Controller\Site::class, 'add_division_name'])
    ->middleware('auth', 'admin');

