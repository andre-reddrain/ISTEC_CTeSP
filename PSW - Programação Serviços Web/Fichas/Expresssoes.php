<?php
$x = 8;
$y = 6;

while ($x-- > 3) {
    switch ($x % 3) {
        case 0:
            $y += 1;
            break;
        case 1:
            $y += 2;
            break;
        default:
            $y += 4;
    }
}

echo "a) x: $x ; y: $y <br>";

$x = 7;
$y = ++$x;

while ($x-- > 2) $y -= $x;
echo "b) x: $x ; y: $y <br>";

for ($x = 0, $y = 0;; $x++) {
    $y += ($x % 2 != 1) ? 4 : 6;
    if ($x > 3) break;
}

echo "c) x: $x ; y: $y <br>";

for ($x = 1, $y = 0;; $x += 3) {
    if ($x % 2 == 0) continue;
    $y += $x;
    if ($x > 10) break;
}

echo "d) x: $x ; y: $y <br>";

$x = 9;
$y = 1;
while ($x-- > 3) $y += $x--;

echo "e) x: $x ; y: $y <br>";

$x = 6;
$y = ++$x;

while ($x-- > 2) $y += $x;

echo "f) x: $x ; y: $y <br>";

for ($x = 0, $y = 0;; $x++) {
    $y += ($x % 2 == 1) ? ++$x : 3;
    if ($x > 8) break;
}

echo "g) x: $x ; y: $y <br>";

for ($x = 1, $y = 0;; $x += 1) {
    if ($x % 2 == 0) continue;
    $y += ++$x;
    if ($x > 8) break;
}

echo "h) x: $x ; y: $y <br>";