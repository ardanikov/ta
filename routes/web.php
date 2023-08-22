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

Route::get('/', function () {
    return view('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/rapot', [App\Http\Controllers\RapotController::class, 'index'])->name('rapot');
Route::get('/detail_kelas', [App\Http\Controllers\KelasController::class, 'indexDetail'])->name('detail_kelas');
Route::get('/admin', [App\Http\Controllers\UserController::class, 'index'])->name('admin');
Route::get('/detail_admin', [App\Http\Controllers\UserController::class, 'indexDetail'])->name('detail_admin');

//SISWA
Route::get('/master_siswa', [App\Http\Controllers\MasterSiswaController::class, 'index'])->name('master_siswa');
// Route::post('/addSiswa', [App\Http\Controllers\MasterSiswaController::class, 'addSiswa'])->name('addSiswa');
Route::post('/addSiswaUpload', [App\Http\Controllers\MasterSiswaController::class, 'create']);
Route::get('/detail_siswa/{id}', [App\Http\Controllers\MasterSiswaController::class, 'detailSiswa'])->name('detail_siswa');
Route::get('/detail_siswa/deleteSiswa/{id}', [App\Http\Controllers\MasterSiswaController::class, 'deleteSiswa']);
Route::put('/detail_siswa/updateSiswa/{id}', [App\Http\Controllers\MasterSiswaController::class, 'updateSiswa']);

//KELAS
Route::get('/kelas', [App\Http\Controllers\KelasController::class, 'index'])->name('kelas');
Route::get('/deleteKelas/{id}', [App\Http\Controllers\KelasController::class, 'deleteKelas']);
Route::post('/addKelas', [App\Http\Controllers\KelasController::class, 'addKelas']);

//ROMBEL
Route::get('/rombel', [App\Http\Controllers\KelasController::class, 'getRombel'])->name('rombel');
Route::get('/rombel/{id}', [App\Http\Controllers\KelasController::class, 'getRombelById'])->name('rombelId');
Route::post('/addRombel', [App\Http\Controllers\KelasController::class, 'addRombel'])->name('rombel');
Route::put('updateRombel/{id}', [App\Http\Controllers\KelasController::class, 'updateRombel'])->name('rombel');
Route::get('deleteRombel/{id}', [App\Http\Controllers\KelasController::class, 'deleteRombel'])->name('rombel');

//JURUSAN
Route::post('/addJurusan', [App\Http\Controllers\KelasController::class, 'addJurusan']);
Route::get('deleteJurusan/{id}', [App\Http\Controllers\KelasController::class, 'deleteJurusan']);
//GURU
Route::get('/master_guru', [App\Http\Controllers\GuruController::class, 'index'])->name('master_guru');

//LEGER
Route::get('/leger', [App\Http\Controllers\LegerController::class, 'index'])->name('leger');
Route::get('/detail_leger', [App\Http\Controllers\LegerController::class, 'detail'])->name('detail_leger');
Route::get('/export_leger', [App\Http\Controllers\LegerController::class, 'export']);


//NILAI
Route::get('/nilai', [App\Http\Controllers\NilaiController::class, 'index'])->name('nilai');
Route::get('/detail_nilai/{id}', [App\Http\Controllers\NilaiController::class, 'detail'])->name('detail_nilai');
Route::post('/uploadNilai', [App\Http\Controllers\NilaiController::class, 'store']);

//MAPEL
Route::get('/mapel', [App\Http\Controllers\MapelController::class, 'index'])->name('mapel');
Route::get('/getMapelById/{id}', [App\Http\Controllers\MapelController::class, 'getById']);
Route::post('/addMapel', [App\Http\Controllers\MapelController::class, 'addMapel']);
Route::get('/deleteMapel/{id}', [App\Http\Controllers\MapelController::class, 'deleteMapel']);

//KURIKULUM
Route::post('/addKurikulum', [App\Http\Controllers\MapelController::class, 'addKurikulum']);
Route::get('/deleteKurikulum/{id}', [App\Http\Controllers\MapelController::class, 'deleteKurikulum']);
