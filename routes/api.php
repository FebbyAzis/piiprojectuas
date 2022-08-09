<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\dosen\JadwalController;
use App\Http\Controllers\api\dosen\SemesterController;
use App\Http\Controllers\api\dosen\AbsenController;
use App\Http\Controllers\api\dosen\AbsenMhsController;
use App\Http\Controllers\api\dosen\DosenController;
use App\Http\Controllers\api\dosen\KontrakMahasiswaController;
use App\Http\Controllers\api\dosen\DsnMahasiswaController;
use App\Http\Controllers\api\dosen\MatakuliahController;
use App\Http\Controllers\api\mahasiswa\MahasiswaController;

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

// Route::middleware(['auth', 'dosen'])->group(function () {
    Route::resource('/actionabsen', AbsenController::class);
    Route::resource('/absenMhs', AbsenMhsController::class);
    Route::resource('/semester', SemesterController::class);
    Route::resource('/dosen', DosenController::class);
    Route::resource('/kontrak_mahasiswa', KontrakMahasiswaController::class);
    Route::resource('/mahasiswa', DsnMahasiswaController::class);
    Route::resource('/matakuliah', MatakuliahController::class);
    Route::resource('/jadwal', JadwalController::class);
    Route::get('/actionabsen/{user}/{id}', [AbsenController::class, 'create']);
    Route::resource('/mahasiswaAbsensi', MahasiswaController::class);
// });