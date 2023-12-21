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
            <td>nik</td>
            <td>nama</td>
            <td>email</td>
            <td>departemen</td>
            <td>foto</td>
            <td>aksi</td>
        </tr>
        <?php while ($result = mysqli_fetch_assoc($query)){ ?>
        <tr>
            <td> <?= $result['nik']?> </td>
            <td> <?= $result['nama']?> </td>
            <td> <?= $result['email']?> </td>
            <td> <?= $result['departemen']?> </td>
            <td> <img src="./img/<?= $result['foto'] ?>" alt="" width="200"> </td>
            <td>
                <a href="update.php?edit=<?= $result['id'] ?>">edit</a>
                <br>
                <a href="delete.php?hapus=<?= $result['id']?>">hapus</a>
            </td>
        </tr>

        <?php
        }
        ?>
    </table>
</body>
</html>