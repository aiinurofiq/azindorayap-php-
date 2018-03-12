<?php
// Load file koneksi.php
include "../koneksi.php";

$id_harga_pra = $_GET['id_harga_pra'];
// Ambil Data yang Dikirim dari Form
$luas = $_POST['luas_pra'];
$lima = $_POST['limathn'];
  // Proses ubah data ke Database
  $query = "UPDATE harga_pra SET luas_pra='".$luas."', harga_pra='".$lima."' WHERE id_harga_pra='".$id_harga_pra."'";
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