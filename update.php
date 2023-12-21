<?php
require_once("koneksi.php");
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql2= "SELECT * FROM pegawai WHERE id = '$id' ";
    $query2 = mysqli_query($conn,$sql2);   
}

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $departemen =$_POST['departemen'];
    $sql = "UPDATE pegawai SET nik='$nik', nama='$nama', email='$email', departemen='$departemen'  WHERE id='$id' ";
    $query= mysqli_query($conn,$sql);

    if($query == true){
        echo "<script>
                alert('data berhasil di ubah');
                window.location = 'view.php'
            </script>";
    }
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
    <?php while($result = mysqli_fetch_assoc($query2)){ ?>
    <input type="text" name="id" value="<?= $result['id']?>">
    <br>
        <label for="">nik</label>
        <input type="text" name="nik" value="<?= $result['nik'] ?>">
        <br>
        <label for="">nama</label>
        <input type="text" name="nama" value="<?= $result['nama'] ?>">
        <br>
        <label for="">email</label>
        <input type="text" name="email" value="<?= $result['email'] ?>">
        <br>
        <label for="">departemen</label>
        <input type="text" name="departemen" value="<?= $result['departemen'] ?>">
        <br>
        <label for="">foto</label>
        <input type="file" name="foto" value="<?= $result['foto'] ?>">
        <br>
        <button name="edit">edit</button>
        <?php
        } 
        ?>
    </form>

</body>
</html>