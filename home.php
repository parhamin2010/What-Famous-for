
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
		$query='SELECT * FROM famouser WHERE place LIKE "'.$_GET['place'].'"';
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
			<?php if($results['place_logo'] != NULL && $results['place_info_main'] != NULL){
			echo
			"<div class='about container-fluid'  style='background:crimson;direction:rtl'>";
			echo "<div class='container-fluid' style='text-align:right;font-size:22pt;color:#fff;font-weight:bold'><div class='row'><div class='col-md-8' style='font-weight:bold'>
			<br/>".$results['place'].
			"</div></div></div><hr>";
			echo "<div class='row' >
					<div class='col-md-8' style='direction:rtl;color:#fff;font-weight:bold'>".$results['place_info_main']."</div>
					<div class='col-md-4' style='text-align:center;padding-top:15px'><img class='img-fluid' src=".$results['place_logo']." alt='لوگو برند' style='border-radius:20px;box-shadow:0px 0px 20px #000;'></div>
			</div><hr>";}
			 ?>



	

	<!-- FACTS  -->

<?php if($results['place_subinfo_one'] != NULL && $results['place_subinfo_one_describe'] != NULL
        && $results['place_subinfo_two'] != NULL && $results['place_subinfo_two_describe'] != NULL
		&& $results['place_subinfo_three'] != NULL && $results['place_subinfo_three_describe'] != NULL
		&& $results['place_subinfo_four'] != NULL && $results['place_subinfo_four_describe'] != NULL)
		echo "<div id='features' class='features mbr-box mbr-section mbr-section--relative'>
		<div class='container-fluid'>
			<div class='row'>
				<div class='col-md-3'>
					<div style='font-size:15pt;font-weight:bold'>".$results['place_subinfo_one']."</div><hr>
						<div style='font-size:10pt;font-weight:bold'>".$results['place_subinfo_one_describe']."</div>
				</div>
				<div class='col-md-3'>
					<div style='font-size:15pt;font-weight:bold'>".$results['place_subinfo_two']."</div><hr>
						<div style='font-size:10pt;font-weight:bold'>".$results['place_subinfo_two_describe']."</div>
				</div>
				<div class='col-md-3'>
					<div style='font-size:15pt;font-weight:bold'>".$results['place_subinfo_three']."</div><hr>
						<div style='font-size:10pt;font-weight:bold'>".$results['place_subinfo_three_describe']."</div>
				</div>
				<div class='col-md-3'>
					<div style='font-size:15pt;font-weight:bold'>".$results['place_subinfo_four']."</div><hr>
						<div style='font-size:10pt;font-weight:bold'>".$results['place_subinfo_four_describe']."</div>
				</div>
			</div>
		</div><hr>"
				?>
	<!-- SERVICES PARALAX -->
<?php if($results['service_topic'] != NULL || $results['service_info'] != NULL)
		echo	
		"
		     <div class='container-fluid'>
		    	<div class='row'>
					<div class='col-md-12 display-3'>
						<p style='font-size:17pt;font-weight:bold;text-align:center'>".$results['service']."</p>
						<p style='font-size:14pt;font-weight:bold;text-align:center'>".$results['service_topic']."</p>
						<p style='font-size:12pt;font-weight:bold;line-height:1.5rem'>".$results['service_info']."</p>
					</div>
		       </div>
		     </div><hr>";?>
			<?php if($results['place_image_slide'] != NULL)echo 
			"<div id='facts' class='img-fluid'>
				<img class='img-first-intro' src='".$results['place_image_slide']."'>
			 </div>" ?>
		
		<?php if($results['service_subinfo_one'] != NULL && $results['service_subinfo_one_describe'] != NULL 
		&& $results['service_subinfo_two'] != NULL && $results['service_subinfo_two_describe'] != NULL
		&& $results['service_subinfo_three'] != NULL && $results['service_subinfo_three_describe'] != NULL
		&& $results['service_subinfo_four'] != NULL && $results['service_subinfo_four_describe'] != NULL)echo 
		"<div class='row'>
		   	    <div class='col-md-6'><hr>
					<p  style='font-size:19pt;font-weight:bold;padding-right:15px;padding-left:15px'>".$results['service_subinfo_one']."</h6><hr>
					<p  style='text-align:justify;direction:rtl;line-height:1.5rem;font-size:12pt;padding-right:15px;padding-left:15px'>".$results['service_subinfo_one_describe']."
					</p>
				</div>
				<div class='col-md-6'><hr>
					<p  style='font-size:19pt;font-weight:bold;padding-right:15px;padding-left:15px'>".$results['service_subinfo_two']."</h6><hr>
					<p  style='text-align:justify;direction:rtl;line-height:1.5rem;font-size:12pt;padding-right:15px;padding-left:15px'>".$results['service_subinfo_two_describe']."
					</p>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-6'><hr>
					<p  style='font-size:19pt;font-weight:bold;padding-right:15px;padding-left:15px'>".$results['service_subinfo_three']."</h6><hr>
					<p  style='text-align:justify;direction:rtl;line-height:1.5rem;font-size:12pt;padding-right:15px;padding-left:15px'>".$results['service_subinfo_three_describe']."
					</p>
				</div>
				<div class='col-md-6'><hr>
					<p  style='font-size:19pt;font-weight:bold;padding-right:15px;padding-left:15px'>".$results['service_subinfo_four']."</h6><hr>
					<p  style='text-align:justify;direction:rtl;line-height:1.5rem;font-size:12pt;padding-right:15px;padding-left:15px'>".$results['service_subinfo_four_describe']."
					</p>
				</div>
			</div>
		</div>

"?>
	<!-- PORTFOLIO -->
<?php if($results['properties'] != NULL && $results['properties_info'] != NULL)
		echo
		"<hr>
		<div class='container-fluid'>
			<div class='row'>
				<div class='container-fluid'>
						<div style='text-align:center;font-size:27pt;font-weight:bold;color:#fff'>
						".$results['properties']."</div>
						<div class='text-justify container-fluid'  style='text-align:justify;direction:rtl;line-height:1.5rem;font-size:12pt;font-weight:bold;color:#fff'>
						".$results['properties_info']."
						<hr></div>
					</div>
				</div>
			</div>
		</div>"?>
<?php if($results['manager_one_image'] != NULL && $results['manager_one'] != NULL
        && $results['manager_one_describe'] != NULL && $results['manager_two_image'] != NULL
		&& $results['manager_two'] != NULL && $results['manager_two_describe'] != NULL
		&& $results['manager_three_image'] != NULL )
		echo		
		"<div class='container'>
			<div class='row'>
				<div class='col-md-4'>
					<div style='margin-top:20px;margin-bottom:20px;border:1px solid #ddd;box-shadow:0px 0px 10px #000'>
						<img width='100%' src='".$results['manager_one_image']."'>
					<div class='plan_title'><h6 style='text-align:center;padding-top:10px;font-size:22pt'>".$results['manager_one']."</h6></div><hr>
					<div class='plan_price'>
				<i class='fa fa-usd' aria-hidden='true'></i>
            </div>
			<ul class='list'>
			  <li  style='text-align:justify;direction:rtl'>".$results['manager_one_describe']."</li>
			</ul>
			</div>
		</div>
				<div class='col-md-4'>
					<div style='margin-top:20px;margin-bottom:20px;border:1px solid #ddd;box-shadow:0px 0px 10px #000'>
						<img width='100%' src='".$results['manager_one_image']."'>
					<div class='plan_title'><h6 style='text-align:center;padding-top:10px;font-size:22pt'>".$results['manager_one']."</h6></div><hr>
					<div class='plan_price'>
				<i class='fa fa-usd' aria-hidden='true'></i>
            </div>
			<ul class='list'>
			  <li  style='text-align:justify;direction:rtl'>".$results['manager_one_describe']."</li>
			</ul>
			</div>
		</div>
				<div class='col-md-4'>
					<div style='margin-top:20px;margin-bottom:20px;border:1px solid #ddd;box-shadow:0px 0px 10px #000'>
						<img width='100%' src='".$results['manager_one_image']."'>
					<div class='plan_title'><h6 style='text-align:center;padding-top:10px;font-size:22pt'>".$results['manager_one']."</h6></div><hr>
					<div class='plan_price'>
				<i class='fa fa-usd' aria-hidden='true'></i>
            </div>
			<ul class='list'>
			  <li  style='margin-top:20px;text-align:justify;direction:rtl'>".$results['manager_one_describe']."</li>
			</ul>
			</div>
		</div>
"?>

<?php if($results['place_logo'] != NULL || $results['address'] != NULL
        || $results['number'] != NULL )
		echo
		"<div class='container-fluid' style='background:#ffbe27;box-shadow:2px 2px 15px #000;direction:rtl'><hr>
		   <div class='row'>
		     <div class='container' style='text-align:center'>
			 <img style='text-align:center' class='img-fluid rounded' width='20%' src='".$results['place_logo']."'style='border-radius:20px;box-shadow:0px 0px 10px #000'><br/>
				<br><span class='font-weight-bold' style='color:#000;font-size:25px'>رو با مشخصات زیر پیدا کن</span>
		     </div>
		   </div><hr>
		   <div class='row'>
		     <div class='col-md-6' style='font-size:15pt;font-weight:bold'> آدرس :<br>".$results['address']."</div>
			 <div class='col-md-6' style='font-size:15pt;font-weight:bold'> راه ارتباطی :<br>".$results['number']."</div>
		   </div>
		 <hr>
"?>
		
		<?php if($results['instagram'] != NULL || $results['telegram'] != NULL
		|| $results['aparat'] != NULL )
		echo
		"   	<div class='row'>
					<div  class='col-md-6' style='font-weight:bold;font-size:17pt'>شبکه های اجتماعی ".$results['place']." :</div>
							<div class='col-md-6'>
							<a href='".$results['instagram']."'><img src='images/insta.png'></a>
							<a href='".$results['telegram']."'><img src='images/tele.png'></a>
							<a href='".$results['aparat']."'><img src='images/aparat.png'></a>
							</div>
					</div>
				<hr></div>"?>


	<!-- no result -->
	<?php if(!($results['place_logo'] != NULL && $results['place_info_main'] != NULL 
		&& $results['place_image_slide'] != NULL
		&& $results['place_subinfo_one'] != NULL && $results['place_subinfo_one_describe'] != NULL
        && $results['place_subinfo_two'] != NULL && $results['place_subinfo_two_describe'] != NULL
		&& $results['place_subinfo_three'] != NULL && $results['place_subinfo_three_describe'] != NULL
		&& $results['place_subinfo_four'] != NULL && $results['place_subinfo_four_describe'] != NULL
		&& $results['service_image'] != NULL && $results['service_topic'] != NULL && $results['service_info'] != NULL 
		&& $results['service_subinfo_one'] != NULL && $results['service_subinfo_one_describe'] != NULL 
		&& $results['service_subinfo_two'] != NULL && $results['service_subinfo_two_describe'] != NULL
		&& $results['service_subinfo_three'] != NULL && $results['service_subinfo_three_describe'] != NULL
		&& $results['service_subinfo_four'] != NULL && $results['service_subinfo_four_describe'] != NULL
		&& $results['properties'] != NULL && $results['properties_info'] != NULL
	    && $results['manager_one_image'] != NULL && $results['manager_one'] != NULL
        && $results['manager_one_describe'] != NULL && $results['manager_two_image'] != NULL
		&& $results['manager_two'] != NULL && $results['manager_two_describe'] != NULL
		&& $results['manager_three_image'] != NULL 	
		&& $results['place_logo'] != NULL || $results['address'] != NULL
        || $results['number'] != NULL 
		&& $results['instagram'] != NULL || $results['telegram'] != NULL
		|| $results['aparat'] != NULL )) 
		
		echo "
				<div class='center' style='padding:40px;background:crimson'>
					<font style='font-size:20pt;font-weight:bold;color:#fff'>در حال تکمیل اطلاعات هستم، منتظرم بمون</div>
				</div>";
	?><!-- no result -->
	<!-- Footer -->
	<footer class='container-fluid'>
		<svg preserveAspectRatio='none' viewBox='0 0 100 102' height='100' width='100%' z-index='-10' version='1.1' class='svgcolor-light'>
			<path d='M0 0 L50 100 L100 0 Z' fill='#ffbe27' stroke='#ffbe27' ></path>
		</svg>
                <div class='copyright-section'>
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
