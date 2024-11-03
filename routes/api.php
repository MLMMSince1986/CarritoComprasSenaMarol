<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryapiController;
use App\Http\Controllers\Api\ArticleApiController;
use App\Http\Controllers\Api\usersApiController;
use App\Http\Controllers\Api\PersonApiController;
use App\Http\Controllers\Api\IncomeApiController;
use App\Http\Controllers\Api\income_detailsApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('categories',CategoryapiController::class);
Route::apiResource('articles',ArticleApiController::class);
Route::apiResource('users',usersApiController::class);
Route::apiResource('Person',PersonApiController::class);
Route::apiResource('Income',IncomeApiController::class);
Route::apiResource('income_details',income_detailsApiController::class);

