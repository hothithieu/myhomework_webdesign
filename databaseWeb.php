<?php 
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysql = mysqli_connect("localhost", "root", "");
 
// Check connection
if($mysql === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "CREATE DATABASE web_PHP";
if(mysqli_query($mysql, $sql)){
    echo "Database created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysql);
}

// Close connection
mysqli_close($mysql);

?>