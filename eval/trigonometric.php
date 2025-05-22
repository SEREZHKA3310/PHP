<?php

function calculateTrigonometric($function, $angle) {
    $radians = deg2rad($angle);
    switch (strtolower($function)) {
        case 'sin':
            return sin($radians);
        case 'cos':
            return cos($radians);
        case 'tan':
            return tan($radians);
        case 'ctg':
        case 'cot':
            $tan = tan($radians);
            if ($tan == 0) throw new Exception("Деление на 0 в ctg/cot");
            return 1 / $tan;
        default:
            throw new Exception("Unsupported trigonometric function: $function");
    }
}

function evaluateTrigonometricExpression($expression) {
    $pattern = '/(sin|cos|tan|ctg|cot)\((\d+(?:\.\d+)?)\)/i';
    $result = preg_replace_callback($pattern, function($matches) {
        $function = $matches[1];
        $angle = floatval($matches[2]);
        return calculateTrigonometric($function, $angle);
    }, $expression);
    return eval("return $result;");
}

// Example usage:
// $result = evaluateTrigonometricExpression("4/3*sin(30)");
?> 