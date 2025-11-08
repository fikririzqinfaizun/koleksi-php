<?php
// FILE INI DI LUAR FOLDER 'source'
$sourceDir = __DIR__ . '/source';

spl_autoload_register(function ($className) use ($sourceDir) {
    $fileName = $sourceDir . '/' . $className . '.php';
    if (file_exists($fileName)) {
        require_once $fileName;
        return;
    }
    if (strpos($className, 'Interface') !== false) {
        $interfaceFileName = $sourceDir . '/#' . $className . '.php';
        if (file_exists($interfaceFileName)) {
            require_once $interfaceFileName;
            return;
        }
    }
});