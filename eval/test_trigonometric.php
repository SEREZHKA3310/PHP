<?php
require_once 'trigonometric.php';
$expression = file_get_contents(__DIR__ . '/Task/expression.txt');
$expression = trim($expression);
try {
    $result = evaluateTrigonometricExpression($expression);
    echo "Выражение: $expression\n";
    echo "Результат: $result\n";
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";
}
?>