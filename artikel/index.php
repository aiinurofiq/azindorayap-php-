<?php $htmlString= 'testing';
include "../admin/koneksi.php";
$query = "SELECT * FROM harga"; // Query untuk menampilkan semua data siswa
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query 
$query2 = "SELECT * FROM harga_pra"; // Query untuk menampilkan semua data siswa
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query 
$luas=array();
$harga=array();
$luas_pra=array();
$harga_pra=array();
								  while($data = mysqli_fetch_array($sql)){
								  $luas[]=$data['luas'];
								  $harga[]=$data['hrg_5thn'];
								  $harga3[]=$data['hrg_3thn'];
							  }
							  while($data2 = mysqli_fetch_array($sql2)){
								  $luas_pra[]=$data2['luas_pra'];
								  $harga_pra[]=$data2['harga_pra'];
							  }
							 
								  
								  ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AZINDORAYAP | Artikel</title>
        <meta name="description" content="Termite Control Surabaya">
        <meta name="author" content="Azindo">
        <meta name="keyword" content="rayap, pembasmi rayap, pest control, termite control, pembasmi rayap surabaya, azindo rayap">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="http://azindopest.com/wp-content/uploads/2017/09/LOGO-PT-AZINDO-GUNUNG-KLECO.png" type="image/x-icon">
        <link rel="icon" href="http://azindopest.com/wp-content/uploads/2017/09/LOGO-PT-AZINDO-GUNUNG-KLECO.png" type="image/x-icon">

        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/fontello.css">
        <link href="../assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="../assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="../assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="../assets/css/price-range.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="../assets/css/owl.theme.css">
        <link rel="stylesheet" href="../assets/css/owl.transitions.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->
	<div class="navbarfixed">
        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="pe-7s-call"></i> 031 - 7402728</span>
                                <span><i class="pe-7s-mail"></i> azindopest@gmail.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="../member-area/" target="_blank"><i class="fa fa-users"></i> Member Area</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php"><img src="../assets/img/azindorayap.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <button id="myBtn" class="navbar-btn nav-button wow fadeInRight" data-wow-delay="0.48s">Ingin Kami Hubungi ?</button>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="dropdown ymm-sw " data-wow-delay="0.5s">
                            <a href="../index.php" class="dropdown-toggle">Home </a>
                        </li>
						<li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Solusi <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li  class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="../pengendalian-rayap/">Pengendalian Rayap</a>
                                </li>
                                <li  class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="../serangan/">Tanda - tanda Keberadaan Rayap</a>
                                </li>
                                <li  class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="../monitoring-rayap/">Tips Monitoring Rayap</a>
                                </li>
                                <li  class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="../jenis-rayap/">Jenis Rayap</a>
                                </li>

                            </ul>
                        </li>
                        
                        <li class="wow fadeInDown" data-wow-delay="0.5s">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" onclick="harga()">Cek harga </a>
                        </li>
                        <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Bisnis Anda<b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav" >
                                <li class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Restoran</a>
                                </li>
                                <li  class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Gudang Kertas</a>
                                </li>
                                <li  class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Hotel dan Penginapan</a>
                                </li>
                                <li  class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Kantor</a>
                                </li>
								<li class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Rumah Hunian</a>
                                </li>
								<li class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Sekolah dan Institusi</a>
                                </li>
								<li class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Rumah Sakit dan Klinik</a>
                                </li>
								<li class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Pabrik Retail</a>
                                </li>
                            </ul>
                        </li>
						<li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="../tentang/" class="dropdown-toggle" data-hover="dropdown">Tentang Kami</a>
                            <ul class="dropdown-menu navbar-nav" >
                                <li class="wow fadeInDown" data-wow-delay="0.1s">
                                    <a href="#">Artikel</a>
                                </li>
                               
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
	</div>
        <!-- End of nav bar -->
		
		
		
        <!-- deskripsi -->
					<div class="container">
						<div class="single-property-wrapper">
							<div class="section1">
                                <div class="s-property-content"><br>
								<?php
								  // Load file koneksi.php
								  include "../admin/koneksi.php";
								  
								  $query = "SELECT * FROM post ORDER BY id_post DESC"; // Query untuk menampilkan semua data siswa
								  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
								  
								  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
									
									echo "<h2 class='wow fadeInLeft animated'>".$data['judul']."</h2>";
									echo "<p class='date-comments'><i class='fa fa-calendar-o'></i>".date('F, d Y', strtotime($data['tanggal']))."</p>";
									echo "<table border='0'><td width='50%'><p><img src='../admin/gambar/".$data['image']."' width='90%'></p><td>";
									echo "<td valign='top'><p>".$data['isi_post']."</p><td></table>";
									echo "<hr>";
								  }
								  ?>
                                </div>
								
							</div>
						</div>
					</div>
        <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Lokasi Kami</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-adress">
                                    <li><a class="wow fadeInUp animated" target="_blank" href="https://www.google.co.id/maps/place/Jalan+Bumi+Sari+Praja+VII,+Lontar,+Sambikerep,+Kota+SBY,+Jawa+Timur+60216/@-7.2668211,112.6716011,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd7fe815fb10533:0x7113510b7b4dc009!8m2!3d-7.2668264!4d112.6737898?hl=en">
									<i class="pe-7s-map-marker strong"> </i> Jalan Bumi Sari Praja 7 / 37 Sambikerep, Surabaya</a></li>
                                    <li><i class="pe-7s-mail strong"> </i> azindo@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Hubungi Kami</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li>031 720 2728 (office 8 am s/d 5 pm)</li> 
                                    <li>0813 3207 1765 (mobile 24/7)</li> 
                                    <li>0812 3442 8118 (WA 24/7)</li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Tips</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="../pengendalian-rayap/">Pengendalian Rayap</a>  </li> 
                                    <li><a href="../serangan/">Tanda-tanda Keberadaan Rayap</a>  </li> 
                                    <li><a href="../monitoring-rayap/">Tips Monitoring Rayap</a></li> 
                                    <li><a href="../jenis-rayap/">Jenis Rayap</a></li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4>Sosial Media</h4>
                                <div class="footer-title-line"></div>

                                <div class="social pull-right"> 
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="https://twitter.com/azindopest" target="_blank"><i class="fa fa-twitter"></i>Twitter</a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.facebook.com/azindopest" target="_blank" data-wow-delay="0.2s"><i class="fa fa-facebook"></i>Facebook</a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                            <span> (C) <a href="http://www.KimaroTec.com">KimaroTheme</a> , All rights reserved 2016  </span> 
                        </div> 
                    </div>
                </div>
            </div>

        </div>

       <!----------------------------------------------------- The Modal ----------------------------------------------------->
		<div id="myModal" class="modal">

		  <!-- Modal content -->
		  <div class="modal-content">
			<div class="modal-header">
			  <span class="close" >&times;</span>
			  <h2>Hubungi Saya</h2>
			</div>
			<div class="modal-body">
				<table width="65%" border="0" align="center">
				<form action="pelanggan_proses.php" name="form1" method="post" onSubmit="return cekInputan();">
                    <tr>
                        <td align="right"><div class="box2">
                            <b>Nama</b>
                        </div></td>
                        <td><div class="box2">
                            <input type="text" id="nama" name="nama" class="form-control">
                            </div></td><td><p id="namamiss" style="color:red; margin-top:5px; margin-bottom:-15px;font-size:150%; visibility:hidden;"><b><strong><i class="pe-7s-close-circle strong"></i></strong></b></p></td>
                    </tr>
                    <tr>
                        <td align="right"><div class="box2">
                            <b>Email</b>
                        </div></td>
                        <td><div class="box2">
                            <input type="email" id="email" name="email" class="form-control">
                            </div></td><td><p id="emailmiss" style="color:red; margin-top:5px; margin-bottom:-15px;font-size:150%; visibility:hidden;"><b><strong><i class="pe-7s-close-circle strong"></i></strong></b></p></td>
                    </tr>
                    <tr>
                        <td align="right"><div class="box2" >
                        <b>No. Handphone</b>
                    </div></td>
                    <td><div class="box2">
                        <input type="text" id="nohp" name="nohp" class="form-control" onkeypress="return hanyaAngka(event)">
                        </div></td><td><p id="nohpmiss" style="color:red; margin-top:5px;; margin-bottom:-15px;font-size:150%; visibility:hidden;"><b><strong><i class="pe-7s-close-circle strong"></i></strong></b></p></td>
                    </tr>
                    <tr>
                        <td ><div class="box2"><button class="navbar-btn nav-button wow" formaction="pelanggan_proses2.php" >Email Saya</button></div></td>   
                        <td ><div class="box2"><button type="submit" class="navbar-btn nav-button wow" >Telepon Saya</button></div></td>
                    </tr>
				</form>
                </table>
			</div>
			
			<div class="modal-footer">
			  <h5></h5>
			</div>
		  </div>

		</div>
        <div id="myModal2" class="modal">

		  <!-- Modal content -->
		  <div class="modal-content">
			<div class="modal-header">
			  <span class="close2" >&times;</span>
			  <h2>Cek Harga</h2>
			</div>
			<div class="modal-body">
				<table width="70%" align="center">
                    <tr>
                        <td id="but"><div class="box2"><button class="navbar-btn nav-button2 wow" onclick="balik()">Pra Kontruksi</button></div></td>   
                        <td id="but2"><div class="box2"><button class="navbar-btn nav-button wow" onclick="ubah()">Pasca Kontruksi</button></div></td>
                    </tr>
                    <tr>
                        <td align="right"><div class="box2">
                            <b>Kota</b>
                        </div></td>
                        <td><div class="box2">
                            <select id="kota" onchange="cek()">
                                        <option selected disabled value="">Pilih</option>
                                        <option value="volvo" >Surabaya</option>
                                        <option value="saab">Malang</option>
                                        <option value="mercedes">Pasuruan</option>
                                        <option value="audi">Jember</option>
                                    </select>
                            </div></td>
                    </tr>
                        <tr>
                            <td align="right"><div class="box2">
                                <b>Garansi</b>
                            </div></td>
                            <td id="tahun">
                                <div class='box2'> 
                                    <b>5 Tahun</b>         
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td ></td>
                            <td id="tahun2"</td> 
                        </tr>
                    <tr>
                        <td align="right"><div class="box2">
                            <b align="right">Luas</b>
                        </div></td>
                        <td id="cec"><div class="box2">
                            <select id='luas' onchange="cek()">
                                    <option selected disabled value="">Pilih</option>
									<?php for($i=0;$i<count($luas_pra);$i++){ echo"
                                    <option value='$luas_pra[$i]' >$luas_pra[$i]</option>";}?>
                                </select>
                            </div></td>
                    </tr>
                    <tr>
                        <td align="right"><div class="box2">
                            <b>Harga</b>
                        </div></td>
                        <td><div class="box2">
                            <input type="text" id="harga"  disabled>
                            </div></td>
                    </tr>
                    <tr>
                        <td colspan="2">*Harga Tidak Mengikat & menyesuaikan hasil survey</td>
                    </tr>
                </table>
			</div>
			
			<div class="modal-footer">
                Apakah Anda Ingin Kami Hubungi ?
                <button class="navbar-btn nav-button wow" onclick="btn.click()">Hub Saya</button>
			</div>
		  </div>

		</div>
        <script src="../assets/js/modernizr-2.6.2.min.js"></script>

        <script src="../assets/js/jquery-1.10.2.min.js"></script> 
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/js/bootstrap-select.min.js"></script>
        <script src="../assets/js/bootstrap-hover-dropdown.js"></script>

        <script src="../assets/js/easypiechart.min.js"></script>
        <script src="../assets/js/jquery.easypiechart.min.js"></script>

        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/wow.js"></script>

        <script src="../assets/js/icheck.min.js"></script>
        <script src="../assets/js/price-range.js"></script>

        <script src="../assets/js/main.js"></script>
<?php
		$kata="";for($i=0;$i<count($luas);$i++){ $kata.="<option value='$luas[$i]' >$luas[$i]</option>";}
		$kata2="";for($i=0;$i<count($luas_pra);$i++){ $kata2.="<option value='$luas_pra[$i]' >$luas_pra[$i]</option>";}
		echo '<script type="text/javascript">var kondisi=false;
		function cek(){
		if(document.getElementById("kota").value!="" && kondisi){
			if(document.getElementById("a5").checked==true){';
		for ($i=0;$i<count($luas);$i++){
			echo 'if(document.getElementById("luas").value=="'.$luas[$i].'"){
					document.getElementById("harga").value = "'.$harga[$i].'";}';
		}
		echo '}if(document.getElementById("a3").checked==true){';
		for ($i=0;$i<count($luas);$i++){
			echo 'if(document.getElementById("luas").value=="'.$luas[$i].'"){
					document.getElementById("harga").value = "'.$harga3[$i].'";}';
		}
		echo '}}else{ cek2()}}</script>';
		?>
		<script type="text/javascript">
function ubah(){
	var htmlString="<?php echo $kata; ?>";
    kondisi=true;
    document.getElementById("tahun").innerHTML="                                  <input type='radio' name='garansi'  id='a5' onclick='cek()'>                      <b id='texta3'>        5 Tahun  </b>                           ";
    document.getElementById("tahun2").innerHTML="<input type='radio' name='garansi'   id='a3' onclick='cek()'> <b id='texta5'>3 Tahun    </b>                        ";
    document.getElementById("but").innerHTML="<div class='box2'><button class='navbar-btn nav-button wow' onclick='balik()'>Pra Kontruksi</button></div>";
    document.getElementById("but2").innerHTML="<div class='box2'><button class='navbar-btn nav-button2 wow' onclick='ubah()'>Pasca Kontruksi</button></div>";
    document.getElementById("kota").value="";
    document.getElementById("harga").value="";
    document.getElementById("luas").value="";
	document.getElementById("luas").innerHTML="<option selected disabled value=''>Pilih</option>"+htmlString;
}
function balik(){
	var htmlString2="<?php echo $kata2; ?>";
    kondisi=false;
    document.getElementById("tahun").innerHTML="<div class='box2'> <b>                                                              5 Tahun   </b>                             </div>";
    document.getElementById("tahun2").innerHTML="";
    document.getElementById("but").innerHTML="<div class='box2'><button class='navbar-btn nav-button2 wow' onclick='balik()'>Pra Kontruksi</button></div>";
    document.getElementById("but2").innerHTML="<div class='box2'><button class='navbar-btn nav-button wow' onclick='ubah()'>Pasca Kontruksi</button></div>";
    document.getElementById("kota").value="";
    document.getElementById("harga").value="";
    document.getElementById("luas").value="";
	document.getElementById("luas").innerHTML="<option selected disabled value=''>Pilih</option>"+htmlString2;
} 
function cekInputan(){
	var kondisi= true;
		if(document.form1.nama.value == ""){
			document.getElementById("namamiss").style.visibility = "visible";
			kondisi = false;
		}else{
			document.getElementById("namamiss").style.visibility = "hidden";
			}

		if(document.form1.email.value == ""){
        document.getElementById("emailmiss").style.visibility = "visible";
		kondisi = false;
		}else{
        document.getElementById("emailmiss").style.visibility = "hidden";
		}
		
		if(document.form1.nohp.value == ""){
        document.getElementById("nohpmiss").style.visibility = "visible";
		kondisi = false;
		}else{
        document.getElementById("nohpmiss").style.visibility = "hidden";
		}
		
	return kondisi;
	}
	
function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
 
    return false;
    return true;
}
</script>
<?php

echo '<script type="text/javascript">function cek2(){if(document.getElementById("kota").value!=""){
        ';
for ($i=0;$i<count($luas_pra);$i++){
	echo 'if(document.getElementById("luas").value=="'.$luas_pra[$i].'"){
            document.getElementById("harga").value = "'.$harga_pra[$i].'";}';
}
echo'    }}</script>';
?>
    </body>
</html>