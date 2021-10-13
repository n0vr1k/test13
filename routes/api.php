<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/phonebook', [\App\Http\Controllers\PhonebookController::class, 'phonebook']);
Route::get('/phonebook/{id}', [\App\Http\Controllers\PhonebookController::class, 'phonebookById']);

Route::post('/phonebook', [\App\Http\Controllers\PhonebookController::class, 'phonebookSave']);
Route::put('/phonebook/{id}', [\App\Http\Controllers\PhonebookController::class, 'phonebookEdit']);
Route::delete('/phonebook/{id}', [\App\Http\Controllers\PhonebookController::class, 'phonebookDelite']);













