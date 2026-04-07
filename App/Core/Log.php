<?php

namespace App\Core;

class Log {

    public const SUCCESS = "SUCCESS";
    public const WARNING = "WARNING";
    public const ERROR   = "ERROR";

    public static function setLog(string $typeException, string $message): void
    {
        $data = date('Y-m-d H:i:s');

        $log = "[{$data}] {$typeException}: {$message}" . PHP_EOL;

        file_put_contents(__DIR__ . '/../../logs/app.log', $log, FILE_APPEND);
    }

}