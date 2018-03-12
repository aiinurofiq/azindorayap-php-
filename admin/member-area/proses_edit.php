<?php
// Load file koneksi.php
include "../koneksi.php";

$id_laporan = $_GET['id_laporan'];
$query2 = "SELECT username_member FROM laporan WHERE id_laporan='".$id_laporan."'";
$sql2 = mysqli_query($connect, $query2); 
$username="";
 while($data = mysqli_fetch_array($sql2)){ 
									$username=$data['username_member'];
									
								  }
$tanggal = $_POST['tanggal'];
$isi_laporan = $_POST['isi_laporan'];

  $query = "UPDATE laporan SET tanggal='".$tanggal."', isi_laporan='".nl2br($isi_laporan)."', status='baru' WHERE id_laporan='".$id_laporan."'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){
  header('Location: input.php?username_member='.$username);
  }else{
  
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='edit.php'>Kembali Ke Form</a>";
  }

?>