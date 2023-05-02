<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\GroupContactsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('contacts', [ContactsController::class, 'index']);
Route::get('contacts/{contactId}', [ContactsController::class, 'show']);
Route::post('contacts/{groupId}', [ContactsController::class, 'store']);
Route::get('group-contacts', [GroupContactsController::class, 'index']);
Route::get('group-contacts/{groupId}', [GroupContactsController::class, 'show']);
Route::post('group-contacts/{groupId}', [GroupContactsController::class, 'store']);
Route::get('favorites', [FavoritesController::class, 'index']);
Route::post('favorites/{contactId}', [FavoritesController::class, 'store']);
Route::delete('favorites/{contactId}', [FavoritesController::class, 'destroy']);
