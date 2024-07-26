<?php

use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {
    Route::get('/example', function () {
        return response()->json(['message' => 'This is an API route']);
    });
});
