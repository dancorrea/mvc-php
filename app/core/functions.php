<?php

function dd(...$vars) {
    echo '<pre style="background: #000; color: #0f0; padding: 10px;">';
    echo '<strong>Debug Output:</strong><br>';
    foreach ($vars as $var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
    $backtrace = debug_backtrace()[0];
    var_dump("Arquivo: {$backtrace['file']}, linha: {$backtrace['line']}.");
    echo '</pre>';
    die();
}