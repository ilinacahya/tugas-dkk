<?php
if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];

    if (empty($nama) || empty($user) || empty($pass) || empty($konfirmasi)) {
        $error = "Semua kolom harus diisi!";
    } elseif ($pass != $konfirmasi) {
        $error = "Password tidak sama!";
    } else {
        header("Location: login.php?daftar=berhasil");
        exit;
    }
}
?>

<div style="width:320px; margin:50px auto; font-family:monospace; font-size:17px; border:1px solid black; padding:20px; text-align:center;">
    <b>REGISTRASI</b><br><br>
    <?php if (isset($error)) { echo $error . "<br><br>"; } ?>
    <form method="post">
        Nama : <br><input type="text" name="nama"><br><br>
        Username / Email : <br><input type="text" name="username"><br><br>
        Password : <br><input type="password" name="password"><br><br>
        Konfirmasi Password : <br><input type="password" name="konfirmasi"><br><br>
        <button type="submit" name="daftar">DAFTAR</button>
        <button type="reset">BATAL</button>
    </form>
</div>