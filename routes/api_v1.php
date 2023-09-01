<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts', [\App\Http\Controllers\api\v1\PostController::class, 'getPosts']);
