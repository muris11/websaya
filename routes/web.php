<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\mhsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
// Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi');
// Route::get('/mhs', [mhsController::class, 'index'])->name('mhs');

// Route::get('/mhs/show', [mhsController::class, 'show'])->name('mhs-show');

// Route::get('/mhs/perulangan', [mhsController::class, 'perulangan'])->name('mhs-perulangan');


Route::get('/',function () {
    $title = "WebRifqy.Com";
    $slug = "home";
    $konten = "Ini adalah konten WebRifqy.Com";
    return view('konten.home', compact('title','slug','konten'));

});
Route::get('/home',function () {
    $title = "WebRifqy.Com";
    $slug = "home";
    $konten = "Ini adalah konten WebRifqy.Com";
    return view('konten.home', compact('title','slug','konten'));

});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/mahasiswa', function () {
    $mahasiswa = [
        ['nama' => 'Rifqy', 'nim' => '2307046', 'prodi' => 'Sistem Informasi Kota Cerdas'],
        ['nama' => 'Aliep', 'nim' => '2307031', 'prodi' => 'Sistem Informasi Kota Cerdas'],
        ['nama' => 'Rio', 'nim' => '2307082', 'prodi' => 'Sistem Informasi Kota Cerdas'],
        ['nama' => 'Esa', 'nim' => '2307089', 'prodi' => 'Sistem Informasi Kota Cerdas'],
        ['nama' => 'Deco', 'nim' => '2307036', 'prodi' => 'Sistem Informasi Kota Cerdas'],
    ];
    return view('mahasiswa', compact('mahasiswa'));
});

Route::get('/prodi', function () {
    $prodi = [
        ['kode_prodi' => 'D3TI',
            'nama_prodi' => 'Teknik Informatika'],
            ['kode_prodi' => 'D3TM',
            'nama_prodi' => 'Teknik Mesin'],
            ['kode_prodi' => 'D3TPTU',
            'nama_prodi' => 'Teknik Pendingin dan Tata Udara'],
            ['kode_prodi' => 'D3KP',
            'nama_prodi' => 'Keperawatan'],
            ['kode_prodi' => 'D4SIKC',
            'nama_prodi' => 'Sistem Informasi Kota Cerdas'],
            ['kode_prodi' => 'D4RPL',
            'nama_prodi' => 'Rekayasa Perangkat Lunak'],
            ['kode_prodi' => 'D4TRIK',
            'nama_prodi' => 'Teknologi Rekayasa Instrumentasi dan Kontrol'],
            ['kode_prodi' => 'D4PM',
            'nama_prodi' => 'Perancangan Manufaktur']
    ];
    return view('prodi', compact('prodi'));
});



// Route::get('/home', [PageController::class, 'index'])->name('home');
// Route::get('/profil', [PageController::class, 'profil'])->name('profil');
// Route::get('/mahasiswa', [PageController::class, 'mahasiswa'])->name('mahasiswa');
// Route::get('/prodi', [PageController::class, 'prodi'])->name('prodi');

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