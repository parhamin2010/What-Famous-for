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
		$query='SELECT * FROM famouser where subfirscode like "'.$_GET['sub'].'" order by (place) ';
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

<!--		<svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 0 L50 100 L100 0 Z" fill="#fff" stroke="#fff"></path>
		</svg>-->
		<div id="clients" class="clients" style="padding:0px"><div class="container">
			<div class="row">
						<div class="col-md-12">
						</div><h4 class="owl-demo-topic"></h4>
						<div id="owl-demo"> 
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='DIGI';?>">
						<div class="item"><img src="assets/img/clients/digi.png" alt="دیجیتال"></div>
						</a>
						<a href="grouping.php?sub=<?php echo $results['subfirscode']='FOOD';?>">						 
						<div class="item"><img src="assets/img/clients/meal.png" alt="خوراکیجات"></div>
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
						</div>
				</div>
		</div>
	</div>
	<br/>
	
	
	
		<div class='container' style='padding:4px;'>
			<table width='100%' dir='rtl' style='background:#dc143c'> 
				<tr>
						<td  style='border:1px solid #ddd;box-shadow:0px 0px 10px #000;padding:20px;width:20%'>
						<h6 style='color:#fff;font-size:18pt;font-weight:bold;line-height:25px;text-align:justify'>مکان</h6></td>
						<td  style='border:1px solid #ddd;box-shadow:0px 0px 10px #000;padding:20px;width:40%'>
						<h6 style='color:#fff;font-size:18pt;font-weight:bold;line-height:25px;text-align:justify'>معروفیت
						</h6></td>
						<td  style='border:1px solid #ddd;box-shadow:0px 0px 10px #000;padding:20px;width:30%;text-align:center'>
						<h6 style='color:#fff;font-size:18pt;font-weight:bold;line-height:25px;text-align:justify'>دسته بندی</h6></td>
				</tr>
			</table>
		</div>

		
	
		
	<?php



 /*$query_select='SELECT * FROM famouser where subfirscode like "'.$_GET['sub'].'"';

	 $result_select = $tutorial_db->query($query_select);
	 $results_select = $result_select->fetch_assoc();	
	for($i=0;$i<10;$i++){ echo $results_select['id'];}
	
for($results_select['id']=0;$results_select['id']!=$results_id['id'];$results_select['id']++){
if ($_GET['sub']==$results_select['subfirscode']){*/


	$result2 = $tutorial_db->query($query);


	if ($result2->num_rows > 0)echo"<hr>"; {
		while($row = $result2->fetch_assoc()) {
			echo "
			<div class='container' style='padding:4px;'>
			<table width='100%' dir='rtl' style='background:#dc143c'> 
				<tr>
						<td  style='border:1px solid #ddd;box-shadow:0px 0px 10px #000;padding:20px;width:20%'><h6 style='color:#fff;font-size:12pt;font-weight:bold;line-height:25px;text-align:justify'>".$row['place']."</h6></td>
						<td  style='border:1px solid #ddd;box-shadow:0px 0px 10px #000;padding:20px;width:40%'><h6 style='color:#fff;font-size:12pt;font-weight:bold;line-height:25px;text-align:justify'>
							".$row['famous']."
						</h6></td>
						<td  style='border:1px solid #ddd;box-shadow:0px 0px 10px #000;padding:20px;width:30%;text-align:center'>
						<h6 style='color:#fff;font-size:12pt;font-weight:bold;line-height:25px;text-align:justify'>".$row['category']."</h6></td>
				</tr>
			</table>
		</div>
				
			";
			
			
		}
		
	}
	
?>
<!-- no result -->
	<!-- Footer --><br/>
	<footer class='main-footer'>
		<svg preserveAspectRatio='none' viewBox='0 0 100 102' height='100' width='100%' z-index='-10' version='1.1' class='svgcolor-light'>
			<path d='M0 0 L50 100 L100 0 Z' fill='#ffbe27' stroke='#ffbe27' ></path>
		</svg>
 
                <!-- Start Copyright -->
                <div class='copyright-section'>
                            <p style="text-align:center">کلیه حقوق این سایت متعلق به چی معروفم می باشد. © 2016</p>
                </div>
                <!-- End Copyright -->

	</footer>


	<script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="assets/js/animated-headline.js"></script>
	<script type="text/javascript" src="assets/js/menu.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>

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
