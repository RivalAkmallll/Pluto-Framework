<?php

if (!function_exists('view')) {
    function view($path, $data = []) {
        extract($data); 
        
        // __DIR__ = folder App
        // Mundur satu langkah (../) untuk keluar dari App, lalu masuk views
        $file = __DIR__ . '/../views/' . $path . '.php'; 
        
        if (file_exists($file)) {
            require $file;
        } else {
            die("View <b>$path</b> tidak ditemukan di: $file");
        }
    }
}   