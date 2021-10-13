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
    return view('welcome');
});

Route::get('about', function () {
    return '<h1>Hello</h1>'
        . 'Selamat datang di webapp saya'
        . ' Laravel emang keren';
});

Route::get('profile', function () {
    $nama = "Riska";
    return "Nama saya adalah <b>$nama</b>";
});

Route::get('post/{id}', function ($a) {
    return "Halaman post ke - $a";
});

Route::get('bio/{nama}/{umur}/{alamat}', function ($nama, $umur, $alamat) {
    return "Halaman Bio <br>
            Nama : $nama <br>
            Umur : $umur tahun <br>
            Alamat : $alamat";
});

Route::get('page/{page?}', function ($page = 1) {
    return "Halaman Page $page";
});

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}', function ($a = null, $b = null, $c = null) {
    if ($a == null && $b == null && $c == null) {
        $pesan = "Anda tidak memesan, silahkan pulang";
    }if ($a !== null) {
        $pesan = "Anda pesan <br> makanan : $a <br>";
    }if ($a !== null && $b !== null) {
        $pesan = "Anda pesan <br> makanan : $a <br> minuman : $b <br>";
    }if ($a !== null && $b !== null && $c !== null) {
        $pesan = "Anda pesan <br> makanan : $a <br> minuman : $b <br> cemilan : $c";
    }

    return $pesan;

});
