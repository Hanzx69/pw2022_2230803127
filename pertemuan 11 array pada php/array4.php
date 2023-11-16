<?php
$mahasiswa = [

["sumbul", "123456", "Sistem Informasi", "sumbul@gmail.com"],
["khasimiri", "6096046", "Teknik Ancaman", "khasimiri@gmail.com"],
["ibnu", "696969", "Ilmu Hitam", "ibnu@gmail.com"],
["zul", "695487983", "Teknik Jihad", "zul@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><?= $mhs[0]; ?></li>
            <li><?= $mhs[1]; ?></li>
            <li><?= $mhs[2]; ?></li>
            <li><?= $mhs[3]; ?></li>
        </ul>    
        <?php endforeach; ?>
</body>
</html>