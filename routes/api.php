<?php

use App\Http\Controllers\API\Country\CreateCountryController;
use App\Http\Controllers\API\Country\DeleteCountryController;
use App\Http\Controllers\API\Country\GetAllCountryController;
use App\Http\Controllers\API\Country\GetCountryController;
use App\Http\Controllers\API\Country\UpdateCountryController;
use App\Http\Controllers\API\CreateGuestController;
use App\Http\Controllers\API\DeleteGuestController;
use App\Http\Controllers\API\GetAllGuestsController;
use App\Http\Controllers\API\GetGuestController;
use App\Http\Controllers\API\UpdateGuestController;
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

Route::prefix('/v1')->group(function () {
    Route::prefix('guests')->group(function () {
        Route::get('', [GetAllGuestsController::class, 'getAllGuests'])->name('api.v1.guests.all');
        Route::post('', [CreateGuestController::class, 'createGuest'])->name('api.v1.guest.create');

        Route::prefix('{id}')->group(function () {
            Route::get('', [GetGuestController::class, 'getGuest'])->name('api.v1.guest');
            Route::patch('', [UpdateGuestController::class, 'updateGuest'])->name('api.v1.guest.update');
            Route::delete('', [DeleteGuestController::class, 'deleteGuest'])->name('api.v1.guest.delete');
        });
    });

    Route::prefix('country')->group(function () {
        Route::get('', [GetAllCountryController::class, 'getAllCountry'])->name('api.v1.country.all');
        Route::post('', [CreateCountryController::class, 'createCountry'])->name('api.v1.country.create');

        Route::prefix('{id}')->group(function () {
            Route::get('', [GetCountryController::class, 'getCountry'])->name('api.v1.country');
            Route::patch('', [UpdateCountryController::class, 'updateCountry'])->name('api.v1.country.update');
            Route::delete('', [DeleteCountryController::class, 'deleteCountry'])->name('api.v1.country.delete');
        });
    });
});
