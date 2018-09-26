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
		$num = $_POST['number'];
		$query = "INSERT INTO service (number) VALUES ('$num')"; 
		$tutorial_db->query($query);
		$query_one='SELECT place FROM famouser ORDER BY RAND()';
	        $result = $tutorial_db->query($query_one);
        $results = $result->fetch_assoc();	

		echo "
		
	<head>
		<link rel='stylesheet' href='assets/css/bootstrap.min.css'>
	<link rel='stylesheet' href='assets/css/flexslider.css'>
	<link rel='stylesheet' href='assets/css/animsition.min.css'>
	<link rel='stylesheet' href='assets/css/style.css'>
	<link rel='stylesheet' href='assets/css/owl.carousel.css'>
		<link rel='icon' href='images/bechimarofam.ico'>
	
	</head>
	<span class='frame-line top-frame visible-lg'></span>
	<span class='frame-line right-frame visible-lg'></span>
	<span class='frame-line bottom-frame visible-lg'></span>
	<span class='frame-line left-frame visible-lg'></span>
		
		<div class='container'>
	<div class='bodddy'>
    <div class='row col-sm-12 displaystyle-fullborder displaystyle-danger'>
        <strong>.شماره شما با موفقیت ثبت شد<br/>.بزودی با شما تماس خواهیم گرفت</strong>
    </div>
    <a href='index.php'";echo "'><div class='row col-sm-12 button'>
	 تکمیل ثبت نام
    </div>
</div>	
 
</div>

<style>

    .displaystyle-fullborder {
        padding: 15px;
		margin-top:250px;
		font-size:20pt;
        background-color: crimson;
        border: 1px solid #fff;
		border-radius:10px;
        margin-bottom: 10px;
		text-align:center;
		box-shadow: 12px 12px 10px #333;
		color:#fff;
		font-weight:bold;
		font-family:'__B Yekan_5'
    }
    .button {
        padding: 7px;
		border-radius:10px;
		margin-top:0px;
		font-size:10pt;
		width:130px;
        border: 1px solid #fff;
        margin-bottom: 10px;
		text-align:center;
		box-shadow: 12px 12px 10px #333;
		color:#fff;
		font-weight:bold;
		font-family:'__B Yekan_5'
    }

</style>
		
		
			 ";
	?>
