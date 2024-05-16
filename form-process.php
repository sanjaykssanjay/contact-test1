<?php
include("config.php");
extract($_POST);

$sql = "INSERT INTO `contactdata`(`name`, `message`) VALUES ('$name','$message')";
$result = $mysqli->query($sql);

if($result){
    echo "DATA ADDED SUCCESSFULLY";
} else {
    echo "Couldn't enter data: ".$mysqli->error;
}

$mysqli->close();
?>
