<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
</head>

<body>

    <div class="login" id="login" title="Login Account" style="display: none">
        <form action="" id="loginform_data">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="login_user" class="font-weight-bold">Username</label>
                            <input type="text" name="login_user" id="login_user" class="form-control"
                                placeholder="Username">
                            <span id="loginuser_error" class="text-danger font-italic"></span>
                        </div>
                        <div class="form-group">
                            <label for="login_pass" class="font-weight-bold">Password</label>
                            <input type="password" name="login_pass" id="login_pass" class="form-control"
                                placeholder="Password">
                            <span id="loginpass_error" class="text-danger font-italic"></span>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary" id="login_btn">Login</button>
                            <button type="button" class="btn btn-secondary" id="login_close">Close</button>
                            <p>Not a Member <a href="signup.php" style="color: blue">Sign Up</a></p>
                            <p>Forgot <a href="#" style="color: blue">Password</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>