<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<?php
// Load file koneksi.php
include "admin/koneksi.php";
// Ambil Data yang Dikirim dari Form
$nama 				= $_POST['nama'];
$email 				= $_POST['email'];
$nohp 				= $_POST['nohp'];
  
  // Proses simpan ke Database
  $query = "INSERT INTO pelanggan VALUES(NULL,'".$nama."','".$email."',NOW(),'".$nohp."','telepon','baru')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ echo '
  <script type="text/javascript">
alert("Data Berhasil Dikirim");
window.location.href = "index.php";
</script>';
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='index.php'>Kembali Ke Form</a>";
  }
?>