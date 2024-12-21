<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
	<title>ACI Company Profile</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/mobile-style.css">
	<link rel="stylesheet" href="assets/css/hamburgers.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css">
</head>

<body>
	<!-- Navigation Desktop Start -->
	<section class="header d-xl-block d-lg-block d-md-none d-sm-none d-xs-none d-none">
		<div class="header-top-line">
			<div class="container container-custom-navbar overflow-unset">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-6 col-sm-12 col-12 p-l-5">
						<div class="logo-brand">
							<a href="index.php">
								<img src="assets/images/logo-aci.png">
							</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<!-- <div class="right-logo-language">
							<div class="row align-items-center justify-content-end">
								<div class="col-md-9 col-sm-12 col-12">
									<form action="" class="search-ev">
										<div class="input-group search-page">
											<input type="text" class="form-control" placeholder="Search here.." aria-label="Recipient's username" aria-describedby="button-addon2">
											<div class="input-group-append">
												<button class="btn btn-outline-secondary btn-submit-search" type="button" id="button-addon2">Search</button>
											</div>
										</div>
									</form>
								</div>						
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>
		<div class="header-buttom-line">
			<div class="container container-custom-navbar">
				<div class="row">
					<div class="col-one-point-5 col-sm-12">
						<div class="logo-white">
							<a href="index.php" class="logo-white-swipe-up">
								<img src="assets/images/aci-logo.svg" alt="Logo white ACI">
							</a>
						</div>
					</div>
					<div class="col-of-seven col-xl-7 col-lg-7 col-md-7 col-sm-12">
						<div class="w-100 collapse-navbar-ykan">
							<nav class="navbar navbar-expand-lg navbar-centered">
								<button class="navbar-toggler" type="button" data-toggle="collapse"
									data-target="#navbar10">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="navbar-collapse collapse" id="navbar-aci">
									<ul class="navbar-nav nav-fill w-100">
										<li class="nav-item">
											<a class="nav-link menu-item" href="#">Home</a>
										</li>
										<li class="nav-item">
											<a class="nav-link menu-item" href="#">About Us</a>
										</li>
										<li class="nav-item">
											<a class="nav-link menu-item" href="#">Vision & Mission</a>
										</li>
										<li class="nav-item">
											<a class="nav-link menu-item" href="#">Products</a>
										</li>										
										<li class="nav-item">
											<a class="nav-link menu-item" href="#">Clients</a>
										</li>
										<li class="nav-item">
											<a class="nav-link menu-item" href="#">Contact Us</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
					<div class="col-one-point-2 col-sm-12">
						<div class="icon-search">
							<a class="search-icon">
							<img class="img-fluid" src="assets/images/search-icon-aci.svg" alt="campaign yappika">
							</a>
						</div>											
					</div>
				</div>
			</div>
		</div>
	</section>	
	<!-- Navigation Desktop End -->	
	<!-- start search form desktop -->
	<div id="box-search"
		class="container-search-transparent d-xl-block d-lg-block d-md-none d-sm-none d-xs-none d-none">
		<div id="content-search-form" class="search-content-form">
			<div class="row">
				<div class="col"></div>
				<div class="col-md-6 col-sm-12 align-self-center">
					<form action="" class="search-ev">
						<div class="input-group search-page">
							<input type="text" class="form-control"
								placeholder="Search here.." aria-label="Recipient's username"
								aria-describedby="button-addon2">
							<div class="input-group-append">
								<button class="btn btn-outline-secondary btn-submit-search" type="button"
									id="button-addon2">Search</button>
							</div>
						</div>
						<img id="close-box-search" width="26" src="assets/images/close-red.svg" alt="CLOSE">
					</form>
				</div>
				<div class="col"></div>
			</div>
		</div>
	</div>
	<!-- end search form desktop -->
	<!-- start navigation menu mobile -->
	<!-- Mobile Menu Navigation -->
	<section class="section-mobile-nav d-xl-none d-lg-none">
		<div class="header-top-mobile">
			<div class="logo-nav-mobile">
				<a href="index.php">
					<img class="img-fluid" src="assets/images/logo-aci.png" alt="ACI">
				</a>
			</div>
		</div>
		<header>
			<a id="icon-search-mobile" class="icon-search-mobile"><img src="assets/images/search-icon.svg" alt=""
					width="20"></a>
			<a id="close-search-mobile">
				<img width="14" src="assets/images/close-red.svg" alt="">
			</a>
			<form action="" id="mobile-search-form" class="form-search-mobile">
				<div class="input-group">
					<input type="text" id="form-control-mobile" class="form-control" placeholder="Find something here.."
						aria-label="search bar" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button class="btn btn-submit-mobile" type="button">Search</button>
					</div>
				</div>
			</form>
			<div class="cd-dropdown-wrapper">
				<!-- <a class="cd-dropdown-trigger" href="#0"><span class="text-menu">Menu</span></a> -->
				<div class="right-action-mobile">
					<div class="hamburger hamburger--3dy-r trigger-mm cd-dropdown-trigger">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				</div>
				<nav class="cd-dropdown">
					<ul class="cd-dropdown-content">
						<li><a href="index.php">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Vission & Mission</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Clients</a></li>
						<li><a href="#">Contact Us</a></li>
						<div class="space-navbar-mobile"></div>
					</ul>
				</nav>
			</div>
		</header>
	</section>
	<!-- Mobile Menu Navigation -->
	<!-- end navigation menu mobile -->

    <section class="home-slider">
		<div class="wrp-floating-shortcut">
			<div class="container">
				<div class="row gutter-12">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="shortcut-thumbnail-column">
							<a href="#">
								<img class="img-fluid" src="assets/images/shortcut-thumbnail-column-about.jpg" alt="About ACI - PT. MC PET FILM INDONESIA">
								<div class="caption-link-shortcut">
									<h3>About Us</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="shortcut-thumbnail-column">
							<a href="#">
								<img class="img-fluid" src="assets/images/shortcut-thumbnail-responsible-company.jpg" alt="Vision and Mission ACI">
								<div class="caption-link-shortcut">
									<h3>Vision & Mission</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="shortcut-thumbnail-column">
							<a href="#">
								<img class="img-fluid" src="assets/images/shortcut-thumbnail-products.jpg" alt="Products of PT. MC PET FILM INDONESIA">
								<div class="caption-link-shortcut">
									<h3>Products</h3>
								</div>
							</a>
						</div>
					</div>												
				</div>
			</div>
		</div>		
        <div id="homeCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            </ol>			
            <div class="carousel-inner">
                <div class="carousel-item slide-hero active">
					<a href="#">
						<!-- CAPTION SLIDER RATA KIRI -->
						<div class="caption-hero-slide">
							<div class="container container-slider-hero-left">
								<div class="text-content-caption-50">
									<div class="wrp-text-caption-inside">
										<div class="title-of-hero-slide">
											<h2 class="choose-white">Nationwide Leader in Chemical</h2>
										</div>
										<div class="paragraph-of-hero-slide">
											<p class="choose-white">Supply and Distribution for Water Treatment, Food Emulsifier, Oil Drilling and Cementing</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- CAPTION SLIDER RATA KIRI -->
                    	<img class="img-fluid" src="assets/images/hero-slide-1.jpg" alt="">
					</a>
                </div>	
            </div>
            <!-- <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </section>
	<!-- section hero image end at home -->
	<!-- section welcome at home -->
	<section class="section-welcome-at-home">
		<div class="wrp-section-welcome-home">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5 col-md-12 col-sm-12 col-12">
						<div class="left-welcome-home">
							<h3>Welcome to<br><span>ACI Indonesia</span></h3>
						</div>
					</div>
					<div class="col-lg-7 col-md-12 col-sm-12 col-12">
						<div class="w-100 right-welcome-home">
							<p>ACI was founded in 2008 to cater to the extensive chemical necessities in oil & gas services. As one of the fastest growing companies in its field, throughout the years the company has offered chemical solutions to other industries such as cosmetics, paper and food.</p>
						</div>
						<div class="w-100 right-welcome-home">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-12">
									<div class="w-100 d-flex justify-content-start align-items-center">
										<div class="iconization">
											<img src="assets/images/icon-drilling.svg" alt="Icon Drill projects">
										</div>
										<div class="caption-icon">
											<h2>17 Drilling</h2>
											<p>Project Supplied</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-12">
									<div class="w-100 d-flex align-items-center justify-content-start align-items-center">
										<div class="iconization">
											<img src="assets/images/icon-chemical.svg" alt="Icon Drill projects">
										</div>
										<div class="caption-icon">
											<h2>> 1 Million Litres</h2>
											<p>Chemical Delivered</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-12">
									<div class="w-100 d-flex align-items-center justify-content-start align-items-center">
											<div class="iconization">
												<img src="assets/images/icon-containers.svg" alt="Icon Drill projects">
											</div>
											<div class="caption-icon">
												<h2>>1000+ More</h2>
												<p>Containers Delivered</p>
											</div>
										</div>
									</div>
								<div class="col-md-6 col-sm-12 col-12">
									<div class="w-100 d-flex align-items-center justify-content-start align-items-center">
											<div class="iconization">
												<img src="assets/images/icon-scale.svg" alt="Icon Drill projects">
											</div>
											<div class="caption-icon">
												<h2>>1000+ More</h2>
												<p>Containers Delivered</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>	
	<!-- section welcome at home -->
	<!-- section home products start -->
	<section class="section-home-products">
		<div class="wrp-home-products">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="title-section-home section-title-center">
							<h3>Featured Products</h3>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="wrp-thumb-products">
							<a class="products-link-home" href="#">
								<img class="img-fluid" src="assets/images/thumbnail-products-home-2.jpg" alt="">
								<div class="caption-products-home">
									<h3>Fluid loss controller</h3>
									<p>The lorem ipsum of rare materials chemical thats veri important</p>
								</div>
								<div class="arrow-products">
									<img src="assets/images/arrow-products.png" alt="Product ACI">
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="wrp-thumb-products">
							<a class="products-link-home" href="#">
								<img class="img-fluid" src="assets/images/thumbnail-products-home-2.jpg" alt="">
								<div class="caption-products-home">
									<h3>Anti gas migration</h3>
									<p>The lorem ipsum of rare materials chemical thats veri important</p>
								</div>
								<div class="arrow-products">
									<img src="assets/images/arrow-products.png" alt="Product ACI">
								</div>								
							</a>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>
	<!-- section home products end-->

	<!-- OUR CLIENTS START -->
	<section class="section-our-clients">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="slick marquee">
						<div class="slick-slide">
							<div class="inner">
								<img src="assets/images/logodwdc.png" alt=""/>
							</div>
						</div>
						<div class="slick-slide">
							<div class="inner">
								<img src="assets/images/logo-pertamina.png"  alt=""/>
							</div>
						</div>
						<div class="slick-slide">
							<div class="inner">
								<img src="assets/images/f5c8050a0f7285cc0ac0bd7f8463c771.webp" alt=""/>
							</div>
						</div>
						<div class="slick-slide">
							<div class="inner">
								<img src="assets/images/SLB_Logo_2022.svg" alt=""/>
							</div>
						</div>
						<div class="slick-slide">
							<div class="inner">
								<img src="assets/images/haliburton-images.png" alt/>
							</div>
						</div>
						<div class="slick-slide">
							<div class="inner">
								<img src="assets/images/China_Oilfield_Services_logo_2.svg" alt=""/>
							</div>
						</div>
						<div class="slick-slide">
							<div class="inner">
								<img width="64" src="assets/images/Chevron Logo.svg" alt=""/>
							</div>
						</div>
						<div class="slick-slide">
							<div class="inner">
								<img src="assets/images/seleraya.png" alt=""/>
							</div>
						</div>
						<div class="slick-slide">
							<div class="inner">
								<img src="assets/images/mayora.png" alt=""/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!-- OUR CLIENTS END -->
	<!-- Footer Start -->
	<section class="footer">
		<div class="wrp-footer-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-12">
						<div class="first-column-footer">
							<div class="logo-footer-company">
								<a class="logo-footer-small" href="index.php">
									<img src="assets/images/logo-aci.png" alt="ACI Indonesia">
								</a>
							</div>
							<div class="wrp-office-adsress">
								<h3>Head Office</h3>
								<p>Menteng, Central Jakarta, Indonesia</p>
							</div>
							<div class="wrp-factory-address">
								<h3>Warehouse 1</h3>
								<p>Dumai, Pekanbaru, Riau, Sumatera Indonesia</p>
							</div>
							<div class="wrp-factory-address">
								<h3>Warehouse 2</h3>
								<p>Marunda, Bekasi, Indonesia</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-12">
						<div class="second-column-footer">
							<div class="footer-line-nav">
								<h3>About</h3>
								<ul>
									<li><a href="#">About Company</a></li>
									<li><a href="#">Vission & Mission</a></li>
								</ul>
							</div>
							<div class="footer-line-nav">
								<a href="#"><h3>Our Clients</h3></a>
							</div>
						</div>	
					</div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-12">
						<div class="third-column-footer">
							<div class="footer-line-nav">
								<h3>Product</h3>
								<div class="row">
									<div class="col-md-6 col-sm-12 col-12">
										<ul>
											<li><a class="dropdown-item" href="#">Fluid loss controller</a></li>
											<li><a class="dropdown-item" href="#">Retarder</a></li>
											<li><a class="dropdown-item" href="#">Anti gas migration</a></li>
											<li><a class="dropdown-item" href="#">Dispersant</a></li>
											<li><a class="dropdown-item" href="#">Filtrol</a></li>
											<li><a class="dropdown-item" href="#">Starch</a></li>
											<li><a class="dropdown-item" href="#">Polyamine</a></li>
											<li><a class="dropdown-item" href="#">Ezflo</a></li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul>
											<li><a class="dropdown-item" href="#">CMS</a></li>
											<li><a class="dropdown-item" href="#">Barrite</a></li>
											<li><a class="dropdown-item" href="#">Xanthan Gum</a></li>
											<li><a class="dropdown-item" href="#">GGBFS</a></li>
											<li><a class="dropdown-item" href="#">Antifoam</a></li>
											<li><a class="dropdown-item" href="#">Foamer</a></li>
											<li><a class="dropdown-item" href="#">Caustic soda</a></li>
											<li><a class="dropdown-item" href="#">Oil well cement</a></li>																
										</ul>
									</div>
								</div>
							</div>														
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12"></div>
					<div class="company-group-link-footer w-100 d-flex justify-content-center">
						<div class="grey-paragraph text-center">
							<p>© 2024 ACI Chemical - Indonesia Company</p>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<div class="wrp-copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="space-copyright"></div>
					</div>
				</div>	
			</div>
		</div>
	</section>
	<!-- Footer End -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/jquery.menu-aim.js"></script>
	<script src="assets/js/main.js"></script>	
	<script src="assets/js/custom.js"></script>		
	<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('#homeCarousel').carousel({
            interval: 3900,
            pause: "null"
        });
		$('.carousel-control-next').find('span').html('<img src="assets/images/arrow-right.svg">');
		$('.carousel-control-prev').find('span').html('<img src="assets/images/arrow-left.svg">');
		$('.slick.marquee').slick({
			speed: 7000,
			autoplay: true,
			autoplaySpeed: 0,
			centerMode: false,
			cssEase: 'linear',
			slidesToShow: 1,
			draggable:false,
			focusOnSelect:false,
			pauseOnFocus:false,
			pauseOnHover:false,
			slidesToScroll: 1,
			variableWidth: true,
			infinite: true,
			initialSlide: 1,
			arrows: false,
			buttons: false
		});
	</script>
</body>
</html>