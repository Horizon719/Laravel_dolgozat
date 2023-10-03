<?php

use App\Http\Controllers\OrganisatorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/organisators', [OrganisatorController::class, 'index']);
Route::get('/api/organisators/{id}', [OrganisatorController::class, 'show']);
Route::post('/api/organisators', [OrganisatorController::class, 'store']);
Route::put('/api/organisators/{id}', [OrganisatorController::class, 'update']);
Route::delete('/api/organisators/{id}', [OrganisatorController::class, 'destroy']);
Route::get('/organisator/new', [OrganisatorController::class, 'newView']);
Route::get('/organisator/edit/{id}', [OrganisatorController::class, 'editView']);
Route::get('/organisator/list', [OrganisatorController::class, 'listView']);
Route::get("/organisator/del", [OrganisatorController::class, "deleteView"]);