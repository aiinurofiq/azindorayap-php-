<?php
include "../koneksi.php";
$id_harga_pra = $_GET['id_harga_pra'];

$query2 = "DELETE FROM harga_pra WHERE id_harga_pra='".$id_harga_pra."'";
$sql2 = mysqli_query($connect, $query2); 

if($sql2 == true){
echo"<script>alert('Berhasil')</script>";
} else{
echo "<script>alert('Gagal')</script>";
}
?>
<meta http-equiv="refresh" content="1;URL=index.php">