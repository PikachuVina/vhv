<meta charset="utf-8"> 
<title>Hacker</title> 
<?php 
session_start(); 
error_reporting(0); 
include '../include/config.php'; 

$result = @mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM token"); 
if($result){ 
while($row = @mysqli_fetch_array($result)) 
  { 
$token = $row[token]; 
echo"$token <br>"; 
} 
} 
?>