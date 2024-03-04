<?php
$primeiro = 0;
$segundo = 1;

for ($i = 1; $i <= 10; $i++) {
    echo $primeiro . ' ';
    $temp = $primeiro + $segundo;
    $primeiro = $segundo;
    $segundo = $temp;
}
?>
