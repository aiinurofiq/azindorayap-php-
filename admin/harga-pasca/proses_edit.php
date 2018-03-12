<?php
// Load file koneksi.php
include "../koneksi.php";

$id_harga = $_GET['id_harga'];
// Ambil Data yang Dikirim dari Form
$luas = $_POST['luas'];
$tiga = $_POST['tigathn'];
$lima = $_POST['limathn'];
  // Proses ubah data ke Database
  $query = "UPDATE harga SET luas='".$luas."', hrg_3thn='".$tiga."', hrg_5thn='".$lima."' WHERE id_harga='".$id_harga."'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='edit.php'>Kembali Ke Form</a>";
  }

?>