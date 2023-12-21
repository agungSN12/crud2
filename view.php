<?php
require_once("koneksi.php");
$sql = "SELECT * FROM pegawai";
$query = mysqli_query($conn,$sql);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>
                
            </td>
        </tr>
        <?php while ($result = mysqli_fetch_assoc($query)){ ?>
        <tr>
            <td> <?= $result['nik']?> </td>
            <td> <?= $result['nama']?> </td>
            <td> <?= $result['email']?> </td>
            <td> <?= $result['departemen']?> </td>
            <td> <img src="./img/<?= $result['foto'] ?>" alt="" width="200"> </td>
        </tr>

        <?php
        }
        ?>
    </table>
</body>
</html>