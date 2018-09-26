<!DOCTYPE html>
<html lang="en">
<head>
	<title>به چی معروفم</title>
	  <meta http-equiv="X-UA-Compatible" content="chrome=IE8"/>
	  <meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
	  <meta charset="utf-8">
	  <meta name="keywords" content="bechimarofam,marofam,معروفترین ها,به چی معروفم,بهترین برند ها,برند های برتر,معروف ترین,سایت اطلاع رسانی,سایت خدماتی,بهترین  های مشهد,معروفترین های مشهد,مشهد معروف به چی معروف,">
	  <meta name="description" content="پایگاه اطلاع رسانی دقیق معروف ترین برند های مشهد که به یک یا چند محصول یا خدمات خود معروف می باشند">
	  <meta property="og:locale" content="fa_IR">
	  <meta property="og:site_name" content="به چی معروفم">
	  <link rel="canonical" href="http://www.bechimarofam.ir">
	  <script async="" src="https://www.google-analytics.com/analytics.js"></script>
	  <meta name="generator" content="2015.2.1.352"/>
	  <meta name="google-site-verification" content="google6054a0621841ca1f.html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css?crc=122299839" id="pagesheet"/>
	<link rel="stylesheet" href="assets/css/flexslider.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
  <meta http-equiv="X-UA-Compatible" content="chrome=IE8"/>
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta charset="utf-8">
<meta name="keywords" content="bechimarofam,marofam,معروفترین ها,به چی معروفم,بهترین برند ها,برند های برتر,معروف ترین,سایت اطلاع رسانی,سایت خدماتی,بهترین  های مشهد,معروفترین های مشهد,مشهد معروف به چی معروف,">
<meta name="description" content="پایگاه اطلاع رسانی دقیق معروف ترین برند های مشهد که به یک یا چند محصول یا خدمات خود معروف می باشند">
<meta property="og:locale" content="fa_IR">
<meta property="og:site_name" content="به چی معروفم">
<link rel="canonical" href="http://www.bechimarofam.ir">
<script async="" src="https://www.google-analytics.com/analytics.js"></script>
  <meta name="generator" content="2015.2.1.352"/>
<meta name="google-site-verification" content="google6054a0621841ca1f.html">
	<link rel="icon" href="images/bechimarofam.ico">
</head>
 <?php



    /************************************************
        The Search PHP File
    ************************************************/
    
    
    /************************************************
        MySQL Connect
    ************************************************/

 $dbhost = "localhost";
 $dbname = "bechimar_datacenter";
 $dbuser = "root";
 $dbpass = "";
     
    // Connection
    global $tutorial_db;
    
    $tutorial_db = new mysqli();
    $tutorial_db->connect($dbhost, $dbuser, $dbpass, $dbname);
    $tutorial_db->set_charset("utf8");
    
    
    // Check Connection
    if ($tutorial_db->connect_errno) {
        printf("Connect failed: %s\n", $tutorial_db->connect_error);
        exit();
    }
	$query='SELECT * FROM famouser';
	        $result = $tutorial_db->query($query);
        $results = $result->fetch_assoc();
	?>
<body class="animsition">
<!-- Border -->

	<!--<span class="frame-line top-frame"></span>
	<span class="frame-line right-frame"></span>
	<span class="frame-line bottom-frame"></span>
	<span class="frame-line left-frame"></span>
	<!-- HEADER  -->			
			<div class="container-fluid" style="background:crimson;direction:rtl;text-align:center">
				<div class="row" style="background:none;text-align:center;padding:1rem">
				  <div  class="col-md-1">
						<a class="box-primary-nav-trigger" href="#0">
								<img  style="" src="images/menu_site.png"></img>
						</a>
				  </div>
				  <div  class="col-md-8" style="text-align:center">
						<input class="search1" style="margin-top:0.5rem" type="text" id="search" autocomplete="off" placeholder="من بهت میگم کی به چی معروفه ... !">
						<ul class="results2 W-75"  style="margin-top:5px;"  id="results"></ul>
				  </div>

                  <div class="col-md-3" style="background:url(images/offer1_home.png) no-repeat center center;background-size:contain;padding-top:0.5rem">
					<div class="visible-md"><br><br><br></div><!--	<img class="img-fluid" style="" src="images/offer1_home.png"  alt="Logo"> -->
				  </div>	
				</div>
				</div><!-- end header -->
				<!-- nav -->
				<nav style="background:url(images/menu_back.png) no-repeat center bottom">
					<ul class="box-primary-nav" style="background:url(images/menu_back.png) no-repeat center bottom;background-size:cover">
					<div class="container-fluid">
						<a class="box-primary-nav-trigger" href="#0">
							<img src="images/menu_return.png"></img>
						</a>					
							<div class="container-fluid">
								<a href="index.php">
									<img class="img-fluid" src="images/logo4.png"></a>
                                		<!-- Main Input -->				
						    </div><hr>
								<div>
								<li><a style="letter-spacing:0px;font-weight:bold;line-height:15px" href="grouping.php?sub=">مشاغل<hr></a> <i class="lnr lnr-home">
                                </i></li>
								<li><a href="services.php" style="letter-spacing:0px;font-weight:bold">میخوام معروف شم<hr></a></li>
								<li><a href="contact.php" style="letter-spacing:0px;font-weight:bold">درباره به چی معروفم<hr></a></li>
								</div><hr>
								<div class="container-fluid" style="text-align:center">
								 <div class="row h-75" style="text-align:center">
									<div class="col-md-6" style="text-align:center">
									  <a href="https://t.me/BeChiMarofam"><img style="box-shadow:3px 8px 8px rgba(0,0,0,0.5);border-radius:10px" src="images/tele.png"></a>
                                	  <a href="https://instagram.com/_u/bechimarofam"><img style="box-shadow:3px 8px 8px rgba(0,0,0,0.5);border-radius:10px" src="images/insta.png"></a>                        	
									  <a href="http://aparat.com/Bechimarofam"><img style="box-shadow:3px 8px 8px rgba(0,0,0,0.5);border-radius:10px" src="images/aparat.png"></a>
									</div>
									<div class="col-md-6 text-align-left" style="text-align:center">
									     <img style="box-shadow:3px 8px 8px rgba(0,0,0,0.5);border-radius:10px" src="images/andro.jpg">
									</div>
								 </div>
								</div>
							</div>
						</ul>

				</nav>
				<!-- end nav -->
		

	<!-- HERO SECTION  -->

	<!-- WHAT WE DO -->
	<section class="about_descr">
		<div class="container">

			<div class="row" style="margin-top:20px">
								<div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
					<img src="images/service.png" alt="img" style="width:100%">
				</div>
				<div class="col-md-6 wow fadeInUp">
					<h2 style="margin-bottom:30px;color:#fff;direction:rtl;text-align:justify;font-size:28px;line-height: 25px;font-weight:bold">خدمات به چی معروفم</h2>
					<hr><p style="margin-bottom:30px;color:#fff;direction:rtl;text-align:justify;font-size:17px;line-height: 25px;">
						سایت به شکل اعجاب انگیزی ساده و قابل استفاده برای کلیه اقشار جامعه است و به شما پاسخ می دهد که بهترین هر محصول یا خدمت در اختیار کیست، و اینکه این
						 فروشگاه به چه محصول یا خدمتی معروف است.پس پیشنهاد می گردد در هنگام نیاز به محصول یا خدمتی و مراجعه به هر صنفی برای خرید از به چی معروفم کمک بگیرید.
					</p>

			</div><!-- end row -->
		</div><!-- end container -->
	</section>



	<!-- Contact -->
	<section id="contact" class="contact mbr-box mbr-section mbr-section--relative mbr-section--bg-adapted">


	<div class="container">
			<div>
				<div class="row">
					<h1 style="font-weight:bold">به ما بپیوندید</h1><hr>
						<p class="libre-text">
							اگر بدنبال ثبت برند خود در به چی معروفم هستید تنها با ثبت شماره تماس خود، تیم این کمپانی با شما تماس خواهند گرفت و در اسرع وقت شما 
							با تکمیل اطلاعات شما توسط پشتیبانی به چی معروفم بعنوان برند ثبت شده در وب اپلیکیشن به چی معروفم همگانی خواهید شد.<br/>جای شما پیش من خالیست ...
						</p>
			<div >
				<div>
					<div style="width:30%;" class="mbr-box mbr-section mbr-section--relative mbr-section--bg-adapted">
						<form action="sign-in.php" method="post" >
							<div class="input_1" >
								<input id="number_cust" type="text" name="number">
								<span>شماره خود را وارد کنید</span>
							</div>
							<input class="btn" style="font-weight:bold;border-radius:10px"id="submit_btn" type="submit" value="ثبت"><i class="fa fa-angle-double-right" aria-hidden="true"></i></input>
						</form><br>
						
					</div>

					</div>
			</div>


				</div>
			</div>

			<!-- Subscribe block -->

		</div>
	</section>

	<!-- Footer -->

	<!-- Contact -->


	<!-- Footer -->
	<footer class="main-footer">
		<svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" z-index="-10" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
			<path d="M0 0 L50 100 L100 0 Z" fill="#ffbe27" stroke="#ffbe27" ></path>
		</svg>
 
                <!-- Start Copyright -->
                <div class="copyright-section">
                    <div>
                        <div>
                            <p>کلیه حقوق این سایت متعلق به چی معروفم می باشد. © 2016</p></p>
                        </div><!-- .col-md-6 -->
                    </div><!-- .row -->
                </div>
                <!-- End Copyright -->
            </div>
	</footer>




	<script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="assets/js/animated-headline.js"></script>
	<script type="text/javascript" src="assets/js/menu.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.js"></script>
	<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.animsition.min.js"></script>
	<script type="text/javascript" src="assets/js/init.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
	<script type="text/javascript" src="assets/js/numscroller.js"></script>
	<script type="text/javascript" src="assets/js/wow.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

	<script type="text/javascript">
		$(window).load(function() {
			new WOW().init();

			// initialise flexslider
			$('.flexslider').flexslider({
				animation: "fade",
				directionNav: true,
				controlNav: false,
				keyboardNav: true,
				slideToStart: 0,
				animationLoop: true,
				pauseOnHover: false,
				slideshowSpeed: 4000,
			});

			smoothScroll.init();

			// initialize isotope
			var $container = $('.portfolio_container');
			$container.isotope({
				filter: '*',
			});

			$('.portfolio_filter a').click(function(){
				$('.portfolio_filter .active').removeClass('active');
				$(this).addClass('active');

				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector,
					animationOptions: {
						duration: 500,
						animationEngine : "jquery"
					}
				});
				return false;
			});
		});
	</script>
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<!-- Load custom js -->
	<script type="text/javascript" src="scripts/custom.js"></script>
<script type="text/javascript" src="scripts/transfer.js"></script>
</body>
</html>
