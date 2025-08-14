<?php
const nl = '<br>';
$numeros = [1,2,3,4,5,6,7,8];

echo '<hr><b>var_dump</b>' . nl;
var_dump($numeros);

echo '<hr><b>var_export</b>' . nl;
var_export($numeros);

echo '<hr><b>print_r</b>' . nl;
print_r($numeros);

echo '<hr><b>implode</b>' . nl;
print(implode('-', $numeros));

$str = "1*2*4*6";
echo '<hr><b>explode</b>' . nl;
$bravo = explode("*", $str);
var_dump($bravo);

echo '<hr><b>count</b>' . nl;
echo count($numeros);

function ver($array, $nome) {
    echo '<hr>';
    echo $nome . ':';
    foreach ($array as $item) echo $item . ' ';
    echo ':: Tamanho ' . count($array);
}

ver($numeros, '$numeros');

// Soma de elementos do array
echo "<hr>Soma dos elementos do array: " . array_sum($numeros) . nl;
echo "Média dos elementos do array: " . array_sum($numeros) / count($numeros);

$numeros[] = 7;
ver($numeros, '$numeros');

$numeros[1] = 13;
ver($numeros, '$numeros');

array_unshift($numeros, 7);
ver($numeros, '$numeros');

array_push($numeros, 33);
ver($numeros, '$numeros');

$fatia = array_slice($numeros, 1, 3);
ver($fatia, '$fatia');

$fatia = array_splice($numeros, 0, 3, [11, 7]);
ver($numeros, '$numeros');
ver($fatia, '$fatia');

$pares = array_filter($numeros, function ($x) {
    return $x % 2 == 0;
});
ver($pares, '$pares');

$quadrados = array_map(function ($x) {return $x ** 2;}, $numeros);
ver($quadrados, '$quadrados');

$notas = ['ze'=>10, 'antonio'=>15, 'maria'=>16];
$notas['ze'] = 20;
$notas['Tio Patinhas'] = 12;
unset($notas['maria']);