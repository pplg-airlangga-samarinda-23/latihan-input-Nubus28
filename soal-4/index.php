<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 4</title>
</head>
<body>
    <h1>Soal 4</h1>
    
    <?php
        $tanggal_lahir = "2008-1-28";
        $tanggal_lahir_obj = new DateTime($tanggal_lahir);
        $tanggal_sekarang = new DateTime();
        $umur = $tanggal_sekarang->diff($tanggal_lahir_obj);
        echo "Umur: " . $umur->y . " tahun, " . $umur->m . " bulan, dan " . $umur->d . " hari.";
    ?>
</body>
</html>