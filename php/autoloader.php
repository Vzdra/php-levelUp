<?php

function fToPath(string $fqcn){
    return str_replace('\\','/', $fqcn) . '.php';
}

spl_autoload_register(function(string $class) {
    $path = fToPath($class);

    require __DIR__ . '/src/' . $path;
});

?>