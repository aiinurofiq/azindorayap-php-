<?php
include "koneksi.php";
$id_post = $_GET['id_post'];

$query2 = "DELETE FROM post WHERE id_post='".$id_post."'";
$sql2 = mysqli_query($connect, $query2); 

if($sql2 == true){
echo"<script>alert('Berhasil')</script>";
} else{
echo "<script>alert('Gagal')</script>";
}
?>
<meta http-equiv="refresh" content="1;URL=index.php">