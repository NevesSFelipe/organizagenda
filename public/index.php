<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// subir um nível (porque agora estamos em /public)
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use App\Core\Rotas;

$rota = new Rotas();
$rota->executarRota();