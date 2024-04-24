<?php
    $host = "localhost:3300";
    $user = "root";
    $pass = "";
    $db = "university";
    
    $conn = mysqli_connect($host, $user, $pass, $db);
    
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

    $userName = $_POST["uname"];
    $usermail = $_POST["umail"];
    $usermessage = $_POST["umsg"];

    $sql = "INSERT INTO `contact` (`name`, `email`, `message`) VALUES ('$userName','$usermail','$usermessage')";

    if(mysqli_query($conn, $sql)){
        echo "New record created successfully";
    }else{
        echo "Error: ".$sql."<br>".mysqli_error($conn);
    }
?>