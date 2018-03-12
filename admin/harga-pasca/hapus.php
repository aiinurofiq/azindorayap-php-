<?php
include "../koneksi.php";
$id_harga = $_GET['id_harga'];

$query2 = "DELETE FROM harga WHERE id_harga='".$id_harga."'";
$sql2 = mysqli_query($connect, $query2); 

if($sql2 == true){
echo"<script>alert('Berhasil')</script>";
} else{
echo "<script>alert('Gagal')</script>";
}
?>
<meta http-equiv="refresh" content="1;URL=index.php">