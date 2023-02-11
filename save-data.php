<?php 

    // $showerror = "";
    require 'db_connect.php';
    $user_name = $_POST['user_name'];
    $user_fullname = $_POST['user_fullname'];
    $user_age = $_POST['user_age'];
    $user_course = $_POST['user_course'];
    $user_address = $_POST['user_address'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    // $exit_query= "SELECT * FROM `register_student` WHERE `Username` ='$user_name' ";
    // $exit_result= mysql_query($exit_query, $conn);
    // $exit_row= mysql_num_rows($exit_result);
    // if ($exit_row > 0) {
    //     $showerror= "Username already exits";
        
    // }else{

    $password_hash = password_hash($user_password, PASSWORD_DEFAULT);

    $query= "INSERT INTO `register_student` (`Username` ,`Fullname` ,`Age` ,`Course`, `Address` ,`Email` ,`Password`) VALUES ('{$user_name}', '{$user_fullname}', '{$user_age}','{$user_course}','{$user_address}','{$user_email}','{$password_hash}')";

    if (mysqli_query($conn,$query)) {
        echo 1;
    }else{
        echo 0;
    }
    //}
?>


