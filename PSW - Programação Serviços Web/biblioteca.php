<?php

function Dobro($n) {
    return 2 * $n;
}

function isMultiple($value, $multiple) {
    return $value % $multiple === 0;
}

function xpto($value) {
    $selos5 = 0;
    $selos3 = 0;

    if (isMultiple($value, 8)) {
        $selos5 = $selos3 = $value / 8;
    } else if (isMultiple($value, 5)) {
        $selos5 = $value / 5;
    } else if (isMultiple($value, 3)) {
        $selos3 = $value / 3;
        //TODO Converter 5 selos de 3 em 1 selo de 5
    } else {
        $resto = $value % 8;
        $temp = intdiv($value, 8);

        if ($temp == 0) { return ("$value - Impossível <br><br>");}
        echo ($value . " -- Resto: $resto  / Intdiv: $temp");
        // return $resto;
        //TODO Fazer o cálculo
        echo ($value);


        return "<br><br>";
    }

    //return ("$value >> Selos 5: $selos5 / Selos 3: $selos3 / Total: $value <br><br>");
    echo ("$value >> Selos 5: $selos5 / Selos 3: $selos3 / Total: $value <br><br>");
//    $resto == 3 ? $selos3++ : $selos5++;
}

for ($i = 1; $i < 50; $i++) {
    echo(xpto($i));
}