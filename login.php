<?php
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if (empty($user) || empty($pass)) {
        $error = "Username dan Password harus diisi!";
    } else {
        $sukses = "Login Berhasil! Selamat datang, " . htmlspecialchars($user);
    }
}
?>

<div style="width:320px; margin:50px auto; font-family:monospace; font-size:17px; border:1px solid black; padding:20px; text-align:center;">
    <b>LOGIN</b><br><br>

    <?php
    if (isset($_GET['daftar'])) {
        echo "Pendaftaran Berhasil! Silakan Login<br><br>";
    }
    if (isset($error)) { echo $error . "<br><br>"; }
    if (isset($sukses)) { echo $sukses . "<br><br>"; }
    ?>

    <form method="post">
        Username / Email : <br><input type="text" name="username"><br><br>
        Password : <br><input type="password" name="password"><br><br>
        <button type="submit" name="login">LOGIN</button>
        <button type="reset">BATAL</button>
    </form>
    <br>
    <a href="registrasi.php">Belum punya akun? Daftar</a>
</div>