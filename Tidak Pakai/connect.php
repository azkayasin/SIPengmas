<!-- <?php
//koneksi ke database
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpassword = "";
  $database = "pengmas";
  $con = mysqli_connect($dbhost, $dbuser, $dbpassword, $database);

  if (!$con){
    die('Could not connect: ' . mysql_error());
  }
  else{  }
    //mysqli_select_db($database, $con);
 

  function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 
 
    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 
 
    $bytes /= pow(1024, $pow); 
 
    return round($bytes, $precision) . ' ' . $units[$pow]; 
} 
?>
 -->

 <?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pengmas');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
