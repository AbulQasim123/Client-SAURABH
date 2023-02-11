<?php 
    // if ($_SERVER['REQUEST_METHOTD'] == "POST") {  
        $login = false;
        require "db_connect.php";
        $username= $_POST['username'];
        $password= $_POST['password'];
        $query = " SELECT * FROM `register_student` WHERE `Username` = '$username' AND `Password`= '$password' ";

        $result = mysqli_query($conn,$query) or die('Query failed');
    
        $numrow = mysqli_num_rows($result);
        if ($numrow == 1) {
            // echo 1;
            $login = true;
        }
        if ($login) {
            echo 1;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            
        }else{
            echo 0;
        }
    //}

?>