<?php
declare(strict_types=1);

namespace App\Controllers;

/**
 * Simple controller for the example application.
 *
 * Usage in routes/web.php:
 *   $router->get('/', [HomeController::class, 'index']);
 */
class HomeController
{
    /**
     * Show the welcome page.
     *
     * @return void
     */
    public function index(): void
    {
        $this->render('welcome');
    }

    /**
     * Render a PHP view from the views/ directory.
     *
     * $view can be:
     *  - 'welcome'            -> loads views/welcome.php
     *  - 'folder/name'        -> loads views/folder/name.php
     *
     * @param string $view View path relative to views/ (without .php)
     * @param array  $data Variables to extract into the view scope
     * @return void
     */
    protected function render(string $view, array $data = []): void
    {
        $base = dirname(__DIR__, 2) . '/views';
        $path = rtrim($base . '/' . ltrim($view, '/'), '/');
        if (!str_ends_with($path, '.php')) {
            $path .= '.php';
        }

        if (!file_exists($path)) {
            http_response_code(500);
            echo "View not found: {$path}";
            return;
        }

        extract($data, EXTR_SKIP);
        require $path;
    }

    /**
     * Helper to send a JSON response.
     *
     * @param mixed $payload
     * @param int   $status
     * @return void
     */
    protected function json($payload, int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}