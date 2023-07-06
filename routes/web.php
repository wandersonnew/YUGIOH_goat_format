<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\DeckController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DeckController::class, 'index']);
Route::get('/card_type/{type}', [DeckController::class, 'selectType']);
Route::get('/card_name/{name}', [DeckController::class, 'selectByName']);
// Route::get('/monsters', [DeckController::class, 'monsters']);
// Route::get('/spells', [DeckController::class, 'spells']);
// Route::get('/traps', [DeckController::class, 'traps']);