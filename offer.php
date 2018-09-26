<?php

	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>به چی معروفم</title>


	<!-- Load jQuery library -->


	<!-- META TAGS -->
	<!-- STYLES -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/flexslider.css">
	<link rel="stylesheet" href="assets/css/animsition.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- Fontawesome -->
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
		$query_second='SELECT * FROM famouser WHERE place LIKE "'.$_GET['place'].'"';
		// Do Search
        $result = $tutorial_db->query($query);
        $results = $result->fetch_assoc();

		
	?>
<body>

<!-- Border -->

	<span class="frame-line top-frame visible-lg"></span>
	<span class="frame-line right-frame visible-lg"></span>
	<span class="frame-line bottom-frame visible-lg"></span>
	<span class="frame-line left-frame visible-lg"></span>
	<!-- HEADER  -->
	<header class="main-header">
		<div class="container-fluid">
				<!-- box header -->
				
				<div class="box-header">
	<!-- CLIENTS -->

				<div class="box-logo1">

				<input type="text" id="search" autocomplete="off" placeholder="! ... من بهت میگم کی به چی معروفه">
		<!-- Show Results -->
                        		<ul id="results"></ul> 
						</div>
						
                       <div class="box-logo">
								<a href="home.php?offer=<?php echo $results['place'];?>"><img src="images/offer1.png"  alt="Logo"></a>
                                		<!-- Main Input -->						
						</div>
						<!-- box-nav -->
						<a class="box-primary-nav-trigger" href="#0">
								<span class="box-menu-icon"></span>
						</a>
						<!-- box-primary-nav-trigger -->
				</div>
				<!-- end box header -->
				<!-- nav -->
				<nav>
						<ul class="box-primary-nav" >
								<li class="box-label">
									<div class="box-logo">
										<a href="home.php?place=<?php echo $results['place'];?>">
											<img src="images/logo2.png"></a>
                                		<!-- Main Input -->				
						</div></li><hr>
								<div style="margin-left:15px;background:url('images/menu.png');background-size:100%">
								<li><a style="letter-spacing:0px;font-weight:bold;line-height:15px" href="home.php?place=<?php echo $results['place'];?>">مشاغل</a> <i class="lnr lnr-home">
                                </i></li>
								<li><a href="services.php" style="letter-spacing:0px;font-weight:bold">میخوام معروف شم</a></li>
<!--								<li><a href="single-project.php" style="letter-spacing:0px;font-weight:bold">ثبت نام در سایت</a></li>-->
								<li><a href="contact.php" style="letter-spacing:0px;font-weight:bold">درباره به چی معروفم</a></li>
								</div><hr>
						<p class="center" style="color:#fff;font-size:13px;margin-left:10px;">به چی معروفم را دنبال کنید</p>
								<div >
								<li class="box-social">
                               		 
                               			 <i class="fa fa-behance" aria-hidden="true">
									     <a href="https://t.me/BeChiMarofam"><div id="u1566"><!-- simple frame --></div></a>
                                          </i>
                                	 
                                </li>
								<li class="box-social">
                                	
                                		<i class="fa fa-twitter" aria-hidden="true">
                                	     <a href="http://aparat.com/Bechimarofam"><div id="u1642"><!-- simple frame --></div></a>
                                    	</i>
                                	
                                </li>
								<li  class="box-social">
                                	
                                		<i class="fa fa-dribbble" aria-hidden="true">
									     <a href="https://instagram.com/_u/bechimarofam"><div  id="u1585"><!-- simple frame --></div></a>

                                        </i>
                                	
                                </li></div>
                                <li>
                                	<a href="#0">
                                		<i class="fa fa-dribbble" aria-hidden="true">
                                		    <div class="rounded-corners colelem" id="u1607"><!-- simple frame --></div>
                                        </i>
                                	</a>
                                </li>
						</ul>

				</nav>
				<!-- end nav -->
		</div>
	</header>
<!--		<svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 0 L50 100 L100 0 Z" fill="#fff" stroke="#fff"></path>
		</svg>-->
		<div id="clients" class="clients mt-100 mbr-box mbr-section mbr-section--relative"><div class="container">
			<div class="row">
						<div class="col-md-12">
						</div><h4 class="owl-demo-topic"></h3>
						<div id="owl-demo"> 
						<a href="grouping.php?place=<?php echo $results['subfirscode'];?>">
						<div class="item"><img src="assets/img/clients/digi.png" alt="دیجیتال"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/meal.png" alt="خوراکیجات"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/book.png" alt="کتاب و نشریات"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/hotl.png" alt="هتل و مهمانسرا"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/advr.png" alt="مشاوره و برنامه ریزی"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/wood.png" alt="مبلمان و دکوراسیون داخلی"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/food.png" alt="رستوران لوکس و سنتی"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/food1.png" alt="پیتزا و ساندویچ و کنتاکی و سیب زمینی"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/anml.png" alt="محصولات دام و کشاورزی"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/cycl.png" alt="موتور و دوچرخه"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/buld.png" alt="مصالح ساختمانی"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/elct.png" alt="برق و الکترونیک"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/carr.png" alt="خودرو و لوازم یدکی"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/crpt.png" alt="فرش و موکت"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/trns.png" alt="حمل و نقل"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/prnt.png" alt="چاپ و تبلیغات"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/dctr.png" alt="تجهیزات پزشکی"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/prty.png" alt="برگزاری مجالس و تشریفات"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/mchn.png" alt="ماشین آلات سنگین و سبک"></div>
						</a>						
						 
						<div class="item"><img src="assets/img/clients/brbr&mkup.png" alt="لوازم آرایشی و آرایشگاه"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/ktch.png" alt="لوازم خانگی و آشپزخانه"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/clot.png" alt="پوشاک مردانه زنانه بچگانه"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/loom.png" alt="انواع پارچه"></div>
						</a>	
						 
						<div class="item"><img src="assets/img/clients/wtch.png" alt="زیورآلات و طلا و ساعت"></div>
						</a>	
						 
						<div class="item"><img src="assets/img/clients/sprt.png" alt="لوازم ورزشی و کوهنوردی و شکار"></div>
						</a>
						 
						<div class="item"><img src="assets/img/clients/ntsh.png" alt="لوازم ورزشی و کوهنوردی و شکار"></div>
						</a>							
						</div>
				</div>
		</div>
	</div>
				<!-- box-intro -->
				<section class="box-intro bg-film" style="box-shadow:2px 2px 15px #888888">
                <?php echo "<img src=".$results['place_image']." class='box-intro bg-film' alt='عکس مکان'>" ?>
					<!------------------------------------------------------------------
                    	<div class="table-cell">
							<h3 class="box-headline letters rotate-2">
										<span class="box-words-wrapper">
											<b class="is-visible">
                                            </b>
											<b>معروف شو</b>
										</span>
								</h3>
								<h1></h1>

						</div>

						<div class="mouse">
								<div class="scroll"></div>
						</div>
				<!-- end box-intro ------------------------------------------------------------>
				</section>
	</header>

<!--		<svg preserveAspectRatio="none" viewBox="0 0 100 102" height="50" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 0 L50 100 L100 0 Z" fill="#fff" stroke="#fff"></path>
		</svg>                
	<!-- HISTORY OF AGENCY -->
	<section id="about" class="about"  style="background:crimson">
		<div class="row center" >
			<div class="center">
				<div>
					<img src="<?php echo $results['place_logo'];?>" alt="لوگو برند" width="400" style="border-radius:20px;box-shadow:0px 0px 20px #000;
">
					<div class="lead2"><br/><?php echo $results['place_info_main'];?></div>
				</div>
			</div><!-- description text -->
		</div>
	</section>

	<!-- FACTS  -->
	<div id="facts" class="facts mbr-box mbr-section mbr-section--relative">
	<img class="img-first-intro" src="<?php echo $results['place_image_slide'];?>"></div>
<?php /*<!--		<div class="container">
			<div class="row text-center">
                <div class="col-xs-12  col-lg-3 col-md-3">
                    <div class="count-item">
<!--                        <i class="lnr lnr-coffee-cup"></i>
                        <div class="numscroller" data-slno='1' data-min='0' data-max='1555' data-delay='10' data-increment="5">1555</div>
                        <div class="count-name-intro">coffe's</div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-3 col-md-3">
                    <div class="count-item">
                        <i class="lnr lnr-camera"></i>
                        <div class="numscroller" data-slno='1' data-min='0' data-max='4444' data-delay='10' data-increment="10">4444</div>
                        <div class="count-name-intro">Photos taken</div>
                    </div>
                </div>
        	</div>
		</div>
	</div>
*/?>
	<!-- TEAM -->
<!--	<section id="team" class="team mbr-box mbr-section mbr-section--relative">
<!--		<svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 0 L50 100 L100 0 Z" fill="#ffeedb" stroke="#ffeedb"></path>
		</svg>
--><!-- FEATURES -->

	<div id="features" class="features mbr-box mbr-section mbr-section--relative">
		<div class="container">
						<div class="row center">
							<div class="feature-item">
								<div class="col-md-3 col-sm-6">
									<div class="item-head">
										<i class="lnr lnr-diamond"></i>
									</div>
									<h6><?php echo $results['place_subinfo_one'];?></h6>
									<p><?php echo $results['place_subinfo_one_describe'];?></p>
								</div>
							</div>
							<!-- End features-item -->
							<div class="feature-item">
								<div class="col-md-3 col-sm-6">
									<div class="item-head">
										<i class="lnr lnr-rocket"></i>
									</div>
									<h6><?php echo $results['place_subinfo_two'];?></h6>
									<p><?php echo $results['place_subinfo_two_describe'];?></p>
								</div>
							</div>
							<!-- End features-item -->

							<div class="feature-item">
								<div class="col-md-3 col-sm-6">
									<div class="item-head">
										<i class="lnr lnr-mustache"></i>
									</div>
									<h6><?php echo $results['place_subinfo_three'];?></h6>
									<p><?php echo $results['place_subinfo_three_describe'];?></p>
								</div>
							</div>
							<!-- End features-item -->

							<div class="feature-item">
								<div class="col-md-3 col-sm-6">

									<h6><?php echo $results['place_subinfo_four'];?></h6>
									<p><?php echo $results['place_subinfo_four_describe'];?></p>
								</div>
							</div>
							<!-- End features-item -->
						</div>
					</div>
	</div>

	<!-- SERVICES PARALAX -->
	<section id="services" class="services mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background">
		<div class="section-overlay"><img style="opacity:0.15" src="<?php echo $results['service_image'];?>"></div>
		<div class="container">
			<div class="row center">
				<div class="center">
					<div class="section-title-parralax">
						<p style="letter-spacing:0px;font-weight:bold;font-size:45pt;margin-top:20px"><?php echo $results['service_topic'];?></p>
						<p class="module-subtitle" style="letter-spacing:0px;font-weight:bold"><?php echo $results['service_info'];?>
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 right col-full right-0">
					<i class="lnr lnr-rocket"></i>
					<h6><?php echo $results['service_subinfo_one'];?></h6><hr>
					<p  style="text-align:justify;direction:rtl"><?php echo $results['service_subinfo_one_describe'];?>
					</p>
				</div>
				<div class="col-lg-6 right col-full left-0">
					<i class="lnr lnr-laptop-phone"></i>
					<h6><?php echo $results['service_subinfo_two'];?></h6><hr>
					<p  style="text-align:justify;direction:rtl"><?php echo $results['service_subinfo_two_describe'];?>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 right col-full right-0">
					<i class="lnr lnr-cart"></i>
					<h6><?php echo $results['service_subinfo_three'];?></h6><hr>
					<p  style="text-align:justify;direction:rtl"><?php echo $results['service_subinfo_three_describe'];?>
					</p>
				</div>
				<div class="col-lg-6 right col-full left-0">
					<i class="lnr lnr-cog"></i>
					<h6><?php echo $results['service_subinfo_four'];?></h6><hr>
					<p  style="text-align:justify;direction:rtl"><?php echo $results['service_subinfo_four_describe'];?>
					</p>
				</div>
			</div>
		</div>
	</section>			<svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" z-index="-10" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
			<path d="M0 0 L50 100 L100 0 Z" fill="#ffbe27" stroke="#ffbe27" shadow="10px #000"></path>
		</svg>


	<!-- PORTFOLIO -->
	<section class="portfolio">
		<div class="container">
			<div class="center">
				<div class="row center">
					<div class="section-title">
						<p style="letter-spacing:0px;font-weight:bold;font-size:35pt;text-align:inherit">
						<?php echo $results['properties'];?></p>
						<p class="module-subtitle"style="letter-spacing:0px;font-weight:bold">
						<?php echo $results['properties_info'];?>
						</p>
					</div>
				</div>
			</div>
			</div>
</section>
<?php /*			<!-- categories  -->
<!--			<div class="col-md-3">
				<div class="row categories-grid">
					<nav class="categories">
						<ul class="portfolio_filter">
							<li><a href="" class="active" data-filter="*">all</a></li>
							<li><a href="" data-filter=".photography">photography</a></li>
							<li><a href="" data-filter=".web">webdesign</a></li>
							<li><a href="" data-filter=".logo">logo</a></li>
							<li><a href="" data-filter=".graphics">graphics</a></li>
							<li><a href="" data-filter=".ads">advertising</a></li>
							<li><a href="" data-filter=".fashion">fashion</a></li>
						</ul>
					</nav>
				</div>
			</div>
-->
<!--		<div class="container">
			<div class="row text-center">
                <div class="col-xs-12  col-lg-3 col-md-3">
                    <div class="count-item">
<!--                        <i class="lnr lnr-coffee-cup"></i>
                        <div class="numscroller" data-slno='1' data-min='0' data-max='1555' data-delay='10' data-increment="5">1555</div>
                        <div class="count-name-intro">coffe's</div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-3 col-md-3">
                    <div class="count-item">
                        <i class="lnr lnr-camera"></i>
                        <div class="numscroller" data-slno='1' data-min='0' data-max='4444' data-delay='10' data-increment="10">4444</div>
                        <div class="count-name-intro">Photos taken</div>
                    </div>
                </div>
        	</div>
		</div>
	</div>

	<!-- TEAM -->
<!--	<section id="team" class="team mbr-box mbr-section mbr-section--relative">
<!--		<svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 0 L50 100 L100 0 Z" fill="#ffeedb" stroke="#ffeedb"></path>
		</svg>
--><!-- FEATURES -->

			<!-- all works -->
<!--			<div class="col-md-9">
				<div class="row portfolio_container">
					<!-- single work -->
<!--					<div class="col-md-4 photography">
						<a href="single-project.html" class="portfolio_item work-grid">
							<img src="assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>Brave man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
	<!--				<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item work-grid">
							<img src="assets/img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>super man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
	<!--				<div class="col-md-4 ads graphics">
						<a href="single-project.html" class="portfolio_item work-grid">
							<img src="assets/img/work-5.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>bat man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
		<!--			<div class="col-md-4 fashion ads">
						<a href="single-project.html" class="portfolio_item work-grid">
							<img src="assets/img/work-4.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>spider man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
			<!--		<div class="col-md-4 graphics ads">
						<a href="single-project.html" class="portfolio_item work-grid">
							<img src="assets/img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
				<!--	<div class="col-md-4 logo web photography">
						<a href="single-project.html" class="portfolio_item work-grid">
							<img src="assets/img/work-6.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
<!--					<div class="col-md-4 ads graphics">
						<a href="single-project.html" class="portfolio_item work-grid">
							<img src="assets/img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
	<!--				<div class="col-md-4 web fashion photography">
						<a href="single-project.html" class="portfolio_item work-grid">
							<img src="assets/img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
		<!--			<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item work-grid">
							<img src="assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->
			<!--	</div>
				<!-- end row -->
			<!--</div>
			<!-- all works end -->
<!--		</div>
		<!-- end container -->
<!--	</section>
	<!-- portfolio -->


	<!-- PRICING --> */?>
		<div class="container">
			<div class="row center">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div  style="border:1px solid #ddd;box-shadow:0px 0px 10px #000">
						<img width='100%' src="<?php echo $results['manager_one_image']?>">
						<div class="plan_title"><h6><?php echo $results['manager_one'];?></h6></div>
						<div class="plan_price">
							<i class="fa fa-usd" aria-hidden="true"></i>
            </div>
						<ul class="list">
							<li  style="text-align:justify;direction:rtl"><?php echo $results['manager_one_describe'];?></li>
						</ul></img>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div  style="border:1px solid #ddd;box-shadow:0px 0px 10px #000">
						<img width='100%' src="<?php echo $results['manager_two_image']?>">
						<div class="plan_title"><h6><?php echo $results['manager_two'];?></h6></div>
						<div class="plan_price">
							<i class="fa fa-usd" aria-hidden="true"></i>
            </div>
						<ul class="list">
							<li  style="text-align:justify;direction:rtl"><?php echo $results['manager_two_describe'];?></li>
						</ul></img>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div  style="border:1px solid #ddd;box-shadow:0px 0px 10px #000">
						<img width='100%' src="<?php echo $results['manager_three_image']?>">
						<div class="plan_title"><h6><?php echo $results['manager_three'];?></h6></div>
						<div class="plan_price">
							<i class="fa fa-usd" aria-hidden="true"></i>
            </div>
						<ul class="list">
							<li  style="text-align:justify;direction:rtl"><?php echo $results['manager_three_describe'];?></li>
						</ul></img>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonials -->
<!--        <div class="container">
        	<div class="row">
                <div class="col-md-12">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="avatar"><img src="assets/img/testimonial1.jpg" alt="Sedna Testimonial Avatar"></div>
                                <h5>"Lorem ipsum dolor sit amet, nullam lucia nisi."</h5>
                                <p class="author">Tanislav Robert, Product Designer.</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="assets/img/testimonial2.jpg" alt="Sedna Testimonial Avatar"></div>
                                <h5>"Nunc vel maximus purus. Nullam ac urna ornare."</h5>
                                <p class="author">Tanislav Alexandru, Founder @ WocTech.</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="assets/img/testimonial3.jpg" alt="Sedna Testimonial Avatar"></div>
                                <h5>"Nullam ac urna ornare, ultrices nisl ut, lacinia nisi."</h5>
                                <p class="author">Calota Oana, Pixel Guru</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
	</section>

	<!-- Contact -->
	<br/><br/>
	<section id="contact" class="contact mbr-box mbr-section mbr-section--relative mbr-section--bg-adapted">
		<div class="container center">
			<div>
				<div>
					<h4><img src="<?php echo $results['place_logo'];?>" width="15%" style="margin-left:10px;border-radius:40px;box-shadow:0px 0px 10px #000">رو با مشخصات زیر پیدا کن</h4>
						<p class="mt-50">آدرس:
							<p><?php echo $results['address'];?></p>
						</p>
						<p class="mt-50">راه های ارتباطی :
							<p><?php echo $results['number'];?></p>
						</p><hr>
				</div>
			</div>
			<!-- Subscribe block -->
		</div>
				<div>
					<div class="newsletter">
						<h4>از <?php echo $results['place'] ?> با خبر باش</h4>
							<div id="social-club"  class="center">
							<a href="<?php echo $results['instagram'];?>"><div id="u1585"></div></a>
							<a href="<?php echo $results['telegram'];?>"><div  id="u1566"></div></a>
							<a href="<?php echo $results['aparat'];?>"><div  id="u1642"></div></a></div>
					</div>
				</div>
			</div>
	</section>

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




<!--		<div class="container">
			<div class="col-md-8 col-md-offset-2 col-sm-12">
				<div class="row center mb-100">
					<div class="section-title-parralax">
						<div class="process-numbers">01</div>
						<h2>Our Team</h2>
						<p class="module-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
                <!-- single member -->
<!--                <div class="team-member col-md-4 col-sm-4 text-center">
                    <div class="member-thumb">
                    	<div class="cover"><div class="cover-inner-left"></div></div>
                        <img src="assets/img/team/member-1.jpg" alt="Team Member" class="img-responsive">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                            <div class="overlay">
                                <h6>Nice to meet! </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a iaculis diam.</p>
                                <div class="social-links">
                                     <i class="fa fa-twitter"></i></a>
                                     <i class="fa fa-facebook"></i></a>
                                     <i class="fa fa-google"></i></a>
                                </div>
                            </div>
                    </div>
                        <h6>Tanislav Robert</h6>
                        <span>Managing Director</span>
                </div>
                <!-- end single member -->

                <!-- single member -->
    <!--            <div class="team-member col-md-4 col-sm-4 text-center">
                    <div class="member-thumb">
                    	<div class="cover"><div class="cover-inner-middle"></div></div>
                        <img src="assets/img/team/member-2.jpg" alt="Team Member" class="img-responsive">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                            <div class="overlay">
                                <h6>HELLO &amp; WELCOME! </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a iaculis diam.</p>
                                <div class="social-links">
                                     <i class="fa fa-twitter"></i></a>
                                     <i class="fa fa-facebook"></i></a>
                                     <i class="fa fa-google"></i></a>
                                </div>
                            </div>
                    </div>
                        <h6>Oana Calota</h6>
                        <span>Lead Developer</span>
                </div>
                <!-- end single member -->

                <!-- single member -->
        <!--        <div class="team-member col-md-4 col-sm-4 text-center ">
                    <div class="member-thumb">
                    	<div class="cover"><div class="cover-inner-right"></div></div>
                        <img src="assets/img/team/member-3.jpg" alt="Team Member" class="img-responsive">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                            <div class="overlay">
                                <h6>HI FRIEND! </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a iaculis diam.</p>
                                <div class="social-links">
                                     <i class="fa fa-twitter"></i></a>
                                     <i class="fa fa-facebook"></i></a>
                                     <i class="fa fa-google"></i></a>
                                </div>
                            </div>
                    </div>
                        <h6>Lucian Tanislav</h6>
                        <span>Seo Guru</span>
                </div>
                <!-- end single member -->
<!--            </div>
		</div>
		<div class="bottom-separator hidden-xs"></div>
	</section>
	





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
</body>
</html>
