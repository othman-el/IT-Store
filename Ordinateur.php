<?php
require_once 'Admin/include/database.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Ordinateur-Enritech</title>
		<link rel="shortcut Icon" type="image/x-icon" href="./img/logo.png">

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +212661488101 | +212661486595 </a></li>
						<li><a href="mailto:contact@enritech.net"><i class="fa fa-envelope-o"></i> contact@enritech.net</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Entresol N° 76, Residence Chahbae D, Av. Louis Van Beethoven , Tangier 90000</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="https://www.facebook.com/enritechnology/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://x.com/enritechnology"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/enriquetechnology/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.linkedin.com/in/enrique-technology-solution-19b68b339/"><i class="fa fa-linkedin"></i></a></li>	
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="https://enritech.net/" class="logo">
									<img src="./img/3.png" alt="ENRIQUE TECHNOLOGY" >
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<input class="input" placeholder="Search here" required >
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->
						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Cart -->
								<div class="dropdown">
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>DH TTC 9800.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>DH TTC 9800.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: DH TTC 2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
	 
		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="index.html">Accueil</a></li>
						<li class="active"><a href="Ordinateur.html">Ordinateur</a></li>
						<li><a href="ecran.php">Ecran</a></li>
						<li><a href="Imprimante_Scanner.php">Imprimante & Scanner</a></li>
						<li><a href="Accessoire _Périphérique.php">Accessoire & Périphérique</a></li>
						<li><a href="Logiciel_OS.php">Logiciel & OS</a></li>
						<li><a href="Réseau.php">Réseau </a></li>
						<li><a href="Serveur.php">Serveur</a></li>
						<li><a href="Tablette_Téléphone.php">Tablette & Téléphone</a></li>
						<li><a href="Image_Son.php">Image & Son</a></li>
						<li><a href="Consommables.php">Consommables</a></li>
						<li><a href="Onduleur.php">Onduleur</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>PC PORTABLE<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="img/capture_d_e_cran_2024-09-26_a_10.19.47.png" alt="">
							</div>
							<div class="shop-body">
								<h3>PC FIX<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!--    -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Products</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="img/a0dc4ea-03.png" alt="">					
											</div>
											<div class="product-body">
												<p class="product-category">Ordinateur , PC fix</p>
												<h3 class="product-name"><a href="#">Ordinateur Tout-en-un Lenovo ThinkCentre neo 30a 24 Gen4 (12JY0020FM)</a></h3>
												<h4 class="product-price">DH TTC 9800.00 <del class="product-old-price">DH TTC 990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="img/pc.png" alt="">					
											</div>
											<div class="product-body">
												<p class="product-category">Ordinateur , PC fix</p>
												<h3 class="product-name"><a href="#">Ordinateur Tout-en-un Lenovo ThinkCentre neo 30a 24 Gen4 (12JY0020FM)</a></h3>
												<h4 class="product-price">DH TTC 9800.00 <del class="product-old-price">DH TTC 990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product03.png" alt="">												
											</div>
											<div class="product-body">
												<p class="product-category"> Ordinateur , PC Portable</p>
												<h3 class="product-name"><a href="#">Ordinateur portable Asus Zenbook Duo (UX8406CA-PZ043W)</a></h3>
												<h4 class="product-price">DH TTC 9800.00 <del class="product-old-price">DH TTC 990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Ordinateur , PC Portable</p>
												<h3 class="product-name"><a href="#">Ordinateur portable Asus Zenbook Duo (UX8406CA-PZ043W)</a></h3>
												<h4 class="product-price">DH TTC 9800.00 <del class="product-old-price">DH TTC 990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->

									</div>
									<!-- <div id="slick-nav-1" class="products-slick-nav"></div> -->
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
			  
		<!-- /SECTION -->
 
		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Enrique Technology is a leading provider of comprehensive information technology solutions, specializing in cutting-edge technology integration and management</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Entresol N° 76, Residence Chahbae D, Av. Louis Van Beethoven, Tangier</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+212661488101 | +212661486595</a></li>
									<li><a href="mailto:contact@enritech.net"><i class="fa fa-envelope-o"></i>contact@enritech.net</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="index.html">Accueil</a></li>
                                    <li class="active"><a href="Ordinateur.html">Ordinateur</a></li>
                                    <li><a href="ecran.html">Ecran</a></li>
                                    <li><a href="Imprimante_Scanner.html">Imprimante & Scanner</a></li>
                                    <li><a href="Accessoire _Périphérique.html">Accessoire & Périphérique</a></li>
                                    <li><a href="Logiciel_OS.html">Logiciel & OS</a></li>
                                    <li><a href="Réseau.html">Réseau </a></li>
                                    <li><a href="Serveur.html">Serveur</a></li>
                                    <li><a href="Tablette_Téléphone.html">Tablette & Téléphone</a></li>
                                    <li><a href="Image_Son.html">Image & Son</a></li>
                                    <li><a href="Consommables.html">Consommables</a></li>
                                    <li><a href="Onduleur.html">Onduleur</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">								
									<li><a href="#">View Cart</a></li>								
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy; <script>document.write(new Date().getFullYear());</script> Enrique Technology <i aria-hidden="true"></i> 
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
