<!DOCTYPE html>
<body>
  <h2>Menghitung jari jari lingkaran</h2>

  <form method="POST">
    masukan angka :
    <input type="number" name="luas" required>

    <button type="submit">hitung</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $luas = $_POST['luas'];
    $phi = 22/7;
    $r = sqrt($luas / $phi);
     
    echo "luas lingkaran = $luas <br>";
    echo "jari jari lingkaran = " . number_format($r, 2);
  }
  ?>