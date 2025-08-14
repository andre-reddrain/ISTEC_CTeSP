<?php
    $x = 3;
    echo sprintf("x = %d   Tipo:%s", $x, gettype($x));
    echo '<hr>';
    $x = 3.456789;
    echo sprintf("x = %.2f   Tipo:%s", $x, gettype($x));
    echo '<hr>';

    $x = true;
    echo "$x " . gettype($x);
?>