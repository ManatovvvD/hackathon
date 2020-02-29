<!doctype html>
<html lang="zxx">
<style type="text/css">
	#score{
		font-size: 14px;
	}
	.breadcrumb_bg{
        background:url({{asset('img/elements/en.jpg')}});
        background-size:cover;
	}
	    #gage{
        font-size: 36px;
        font-family: sans-serif cursive;
        color:#fff;
        font-weight: bold;
        position: absolute;
        left: -50px;
        top: 15px;

    }
    #dade{
        font-size: 36px;
        font-family: sans-serif cursive;
        color:blue;
        font-weight: bold;
        position: absolute;
        top: -15px;
        left: -30px;
    }
</style>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ecobit</title>
	<link rel="icon" href={{ asset('img/favicon.png') }}>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
	<!-- animate CSS -->
<link rel="stylesheet" href={{asset('css/animate.css')}}>
	<!-- owl carousel CSS -->
	<link rel="stylesheet" href={{asset('css/owl.carousel.min.css')}}/>
	<!-- font awesome CSS -->
	<link rel="stylesheet" href={{asset('css/all.css')}}>
	<!-- flaticon CSS -->
	<link rel="stylesheet" href={{asset('css/flaticon.css')}}>
	<link rel="stylesheet" href={{asset('css/themify-icons.css')}}>
	<link rel="stylesheet" href={{asset('css/nice-select.css')}}>
	<!-- font awesome CSS -->
	<link rel="stylesheet" href={{asset('css/magnific-popup.css')}}>
	<!-- swiper CSS -->
	<link rel="stylesheet" href={{asset('css/slick.css')}}>
	<!-- style CSS -->
	<link rel="stylesheet" href={{asset('css/style.css')}}>
</head>

<body>
	<!--::header part start::-->
	<!--::Header part end::-->

	<!-- breadcrumb start-->
	<section class="breadcrumb breadcrumb_bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb_iner text-center">
						<div class="breadcrumb_iner_item">
							<h2>Engineering</h2>
							<h5>Teachers</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- breadcrumb start-->

	<!-- Start Sample Area -->

	<!-- End Sample Area -->

	<!-- Start Button -->
	
	<!-- End Button -->

	<!-- Start Align Area -->
	<div>
		<div class="whole-wrap">
			<div class="container box_1170">
				<div class="section-top-border">
					<h3 class="mb-30">Teachers</h3>
					<div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">Rank</div>
								<div class="country">Name</div>
								<div class="visit">Category</div>
								<div class="percentage">Score</div>
							</div>
							<div class="table-row">
								<div class="serial">01</div>
                            <div class="country"> <img src={{asset('img/elements/f1.jpg')}} alt="flag">Kevin Jackson</div>
								<div class="visit">Engineering</div>
								<div class="percentage">
									<div class="progress">
										<div id = "score">156012</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">02</div>
								<div class="country"> <img src={{asset('img/elements/f2.jpg')}} alt="flag">Adam Gaily</div>
								<div class="visit">Engineering</div>
								<div class="percentage">
									<div class="progress">
										<div id = "score">135600</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">03</div>
								<div class="country"> <img src={{asset('img/elements/f3.jpg')}} alt="flag">Tom Ridley</div>
								<div class="visit">Engineering</div>
								<div class="percentage">
									<div class="progress">
										<div id="score">95600</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">04</div>
								<div class="country"> <img src={{asset('img/elements/f4.jpg')}} alt="flag">Albert Schultz</div>
								<div class="visit">Engineering</div>
								<div class="percentage">
									<div class="progress">
										<div id="score">86595</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">05</div>
								<div class="country"> <img style="width: 50px; height: 35px" src={{asset('img/elements/f5.jpg')}} alt="flag">Radja Hakim</div>
								<div class="visit">Engineering</div>
								<div class="percentage">
									<div class="progress">
										<div id="score">84950</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">06</div>
								<div class="country"> <img src={{asset('img/elements/f6.jpg')}} alt="flag">Lao Lee</div>
								<div class="visit">Engineering</div>
								<div class="percentage">
									<div class="progress">
										<div id="score">72230</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">07</div>
								<div class="country"> <img src={{asset('img/elements/f7.jpg')}} alt="flag">Bao Loc</div>
								<div class="visit">Engineering</div>
								<div class="percentage">
									<div class="progress">
										<div id="score">68956</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">08</div>
								<div class="country"> <img src={{asset('img/elements/f8.jpg')}} alt="flag">Dan Witzel</div>
								<div class="visit">Engineering</div>
								<div class="percentage">
									<div class="progress">
										<div id="score">64503</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

	<!--::footer_part start::-->
	<footer class="footer_part">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-4 col-lg-4">
					<div class="single_footer_part">
						<a href="#" id="dade">WebMeet</a>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-2">
					<div class="single_footer_part">
						<h4>About Us</h4>
						<ul class="list-unstyled">
							<li><a href="">Managed Website</a></li>
							<li><a href="">Manage Reputation</a></li>
							<li><a href="">Power Tools</a></li>
							<li><a href="">Marketing Service</a></li>
							<li><a href="">Customer Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-2">
					<div class="single_footer_part">
						<h4>Quick Links</h4>
						<ul class="list-unstyled">
							<li><a href="">Store Hours</a></li>
							<li><a href="">Brand Assets</a></li>
							<li><a href="">Investor Relations</a></li>
							<li><a href="">Terms of Service</a></li>
							<li><a href="">Privacy & Policy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-2">
					<div class="single_footer_part">
						<h4>My Account</h4>
						<ul class="list-unstyled">
							<li><a href="">Press Inquiries</a></li>
							<li><a href="">Media Directories</a></li>
							<li><a href="">Investor Relations</a></li>
							<li><a href="">Terms of Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 col-md-3 col-lg-2">
					<div class="single_footer_part">
						<h4>Resources</h4>
						<ul class="list-unstyled">
							<li><a href="">Application Security</a></li>
							<li><a href="">Software Policy</a></li>
							<li><a href="">Supply Chain</a></li>
							<li><a href="">Agencies Relation</a></li>
							<li><a href="">Manage Reputation</a></li>
						</ul>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-8">
					<div class="copyright_text">
						<P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </P>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="footer_icon social_icon">
						<ul class="list-unstyled">
							<li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
							<li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--::footer_part end::-->

	<!-- jquery plugins here-->
	<script src="js/jquery-1.12.1.min.js"></script>
	<!-- popper js -->
	<script src="js/popper.min.js"></script>
	<!-- bootstrap js -->
	<script src="js/bootstrap.min.js"></script>
	<!-- easing js -->
	<script src="js/jquery.magnific-popup.js"></script>
	<!-- swiper js -->
	<script src="js/swiper.min.js"></script>
	<!-- swiper js -->
	<script src="js/masonry.pkgd.js"></script>
	<!-- particles js -->
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<!-- slick js -->
	<script src="js/slick.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.form.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!-- custom js -->
	<script src="js/custom.js"></script>
</body>

</html>