    <?php
	include '../koneksi.php';
    //file cek.php untuk cek data
    $sql = mysqli_query($connect,"SELECT * FROM pelanggan WHERE status='baru'");
   $array = mysqli_num_rows($sql);
   echo json_encode($array);
    
	?>