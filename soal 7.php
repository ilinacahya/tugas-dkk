<?php
function luasLingkaran($r) {
    return 22 / 7 * $r * $r;
}

function kelilingLingkaran($r) {
    return 2 * 22 / 7 * $r;
}

echo "Jari-jari 7 <br>";
echo "Luas : " . luasLingkaran(7) . "<br>";
echo "Keliling : " . kelilingLingkaran(7) . "<br><br>";

echo "Jari-jari 14 <br>";
echo "Luas : " . luasLingkaran(14) . "<br>";
echo "Keliling : " . kelilingLingkaran(14) . "<br>";
?>