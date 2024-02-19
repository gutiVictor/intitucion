<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\DocenteController;
use App\Models\Alumno;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/',[DocenteController::class,'index']);
Route::get('/docente/{id}', [DocenteController::class, 'show']);
Route::post('/docente', [DocenteController::class, 'store']);
Route::put('/docente/{id}', [DocenteController::class, 'update']);
Route::delete('/docente/{id}', [DocenteController::class, 'destroy']);

/* alumnos */

Route::get('/',[AlumnoController::class,'index']);
Route::get('/alumno/{id}', [AlumnoController::class, 'show']);
Route::post('/alumno', [AlumnoController::class, 'store']);
Route::put('/alumno/{id}', [AlumnoController::class, 'update']);
Route::delete('/alumno/{id}', [AlumnoController::class, 'destroy']);