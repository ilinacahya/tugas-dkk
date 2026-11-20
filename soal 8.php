<?php
if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $Umur = $_POST['Umur'];
    $email = $_POST['Email'];


    if (empty($nama) || empty($kelas) || empty($Umur) || empty($email)){
        echo "<p style='color:red;'>Data tidak boleh kosong!</p>";
    } else {
        echo "<div style='border:1px solid black; padding:10px; width:250px;'>";
        echo "Pendaftaran Berhasil! <br>";
        echo "Nama : " . htmlspecialchars($nama) . "<br>";
        echo "Kelas : " . htmlspecialchars($kelas) . "<br>";
        echo "Umur : " . htmlspecialchars($Umur)  . "<br>";
        echo "Email :" . htmlspecialchars($email) . "<br>";

        echo "</div><br>";
    }
}
?>

<form method="post">
    Nama : <input type="text" name="nama"> <br><br>
    Kelas : <input type="text" name="kelas"> <br><br>
    Umur : <input type="number" name="Umur"> <br><br>
    Email : <input type="text" name="Email"> <br><br>
    <button type="submit">Daftar</button>
</form>