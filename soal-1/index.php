<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 1</title>
</head>
<body>
    <h1>Soal 1</h1>
    <form method="post">
        <input type="number" name="jarijari"> <br>
        <input type="number" name="tinggi"> <br>
        <button type="submit">Hitung Volume</button>
        <button type="reset">Reset</button>
    </form>
    <?php
        //cihuyy

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jariJari = $_POST['jarijari'];
            $tinggi = $_POST['tinggi'];
            $phi = 3.14;
    
            $volume = $phi * $jariJari * $jariJari * $tinggi;
    
            echo "<p>Volume tabung adalah: " . $volume . "</p>";
        }
    ?>
</body>
</html>