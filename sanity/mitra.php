<!DOCTYPE html>
<?php  
include('koneksi/koneksi.php'); 
?>
<html lang="en">
  <head>
    <title>Slim - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><img src="images/2.png"></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
			  <li class="nav-item"><a href="index.php" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="single.php" class="nav-link"><span>Blog</span></a></li>
	          <li class="nav-item"><a href="konsultasi_kesehatan.php" class="nav-link"><span>Konsultasi Kesehatan</span></a></li>
			  <li class="nav-item"><a href="mitra.php" class="nav-link"><span>Mitra Toko</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

	  <section id="home-section" class="hero">
		  <div class="home-slider js-fullheight owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/1.png);">
	          		<!-- <h3 class="vr" style="background-image: url(images/divider.jpg);">Sanity</h3> -->
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		
			            <h1 class="mb-4 mt-3"><span>SANITY</span></h1>
			            <p>Your Healty Care</p>
			            
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	</section>
	
	<section class="ftco-section ftco-services-2" id="services-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
	</div>
	<div class="row">
		<div class="col-md d-flex align-self-stretch ftco-animate">
		<div class="media block-3 services text-center d-block">
		  <div class="media-body">
            <h2 class="heading mb-3">Bicara Kesehatan</h2>
            <h2 class="heading mb-3">Dengan Konsultan Kami</h2>
		  </div>
		</div>      
	  </div>
	  <div class="col-md d-flex align-self-stretch ftco-animate">
		<div class="media block-6 services text-center d-block">
		 
		</div>      
	  </div>
	  
		</div>
	</section>


        
    <section class="ftco-section bg-light" id="blog-section">
        <div class="container" v-for="motorku in motor">
        <center><h2 class="mb-4">Mitra Toko</h2></center>
          <div class="row justify-content-center mb-5 pb-5">
          </div>
          <div class="row d-flex">
          <?php
					$sql_h = "SELECT * FROM `users`";
					//echo $sql_h;
					$query_h = mysqli_query($koneksi,$sql_h);
					$no=1;
					while($data_h = mysqli_fetch_row($query_h)){
						$id=$data_h[0];
						$username=$data_h[1];
						$email = $data_h[2];
						$phone= $data_h[3];
					
					?>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                <div class="text float-right d-block">
                  <h3 class="heading"><a href="single.html"><?php echo $id ?></a></h3>
                  <p><?php echo $username ?></p>
                  <p><?php echo $email ?></p>
                  <p><?php echo $phone ?></p>
                  
                  <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="Toko.php" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
      
    <section class="ftco-section ftco-schedule" id="schedule-section">
		<div class="container">
		  <div class="row justify-content-center pb-5">
			  
			</div>
			<div class="ftco-schedule">
					  <div class="row">
			  <div class="col-md-6 nav-link-wrap">
				  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<div class="coach-wrap ftco-animate d-sm-flex">
							<div class="text pl-md-5">
								<h1 class="coach-name"><a href="#">Gabung Dengan Kami</a></h1>
								<h1 class="coach-name"><a href="#">Mulai Hidup Sehatmu</a></h1>
							</div>
						</div>
  
				  </div>
				</div>
				<div class="col-md-6 tab-wrap">
				  
				  <div class="tab-content" id="v-pills-tabContent">
  
					<div class="tab-pane fade show active" id="v-pills-8" role="tabpanel" aria-labelledby="day-8-tab">
						<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/3.png);">
							<!-- <h3 class="vr" style="background-image: url(images/divider.jpg);">Sanity</h3> -->
						</div>
					</div>
				  </div>
				</div>
			  </div>
		  </div>
		  </div>
	  </section>
		
	

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Me</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

        <div class="row block-9">

          <div class="col-md-12 d-flex">
          	<div class="row d-flex contact-info mb-5">
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-map-signs"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Address</h3>
				            <p>Jalan Soekarno Hatta, Malang No.445</p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-phone2"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Contact Number</h3>
				            <p><a href="tel://1234567920">+62 812345678</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-paper-plane"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Email Address</h3>
				            <p><a href="mailto:info@yoursite.com">cs@sanity.com</a></p>
			            </div>
			          </div>
		          </div>
		         <!-- <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-globe"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Website</h3>
				            <p><a href="#">yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
		        </div>-->
          </div>
        </div>
      </div>
    </section>

      <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About <span><a href="index.html">Sanity</a></span></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.html"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="program_sehat.html"><span class="icon-long-arrow-right mr-2"></span>Program Sehat</a></li>
                <li><a href="konsultasi_kesehatan.html"><span class="icon-long-arrow-right mr-2"></span>Konsultasi Kesehatan</a></li>
                <li><a href="pelayanan_toko.html"><span class="icon-long-arrow-right mr-2"></span>Pelayanan Toko</a></li>
                <li><a href="mitra.html"><span class="icon-long-arrow-right mr-2"></span>Mitra Toko</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Gym Fitness</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Crossfit</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Yoa</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Aerobics</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jalan Soekarno Hatta, Malang No.445</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 812345678</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">cs@sanity.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <i class="icon-heart color-danger" aria-hidden="true"></i>  <a href="index.html" target="_blank">Saanity</a></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script type="text/javascript" src="axios.js"></script>
  <script type="text/javascript" src="vue.js"></script>
  <script type="text/javascript" src="app.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
  </body>
</html>