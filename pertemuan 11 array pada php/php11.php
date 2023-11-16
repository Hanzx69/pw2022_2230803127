<?php
$mahasiswa =
[   
     [ "nama" => "Joni",
"nim" => "123456",
"jurusan" => "Sistem Informasi", 
"email" => "joni@gmail.com"
    ],  
 [ 
        "nama" => "bulek",
    "nim" => "123456",
    "jurusan" => "Sistem Informasi", 
    "email" => "joni@gmail.com"
        ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mahasiswa): ?>
        <ul>
            <li>
            </li>
        </ul>
</body>
</html>
