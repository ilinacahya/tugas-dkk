<?php
if (isset($_POST['nilai'])) {
    $nilai = $_POST['nilai'];

    if ($nilai > 0 || $nilai > 100) {
        $Grade ="nilai tidak valid";
    } elseif ($nilai >= 90) {
        $Grade = "A";
    } elseif ($nilai >= 80) {
        $Grade = "B";
    } elseif ($nilai >= 70) {
        $Grade = "C";
    } elseif ($nilai >= 60) {
        $Grade = "D";
    } else {
        $Grade = "E";
    }

    echo "<div style='border:1px solid black; padding:10px; width:250px;'>";
    echo "Nilai : $nilai <br>";
    echo "Grade : $Grade <br>";
    echo "</div><br>";
}
?>

<form method="post">
    Nilai : <input type="number" name="nilai"> <br><br>
    <button type="submit">Cek Grade</button>
</form>