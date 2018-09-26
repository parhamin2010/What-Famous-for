<?php

	session_start();

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
    echo "
	<div class='container' dir='rtl'>
	<div class='row'>
	<div class='col-3 font-weight-bold text-sm-center' style='font-size:12pt'>مکان</div>
	<div class='col-6 font-weight-bold text-sm-center' style='font-size:12pt'>معروفیت</div>
	<div class='col-3 font-weight-bold text-sm-center' style='font-size:12pt'>مشاغل</div>
	</div>
	</div><hr>";
    // Define Output HTML Formating
    $html = '';
    $html .= '<li class="result box">';
    $html .= '<a href="urlString">';
    $html .= '<div class="container-fluid" style="direction:rtl">
				<div class="row">
			    <div class="col-md-3" style="margin:auto;font-size:14pt;color:red;font-weight:bold">functionString</div>
  			    <div class="col-md-6" style="margin:auto;font-size:12pt;color:#000;font-weight:bold">nameString<hr></div>
			    <div class="col-md-3" style="margin:auto;font-size:9pt;color:#000;font-weight:bold"><img src="cat_imgString"></img><hr>catString</div>
';	
	$html .= '  
			   </div>
	          </div>
			  </a>';
    $html .= '</li>';


    // Get Search
    $search_string = preg_replace("/[^A-Za-z0-9Ç-í---Ž-]/", " ", $_POST['query']);
    $search_string = $tutorial_db->real_escape_string($search_string);
    $search_string = $tutorial_db->real_escape_string($_POST['query']);



    // Check Length More Than One Character
    if (strlen($search_string) >= 1 && $search_string !== ' ') {
        // Build Query
        $query = 
		'SELECT * FROM famouser WHERE famous LIKE "%'.$search_string.'%" OR place LIKE "%'.$search_string.'%"
		 OR tag LIKE "%'.$search_string.'%"';
        
        // Do Search
        $result = $tutorial_db->query($query);
        while($results = $result->fetch_array()) {
            $result_array[] = $results;
        }
        // Check If We Have Results
        if (isset($result_array))
		 {
	//		echo "<table  dir='rtl' width='100%' border='1' ><tr><td>";
		    foreach ($result_array as $result) 
			{
        //        echo "<table dir='rtl' width='100%'  height='100%' border='0'>
			//	<tr>
			//	 <td>";
				// Format Output Strings And Hightlight Matches
                
				$display_function = preg_replace("/".$search_string."/i",$search_string,
				 $result['place']);               
				$display_name = preg_replace("/".$search_string."/i",$search_string,
				 $result['famous']);
				$display_cat = preg_replace("/".$search_string."/i",$search_string,
				$result['category']);				 
				$display_cat_img =preg_replace("/".$search_string."/i",$search_string,$result['catimage']);
				$nodisplay_tag = preg_replace("/".$search_string."/i",$search_string,$result['tag']);
				$display_url = 'home.php?place='.urlencode($result['place']);
                // Insert Name               
				$output = str_replace('nameString', $display_name, $html);
				$output = str_replace('functionString', $display_function, $output);				
				$output = str_replace('catString', $display_cat, $output);
				$output = str_replace('cat_imgString', $display_cat_img, $output);
				$output = str_replace('functiontag', $nodisplay_tag, $output);
				$output = str_replace('urlString', $display_url, $output);
               // Output
                echo($output);
            echo "</div>";

				echo "<div class='container-fluid' style='background:url( images/tb-bg1.png);background-repeat:no-repeat;background-size:100%;background-position:center'>&nbsp</div>";			}
            }else{
            
            // Format No Results Output
			$output = str_replace('urlString',' ', $html);
            $output = str_replace('nameString','<p class="nofound" style="text-align:center;font-weight:bold">کلمه مورد نظر شما یافت نشد</p>', $output);
            $output = str_replace('cat_imgString',' ', $output);
			$output = str_replace('functionString',' ', $output);
			$output = str_replace('catString',' ', $output);// Output
            echo($output);
        }
    }
    
    
    /*
        // Build Function List (Insert All Functions Into DB - From PHP)
        
        // Compile Functions Array
        $functions = get_defined_functions();
        $functions = $functions['internal'];
        
        // Loop, Format and Insert
        foreach ($functions as $function) {
        $function_name = str_replace("_", " ", $function);
        $function_name = ucwords($function_name);
        
        $query = '';
        $query = 'INSERT INTO search SET id = "", function = "'.$function.'", name = "'.$function_name.'"';
        
        $tutorial_db->query($query);
        }
    
	
	
	*/
	
?>