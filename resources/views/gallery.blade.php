
<html>
    <head>
    <title></title>
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
    <!--//Custom-Theme-files-->
    </head>
    <body>

            <div class="banner" id="home">
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

                          <h1 class="title wow fadeInDown animated animated" data-wow-delay=".3s"><a class="link link--takiri" href="index.html">From Tunisia <span class="wow fadeInUp animated animated" data-wow-delay=".5s">with Love</span></a></h1>

                    </div>

                </div>
     </div>

        <!--/start-inner-content-->
         <!--/portfolio-->
         <div class="portfolio" id="gallery">
             <div class="wrap">
                <h3 class="tittle wow fadeInUp animated animated" data-wow-delay=".5s">Our Gallery</h3>
              <div class="portfolio-top">
                <div class="col-md-4 grid slideanim wow fadeInLeft animated animated animated" data-wow-delay=".5s">
                    <figure class="effect-jazz">
                    <a href="#portfolioModal1"  data-toggle="modal">

                        <img src="images/p1.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4>Go Easy On</h4>
                                <p> There are many variations of passages of Lorem Ipsum .</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-md-4 grid slideanim wow fadeInUp animated animated animated" data-wow-delay=".5s">
                    <figure class="effect-jazz">
                    <a href="#portfolioModal2"  data-toggle="modal">

                        <img src="images/p2.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4>Go Easy On</h4>
                                <p> There are many variations of passages of Lorem Ipsum .</p>
                            </figcaption>
                            </a>
                    </figure>
                </div>
                <div class="col-md-4 grid slideanim wow fadeInRight animated animated" data-wow-delay=".5s">
                    <figure class="effect-jazz">
                    <a href="#portfolioModal3"  data-toggle="modal">

                        <img src="images/p3.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4>Go Easy On</h4>
                            <p> There are many variations of passages of Lorem Ipsum .</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>

                <div class="clearfix"></div>
             </div>
              <div class="portfolio-top">
                <div class="col-md-4 grid slideanim wow fadeInLeft animated animated animated" data-wow-delay=".5s"">
                    <figure class="effect-jazz">
                    <a href="#portfolioModal4"  data-toggle="modal">

                        <img src="images/p4.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4 class="effcet-text">Go Easy On</h4>
                        <p> There are many variations of passages .</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-md-4 grid grid-wi slideanim wow fadeInUp animated animated animated" data-wow-delay=".5s">
                    <figure class="effect-jazz">
                    <a href="#portfolioModal5"  data-toggle="modal">

                        <img src="images/p5.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4 class="effcet-text">Go Easy On</h4>
                            <p> There are many variations of passages.</p>
                            </figcaption>
                            </a>
                    </figure>
                </div>
                <div class="col-md-4 grid grid-wi slideanim wow fadeInRight animated animated" data-wow-delay=".5s"">
                    <figure class="effect-jazz">
                    <a href="#portfolioModal6"  data-toggle="modal">

                        <img src="images/p6.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4 class="effcet-text">Go Easy On</h4>
                                <p> There are many variations of passages.</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
                <div class="clearfix"></div>
             </div>
                       <div class="portfolio-top">
                <div class="col-md-4 grid slideanim wow fadeInLeft animated animated animated" data-wow-delay=".5s">
                    <figure class="effect-jazz">
                    <a href="#portfolioModal1"  data-toggle="modal">

                        <img src="images/p1.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4>Go Easy On</h4>
                                <p> There are many variations of passages of Lorem Ipsum .</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-md-4 grid slideanim wow fadeInUp animated animated animated" data-wow-delay=".5s">
                    <figure class="effect-jazz">
                    <a href="#portfolioModal2"  data-toggle="modal">

                        <img src="images/p2.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4>Go Easy On</h4>
                                <p> There are many variations of passages of Lorem Ipsum .</p>
                            </figcaption>
                            </a>
                    </figure>
                </div>
                <div class="col-md-4 grid slideanim wow fadeInRight animated animated" data-wow-delay=".5s">
                    <figure class="effect-jazz">
                    <a href="#portfolioModal3"  data-toggle="modal">

                        <img src="images/p3.jpg" alt="img25" class="img-responsive"/>
                            <figcaption>
                                <h4>Go Easy On</h4>
                            <p> There are many variations of passages of Lorem Ipsum .</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>

                <div class="clearfix"></div>
             </div>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    <!-- //Portfolio Modals -->

             <!-- footer-section -->
        <div class="bottom-middle">
            <div class="bottom-middle-top">
                <div class="container">
                    <div class="col-md-6 bottom-grid wow fadeInUp animated animated" data-wow-delay=".5s">
                        <h5>NewsLetter</h5>
                        <p>Lorem ipsum dolor sit amet, tristique nec libero. Proin vitae convallis odio. Morbi nec enim nisi. Aliquam erat volutpat. </p>
                        <form>
                          <input type="text" placeholder="Enter Email..." required="" />

                         <input type="submit" value="Submit">
                         <div class="clearfix"></div>
                     </form>
                    </div>
                    <div class="col-md-6 bottom-grid wow fadeInUp animated animated" data-wow-delay=".5s">
                        <h5>Twitter Feed</h5>
                        <p>Check out th best designs online in the world <br>at <a href="mail-to:mail@example.com">http://example.com </a></p>
                        <span>1 day ago</span>
                        <p><a href="#">Twitter</a>, may be the more visual platform for education group.</p>
                        <span>4 day ago</span>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    	<!-- //footer-section -->
        <div class="map-bottom">
            <div class="col-md-4 adrs-left wow fadeInUp animated animated" data-wow-delay=".5s">
                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                <p> {{ Auth::user()->adresse }}</p>
            </div>
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

                </script>


            </div>
            <div class="col-md-4 adrs-left adrs-right wow fadeInUp animated animated" data-wow-delay=".5s">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    <p> {{ Auth::user()->email }}</p>

            </div>
            <div class="clearfix"></div>
        </div>
    <!--//map-->

           <!--copy-right-->
            <div class="copy">
                <p class="wow fadeInUp animated animated" data-wow-delay=".5s">&copy; 2016 Go Easy On . All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
            </div>
         <!--//copy-right-->
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
            <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working -->


    </body>
    </html>
