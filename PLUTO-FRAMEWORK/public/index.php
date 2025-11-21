<?php

// ----------------------------------------------------------
// 1. LOAD AUTOLOAD COMPOSER (PENTING!)
// ----------------------------------------------------------
// Ini menggantikan semua require_once manual kamu.
// Semua class di folder App/ akan otomatis dipanggil saat dibutuhkan.

require_once __DIR__ . '/../vendor/autoload.php';

use Pluto\Pluto;
use App\Controllers\TodoController;

// Inisialisasi Aplikasi
$app = new Pluto();


// ----------------------------------------------------------
// 2. DAFTAR ROUTES
// ----------------------------------------------------------

$app->get('/home', function() {
    // Kita update judulnya biar lebih 'Web App'
    return view('home', ['title' => 'Pluto App Framework']); 
});

$app->get('/about', function() {
    return view('about');
});

$app->get('/docs', function() {
    return view('docs');
});

$app->get('/welcome', function() {
    header('Location: /docs');
    exit;
});
// ----------------------------------------------------------
// 3. JALANKAN APLIKASI
// ----------------------------------------------------------
$app->run();