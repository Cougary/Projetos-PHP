<?php

$string = "CALCULADORA";
$texto  = str_pad($string, 50, "-", STR_PAD_BOTH);
echo("$texto\n");
$num1 = (int) readline("Digite o primeiro número: ");
$num2 = (int) readline("Digite o segundo número: ");

echo("[1] Soma\n");
echo("[2] Subtração\n");
echo("[3] Multiplicação\n");
echo("[4] Divisão\n");

$operacao = (int) readline("Digite a operação a realizar: ");

if ($operacao == 1) {
    $soma = $num1 + $num2;
    echo("Soma: $soma\n");
} elseif ($operacao == 2) {
    $sub = $num1 - $num2;
    echo("Subtração: $sub\n");
} elseif ($operacao == 3) {
    $multi = $num1 * $num2;
    echo("Multiplicação: $multi\n");
} else if ($operacao == 4) {
    $divi = $num1 / $num2;
    echo("Divisão: $divi\n");
}
    
    

?>
