<?php
$siswa = [
    ["nama" => "lily", "nilai" => 85],
    ["nama" => "aiden", "nilai" => 70],
    ["nama" => "oliv", "nilai" => 92],
    ["nama" => "james", "nilai" => 78],
    ["nama" => "billy", "nilai" => 88],
];

$nilai_saja = [];
foreach ($siswa as $s) {
    $nilai_saja[] = $s["nilai"];
}
$rata = array_sum($nilai_saja) / count($nilai_saja);
?>



<table border="1" cellpadding="5">
    <tr>
        <td>Nama</td>
        <td>Nilai</td>
    </tr>
    <?php foreach ($siswa as $s) { ?>
    <tr>
        <td><?php echo $s["nama"]; ?></td>
        <td><?php echo $s["nilai"]; ?></td>
    </tr>
    <?php } ?>
</table>
<br>
<?php
echo "Rata-rata : $rata <br>";
echo "Tertinggi : " . max($nilai_saja) . "<br>";
echo "Terendah : " . min($nilai_saja) . "<br>";
?>