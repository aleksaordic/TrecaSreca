<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SchoolController;
use App\Http\Controllers\API\PersonController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', [SchoolController::class, 'index']);
Route::get('/schools/{id}', [SchoolController::class, 'edit']);
Route::post('/schools', [SchoolController::class, 'store']);
Route::post('/schools/{id}', [SchoolController::class, 'update']);

Route::get('/people', [PersonController::class, 'index']);
Route::post('/people', [PersonController::class, 'store']);
Route::post('/people/{id}', [PersonController::class, 'destroy']);

Route::post('/jobs', [JobController::class, 'store']);
Route::post('/jobs/delete', [JobController::class, 'destroy']);




Route::apiResources([
    'schools'=>SchoolController::class,
    'people'=>PersonController::class,
    'jobs'=>JobController::class
]);
