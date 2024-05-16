<?php
include("config.php");

header('Content-Type: application/json'); // Ensure the response is JSON

$sql = "SELECT * FROM contactdata";
$result = $mysqli->query($sql);

if ($result) {
    $data = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($data);
} else {
    echo json_encode(array("error" => "Couldn't fetch data: " . $mysqli->error));
}

$mysqli->close();
?>
