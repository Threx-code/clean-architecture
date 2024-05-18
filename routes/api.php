<?php declare(strict_types=1);

use App\Http\Controllers\Posts\IndexController;
use App\Http\Controllers\Posts\ShowController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1/posts')->as('v1:posts:')->group(function (){
    Route::get('/', IndexController::class)->name('index');
    Route::get('{post:key}', ShowController::class)->name('show');
});
