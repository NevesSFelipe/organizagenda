<?php

namespace App\Core;

class View {

    public static function render(string $view, array $dados = []): void
    {

        extract($dados);

        $caminho = __DIR__ . '/../views/' . $view . 'View.php';

        if (!file_exists($caminho)) {
            Log::setLog(Log::ERROR, "View '{$view}' não encontrada.");
            self::renderError(404);
        }

        require __DIR__ . '/../views/layouts/header.php';
        require $caminho;
        require __DIR__ . '/../views/layouts/footer.php';
    
    }

    public static function renderError(int $codeHttp): void
    {
        http_response_code($codeHttp);
        $code = $codeHttp;
        $caminho = __DIR__ . "/../views/errors/errorView.php";
        require $caminho;
    }

}