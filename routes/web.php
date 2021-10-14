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
    return view('tentang');
});

Route::get('profile', function () {
    $nama = "Riska";
    return view('profile', compact('nama'));
});

Route::get('biodata', function () {
    $nama = "Riska Amelia";
    $umur = "18 tahun";
    $alamat = "Kp.Cilebak";
    $sekolah = "SMK Assalaam Bandung";
    $kelas = "12 RPL 1";
    $hobi = "Menggambar";
    return view('bio', compact('nama', 'umur', 'alamat', 'sekolah', 'kelas', 'hobi'));
});

Route::get('post/{id}', function ($a) {
    return "Halaman post ke - $a";
});

Route::get('biodata/{nama}/{umur}/{alamat}', function ($nama, $umur, $alamat) {
    return view('biodata', compact('nama', 'umur', 'alamat'));
});

Route::get('page/{page?}', function ($page = 1) {
    return "Halaman Page $page";
});

Route::get('blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'content pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'content kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'content ketiga'],
    ];

    // dd($posts);
    return view('blog', compact('posts'));
});

Route::get('person', function () {
    $dasis = [
        ['id' => 1, 'name' => 'Ujang Ubed', 'username' => 'ujang_ubed', 'email' => 'ujangubed@gmail.com', 'alamat' => 'Bandung',
            'mapel' => ['mapel1' => 'Matematika', 'mapel2' => 'Fisika', 'mapel3' => 'Kimia']],

        ['id' => 2, 'name' => 'Risma Fadila', 'username' => 'risma_fa', 'email' => 'risma@gmail.com', 'alamat' => 'Jakarta',
            'mapel' => ['mapel1' => 'Matematika', 'mapel2' => 'Fisika', 'mapel3' => 'Kimia']],

        ['id' => 3, 'name' => 'Syifa Siti', 'username' => 'syifass', 'email' => 'syifa@gmail.com', 'alamat' => 'Surabaya',
            'mapel' => ['mapel1' => 'Matematika', 'mapel2' => 'Fisika', 'mapel3' => 'Kimia']],

        ['id' => 4, 'name' => 'Fani Ramadanti', 'username' => 'fanira', 'email' => 'fani@gmail.com', 'alamat' => 'Papua',
            'mapel' => ['mapel1' => 'Matematika', 'mapel2' => 'Fisika', 'mapel3' => 'Kimia']],

        ['id' => 5, 'name' => 'Maudy Meilisa', 'username' => 'maumei', 'email' => 'maudy@gmail.com', 'alamat' => 'Kalimantan',
            'mapel' => ['mapel1' => 'Matematika', 'mapel2' => 'Fisika', 'mapel3' => 'Kimia']],

    ];

    // dd($posts);
    return view('dataSiswa', compact('dasis'));
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
