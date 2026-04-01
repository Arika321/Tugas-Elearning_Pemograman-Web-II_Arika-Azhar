<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// HOME
Route::get('/', function () {
    $buku = [
        [
            'judul' => 'Pemrograman Web',
            'gambar' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085'
        ],
        [
            'judul' => 'Basis Data',
            'gambar' => 'https://images.unsplash.com/photo-1555949963-aa79dcee981c'
        ],
        [
            'judul' => 'Laravel Dasar',
            'gambar' => 'https://images.unsplash.com/photo-1581276879432-15e50529f34b'
        ]
    ];

    return view('home', compact('buku'));
});

// DATA BUKU
Route::get('/buku', function () {
    if (!session('login')) return redirect('/login');

    $buku = session('buku', []);
    return view('buku', compact('buku'));
});

Route::get('/buku/edit/{id}', function ($id) {
    $buku = session('buku', []);
    return "Halaman Edit Buku ID: " . $id;
});

// TAMBAH BUKU
Route::post('/buku/tambah', function (Request $request) {
    $buku = session('buku', []);
    $buku[] = $request->judul;
    session(['buku' => $buku]);
    return back();
});

// HAPUS BUKU
Route::get('/buku/hapus/{id}', function ($id) {
    $buku = session('buku', []);
    unset($buku[$id]);
    session(['buku' => array_values($buku)]);
    return back();
});

// ANGGOTA
Route::get('/anggota', function () {
    $anggota = ['Arika', 'Budi', 'Citra'];
    return view('anggota', compact('anggota'));
});

// LOGIN
Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    if ($request->username == 'admin' && $request->password == '123') {
        session(['login' => true]);
        return redirect('/');
    }
    return back()->with('error', 'Login gagal');
});

// LOGOUT
Route::get('/logout', function () {
    session()->forget('login');
    return redirect('/login');
});