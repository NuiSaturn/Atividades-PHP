<?php
function isPalindromo($palavra) {
    $reverso = strrev($palavra);
    return strtolower($palavra) == strtolower($reverso);
}

$palavra = "radar";

if (isPalindromo($palavra)) {
    echo "$palavra é um palíndromo.";
} else {
    echo "$palavra não é um palíndromo.";
}
?>
