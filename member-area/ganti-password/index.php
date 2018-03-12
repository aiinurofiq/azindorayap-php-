<?php session_start(); ?>
<?php if(isset($_SESSION['username_member'])){ ?>
 <?php
		  if (isset($_GET['hello'])) {
			include '../koneksi.php';
			$sql = mysqli_query($connect,"UPDATE laporan set status='lama' WHERE status='baru';");
		  }
		?>
<html>
<head>
	<title>Ganti Password Admin | AzindoRayap </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
	<script>
	function cekInputan(){
	var kondisi= true;
		if(document.form1.passbaru.value == ""){
			document.getElementById("luasmissing").innerHTML = "X";
			kondisi = false;
		}else{
			document.getElementById("luasmissing").innerHTML = "";
			}

		if(document.form1.passbaruu.value == ""){
        document.getElementById("tigamissing").innerHTML = "X";
		kondisi = false;
		}else{ if(document.form1.passbaru.value != document.form1.passbaruu.value ){
				document.getElementById("tigamissing").innerHTML = "Password Harus Sama";
				kondisi = false;
				}else{
				document.getElementById("tigamissing").innerHTML = "";
				}
		}
		
		
		
	return kondisi;
	}
	

	</script>
	<script type="text/javascript" src="../laporan/jquery.js"></script>
	  <?php echo'<script type="text/javascript">
	   function ambilKomentar(){
	   $.ajax({
		  type: "POST",
		  url: "../laporan/cek.php?username_member='.$_SESSION['username_member'].'",
		  dataType:"json",
		  success: function(response){
		  if(response!="0"){
		   $("#jumlah").text(response);
			$(".buble").css("background" , "#e02424");
		  }else{
		  $(".buble").css("background" , "transparent	");
		 }
		 timer = setTimeout("ambilKomentar()",5000);
		 }});  
	  }
	  $(document).ready(function(){
	   ambilKomentar();
	  });
	  </script>';?>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="../index.php"><img src="../assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i><span><strong><?php echo $_SESSION['username_member']; ?></strong></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="../logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
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
						<li><a href="../laporan/index.php?hello=true" class=""><i class="lnr lnr-text-align-left"></i>Laporan<span class='buble' id="jumlah"></span></a></li>
						<li><a href="ganti-password/" class="active"><i class="lnr lnr-pencil"></i> <span>Ganti Password</span></a></li>
					</ul>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Ganti Password</h3>
					<div class="panel panel-headline">
						<div class="panel-body">
								<?php
								  // Load file koneksi.php
								  include "../koneksi.php";
								  
								  $query = "SELECT * FROM member where `username_member`='".$_SESSION['username_member']."'"; // Query untuk menampilkan semua data siswa
								  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
								  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
									$username_member = $data['username_member'];
								  }
								  ?>
							<form method="POST" action="ganti_pass.php?username_member=<?php echo $username_member;?>" name="form1" onSubmit="return cekInputan();">
							<table class="table">
                            <tr>
                            	<td width="40%">Password Baru</td>
                                <td width="20%"> <input type="password" class="form-control" name="passbaru" placeholder="Masukkan Password Baru"></td>
                                <td width="40%"><p id="luasmissing" style="color:black; font-size:small; "></p></td>
                            </tr>
                            <tr>
                            	<td>Ulangi Password</td>
                                <td> <input type="password" name="passbaruu" class="form-control" placeholder="Ulangi Password Baru"></td>
								<td width="40%"><p id="tigamissing" style="color:black; font-size:small;"></p></td>
                            </tr>
                            
                            <tr>
                            	<td colspan="3"><button type="submit">Simpan</button></td>
                            </tr>
                            </table>
                          </form>
						  
							
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
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/scripts/klorofil-common.js"></script>
	
</body>

</html>

<?php 
}else{
header("location:../login.php");
}
?>