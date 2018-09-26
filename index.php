<html>
 <head>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84290070-2', 'auto');
  ga('send', 'pageview');

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102146179-1', 'auto');
  ga('send', 'pageview');

</script>
	<link rel="icon" href="images/bechimarofam.ico">
 </head>
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
	$query_one='SELECT place FROM famouser ORDER BY RAND()';
	        $result_one = $tutorial_db->query($query_one);
        $results_one = $result_one->fetch_assoc();
		
		
	$query='SELECT * FROM famouser';
	// Do Search
    $result = $tutorial_db->query($query);
    $results = $result->fetch_assoc();
	?>
 <body>
 <div class="container-fluid">
  <div class="row">
	<div style="text-align:center;margin-top:1.50rem" class="col-md-3">
  		<img class="img-fluid" src="images/logo3.png">
	</div><!-- end img div-->
	<div style="margin-top:2.50rem" class="col-md-9">
 		<input class="search1 W-100" type="text" id="search" autocomplete="off" placeholder="! ... من بهت میگم کی به چی معروفه">
		<hr>
		<div id="clients" class="clients" style="background:rgba(0, 0, 0, 0.4);padding:10px;border-radius:10px">
		  <div class="container">
			<div class="row">
						<div id="owl-demo"> 
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='DIGI';?>">
						<div class="item"><img src="assets/img/clients/digi.png" alt="دیجیتال"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='FOOD';?>">						 
						<div class="item"><img src="assets/img/clients/meal.png" alt="خوراکیجات"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='COFE';?>">						 
						<div class="item"><img src="assets/img/clients/cofe.png" alt="کافی شاپ"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='BOOK';?>">						 						 
						<div class="item"><img src="assets/img/clients/book.png" alt="کتاب و نشریات"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='HOTL';?>">						 						 
						<div class="item"><img src="assets/img/clients/hotl.png" alt="هتل و مهمانسرا"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='ADVR';?>">						 						 
						<div class="item"><img src="assets/img/clients/advr.png" alt="مشاوره و برنامه ریزی"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='WOOD';?>">						 						
						<div class="item"><img src="assets/img/clients/wood.png" alt="مبلمان و دکوراسیون داخلی"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='FOOD';?>">						 
						<div class="item"><img src="assets/img/clients/food.png" alt="رستوران لوکس و سنتی"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='FOOD';?>">						 
						<div class="item"><img src="assets/img/clients/food1.png" alt="پیتزا و ساندویچ و کنتاکی و سیب زمینی"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='ANML';?>">						 
						<div class="item"><img src="assets/img/clients/anml.png" alt="محصولات دام و کشاورزی"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='CYCL';?>">						 
						<div class="item"><img src="assets/img/clients/cycl.png" alt="موتور و دوچرخه"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='BULD';?>">						 
						<div class="item"><img src="assets/img/clients/buld.png" alt="مصالح ساختمانی"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='ELCT';?>">						 
						<div class="item"><img src="assets/img/clients/elct.png" alt="برق و الکترونیک"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='CARR';?>">						 
						<div class="item"><img src="assets/img/clients/carr.png" alt="خودرو و لوازم یدکی"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='CRPT';?>">						 
						<div class="item"><img src="assets/img/clients/crpt.png" alt="فرش و موکت"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='TRNS';?>">						 
						<div class="item"><img src="assets/img/clients/trns.png" alt="حمل و نقل"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='PRNT';?>">						 
						<div class="item"><img src="assets/img/clients/prnt.png" alt="چاپ و تبلیغات"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='DCTR';?>">						 
						<div class="item"><img src="assets/img/clients/dctr.png" alt="تجهیزات پزشکی"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='PRTY';?>">						 
						<div class="item"><img src="assets/img/clients/prty.png" alt="برگزاری مجالس و تشریفات"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='MCHN';?>">						 
						<div class="item"><img src="assets/img/clients/mchn.png" alt="ماشین آلات سنگین و سبک"></div>
						</a>						
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='MKUP';?>">						 
						<div class="item"><img src="assets/img/clients/brbr&mkup.png" alt="لوازم آرایشی و آرایشگاه"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='KTCH';?>">						 
						<div class="item"><img src="assets/img/clients/ktch.png" alt="لوازم خانگی و آشپزخانه"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='CLOT';?>">						 
						<div class="item"><img src="assets/img/clients/clot.png" alt="پوشاک مردانه زنانه بچگانه"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='LOOM';?>">						 
						<div class="item"><img src="assets/img/clients/loom.png" alt="انواع پارچه"></div>
						</a>	
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='WTCH';?>">						 
						<div class="item"><img src="assets/img/clients/wtch.png" alt="زیورآلات و طلا و ساعت"></div>
						</a>	
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='SPRT';?>">						 
						<div class="item"><img src="assets/img/clients/sprt.png" alt="لوازم ورزشی و کوهنوردی و شکار"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='NTSH';?>">						 
						<div class="item"><img src="assets/img/clients/ntsh.png" alt="لوازم ورزشی و کوهنوردی و شکار"></div>
						</a> 							
						</div><!-- end owl-demo-->
			</div><!-- end row-->
		  </div><!-- end container-->
		</div><!-- end clients-->	
	</div><!-- end search-->
   </div><!-- end row-->
 </div><!-- end container-->
 <div class="container-fluid" >
   <div class="row" style="direction:rtl">
   	<div style="text-align:center;margin-top:1.50rem" class="col-md-9">
		<ul class="results1"  style="margin-top:0.20rem;direction:ltr" id="results"></ul>
	</div>
	<div style="direction:rtl;padding-bottom:10px;text-align:center" class="col-md-3 h-50">
     <a href="https://t.me/BeChiMarofam"><img src="images/tele.png"></a>
     <a href="https://instagram.com/_u/bechimarofam"><img src="images/insta.png"></a>
     <a href="http://aparat.com/Bechimarofam"><img src="images/aparat.png"></a>
	<img style="border-radius:10px" src="images/andro.jpg">
	<hr>
	<img src="images/offer1.png" class="img-fluid">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
		<a href="home.php?place=<?php echo $results_one['place']; ?>">
                <p style="text-align:center;font-family:'__B Yekan_5';color:#fff;background:#333;font-size:10pt;padding:5px;border-radius:10px">گردش در سایت</p>
		</a></div>
		<div class="col-md-3">
		</div>
	</div>
	</div><!-- end h-50 -->	
	</div><!-- end row-->
 </div><!-- end container-fluid-->
<div class="container-fluid" style="text-align:center;font-family:'__B Yekan_5';font-weight:bold;color:#fff;font-size:8pt;padding-bottom:10px"> .کلیه حقوق مادی و معنوی این سایت متعلق به کمپانی به چی معروفم می باشد  </div>
 	<!-- SCRIPTS -->
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
    <script type="text/javascript">
// Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');
// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "require.js", "index.css"], "outOfDate":[]};
</script>
	<script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/custom.js"></script>
    <script type="text/javascript" src="libs/jquery.slimscroll.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link href="style/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=3916556066"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css?crc=122299839" id="pagesheet"/>
    <title>به چی معروفم</title>
 </body>
</html>