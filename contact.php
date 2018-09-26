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
	<link rel="icon" href="images/bechimarofam.ico">
</head>

<body class="animsition">
<?php



    /************************************************
        The Search PHP File
    ************************************************/
    
    
    /************************************************
        MySQL Connect
    ************************************************/
    
    // Credentials
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
    /************************************************
        Search Functionality
    ************************************************/
    
        // Build Query
	$query='SELECT place FROM famouser ORDER BY RAND()';       
        // Do Search
        $result = $tutorial_db->query($query);
        $results = $result->fetch_assoc();
		
	?>
<body>

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
		


		<div class="container">
			<div class="row center">
				<div>
					<div class="section-title">
						<h2 class="mb-50 mt-50">به چی معروفم چیست ؟</h2>
						<p class="module-subtitle">پاسخ به چی معروفم می تواند حلقه مفقوده ای در این دنیای پر هیایو برای همه ما باشد که شاید هر روز، هر هفته و هر بار
						هم برای رسیدن به آن دست به دامان این و آن می شویم، و نکته جالب هم این جاست که هر کس بر اساس سلایق و تجربه های شخصی خود، ما را همراهی می کند
						، و چنان بر آن اصرار می ورزد که گویی خود اون صاحب آن "محصول" یا "خدمت" است، بدون اینکه دلیل منطقی و علمی داشته باشد.</p>
						<p class="module-subtitle">این نیاز در جامعه تا کنون وجود داشته و به روزمرگی رسیده است، یعنی همه ما به همان تبلیغات دهان به دهان بسنده کرده ایم، پس در واقع بنگاه اقتصادی در خصوص ارائه محصول 
						و خدمت خود و اثبات اینکه به چی معروف است نیاز به سالیان متمادی کار و تلاش دارد که به سطح قابل قبولی از برند سازی برسد و اعلام کند که 
						 من به فلان محصول یا خدمت معروفم.</p>
						 <p class="module-subtitle">همین نیاز اساسی و مهم چه برای خریداران محصولات و چه برای صاحبان بنگاه های اقتصادی در هر عرصه ای ما را برآن داشت تا " به چی 
						 معروفم " را بوجود آوریم.</p>
					</div>
				</div>
			</div><hr>
            <div class="container center">

                </div>
 
		</div><!-- end container -->
	</section>


	<section class="contact_brick">
		<div class="container mt-10">
			<div class="row center">
				<div>
					<div class="section-title">
						<h2 class="mb-50">تیم به چی معروفم</h2>
						<p class="module-subtitle">از این رو تعدادی از دانش آموختگان رشته فن آوری اطلاعات با تلفیقی از علم تجربه
						و باصرف وقت حدودا 8 ماه جلسات متعدد و مطالعات تحقیقی لازم به این دست آورد که اکنون در اختیار شما قرار گرفته است.
						در به چی معروفم سعی شده کلیه بنگاه های کسب و کار که به ارائه محصول یا خدمات خود می پردازندبا دسته بندی منظم، علمی و به روز تقدیم شما خوبان گردد.
						</p><hr/>
<!--						<div class="site-hero-contact">
		<div class="section-overlay"></div>
		<div class="page-title">
			<h2>حرفه ای پیشروی میکنیم</h2>
		</div>
	</div><hr><hr>
-->
	<section id="contact" class="contact1 mbr-box mbr-section mbr-section--relative mbr-section--bg-adapted">
		<div class="container center">
			<div>
				<div>
						<h2 style="font-weight:bold">تلفن های تماس</h2><br/>
						<div><p style="font-weight:bold;color:#fff">989396853635+<br/>989105502192+</p><hr></div>
					
						
						</div>
			</div>
			<!-- Subscribe block -->
		</div>
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
	</section>
					</div>
				</div>
			</div>
            <div class="container center">

                </div>
 
		</div><!-- end container -->
	</section>



	<!-- Footer -->
	<footer class="main-footer">

                <!-- Start Copyright -->
                <div class="copyright-section">
                        <div class="center">
                            <p>کلیه حقوق این سایت متعلق به چی معروفم می باشد. © 2016</p>
                        </div><!-- .col-md-6 -->
                    <!-- .row -->
                </div>
                <!-- End Copyright -->
            </div>
	</footer>


	</body>
		<!-- SCRIPTS -->
	<!-- SCRIPTS -->
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
</html>
