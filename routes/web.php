<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\mhsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi');


// Route::get('/mhs', [mhsController::class, 'index']
// )->name('mhs');

// Route::get('/', function () {
//     return view('welcome');
// });

// // Route for welcome message
// Route::get('/welcome', function () {
//     echo "selamat datang Rifqy";
// });

// // Route Method GET
// Route::get('/index', function () {
//     echo "uji coba route dengan method GET";
// });

// // Route Method POST
// Route::post('/save', function () {
//     echo "uji coba route dengan method POST";
// });

// // Route PUT
// Route::put('/update', function () {
//     echo "uji coba route PUT";
// });

// // Route DELETE
// Route::delete('/delete', function () {
//     echo "uji coba route DELETE";
// });

// // Route MATCH
// Route::match(['get', 'post'],'/kirim', function () {
//     echo "uji coba route method GET dan POST";
// });

// // Route ANY
// Route::any('/home', function () {
//     echo "uji coba route ANY";
// });

// Route::get('/show/{id?}', function($id=1){
//     echo "Nilai GET parameter id=".$id;
// });

// Route::get('/edit/{nama}', function($nama){
//     echo "Nilai GET Parameter nama=".$nama;
// })->where('nama', '[A-Za-z]+');

// //Route dengan nama
// Route::get('/start' ,function(){
//     echo "<a href ='".route('coba')."'>Start</a>";
// })->name('start');

// Route::get('/coba' ,function(){
//     echo "<a href ='".route('start')."'>Kembali</a>";
// })->name('coba');