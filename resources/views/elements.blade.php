<!doctype html>
<html lang="zxx">
<style type="text/css">
	#score{
		font-size: 14px;
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
    #q,#e,#k,#w, #o, #t,#a, #p{
    	position: relative;
    	width: 200px;
    	height: 20px;
    	margin-left: 200px;
    	display: flex;
    	flex-direction: column;
    	font-size: 110%;	
    }
    #y{
    	font-size: 110%;
    }
	input[type=range]{
	  width: 100%;
	  height: 10px;
	  cursor: pointer;
	  box-shadow: 1px 1px 1px #000000;
	  background: #3071A9;
	  border-radius: 5px;
	  border: 1px solid #000000;
	}
	input[type=range]:hover{
	  box-shadow: 1px 1px 1px #000000;
	  background: #3071A9;
	  border-radius: 5px;
	  border: 1px solid #000000;
	}
	input[type=range]:focus{
		box-shadow: 1px 1px 1px #000000;
	  background: #3071A9;
	  border-radius: 5px;
	  border: 1px solid #000000;
	}
	.sub{
		position: absolute;
		left: 220px;
		top: 10px;
		border-radius: 10px;
		background-color: #55FF00;
		font-family: serif;
		font-weight: 10px;
	}
</style>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>WebMeet</title>
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
							<h2 style="color: black">Ratings</h2>
							<div style="display:flex;flex-direction: row;text-align: center;margin-left:500px;"><div><h5><a style=" color: black" href="#Teachers">Teachers</a></h5></div> <span></span><div><h5><a style="color: black" href="#Students">Students</a></h5></div></div>
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
	<div id="Teachers">
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
								<div style="mar"></div>
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
								<div class="visit">Laws</div>
								<div class="percentage">
									<div class="progress">
										<div id = "score">135600</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">03</div>
								<div class="country"> <img src={{asset('img/elements/f3.jpg')}} alt="flag">Tom Ridley</div>
								<div class="visit">Psychology</div>
								<div class="percentage">
									<div class="progress">
										<div id="score">95600</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">04</div>
								<div class="country"> <img src={{asset('img/elements/f4.jpg')}} alt="flag">Albert Schultz</div>
								<div class="visit">Language</div>
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
								<div class="visit">Mathematics</div>
								<div class="percentage">
									<div class="progress">
										<div id="score">72230</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">07</div>
								<div class="country"> <img src={{asset('img/elements/f7.jpg')}} alt="flag">Bao Loc</div>
								<div class="visit">Language</div>
								<div class="percentage">
									<div class="progress">
										<div id="score">68956</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">08</div>
								<div class="country"> <img src={{asset('img/elements/f8.jpg')}} alt="flag">Dan Witzel</div>
								<div class="visit">Mathematics</div>
								<div class="percentage">
									<div class="progress">
										<div id="score">64503</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
						<div class="whole-wrap">
			<div id="Students" class="container box_1170">
				<div class="section-top-border">
					<h3 class="mb-30">Students</h3>
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
								<div class="country"> <img style="width: 50px; height: 35px" src={{asset('img/elements/f5.jpg')}}>Jannatul Ferdous</div>
								<div class="visit">Language</div>
								<div class="percentage">
									<div class="progress">
										<div id="score1">100225</div>
										<div style="position: absolute;">
											<div id="q">
												<div id="y" >50</div>
												<div style="display: flex;flex-direction: row;">
											  <input type="range" id="vol" name="vol" min="0" max="100" onchange="s()">
											  <input type="submit" onclick="f()" class="sub"></div>
											</div>
										
										</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">02</div>
								<div class="country"> <img src={{asset('img/elements/f1.jpg')}} alt="flag">Daniel Jorje</div>
								<div class="visit">Mathematics</div>
								<div class="percentage">
									<div class="progress">
										<div id="score2">99882</div>
										<div style="position: absolute;">
											<div id="w">
												<div id="yy" >50</div>
												<div style="display: flex;flex-direction: row;">
											  <input type="range" id="vol1" name="vol" min="0" max="100" onchange="sa()">
											  <input type="submit" onclick="fa()" class="sub"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">03</div>
								<div class="country"> <img style="width: 50px; height: 35px" src={{asset('img/elements/f7.jpg')}} alt="flag">Giang Hoa</div>
								<div class="visit">Engineering</div>
								<div class="percentage">
									<div class="progress">
										<div id="score30">97855</div>
										<div style="position: absolute;">
											<div id="e">
												<div id="ye" >50</div>
												<div style="display: flex;flex-direction: row;">
											  <input type="range" id="vol20" name="vol" min="0" max="100"onchange="ds()">
											  <input type="submit" onclick="gs()" class="sub"></div>
											</div>										
										</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">04</div>
								<div class="country"> <img src={{asset('img/elements/f2.jpg')}} alt="flag">Steve Gardner</div>
								<div class="visit">Engineering</div>
								<div class="percentage">
									<div class="progress">
										<div id="score4">97853</div>
										<div style="position: absolute;">
											<div id="k">
												<div id="yk" >50</div>
												<div style="display: flex;flex-direction: row;">
											  <input type="range" id="vol3" name="vol" min="0" max="100" onchange="sk()">
											  <input type="submit" onclick="fk()" class="sub"></div>
											</div>										
										</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">05</div>
								<div class="country"> <img src={{asset('img/elements/f3.jpg')}} alt="flag">Alan Jackson</div>
								<div class="visit">Psychology</div>
								<div class="percentage">
									<div class="progress">
										<div id="score5">89523</div>
										<div style="position: absolute;">
											<div id="t">
												<div id="yt" >50</div>
												<div style="display: flex;flex-direction: row;">
											  <input type="range" id="vol4" name="vol" min="0" max="100" onchange="st()">
											  <input type="submit" onclick="ft()" class="sub"></div>
											</div>
										
										</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">06</div>
								<div class="country"> <img src={{asset('img/elements/f8.jpg')}} alt="flag">Amelie Bonifaas</div>
								<div class="visit">Laws</div>
								<div class="percentage">
									<div class="progress">
										<div id="score6">85464</div>
										<div style="position: absolute;">
											<div id="o">
												<div id="yo" >50</div>
												<div style="display: flex;flex-direction: row;">
											  <input type="range" id="vol5" name="vol" min="0" max="100" onchange="so()">
											  <input type="submit" onclick="fo()" class="sub"></div>
											</div>
										
										</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">07</div>
								<div class="country"> <img src={{asset('img/elements/f7.jpg')}} alt="flag">Taavi Sachi</div>
								<div class="visit">Mathematics</div>
								<div class="percentage">
									<div class="progress">
										<div id="score7">82648</div>
										<div style="position: absolute;">
											<div id="p">
												<div id="yp" >50</div>
												<div style="display: flex;flex-direction: row;">
											  <input type="range" id="vol6" name="vol" min="0" max="100" onchange="sp()">
											  <input type="submit" onclick="fp()" class="sub"></div>
											</div>
										
										</div>
									</div>
								</div>
							</div>
							<div class="table-row">
								<div class="serial">08</div>
								<div class="country"> <img src={{asset('img/elements/f6.jpg')}} alt="flag">Chang Lung</div>
								<div class="visit">Psychology</div>
								<div class="percentage">
									<div class="progress">
                                        <div id="score8
                                        ">79853</div>
										<div style="position: absolute;">
											<div id="a">
												<div id="ya" >50</div>
												<div style="display: flex;flex-direction: row;">
											  <input type="range" id="vol7" name="vol" min="0" max="100" onchange="sg()">
											  <input type="submit" onclick="fg()" class="sub"></div>
											</div>
										
										</div>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</P>
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
    <script src={{asset('js/jquery-1.12.1.min.js')}}></script>
    
	<!-- popper js -->
	<script src={{asset('js/popper.min.js')}}></script>
	<!-- bootstrap js -->
	<script src={{asset('js/bootstrap.min.js')}}></script>
	<!-- easing js -->
	<script src={{asset('js/jquery.magnific-popup.js')}}></script>
	<!-- swiper js -->
	<script src={{asset('js/swiper.min.js')}}></script>
	<!-- swiper js -->
	<script src={{asset('js/masonry.pkgd.js')}}></script>
	<!-- particles js -->
	<script src={{asset('js/owl.carousel.min.js')}}></script>
	<script src={{asset('js/jquery.nice-select.min.js')}}></script>
	<!-- slick js -->
	<script src={{asset('js/slick.min.js')}}></script>
	<script src={{asset('js/jquery.counterup.min.js')}}></script>
	<script src={{asset('js/waypoints.min.js')}}></script>
	<script src={{asset('js/contact.js')}}></script>
	<script src={{asset('js/jquery.ajaxchimp.min.js')}}></script>
	<script src={{asset('js/jquery.form.js')}}></script>
	<script src={{asset('js/jquery.validate.min.js')}}></script>
	<script src={{asset('js/mail-script.js')}}></script>
	<!-- custom js -->
	<script src={{asset('js/custom.js')}}></script>
</body>
<script>


										    
											
											function s(){
											let r =document.getElementById('vol').value;
                                            document.getElementById('y').innerHTML=r;
                                        }
										  
											function f() {
                                                var avv=parseInt(document.getElementById('y').innerHTML);
                                                var bvv=parseInt(document.getElementById("score1").innerHTML);
                                                var cvv = avv+bvv;
                                                document.getElementById('score1').innerHTML = cvv;										    
											}
											function sa() {
												
											let r =document.getElementById('vol1').value;
										    document.getElementById('yy').innerHTML=r;
										    
											}
											function fa(){
                                                var avv=parseInt(document.getElementById('yy').innerHTML);
                                                var bvv=parseInt(document.getElementById("score2").innerHTML);
                                                var cvv = avv+bvv;
                                                document.getElementById('score2').innerHTML = cvv;				
											}

											function ds() {
												
											let r =document.getElementById('vol20').value;
										    document.getElementById('ye').innerHTML=r;
										    
											}
											function gs(){
                                                var avv=parseInt(document.getElementById('ye').innerHTML);
                                                var bvv=parseInt(document.getElementById("score30").innerHTML);
                                                var cvv = avv+bvv;
                                                document.getElementById('score30').innerHTML = cvv;				
										  
											}

											function sk() {
												
											let r =document.getElementById('vol3').value;
										    document.getElementById('yk').innerHTML=r;
										    
											}
											function fk(){
												var avv=parseInt(document.getElementById('yk').innerHTML);
                                                var bvv=parseInt(document.getElementById("score4").innerHTML);
                                                var cvv = avv+bvv;
                                                document.getElementById('score4').innerHTML = cvv;				
										  
											}
											function st() {
												
											let r =document.getElementById('vol4').value;
										    document.getElementById('yt').innerHTML=r;
										    
											}
											function ft(){
												var avv=parseInt(document.getElementById('yt').innerHTML);
                                                var bvv=parseInt(document.getElementById("score5").innerHTML);
                                                var cvv = avv+bvv;
                                                document.getElementById('score5').innerHTML = cvv;				
										  
											}
											function so() {
												
											let r =document.getElementById('vol5').value;
										    document.getElementById('yo').innerHTML=r;
										    
											}
											function fo(){
												var avv=parseInt(document.getElementById('yo').innerHTML);
                                                var bvv=parseInt(document.getElementById("score6").innerHTML);
                                                var cvv = avv+bvv;
                                                document.getElementById('score6').innerHTML = cvv;				
										  
											}
											function sp() {
												
											let r =document.getElementById('vol6').value;
										    document.getElementById('yp').innerHTML=r;
										    
											}
											function fp(){
												var avv=parseInt(document.getElementById('yp').innerHTML);
                                                var bvv=parseInt(document.getElementById("score7").innerHTML);
                                                var cvv = avv+bvv;
                                                document.getElementById('score7').innerHTML = cvv;				
										  
											}
											function sg() {
												
											let r =document.getElementById('vol7').value;
										    document.getElementById('ya').innerHTML=r;
										    
											}
											function fg(){
												var avv=parseInt(document.getElementById('ya').innerHTML);
                                                var bvv=parseInt(document.getElementById("score8").innerHTML);
                                                var cvv = avv+bvv;
                                                document.getElementById('score8').innerHTML = cvv;				
										  
											}
										</script>
</html>


