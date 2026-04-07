<?php

namespace App\Core;

use App\Core\Log;

use PDO;
use PDOException;

class Database {

    private static ?PDO $conexao = null;

    public static function abrirConexao(): PDO
    {
        if (self::$conexao === null) {
            
            try {
                
                self::$conexao = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']};charset=utf8", $_ENV['DB_USER'], $_ENV['DB_PASS']);

                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {

                Log::setLog(Log::ERROR, $e->getMessage());
                View::renderError(500);
                exit;
    
            }
        }

        return self::$conexao;

    }

}