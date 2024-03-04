<?php
class Circulo {
    public static function calcularArea($raio) {
        return pi() * $raio * $raio;
    }
}

$raio = 5;
$area = Circulo::calcularArea($raio);

echo "A área do círculo com raio $raio é: $area";
?>
