<?php
require_once("koneksi.php");
if(isset($_GET['hapus'])){
$id = $_GET['hapus'];
$sqlshow = "SELECT * FROM pegawai WHERE id = $id";
$queryshow = mysqli_query($conn,$sqlshow);
$result = mysqli_fetch_assoc($queryshow);

unlink("./img/".$result['foto']);

$sql = "DELETE FROM pegawai WHERE id = '$id'";
$query = mysqli_query($conn,$sql);
header("location:view.php");
}