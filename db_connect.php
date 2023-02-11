<?php 
    $server_name= "localhost";
    $user_name= "root";
    $pass_word= "";
    $db_name= "saurabh";
    
    $conn= mysqli_connect($server_name, $user_name, $pass_word,$db_name) or die("Connection failed");
?>