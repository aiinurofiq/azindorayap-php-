<?php
include "../koneksi.php";
$username_member = $_GET['username_member'];

$query2 = "DELETE FROM member WHERE username_member='".$username_member."'";
$sql2 = mysqli_query($connect, $query2); 

if($sql2 == true){
echo"<script>alert('Berhasil')</script>";
} else{
echo "<script>alert('Gagal')</script>";
}
?>
<meta http-equiv="refresh" content="1;URL=index.php">