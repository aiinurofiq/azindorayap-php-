<?php
include "../koneksi.php";
$id_laporan = $_GET['id_laporan'];
$query = "SELECT username_member FROM laporan WHERE id_laporan='".$id_laporan."'";
$sql = mysqli_query($connect, $query); 
$username="";
 while($data = mysqli_fetch_array($sql)){ 
									$username=$data['username_member'];
									
								  }
$query2 = "DELETE FROM laporan WHERE id_laporan='".$id_laporan."'";
$sql2 = mysqli_query($connect, $query2); 

if($sql2){
	header('Location: input.php?username_member='.$username);
} else{
echo "<script>alert('Gagal')</script>";
}
?>