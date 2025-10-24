<?php

use App\Models\Post;
use App\Models\Siswa;
use App\Models\Biodata;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Wali;
use App\Models\Hobi;
use App\Models\Kelas;
use App\Models\Murid;
use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Transaksi;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'selamat datang';
});

Route::get('/biodatas/{nama_lengkap}/{tanggal_lahir}/{jenis_kelamin}',
 function ($nama_lengkap, $tanggal_lahir, $jenis_kelamin) {
    return "<h1>biodata</h1><br>" .
    "Nama lengkap : $nama_lengkap<br>";
    "Tanggal lahir : $tanggal_lahir<br>";
    "Jenis kelamin : $jenis_kelamin<br>";
});

Route::get('halaman2', function () {
    $hobi = ["muncak","futsal","volly","paskib","makan","ngoding","ngalamun","ngaji","traveling","tidur"];
    return view('tampil1', compact('hobi'));
});

Route::get('halaman3', function () {
    $idola = ["pa mulki","pa wildan","pa ute","prabowo","megawati","jokowi","gibran","al bagir","muller","pa ihsan"];
    return view('tampil2', compact('idola'));
});

Route::get('halaman1', function () {
    $siswa = ["Rudy", "ipat" , "salwa" , "bara" , "ani"];
    return view('tampil', compact('siswa'));
});
// Route :: get('post',function(){
//     //mengubah
//    // $post   =post::find(1);
//     //$post->content = "belajar dengan giat lagi";
//     //$post->save();
//     //return $post;

//     //menghapus
//     //$post   =post::find(1);
//     //$post->delete();
//     //return $post;

//     //menambahkan
//     $post       = new post;
//     $post->title ="menjadi teman yang baik";
//     $post->content = "menjadi teman yang baik adalah hal positif";
//     $post->save();
//     return $post;
// });
// Route :: get('/biodata',function(){
// // $biodata       = new biodata;
// // $biodata->nama_lengkap ="burahil";
// // $biodata->jenis_kelamin = "perempuan";
// // $biodata->tanggal_lahir ="2009-11-19";
// // $biodata->tempat_lahir = "tci";
// // $biodata->agama="kristen";
// // $biodata->alamat = "sadang";
// // $biodata->telepon ="938289112";
// // $biodata->email = "hil@gmail.com";
// // $biodata->save();
// // return $biodata;
// $biodata = biodata::all();
// return view('halaman_biodata',compact('biodata'));
// });

//Route ::get('post',[PostsController::class,'tampil']);
// Route ::get('biodata',[BiodataController::class,'tampil']);
Route::resource('biodata', BiodataController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');

Route::resource('post',PostsController::class);

Route::resource('pengguna',PenggunaController::class);
Route::resource('telepon',TeleponController::class);
Route::get('/one-to-one', [RelasiController::class, 'oneToOne']);
Route::get('/wali-ke-mahasiswa', function () {
    $wali = Wali::with('mahasiswa')->first();
    return "{$wali->nama} adalah wali dari {$wali->mahasiswa->nama}";
});
Route::get('/one-to-many', [RelasiController::class, 'oneToMany']);
Route::get('/mahasiswa-ke-dosen', function () {
    $mhs = App\Models\Mahasiswa::where('nim', '123457')->first();
    return "{$mhs->nama} dibimbing oleh {$mhs->dosen->nama}";
});
Route::get('/many-to-many', [RelasiController::class, 'manyToMany']);
Route::get('/hobi/bola', function () {
    $hobi = Hobi::where('nama_hobi', 'Bermain Bola')->first();
    foreach ($hobi->mahasiswas as $mhs) {
        echo $mhs->nama . '<br>';
    }
});
Route::get('eloquent', [RelasiController::class, 'eloquent']);
Route::resource('kelas',KelasController::class);
Route::resource('murid',MuridController::class);
Route::resource('barang',BarangController::class);
Route::resource('pembeli',PembeliController::class);
Route::resource('transaksi',TransaksiController::class);