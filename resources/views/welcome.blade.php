

<html>
<head>
<title>Travel Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Go Easy On Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->

	<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href="css/component.css" rel='stylesheet' type='text/css' />
		<link href="css/font-awesome.css" rel='stylesheet' type='text/css' />
<!--Custom-Theme-files-->
</head>
<body>
	<div class="container demo-2" id="home">
	<!--carbonads-container-->
			<div class="content">
		     <div class="w3_agile_menu">
						   <div class="agileits_w3layouts_nav">
							<div id="toggle_m_nav">
								<div id="m_nav_menu" class="m_nav">
									<div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
									<div class="m_nav_ham" id="m_ham_2"></div>
									<div class="m_nav_ham" id="m_ham_3"></div>
								</div>
							</div>
							<div id="m_nav_container" class="m_nav wthree_bg">
								<nav class="menu menu--sebastian">
									<ul id="m_nav_list" class="m_nav menu__list">

										<li class="m_nav_item" id="moble_nav_item_3"> <a href="blog.blade.php" class="link link--kumya scroll"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="Blog">Blog</span></a></li>
										<li class="m_nav_item" id="moble_nav_item_5"> <a href="gallery.blade.php" class="link link--kumya scroll"><i class="fa fa-picture-o" aria-hidden="true"></i><span data-letters="Gallery">Gallery</span></a></li>
										<li class="m_nav_item" id="moble_nav_item_6"> <a href="contact.blade.php" class="link link--kumya scroll"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Contact Us">Contact Us</span></a></li>


                                        <div class="m_nav_item active" id="m_nav_item_1">

                                            @if (Route::has('login'))
                                                    @auth
                                                    <a href="{{ url('/home') }}" class="link link--kumya">
                                                        <i class="fa fa-home" aria-hidden="true"></i>
                                                        <span data-letters="Home">Home</span></a>
                                                    @else

                                                    <a href="{{ route('login') }}" class="link link--kumya scroll">
                                                        <i class="fa fa-home" aria-hidden="true"></i>
                                                        <span data-letters="Login">Login</span></a>


                                                        @if (Route::has('register'))

                                                        <a href="{{ route('register') }}" class="link link--kumya scroll">
                                                            <i class="fa fa-home" aria-hidden="true"></i>
                                                            <span data-letters="Register">Register</span></a>

                                                        @endif
                                                    @endauth

                                            @endif


                                    </ul>
								</nav>
							</div>
						</div>
                  </div>
                <div id="large-header" class="large-header">
                    <canvas id="demo-canvas"></canvas>
                    <h1 class="main-title"><a class="link link--takiri" href="index.html">From Tunisia <span class="wow fadeInUp animated animated" data-wow-delay=".5s">with Love</span></a></h1>

                </div>

            </div>
 </div>
	<!--start-inner-content-->
		<div class="inner-content" id="services">
				<div class="wrap">
				     <h3 class="tittle wow fadeInUp animated animated" data-wow-delay=".5s">info</h3>
				<!--start-top_section-->
				   <div class="top_section">
				       <div class="bnr-btm-left grid">
							<figure class="effect-ming wow fadeInLeft animated animated" data-wow-delay=".5s">
								<img src="images/Carthage.jpg" alt="img09"/>

							</figure>

						</div>
						<div class="bnr-btm-right">
							<h3>Site seeing </h3>
							<p>Tourism in Tunisia is an industry that generates around 7 million arrivals per year, which makes the country among the ones that attract the most tourists in Africa. Tunisia has been an attractive destination for tourists since the beginning of the 1960s. Among Tunisia's tourist attractions are its cosmopolitan capital city of Tunis, the ancient ruins of Carthage, the Muslim and Jewish quarters of Jerba, and coastal resorts outside Monastir.
							According to The New York Times, Tunisia is "known for its golden beaches, sunny weather and affordable luxuries.</p>

						</div>

						<div class="clearfix"></div>
					</div>
					<!--top_section2-->
					 <div class="top_section two">
					 	<div class="bnr-btm-right two">
							<h3>THEATER OF CARTHAGE</h3>
							<p>The ancient theater of Carthage  was built during the second century. It has many features including its location and architecture. Indeed, it rests on a slope and its stairs are based on a complex system of cellars that make it safe and protect it from earthquakes.
							It was used mainly to play theatrical plays, but also as a space for cultural events such as poetry, philosophical speeches ...</p>
						</div>
				       <div class="bnr-btm-left two grid">
							<figure class="effect-ming wow fadeInRight animated animated" data-wow-delay=".5s">
								<img src="images/festival.png" alt="img09"/>

							</figure>

						</div>

						<div class="clearfix"></div>
					</div>
					<!--//end-top_section-->
				</div>
		  </div>



 <!--//portfolio-->
<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">

                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Go Easy On</h3>

                        <img src="images/p1.jpg" class="img-responsive" alt="">
                    </div>
                </div>

        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">

                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Go Easy On</h3>

                        <img src="images/p2.jpg" class="img-responsive" alt="">
                    </div>
                </div>

        </div>
    </div>
    </div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">

                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Go Easy On</h3>

                        <img src="images/p3.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div>

    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">

                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Go Easy On</h3>

                        <img src="images/p4.jpg" class="img-responsive" alt="">
                    </div>
                </div>

        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">

                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                         <h3>Go Easy On</h3>

                        <img src="images/p5.jpg" class="img-responsive" alt="">
                    </div>
                </div>

        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">

                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Go Easy On</h3>

                        <img src="images/p6.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div>

    </div>
</div>
<!-- //Portfolio Modals -->
 <div class="bottom-section">
	  <div class="wrap">

	  <div class="banner-center">

					<h3>Find Your Destination</h3>
					 	  <a href="#" data-toggle="modal" data-target="#myModal2" class="play" href="#"><i class="glyphicon glyphicon-play-circle"> </i></a>
				</div>


	  </div>
	   <!--iframe-->
			<div class="modal ab fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog video" role="document">
					<div class="modal-content about">
						<div class="modal-header">
							<button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body about">

							<video width="100%" controls>
    <source src="images/Spot.mp4" type="video/mp4">
</video>


						</div>

					</div>
				</div>
			</div>
			 <!--//iframe-->
 </div>

  <!-- /TESTIMONIALS -->

	 			  	<!--map-->

		 <!-- footer-section -->

	<!-- //footer-section -->
      <div class="map-bottom">

					<div class="col-md-4 adrs-left adrs-middle wow fadeInUp animated animated" data-wow-delay=".5s">
                        <div class="content">

                            <h4 id="PlaceHistory"></h4>
                            <br>
                            <h4 id="searchedPlaceTextCoordinates"></h4>



                        </div>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                        <script>
                        var searchedPlaceText = sessionStorage.getItem('searchedPlaceText');
                        var searchedPlaceTextCoordinates = sessionStorage.getItem('searchedPlaceTextCoordinates');
                        if(searchedPlaceText!=null)
                        document.getElementById("PlaceHistory").innerHTML = "your last search is : " +searchedPlaceText;
                        if(searchedPlaceTextCoordinates!=null)
                        document.getElementById("searchedPlaceTextCoordinates").innerHTML = "your last searched place coordinates are : " +searchedPlaceTextCoordinates;

                        </script>


					</div>

					<div class="clearfix"></div>
				</div>
			<!--//map-->
		<!--//contact-->


		<!--//footer-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!--/script-->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/modernizr.custom.js"> </script>
<!-- menu -->
	<script type="text/javascript" src="js/menu.js"></script>
<!-- //menu -->

<!-- Add fancyBox main JS and CSS files -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
		<!---->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- menu -->
	<script type="text/javascript" src="js/main.js"></script>
<!-- //menu -->
		<script src="js/rAF.js"></script>
        <script src="js/demo-2.js"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-48014931-1', 'codyhouse.co');
			ga('send', 'pageview');

			jQuery(document).ready(function($){
				$('.close-carbon-adv').on('click', function(event){
					event.preventDefault();
					$('#carbonads-container').hide();
				});
				var domain = 'http://codyhouse.co/demo/stretchy-navigation/';
				$('.cd-demo-settings').on('change', function(){
					var animation = $('#selectAnimation').find("option:selected").val(),
						newFile = animation+'.html';
					window.location.href = domain+newFile;
				});
			});
		</script>
		<!-- gallery Modals -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
			<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed:1000,
											easingType: 'linear'
								 		};
										*/

										$().UItoTop({ easingType: 'easeOutQuart' });

									});
								</script>
<!-- for bootstrap working -->
<script src="{{ asset('js/bootstrap.js') }}" ></script>


<!-- //for bootstrap working -->


</body>
</html>
