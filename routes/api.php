<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\VideoclubController;

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

Route::get('/login',[AuthController::class,'login']);

Route::group(['prefix' => 'videoClub','middleware' => ['auth','role:admin']], function ($router){
    Route::post('', [VideoclubController::class, 'create' ]);
    Route::get('', [VideoclubController::class, 'index' ]);
    Route::get('/{id}', [VideoclubController::class, 'show' ]);
    Route::post('/{id}', [VideoclubController::class, 'update' ]);
    Route::post('/{id}', [VideoclubController::class, 'destroy' ]);
});

Route::group(['prefix' => 'User','middleware' => ['auth','rol:Cliente']], function ($router){
    Route::get('/{id}', [VideoclubController::class, 'index' ]);
});