<?php
// $servername = "sql301.infinityfree.com";
// $username = "if0_36888936";
// $password = "zaidbhai";
// $database = "if0_36888936_amberfoundation_db";

// $con = new mysqli($servername, $username, $password, $database);

// if ($con->connect_error) {
//     error_log("Connection failed: " . $con->connect_error); 
//     die("Connection failed. Please try again later.");
// }
?>


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "xpansion_db";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    error_log("Connection failed: " . $con->connect_error); 
    die("Connection failed. Please try again later.");
}
?>
