<?php
    // $showerror = "";
    // require 'db_connect.php';
    // $user_name = $_POST['user_name'];
    // $user_fullname = $_POST['user_fullname'];
    // $user_age = $_POST['user_age'];
    // $user_course = $_POST['user_course'];
    // $user_address = $_POST['user_address'];
    // $user_email = $_POST['user_email'];
    // $user_password = $_POST['user_password'];

    // $exit_query= "SELECT * FROM `register_student` WHERE `Username` ='$user_name' ";
    // $exit_result= mysql_query($exit_query, $conn);
    // $exit_row= mysql_num_rows($exit_result);
    // if ($exit_row > 0) {
    //     $showerror= "Username already exits";
    // }else{

    //     $password_hash = password_hash($user_password, PASSWORD_DEFAULT);
 
    //     $query= "INSERT INTO `register_student` (`Username` ,`Fullname` ,`Age` ,`Course`, `Address` ,`Email` ,`Password`) VALUES ('{$user_name}', '{$user_fullname}', '{$user_age}','{$user_course}','{$user_address}','{$user_email}','{$password_hash}')";
    
    //     if (mysql_query($query, $conn)) {
    //         echo 1;
    //     }else{
    //         echo 0;
    //     }
    // }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>

<body>
    
    <!-- trigger dialog for Sign Up -->
    <div class="" id="signup" style="display: none">
        <form action="" id="form_data" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="username" class="font-weight-bold">Username</label>
                            <input type="text" name="username" id="username" class="form-control"
                                placeholder="Username">
                            <span id="user_error" class="text-danger font-italic"></span>
                        </div>
                        <div class="form-group">
                            <label for="age" class="font-weight-bold">Age</label>
                            <input type="number" name="age" id="age" class="form-control" placeholder="Age">
                            <span id="age_error" class="text-danger font-italic"></span>
                        </div>
                        <div class="form-group">
                            <label for="address" class="font-weight-bold">Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                            <span id="address_error" class="text-danger font-italic"></span>
                        </div>
                        <div class="form-group">
                            <label for="password" class="font-weight-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Password">
                            <span id="password_error" class="text-danger font-italic"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fullname" class="font-weight-bold">Full name</label>
                            <input type="text" name="fullname" id="fullname" class="form-control"
                                placeholder="Full name">
                            <span id="fullname_error" class="text-danger font-italic"></span>
                        </div>
                        <div class="form-group">
                            <label for="course" class="font-weight-bold">Course</label>
                            <select name="course" id="course" class="form-control">
                                <option value="" selected disabled>Select Course</option>
                                <option value="BCA">BCA</option>
                                <option value="MCA">MCA</option>
                                <option value="BBA">BBA</option>
                                <option value="MBA">MBA</option>
                            </select>
                            <span id="course_error" class="text-danger font-italic"></span>
                        </div>
                        <div class="form-group">
                            <label for="email" class="font-weight-bold">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
                            <span id="email_error" class="text-danger font-italic"></span>
                        </div>
                        <div class="form-group">
                            <label for="cnfpassword" class="font-weight-bold">Confirm password</label>
                            <input type="password" name="cnfpassword" id="cnfpassword" class="form-control"
                                placeholder="Confirm Password">
                            <span id="cnfpass_error" class="text-danger font-italic"></span>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-sm ml-3 mr-2" id="singup_btn" name="singup_btn">Sign
                        Up</button>
                    <button type="button" class="btn btn-secondary btn-sm" id="signup_close">Close</button>
                </div>
            </div>
        </form>
    </div>

    <div class="success_message"></div>
    <div class="error_message"></div>
    
    <script type="text/javascript" src="jquery\myjquery.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>