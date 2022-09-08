<?php
require "connection.php";
session_start();
$session = $_SESSION['mobilNo'];
if(isset($_SESSION['mobilNo'])){
$title = $_POST["title"];
$select = "DELETE FROM merchant WHERE mobilNo = '$session' and title = '$title';";
$qury = mysqli_query($conn, $select);
header("Location: products.php");
}
else{
    echo "sdfghj";
}
?>