<?php
require "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $mobilNo = $_POST["mobilNo"];
    $password = $_POST["password"];
    $re_password = $_POST["re_password"];
    $re = "SELECT * FROM localuser WHERE (mobilNo = '$mobilNo' and  password= '$password');";
    $res = mysqli_query($conn, $re);
    $resultOfPassword = (mysqli_num_rows($res)==1);

    if(($password===$re_password)&&($resultOfPassword==true))
    {
            session_start();
            $_SESSION['mobilNo'] = $mobilNo;
            header("Location: index.php");
            echo "fghjk";
        
    }
    else{
        header("Location: login.php");
    
    }
}
else{

    echo "scr";
}
?>