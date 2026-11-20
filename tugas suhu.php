<?php
if (isset($_POST['suhu'])) {
    $c = $_POST['suhu'];
    $pilih = $_POST['pilih'];

    $r = 4/5 * $c;
    $f = 9/5 * $c + 32;
    $k = $c + 273;

    echo "<div style='width:320px; margin:20px auto; font-family:monospace; font-size:17px; border:1px solid black; padding:20px; text-align:center;'>";
    echo "Suhu Awal : $c °C <br>";
    echo "<br>";

    if ($pilih == "R") {
        echo "Reamur : $r °R <br>";
    } elseif ($pilih == "F") {
        echo "Fahrenheit : $f °F <br>";
    } elseif ($pilih == "K") {
        echo "Kelvin : $k K <br>";
    } else {
        echo "Reamur : $r °R <br>";
        echo "Fahrenheit : $f °F <br>";
        echo "Kelvin : $k K <br>";
    }
    echo "</div>";
}
?>
<div style="width:320px; margin:50px auto; font-family:monospace; font-size:17px; border:1px solid black; padding:50px; text-align:center;">
    <b>KONVERSI SUHU</b><br><br>
    <form method="post">
        <input name="suhu" placeholder="Masukin angka">
        <select name="pilih">
            <option value="semua">Semua</option>
            <option value="R">Reamur</option>
            <option value="F">Fahrenheit</option>
            <option value="K">Kelvin</option>
        </select>
        <br><br>
        <button type="submit">Konversi</button>
    </form>
</div>