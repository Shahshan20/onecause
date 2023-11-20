<?php
$db_host = "donateto1cause-server.mysql.database.azure.com";
$db_username = "btufyinlhl";
$db_password = "QB8SFZNTEGKCMK26$";
$db_name = "one_cause";

// create connection
$conn = new mysqli($db_host,$db_username,$db_password,$db_name);


//check connection

if($conn-> connect_error){
    die("connection failed");
}

?>
