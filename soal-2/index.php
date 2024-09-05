<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 2</title>
</head>
<body>
    <h1>Soal 2</h1>
    <form method="post">
    <label for="jarak">Masukkan jarak dalam kilometer:</label>
        <input type="number" name="jarak" id="jarak">
        <br>
        <select name="pilihan">
            <option value="m">KM ke m</option>
            <option value="cm">KM ke cm</option>
            <option value="mm">KM ke mm</option>
        </select>
        <button type="submit">Konversi</button>
    </form>
    <?php
        //cihuyy
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jarakKm = $_POST['jarak'];
            $pilihanKonversi = $_POST['pilihan'];

            switch ($pilihanKonversi) {
                case "m":
                    $hasil = $jarakKm * 1000;
                    break;
                case "cm":
                    $hasil = $jarakKm * 100000;
                    break;
                case "mm":
                    $hasil = $jarakKm * 1000000;
                    break;
                default:
                    $hasil = "masukin dulu le";
            }

            if (is_numeric($hasil)) {
                echo "<p>Hasil konversi: $jarakKm km = $hasil {$pilihanKonversi}</p>";
            } else {
                echo "<p>$hasil</p>";
            }
        }
        
    ?>
</body>
</html>