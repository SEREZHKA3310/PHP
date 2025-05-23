<?php
function trigFunction($func, $param) {
    file_put_contents(__DIR__ . '/../debug.txt', 'trigFunction: ' . $func . '(' . $param . ')' . PHP_EOL, FILE_APPEND);
    $param = deg2rad($param);
    switch (strtolower($func)) {
        case 'sin': return sin($param);
        case 'cos': return cos($param);
        case 'tan': return tan($param);
        case 'cot': return 1 / tan($param);
        default: throw new Exception('Неизвестная тригонометрическая функция');
    }
} 