<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/workers', [Controller\Site::class, 'workers'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/divisions', [Controller\Site::class, 'divisions'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/room', [Controller\Site::class, 'room'])
    ->middleware('auth');
Route::add('GET', '/chairs', [Controller\Site::class, 'chairs'])
    ->middleware('auth');
Route::add(['GET', 'POST' ], '/add_workers', [Controller\Site::class, 'add_workers'])
    ->middleware('auth');