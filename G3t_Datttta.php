<?php
    $dbhost = "localhost";
    $dbname = "bechimar_datacenter";
    $dbuser = "bechimar";
    $dbpass = "09359325492.";
    

  // read from sql
  $connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  // Check connection

  $connect->set_charset('utf8');
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
        
      // get all category data from category table
      $sql_query = "SELECT * FROM famouser";


      $result = $connect->query($sql_query) or die ("Error :".mysql_error());

      $categories = array();

      while($category = $result->fetch_assoc()) {
        $categories[] = $category;
 
      }

      // create json output
      $output = json_encode($categories);
      
  //Output the output.
  echo $output;
?>