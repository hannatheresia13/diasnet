<!doctype html>

<?php
	include_once 'config.php';
	unset ($_SESSION['keluhan']);
	unset ($_SESSION['jumlah_keluhan']);
	unset ($_SESSION['n_atas1']);
	unset ($_SESSION['n_atas2']);
	unset ($_SESSION['n_atas3']);
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Diasnet</title>
<link rel="icon" href="" type="image/png">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css"> 
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="css/animate.css" rel="stylesheet" type="text/css">
<script href="js/datepicker.js"></script>
 
<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
 
</head>
<body>

<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo"><a href="#"><img src="img/logo.png" alt="logo"></a></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
			  <li><a href="#aboutUs" class="scroll-link">Tentang Asma</a></li>
			  <li><a href="#service" class="scroll-link">Layanan Kami</a></li>
			  <li><a href="#tes_asma" class="scroll-link">Tes Asma</a></li>
			  <li><a href="#team" class="scroll-link">Team</a></li>
			  <li><a href="#contact" class="scroll-link">Metode</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    	<?php
		if (isset($_GET['valid'])){
			echo "<div class=\"alert alert-danger\" style=\"position:fixed; width:100%;\">";
			echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
			echo "<strong>PERHATIAN!</strong> User ID atau Password Salah.Hanya User yang terdaftar yang dapat mengakses layanan \"TES ASMA\".";
			echo "</div>";
		}
		
		if (isset($_GET['mail'])){
			$mail = $_GET['mail'];
			
			switch ($mail){
				case 'gagal':
				echo "<div class=\"alert alert-danger\" style=\"position:fixed; width:100%;\">";
				echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
				echo "<strong>EMAIL GAGAL TERKIRIM!</strong> cek kelengkapan pengisian";
				echo "</div>";
				break;
				
				case 'sukses':
				echo "<div class=\"alert alert-success\" style=\"position:fixed; width:100%;\">";
				echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
				echo "<strong>EMAIL TERKIRIM!</strong> email anda sudah terkirim ke database kami, terimakasih";
				echo "</div>";
				break;
			}
		}
	?>
	<div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated"> 
              <h2>Selamat datang di <strong>DIASNET</strong> (Diagnosa Asma melalui Internet)</h2>
              <p>Diasnet merupakan sistem pakar untuk mendiagnosa penyakit asma berbasis web. Diasnet bertujuan untuk memberikan informasi kepada masyarakat luas tentang apa itu asma serta langkah apa saja yang harus dilakukan jika memang ada yang mengidap penyakit tersebut.</p>
              <a href="#service" class="read_more2">Read more</a> </div>
          </div>
          <div>
			<img src="img/mainImg.png" class="bannerImg zoomIn wow animated" alt="" />
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section--> 

<section id="aboutUs"><!--Aboutus-->
<div class="inner_wrapper">
  <div class="container">
    <h2>TENTANG ASMA</h2>
    <div class="inner_section">
	<div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="img/about-img.jpg" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
        	<div class=" delay-01s animated fadeInDown wow animated">
				<h3>Berikut adalah penjelasan secara umum tentang penyakit asma</h3><br/> 
				<p>Asma merupakan penyakit jangka panjang yang dapat menyebabkan penderitanya sulit bernapas, batuk-batuk, dan mengalami mengi ketika kambuh. Pada tiap orang, tingkat keparahan penyakit ini berbeda-beda, dan umumnya dapat dikendalikan dengan baik.Asma terjadi ketika saluran napas atau bronkus mengalami radang. Bronkus yang berbentuk seperti tabung kecil ini berfungsi untuk membawa udara masuk dan keluar dari paru-paru. Bronkus penderita asma pada umumnya lebih sensitif dari orang-orang lain dan lebih gampang mengalami radang.</p> <br/>
				<p>Ketika paru-paru seorang penderita teriritasi oleh sesuatu yang menjadi pemicu asma, saluran napasnya menjadi menyempit, otot-otot di sekitarnya menjadi mengencang, dan produksi dahak meningkat. Setelah itu timbullah beberapa gejala seperti dada yang terasa sesak, sulit bernapas, mengi, dan batuk-batuk.Serangan parah gejala-gejala tersebut dikenal sebagai serangan asma atau eksaserbasi asma akut. Penderita serangan asma bisa saja membutuhkan perawatan rumah sakit. Meski jarang terjadi, serangan asma bisa membahayakan nyawa. Bagi penderita asma kronis, radang pada saluran napasnya yang sudah berlangsung lama dan berulang-ulang bisa menyebabkan penyempitan permanen.Jika seseorang terdiagnosis mengidap asma saat kanak-kanak, gejalanya mungkin bisa menghilang ketika dia remaja dan muncul kembali saat dewasa. Namun gejala asma yang tergolong sedang atau berat di masa kanak-kanak, akan cenderung tetap ada walau bisa juga muncul kembali. Kendati begitu, asma bisa muncul di usia berapa pun dan tidak selalu berawal dari masa kanak-kanak.</p>
			</div>
			<div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn1">Kerja Sistem</a> </div>       
	   </div>
      	
	</div>
	  
      
    </div>
  </div> 
  </div>
</section>
<!--Aboutus--> 

<!--Service-->
<section  id="service">
  <div class="container">
    <h2>LAYANAN</h2>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-lg-4">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"><img src="img/sharing.png"/></div>
            <h3 class="animated fadeInUp wow">Sharing</h3>
            <p class="animated fadeInDown wow">Diasnet membagikan informasi kepada masyarakat tentang apa itu asma, penyebab serta dampaknya. Sehingga masyarakat dengan mandiri dapat melakukan pencegahan maupun cara penanganan yang tepat bagi penderita.</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">			
          <div class="service_block">
            <div class="service_icon icon  delay-03s animated wow zoomIn"><img src="img/diagnosis.png"/></div>
            <h3 class="animated fadeInUp wow">Diagnosa</h3>
            <p class="animated fadeInDown wow">Diasnet menyediakan layanan untuk melakukan cek atau diagnosa secara mandiri bagi masyarakat.</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">
          <div class="service_block">
            <div class="service_icon icon  delay-03s animated wow zoomIn"><img src="img/consultation.png"/></div>
            <h3 class="animated fadeInUp wow">Konsultasi</h3>
            <p class="animated fadeInDown wow">Diasnet menyediakan tempat untuk berkonsultasi dengan pakar asma sehingga masyarakat lebih leluasa untuk melakukan tanya jawab terkait penyakit asma.</p>
          </div>
        </div>
      </div>
	   </div>
  </div>
</section>
<!--Service-->

<!--TesAsma-->
<section id="tes_asma">
<div class="inner_wrapper">
  <div class="container">
    <h2><strong>TES ASMA<strong></h2>
    <div class="inner_section">
	<div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="img/tes.png" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
        	<div class=" delay-01s animated fadeInDown wow animated">
				<h3><strong>DIASNET</strong> menyediakan layanan untuk mendiagnosa secara mandiri apakah anda mengidap asma atau tidak.</h3><br/> 
				<p>Keakuratan informasi yang diberikanpun tidak jauh berbeda dengan seorang dokter karena <strong>DIASNET</strong> bekerja sama dengan pakar asma serta mengambil data dari jurnal - jurnal yang terkait. Untuk melakukan tes, anda akan diberikan beberapa pertanyaan tentang kondisi anda saat ini, dan di bagian akhir pertanyaan anda dapat melihat hasil serta rekomendasi dari sistem</p> <br/>
			</div>
			<?php
				if (!isset($_SESSION['user'])){
					include_once 'login-modal.php';
				}
				else if (isset($_SESSION['user'])){
					echo "<div class=\"work_bottom\"><a href=\"periksa.php\" class=\"contact_btn\">MULAI</a> </div>";
				}
			?>
			<div class="work_bottom">	<a href="daftar.php" class="contact_btn">Daftar</a> </div>
	   </div>
	</div>
	   
    </div>
  </div> 
  </div>
</section>
<!--TesAsma----> 

<section class="page_section team" id="team"><!--main-section team-start-->
  <div class="container">
    <h2>TEAM</h2>
    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>

<div class="member-area">
					<div class="row">
						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".1s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/team_pic1.jpg" alt="Team Menber">
										</div><!-- /.author-avatar -->

										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Virginia Hendras
												</h4>
												<span class="designation">
													311210045
												</span>
											</div><!-- /.member-top -->

											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.
											</p>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".3s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/team_pic2.jpg" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Jimmy Julius
												</h4>
												<span class="designation">
													311210020
												</span>
											</div><!-- /.member-top -->
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.
											</p>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated" >
								<div class="member-container" data-wow-delay=".5s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/team_pic3.jpg" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Willy Koesbandono
												</h4>
												<span class="designation">
													311210047
												</span>
											</div><!-- /.member-top -->
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.
											</p>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".7s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/team_pic4.jpg" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Michael Abraham
												</h4>
												<span class="designation">
													311210026
												</span>
											</div><!-- /.member-top -->
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.
											</p>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>
					</div><!-- /.row -->
				</div>
				

</div>
</section>
<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>METODE</h2>
        <div class="row">
          <div class="col-lg-4">
            <h2 style="font-size:20pt;">Pengetahuan</h2>
			<p style="text-align:justify;">Langkah paling awal untuk membuat sistem pakar adalah dengan menggali informasi tentang suatu masalah yang akan dipecahkan dengan bantuan seorang pakar maupun sumber pengetahuan lainya seperti buku.</p>
          </div>
          <div class="col-lg-4">
			 <h2 style="font-size:20pt;">Naive-Bayes</h2>
			 <p style="text-align:justify;">Data yang didaptakan dari pakar maupun buku berupa probabilitas tentang berapa orang pengidap penyakit asma akut, kronis, serta periodik. Data ini kemudian digunakan untuk menentukan aturan sistem dalam menentukan keputusan.</p>
          </div>
          <div class="col-lg-4">
			 <h2 style="font-size:20pt;">Keakuratan</h2>
			 <p>Pada Sistem pakar ini (Diasnet), tingkat keakuratan masih belum maksimal karena data yang diperoleh masih sedikit sehingga masih belum dapat menggantikan pakar yang sesungguhnya.</p>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2018 <a href="index.php">Kecerdasan Buatan</a>. </span> </div>
  </div>
</footer>

<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>