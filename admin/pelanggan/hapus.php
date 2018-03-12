<?php
include "../koneksi.php";
$id_pelanggan = $_GET['id_pelanggan'];

$query2 = "DELETE FROM pelanggan WHERE id_pelanggan='".$id_pelanggan."'";
$sql2 = mysqli_query($connect, $query2); 

if($sql2 == true){
echo"<script>alert('Berhasil')</script>";
} else{
echo "<script>alert('Gagal')</script>";
}
?>
<meta http-equiv="refresh" content="1;URL=index.php">