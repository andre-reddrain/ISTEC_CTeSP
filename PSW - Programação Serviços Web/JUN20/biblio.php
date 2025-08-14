<?php
function Eprimo($n) {
    $div = 2;

    if ($n < 2) return false;
    do {
        $resto = $n % $div;
        $quoc = intdiv($n, $div);
        $div++;
    } while ($resto != 0 && $quoc > $div);
    return $n == 2 || $resto != 0;
}

//for ($i = 0, $j = 0; $i < 100; $i++) {
//    if(EPrimo($i)) echo $i . ", ";
//}

$i = 0;
while ($i < 100) {
    if (Eprimo($i)) echo "$i, ";
    $i += 1;
}