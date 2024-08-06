<?php 

$servername = "localhost";

$username = "voilausers";

$password = "Wo!A*L#ART00d!o_voila";

$dbname = "windsjga_studiovoila";


try {
    
    $conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  

}catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
 
   
Define('WEBROOT','https://test.voilastudio.in/voilastudio_admin/');	
Define('img_prefix','sm');
?>