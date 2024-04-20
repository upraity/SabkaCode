<?php
$dbhost = "";
$dbuser = "";
$dbpass = "";
$dbname = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn){
    //echo "success";
//}
//else{
    die("Error". mysqli_connect_error());
}

?>
