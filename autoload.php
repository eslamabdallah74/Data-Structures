<?php
spl_autoload_register(function ($className) {
    $prefix = 'Yomi\\DataStructures\\';
    $baseDir = __DIR__ . '/DataStructures/';

    // Check if the class uses the namespace prefix:
    $len = strlen($prefix);
    if (strncmp($prefix, $className, $len) !== 0) {
        // Move to the next registered autoloader
        return;
    }

    // Get the relative class name:
    $relativeClass = substr($className, $len);

    // Replace the namespace prefix with the base directory, replace namespace separators with directory separators in the relative class name, append with .php:
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    // If the file exists, require it:
    if (file_exists($file)) {
        require_once $file;
    }
});
