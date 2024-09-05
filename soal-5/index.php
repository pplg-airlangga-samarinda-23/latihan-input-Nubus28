<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 5</title>
</head>
<body>
    <h1>Soal 5</h1>
    <form method="post">
        <label for="bilangan">Masukkan bilangan (5-20):</label>
        <input type="number" name="bilangan" id="bilangan" min="5" max="20" required>
        <br>
        <label for="jenis">Pilih jenis bilangan:</label>
        <select name="jenis" id="jenis">
            <option value="ganjil">Ganjil</option>
            <option value="genap">Genap</option>
        </select>
        <br>
        <input type="submit" value="Tampilkan">
    </form>
    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $bilangan = $_POST['bilangan'];
            $jenis = $_POST['jenis'];
    
            echo "<p>Bilangan yang Anda pilih: $bilangan</p>";
            echo "<p>Jenis bilangan yang Anda pilih: $jenis</p>";
    
            echo "<p>Hasil:</p>";
            for ($i = 1; $i <= $bilangan; $i++) {
                if (($jenis == "ganjil" && $i % 2 != 0) || ($jenis == "genap" && $i % 2 == 0)) {
                    echo "$i, ";
                }
            }
        }
    ?>
</body>
</html>