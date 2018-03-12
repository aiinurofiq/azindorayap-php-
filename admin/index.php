<?php session_start(); ?>
<?php if(isset($_SESSION['username'])){ ?>
<?php include "koneksi.php"; ?>
<?php
		  if (isset($_GET['hello'])) {
			$sql = mysqli_query($connect,"UPDATE pelanggan set status='lama' WHERE status='baru';");
		  }
		?>
<html>
<head>
	<title>Admin | AzindoRayap </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="http://azindopest.com/wp-content/uploads/2017/09/Azindo-Pest-300x100.png" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<script type="text/javascript" src="pelanggan/jquery.js"></script>
	  <script type="text/javascript">
	   function ambilKomentar(){
	   $.ajax({
		  type: "POST",
		  url: "pelanggan/cek.php",
		  dataType:'json',
		  success: function(response){
		  if(response!="0"){
		   $("#jumlah").text(response);
			$(".buble").css("background" , "#e02424");
		  }else{
		  $(".buble").css("background" , "transparent	");
		 }
		 }});  
	  }
	  $(document).ready(function(){
	   ambilKomentar();
	  });
	  var text = document.getElementById("isi_post").value;
	text = text.replace(/\r?\n/g, '<br />');
	function cekInputan(){
	var kondisi= true;
		if(document.form1.judul.value == ""){
			document.getElementById("judulmissing").style.visibility = "visible";
			kondisi = false;
		}else{
			document.getElementById("judulmissing").style.visibility = "hidden";
			}

		if(document.form1.isi_post.value == ""){
        document.getElementById("isimissing").style.visibility = "visible";
		kondisi = false;
		}else{
        document.getElementById("isimissing").style.visibility = "hidden";
		}
		
	return kondisi;
	}
	</script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i><span><strong><?php echo $_SESSION['username']; ?></strong></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="ganti-password/index.php"><i class="lnr lnr-cog"></i> <span>Ganti Password</span></a></li>
								<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class="active"><i class="lnr lnr-text-align-left"></i> <span>Post</span></a></li>
						<li><a href="pelanggan/index.php?hello=true" class=""><i class="lnr lnr-envelope"></i>Pelanggan  <span class='buble' id="jumlah"></span></a></li>
						<li><a href="harga-pra/" class=""><i class="lnr lnr-tag"></i> <span>Harga Pra</span></a></li>
						<li><a href="harga-pasca/" class=""><i class="lnr lnr-tag"></i> <span>Harga Pasca</span></a></li>
						<li><a href="member-area/" class=""><i class="lnr lnr-users"></i> <span>Member Area</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Tulis Post Azindorayap</h3>
					<div class="panel panel-headline">
						<div class="panel-body">
						
                        <form method="POST"name="form1" enctype="multipart/form-data" action="post_proses.php" onSubmit="return cekInputan();">
							<table class="table">
                            <tr>
                            	<td>Judul</td>
                                <td> <input type="text" class="form-control" name="judul"></td>
								<td><p id="judulmissing" style="color:black; font-size:small; visibility:hidden;">Masukkan Judul</p></td>
                            </tr>
                            <tr>
                            	<td>Gambar</td>
                                <td> <input type="file" name="gambar"></td>
								<td></td>
                            </tr>
                            <tr>
                            	<td>Isi</td>
                                <td><textarea id="isi_post" rows="6" cols="100" class="form-control" name="isi_post"></textarea></td>
								<td><p id="isimissing" style="color:black; font-size:small; visibility:hidden;">Masukkan Isi Post</p></td>
                            </tr>
                            <tr>
                            	<td colspan="3"><button type="submit">Publish</button></td>
								
                            </tr>
                            </table>
                          </form>
						  <hr>
						  <?php
							if($tampil) {
							echo nl2br (stripslashes ($isi_laporan));
							}
							?>
						  <table class="table">
                            <tr>
								<th> Tanggal</th>
								<th> Judul</th>
								<th> Gambar</th>
								<th> Isi</th>
								<th colspan="2"> Aksi</th>
							</tr>
                            
							 <?php
								  // Load file koneksi.php
								  include "koneksi.php";
								  
								  $query = "SELECT * FROM post ORDER BY id_post DESC"; // Query untuk menampilkan semua data siswa
								  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
								  
								  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
									
									echo "<tr>";
									echo "<td>".date('d-m-Y', strtotime($data['tanggal']))."</td>";
									echo "<td>".$data['judul']."</td>";
									echo "<td><img src='gambar/".$data['image']."' width='100'></td>";
									echo "<td>".$data['isi_post']."</td>";
									echo "<td><a href='edit.php?id_post=".$data['id_post']."'>Ubah</a></td>";
									echo "<td><a href='hapus.php?id_post=".$data['id_post']."'>Hapus</a></td>";
									echo "</tr>";
								  }
								  ?>
                            </table>
							<hr>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>

<?php 
}else{
header("location:login.php");
}
?>