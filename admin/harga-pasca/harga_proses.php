<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<?php
// Load file koneksi.php
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form
$luas 				= $_POST['luas'];
$tiga				= $_POST['tigathn'];
$lima 				= $_POST['limathn'];
  
  // Proses simpan ke Database
  $query = "INSERT INTO harga VALUES(NULL,'".$luas."','".$tiga."','".$lima."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
	header('Location: index.php');
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='index.php'>Kembali Ke Form</a>";
  }
?>