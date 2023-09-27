	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Restaurant</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			<header id="header">
				<div class="header-top">
					<div class="container">
				  		<div class="row justify-content-center">
						      <div id="logo">
						        <a href=""><img src="img/logo.png" alt="" title="" /></a>
						      </div>
				  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-center d-flex">			
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="">Home</a></li>
				          <li><a href="">Tentang</a></li>
				          <li><a href="">Menu</a></li>
				         </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
			
			<!-- start banner Area -->
			<section class="banner-area">		
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-12 banner-content">
							<h1 class="text-white">Makanan Indonesia</h1>
							<p class="text-white">
								tradisi kuliner yang paling kaya di dunia, dan penuh dengan cita rasa yang kuat.
							</p>
							<a href="#" class="primary-btn text-uppercase">Check Our Menu</a>
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 home-about-left">
							<h1>Tentang Makanan Indonesia</h1>
							<p>
								Hampir seluruh masakan Indonesia kaya dengan bumbu berasal dari rempah-rempah seperti kemiri, cabai, temu kunci, lengkuas, jahe, kencur, kunyit, kelapa dan gula aren dengan diikuti penggunaan teknik-teknik memasak menurut bahan, dan tradisi-adat yang terdapat pula pengaruh melalui perdagangan yang berasal seperti dari India, Tiongkok, Timur Tengah, Afrika dan Eropa (terutama Belanda, Portugis, dan Spanyol).							</p>
							<a href="#" class="primary-btn">view full menu</a>
						</div>
						<div class="col-lg-6 home-about-right">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->			

			<!-- Start menu-area Area -->
            <section class="menu-area section-gap" id="menu">
                <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Menu yang kami sajikan</h1>
							</div>
						</div>
					</div>	

                    <ul class="filter-wrap filters col-lg-12 no-padding">
                        <li class="active" data-filter="*">All Menu</li>
                        <li data-filter="*">Sumatera</li>
                        <li data-filter="*">Jawa</li>
                        <li data-filter="*">Kalimantan</li>
                        <li data-filter="*">Sulawesi</li>
                        <li data-filter="*">Papua</li>
                    </ul>
                    
                    <div class="filters-content">
                        <div class="row grid">
							@foreach ($makanan as $item)
							<div class="col-md-6 all ">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>{{ $item->nama_makanan }}</h4>
										<h4 class="price">Rp	{{number_format($item->harga) }}</h4>
									</div>			
									<p>{{$item->detail_makanan}}</p>									
								</div>					                               
                            </div> 
							@endforeach

                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End menu-area Area -->			

			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="footer-widget-wrap">
					<div class="container">
						<div class="row section-gap">
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Opening Hours</h4>
									<ul class="hr-list">
										<li class="d-flex justify-content-between">
											<span>Monday - Friday</span> <span>08.00 am - 10.00 pm</span>
										</li>
										<li class="d-flex justify-content-between">
											<span>Saturday</span> <span>08.00 am - 10.00 pm</span>
										</li>
										<li class="d-flex justify-content-between">
											<span>Sunday</span> <span>08.00 am - 10.00 pm</span>
										</li>																				
									</ul>
								</div>
							</div>
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Contact Us</h4>
									<p>
										56/8, los angeles, rochy beach, Santa monica, United states of america - 1205
									</p>
									<p class="number">
										012-6532-568-9746 <br>
										012-6532-569-9748
									</p>
								</div>
							</div>						
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Newsletter</h4>
									<p>You can trust us. we only send promo offers, not a single spam.</p>
									<div class="d-flex flex-row" id="mc_embed_signup">


										  <form class="navbar-form" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
										    <div class="input-group add-on align-items-center d-flex">
										      	<input class="form-control" name="EMAIL" placeholder="Your Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email address'" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
										      <div class="input-group-btn">
										        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
										      </div>
										    </div>
										      <div class="info mt-20"></div>
										  </form>
									</div>
								</div>
							</div>						
						</div>					
					</div>					
				</div>
				<div class="footer-bottom-wrap">
					<div class="container">
						<div class="row footer-bottom d-flex justify-content-between align-items-center">
						</div>						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>					
			<script src="js/owl.carousel.min.js"></script>			
            <script src="js/isotope.pkgd.min.js"></script>								
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>