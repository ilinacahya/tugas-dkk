<?php
if (isset($_POST['a'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $op = $_POST['op'];

    switch ($op) {
        case "+": $hasil = $a + $b; break;
        case "-": $hasil = $a - $b; break;
        case "x": $hasil = $a * $b; break;
        case "/":
            if ($b == 0) {
                $hasil = "Tidak bisa dibagi 0!";
            } else {
                $hasil = $a / $b;
            }
            break;
    }
    echo "Hasil : $hasil <br><br>";
}
?>

<form method="post">
    <input type="number" name="a">
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="x">x</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="b">
    <button type="submit">Hitung</button>
</form>