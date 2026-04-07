<?php

namespace App\Core;

use App\Core\Log;

class Rotas {

    private string $url;
    private string $controller;
    private string $metodo;
    private array $parametros;

    public function __construct()
    {
        $this->tratarURL();
    }

    public function executarRota()
    {

        $controllerClass = $_ENV['NAMESPACE_CONTROLLER'] . $this->controller;

        if ( !class_exists($controllerClass) ) {
            Log::setLog(Log::ERROR, "Controller '{$this->controller}' não encontrada.");
            View::renderError(404);
            exit;
        }

        $controller = new $controllerClass();
        
        if ( !method_exists($controller, $this->metodo) ) {
            Log::setLog(Log::ERROR, "Método '{$this->metodo}' não implementado.");
            View::renderError(404);
            exit;
        }

        call_user_func_array([$controller, $this->metodo], $this->parametros);
    
    }

    private function tratarURL(): void
    {

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $this->url = str_replace($_ENV['BASE_PATH'], "", $uri);
        $this->url = trim($this->url, "/");

        $arrayDadosURL = !empty($this->url) ? explode("/", $this->url) : [];

        $this->controller = (isset($arrayDadosURL[0]) && !empty($arrayDadosURL[0])) ? $arrayDadosURL[0] : $_ENV['CONTROLLER_DEFAULT'];
        $this->controller = ucfirst($this->controller) . "Controller";

        $this->metodo = (isset($arrayDadosURL[1]) && !empty($arrayDadosURL[1])) ? $arrayDadosURL[1] : $_ENV['METODO_DEFAULT'];
        
        $this->parametros = array_slice($arrayDadosURL, 2);
 
    }

}