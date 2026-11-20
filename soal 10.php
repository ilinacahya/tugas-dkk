<?php
$barang = [
    ["nama" => "Buku", "harga" => 15000, "jumlah" => 3],
    ["nama" => "Pulpen", "harga" => 5000, "jumlah" => 4],
    ["nama" => "Tas", "harga" => 80000, "jumlah" => 1],
];

$total = 0;
echo "<div style='font-family:monospace; border:1px solid black; padding:10px; width:280px;'>";
echo "=== STRUK BELANJA ===<br>";
echo "-----------------------<br>";
foreach ($barang as $b) {
    $subtotal = $b["harga"] * $b["jumlah"];
    $total += $subtotal;
    echo $b["nama"] . " x " . $b["jumlah"] . " = Rp " . number_format($subtotal, 0, ",", ".") . "<br>";
}
echo "-----------------------<br>";
echo "Total : Rp " . number_format($total, 0, ",", ".") . "<br>";

if ($total > 100000) {
    $diskon = $total * 0.1;
    $bayar = $total - $diskon;
    echo "Diskon 10% : Rp " . number_format($diskon, 0, ",", ".") . "<br>";
} else {
    $bayar = $total;
    echo "Diskon : Rp 0 <br>";
}
echo "Bayar : Rp " . number_format($bayar, 0, ",", ".") . "<br>";
echo "</div>";
?>