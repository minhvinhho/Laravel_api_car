<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PassportController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\FuelsController;
use App\Http\Controllers\MakesController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\RentalratesController;
use App\Http\Controllers\RentalsController;
use App\Http\Controllers\RentaltypesController;
use App\Http\Controllers\StatusesController;
use App\Http\Controllers\TypesController;

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
Route::post('register', [PassportController::class, 'register']);
Route::post('login', [PassportController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function() {
    //logout user-> revoke token
    Route::post('logout', [PassportController::class, 'logout']);
    //get logged in user info
    Route::get('me', [PassportController::class, 'getAuthenticatedUser']);

    // List all rentals
    Route::get('rentals', [RentalsController::class, 'index']);
    // List single rental
    Route::get('rental/{id}', [RentalsController::class, 'show']);
    // Create new rental
    Route::post('rental', [RentalsController::class, 'store']);
    // Update rental
    Route::put('rental/{id}', [RentalsController::class, 'update']);
    // Delete rental
    Route::delete('rental/{id}', [RentalsController::class, 'destroy']);

    // List all customers
    Route::get('customers', [CustomersController::class, 'index']);
    // List single customer
    Route::get('customer/{id}', [CustomersController::class, 'show']);
    // Create new customer
    Route::post('customer', [CustomersController::class, 'store']);
    // Update customer
    Route::put('customer/{id}', [CustomersController::class, 'update']);
    // Delete customer
    Route::delete('customer/{id}', [CustomersController::class, 'destroy']);

    // List all cars
    Route::get('cars', [CarsController::class, 'index']);
    // List single car
    Route::get('car/{id}', [CarsController::class, 'show']);
    // Create new car
    Route::post('car', [CarsController::class, 'store']);
    // Update car
    Route::put('car/{id}', [CarsController::class, 'update']);
    // Delete car
    Route::delete('car/{id}', [CarsController::class, 'destroy']);

    // List all colors
    Route::get('colors', [ColorsController::class, 'index']);
    // List single color
    Route::get('color/{id}', [ColorsController::class, 'show']);
    // Create new color
    Route::post('color', [ColorsController::class, 'store']);
    // Update color
    Route::put('color/{id}', [ColorsController::class, 'update']);
    // Delete color
    Route::delete('color/{id}', [ColorsController::class, 'destroy']);

    // List all fuels
    Route::get('fuels', [FuelsController::class, 'index']);
    // List single fuel
    Route::get('fuel/{id}', [FuelsController::class, 'show']);
    // Create new fuel
    Route::post('fuel', [FuelsController::class, 'store']);
    // Update fuel
    Route::put('fuel/{id}', [FuelsController::class, 'update']);
    // Delete fuel
    Route::delete('fuel/{id}', [FuelsController::class, 'destroy']);

    // List all makes
    Route::get('makes', [MakesController::class, 'index']);
    // List single make
    Route::get('make/{id}', [MakesController::class, 'show']);
    // Create new make
    Route::post('make', [MakesController::class, 'store']);
    // Update make
    Route::put('make/{id}', [MakesController::class, 'update']);
    // Delete make
    Route::delete('make/{id}', [MakesController::class, 'destroy']);

    // List all models
    Route::get('models', [ModelsController::class, 'index']);
    // List single model
    Route::get('model/{id}', [ModelsController::class, 'show']);
    // Create new model
    Route::post('model', [ModelsController::class, 'store']);
    // Update model
    Route::put('model/{id}', [ModelsController::class, 'update']);
    // Delete model
    Route::delete('model/{id}', [ModelsController::class, 'destroy']);

    // List all rentalrates
    Route::get('rentalrates', [RentalratesController::class, 'index']);
    // List single rentalrate
    Route::get('rentalrate/{id}', [RentalratesController::class, 'show']);
    // Create new rentalrate
    Route::post('rentalrate', [RentalratesController::class, 'store']);
    // Update rentalrate
    Route::put('rentalrate/{id}', [RentalratesController::class, 'update']);
    // Delete rentalrate
    Route::delete('rentalrate/{id}', [RentalratesController::class, 'destroy']);

    // List all rentaltypes
    Route::get('rentaltypes', [RentaltypesController::class, 'index']);
    // List single rentaltype
    Route::get('rentaltype/{id}', [RentaltypesController::class, 'show']);
    // Create new rentaltype
    Route::post('rentaltype', [RentaltypesController::class, 'store']);
    // Update rentaltype
    Route::put('rentaltype/{id}', [RentaltypesController::class, 'update']);
    // Delete rentalrate
    Route::delete('rentaltype/{id}', [RentaltypesController::class, 'destroy']);

    // List all statuses
    Route::get('statuses', [StatusesController::class, 'index']);
    // List single status
    Route::get('status/{id}', [StatusesController::class, 'show']);
    // Create new status
    Route::post('status', [StatusesController::class, 'store']);
    // Update status
    Route::put('status/{id}', [StatusesController::class, 'update']);
    // Delete status
    Route::delete('status/{id}', [StatusesController::class, 'destroy']);

    // List all types
    Route::get('types', [TypesController::class, 'index']);
    // List single type
    Route::get('type/{id}', [TypesController::class, 'show']);
    // Create new type
    Route::post('type', [TypesController::class, 'store']);
    // Update type
    Route::put('type/{id}', [TypesController::class, 'update']);
    // Delete type
    Route::delete('type/{id}', [TypesController::class, 'destroy']);
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
