<?php

namespace Pluto;

class Pluto
{
    protected $routes = [];

    // Fungsi GET
    public function get($uri, $callback)
    {
        $this->routes['GET'][$uri] = $callback;
    }

    // Fungsi POST
    public function post($uri, $callback)
    {
        $this->routes['POST'][$uri] = $callback;
    }

    // Fungsi Run (UPDATED)
    public function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        // --- LOGIKA BARU: REDIRECT ROOT KE /HOME ---
        // Jika user membuka halaman awal (root /), lempar ke /home
        if ($uri === '/' || $uri === '') {
            header('Location: /home');
            exit();
        }
        // -------------------------------------------

        // Cek Route
        if (isset($this->routes[$method][$uri])) {
            $action = $this->routes[$method][$uri];
            
            // Handle Controller: [HomeController::class, 'index']
            if (is_array($action)) {
                // Pastikan class controller ada sebelum di-instantiate
                if (class_exists($action[0])) {
                    $controller = new $action[0]();
                    $method = $action[1];
                    return $controller->$method();
                } else {
                    die("Controller {$action[0]} tidak ditemukan.");
                }
            }
            
            // Handle Function Biasa
            if (is_callable($action)) {
                return call_user_func($action);
            }
        }

        echo "<h1 style='color:red'>404 Not Found</h1><p>Route $uri tidak ditemukan.</p>";
    }
}

// Helper View (DIPERBAIKI)
// Sebelumnya kamu hardcode 'home.php' di akhir, jadi kalau view('dashboard') error.
// Sekarang jadi dinamis.
if (!function_exists('view')) {
    function view($path, $data = []) {
        extract($data); 
        
        // Asumsi folder views ada di luar folder app/framework ini
        // Sesuaikan path ini dengan struktur foldermu
        $file = __DIR__ . '/../views/' . $path . '.php'; 
        
        if (file_exists($file)) {
            require $file;
        } else {
            die("View <b>$path</b> tidak ditemukan di: $file");
        }
    }
}