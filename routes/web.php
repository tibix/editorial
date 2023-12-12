<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// All listings
Route::get('/', [ListingController::class, 'index']);


// Show create form
Route::get('/listing/create', [ListingController::class, 'create']);

// Single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

Route::post('/listings', [ListingController::class, 'store']);

Route::get('/info', function(){
    return phpinfo();
});
