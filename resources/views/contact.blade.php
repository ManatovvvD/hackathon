<!doctype html>
<html lang="zxx">

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
                            <h2>contact us</h2>
                            <h5>home <span></span> contact</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {
              lat: -25.363,
              lng: 131.044
            };
            var grayStyles = [{
                featureType: "all",
                stylers: [{
                    saturation: -90
                  },
                  {
                    lightness: 50
                  }
                ]
              },
              {
                elementType: 'labels.text.fill',
                stylers: [{
                  color: '#ccdee9'
                }]
              }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {
                lat: -31.197,
                lng: 150.744
              },
              zoom: 9,
              styles: grayStyles,
              scrollwheel: false
            });
          }
        </script>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11632.454062968927!2d76.6702129124691!3d43.207108356473896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38834f7675d8a6c3%3A0x7b7d14aec270c056!2z0KPQvdC40LLQtdGA0YHQuNGC0LXRgiDQodGD0LvQtdC50LzQsNC9INCU0LXQvNC40YDQtdC70Y8!5e0!3m2!1sru!2skz!4v1582948562964!5m2!1sru!2skz" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
            novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">

                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                    placeholder='Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1">Send Message <i class="flaticon-right-arrow"></i> </button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Almaty, Kaskelen.</h3>
              <p>st. Abylai-khan 1</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>8 (700)-976-79-45</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>180103098@stu.sdu.edu.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

  <!--::footer_part start::-->
  <footer class="footer_part">
      <div class="container">
          <div class="row">
              <div class="col-sm-8 col-md-4 col-lg-4">
                  <div class="single_footer_part">
                      <a href="index.html" class="footer_logo_iner"> <img src="img/footer_logo.png" alt="#"> </a>
                      <p>Gathered. Under is whose you'll to make years is mat lights thing together fish made
                          forth thirds cattle behold won't. Fourth creeping first female.
                      </p>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
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