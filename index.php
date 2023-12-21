<?php
require_once("koneksi.php");
if(isset($_POST['submit'])){
    if($_POST["nik"] == "" | $_POST["nama"] =="" | $_POST["email"] == "" | $_POST["departemen"] =="" | $_FILES["foto"]['name'] ==""){
        echo "<script>
        alert('data belum terisi');
        window.location = 'index.php';
        </script>";
        
        return false;

    }
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$departemen =$_POST['departemen'];
$foto = $_FILES['foto']['name'];

$ta = $_FILES['foto']['tmp_name'];
$ts = "./img/";

move_uploaded_file($ta, $ts.$foto);

$sql = "INSERT INTO pegawai(nik,nama,email,departemen,foto) VALUES ('$nik','$nama','$email','$departemen','$foto')";
$query = mysqli_query($conn,$sql);
if($query == true){
    echo "<script>
    alert('berhasil');
    
    </script>";
}else{
    echo "<script>
    alert('gagal');
    
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
        <label for="">nik</label>
        <input type="text" name="nik">
        <br>
        <label for="">nama</label>
        <input type="text" name="nama">
        <br>
        <label for="">email</label>
        <input type="text" name="email">
        <br>
        <label for="">departemen</label>
        <input type="text" name="departemen">
        <br>
        <label for="">foto</label>
        <input type="file" name="foto">
        <br>
        <button name="submit">submit</button>

    </form>

    

</body>
</html>