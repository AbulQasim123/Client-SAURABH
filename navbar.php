<?php 
    session_start();
    if (isset($_SESSION['loggedin'])) {
        $loggedin= true;
        
    }else{
        $loggedin= false;
    }
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Navbar</title>

</head>

<body>
<?php 
    echo "<nav class='navbar navbar-expand-lg navbar-dark bg-success'>
        <a href='' class='navbar-brand' id='image'><img src='image\img_avatar1.png' alt='' id='set_image'
                title='Developer Saurabh'></a>
        <button class='navbar-toggler' data-toggle='collapse' data-target='#navbar_content'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbar_content'>
            <ul class='navbar-nav mr-auto'>
                <li class='nav-item active'>
                    <a href='' class='nav-link font-weight-bold'>Home</a>
                </li>
                <li class='nav-item active'>
                    <a href='subject.php' class='nav-link font-weight-bold'>Subject</a>
                </li>
                <li class='nav-item active'>
                    <a href='' class='nav-link font-weight-bold'>Service</a>
                </li>
                <li class='nav-item active'>
                    <a href='' class='nav-link font-weight-bold'>Contact</a>
                </li>";
                if ($loggedin) {
                    echo "<li class='nav-item active'>
                    <a class='nav-link font-weight-bold'>Reading</a>
                </li>
                <li class='nav-item active'>
                    <a id='reading_sub' class='nav-link font-weight-bold'>Teaching</a>
                
                </li>
                <li class='nav-item active'>
                    <a href='logout.php' class='nav-link font-weight-bold'>Logout</a>
                </li>";
                echo "<li class='nav-item active'>
                    <a class='nav-link font-weight-bold text-warning'>welcome $_SESSION[username]</a>
                </li>";
                }   
                
                
                
                
            echo "</ul>
            <form action='' class='form-inline my-2 my-lg-0 mr-2'>
                <input type='search' name='search' id='search' class='form-control mr-sm-2' placeholder='Search'>
                <button type='button' class='btn btn-danger my-2 my-sm-0'>Search</button>
            </form>
            <div class=''>
                <button type='button' class='btn btn-danger' id='Signup_dialog'>Sign Up</button>
                <button type='button' class='btn btn-danger' id='Login_dialog'>Login</button>
                <button type='button' class='btn btn-danger' id='Logout'>Logout</button>
            </div>
        </div>
    </nav>";
?>
</body>

</html>