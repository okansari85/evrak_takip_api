<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirmsController;
use App\Http\Controllers\NaceCodesController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\LogosController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum']], function () {

});

Route::get('get_main_companies',[FirmsController::class, 'getMainCompanies']);
Route::apiResource('companies',FirmsController::class);
Route::apiResource('nace_codes',NaceCodesController::class);
Route::apiResource('provinces',ProvinceController::class);

Route::post('upload-files', [LogosController::class,'store'])->middleware('optimizeImages'); 
Route::post('update-file', [LogosController::class, 'update_file'])->middleware('optimizeImages');



