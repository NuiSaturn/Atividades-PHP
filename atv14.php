<?php
class Calculadora {
    public static function adicao($a, $b) {
        return $a + $b;
    }

    public static function subtracao($a, $b) {
        return $a - $b;
    }

    public static function multiplicacao($a, $b) {
        return $a * $b;
    }

    public static function divisao($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Divisão por zero não é permitida.";
        }
    }
}

$num1 = 10;
$num2 = 2;

echo "Adição: " . Calculadora::adicao($num1, $num2) . "<br>";
echo "Subtração: " . Calculadora::subtracao($num1, $num2) . "<br>";
echo "Multiplicação: " . Calculadora::multiplicacao($num1, $num2) . "<br>";
echo "Divisão: " . Calculadora::divisao($num1, $num2) . "<br>";
?>
