<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator dengan Radio Button</title>
</head>
<body>
  <h2>Kalkulator</h2>
  <form method="post" action="">
    <input type="number" name="angka1" placeholder="Masukkan angka pertama">
    <input type="number" name="angka2" placeholder="Masukkan angka kedua">
    <br>
    <input type="radio" name="operator" value="+"> Penjumlahan
    <input type="radio" name="operator" value="-"> Pengurangan
    <input type="radio" name="operator" value="*"> Perkalian
    <input type="radio" name="operator" value="/"> Pembagian
    <br>
    <button type="submit">Hitung</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    switch ($operator) {
      case '+':
        $hasil = $angka1 + $angka2;
        break;
      case '-':
        $hasil = $angka1 - $angka2;
        break;
      case '*':
        $hasil = $angka1 * $angka2;
        break;
      case '/':
        if ($angka2 == 0) {
          $hasil = "Tidak dapat dibagi dengan nol";
        } else {
          $hasil = $angka1 / $angka2;
        }
        break;
      default:
        $hasil = "Operator tidak valid";
    }

    echo "Hasil: " . $hasil;
  }
  ?>
</body>
</html>