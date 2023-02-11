<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desire Saurabh</title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist\css\bootstrap.css">
    <link rel="stylesheet" href="jquery-ui-1.12.1\jquery-ui.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php  include 'navbar.php'?>
    <!-- Carousel with bootstrap -->
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image\first.jpg" alt="Los Angeles" width="1100" height="125">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in Los Angeles!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image\second.jpg" alt="Chicago" width="1100" height="125">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>We had such a great time in Chicago!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image\third.jpg" alt="New York" width="1100" height="125">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We had such a great time in New York!</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!-- tab with bootstrap -->
    <div id="parent_div" class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 scroll " id="right_border">
                    <nav class='navbar-dark'>
                        <button class='navbar-toggler' data-toggle='collapse' data-target='#navbar_support'>
                            <span class='navbar-toggler-icon bg-info'></span>
                        </button>
                        <div class="" id="navbar_support">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-Hindi-tab" data-toggle="pill"
                                    href="#v-pills-Hindi" role="tab">Hindi</a>
                                <a class="nav-link" id="v-pills-Urdu-tab" data-toggle="pill" href="#v-pills-Urdu"
                                    role="tab">Urdu</a>
                                <a class="nav-link" id="v-pills-Math-tab" data-toggle="pill" href="#v-pills-Math"
                                    role="tab">Math</a>
                                <a class="nav-link" id="v-pills-Physics-tab" data-toggle="pill" href="#v-pills-Physics"
                                    role="tab">Physics</a>
                                <a class="nav-link" id="v-pills-Chemistry-tab" data-toggle="pill"
                                    href="#v-pills-Chemistry" role="tab">Chemistry</a>

                                <a class="nav-link" id="v-pills-Economy-tab" data-toggle="pill" href="#v-pills-Economy"
                                    role="tab">Economy</a>
                                <a class="nav-link" id="v-pills-Computer-tab" data-toggle="pill"
                                    href="#v-pills-Computer" role="tab">Computer</a>
                                <a class="nav-link" id="v-pills-Social-tab" data-toggle="pill" href="#v-pills-Social"
                                    role="tab">Social</a>
                                <a class="nav-link" id="v-pills-Biology-tab" data-toggle="pill" href="#v-pills-Biology"
                                    role="tab">Biology</a>
                                <a class="nav-link" id="v-pills-Trinometry-tab" data-toggle="pill"
                                    href="#v-pills-Trinometry" role="tab">Trinometry</a>
                                <a class="nav-link" id="v-pills-Algebra-tab" data-toggle="pill" href="#v-pills-Algebra"
                                    role="tab">Algebra</a>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-md-10 my-2" id="content_area">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-Hindi" role="tabpanel">
                            <h3>Hindi</h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem praesentium quaerat
                                obcaecati rem delectus hic porro excepturi odit, doloremque illum, quidem similique,impedit
                                repellat officia aliquam deserunt officiis ea. Consequuntur illo non culpa quasi tempore impedit
                                doloremque quae laborum nihil qui sunt incidunt earum, quas deleniti aut ducimus? Libero
                                repudiandae vitae aliquid dolores porro eius quisquam delectus, unde molestiae a odio dolorem
                                eligendi. Placeat maiores iure mollitia tempora quas repellat officiis modi. Solutafacere
                                commodi odit eveniet qui fuga corporis dolorem ratione voluptates et expedita illo,deserunt a
                                obcaecati velit, sunt voluptatibus assumenda dicta nemo harum magnam corrupti exercitationem!
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Urdu" role="tabpanel">
                            <h3>Urdu</h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem praesentium quaerat
                                obcaecati rem delectus hic porro excepturi odit, doloremque illum, quidem similique,impedit
                                repellat officia aliquam deserunt officiis ea. Consequuntur illo non culpa quasi tempore impedit
                                doloremque quae laborum nihil qui sunt incidunt earum, quas deleniti aut ducimus? Libero
                                repudiandae vitae aliquid dolores porro eius quisquam delectus, unde molestiae a odio dolorem
                                eligendi. Placeat maiores iure mollitia tempora quas repellat officiis modi. Solutafacere
                                commodi odit eveniet qui fuga corporis dolorem ratione voluptates et expedita illo,deserunt a
                                obcaecati velit, sunt voluptatibus assumenda dicta nemo harum magnam corrupti exercitationem!
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Math" role="tabpanel">
                            <h3>Math</h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem praesentium quaerat
                                obcaecati rem delectus hic porro excepturi odit, doloremque illum, quidem similique,impedit
                                repellat officia aliquam deserunt officiis ea. Consequuntur illo non culpa quasi tempore impedit
                                doloremque quae laborum nihil qui sunt incidunt earum, quas deleniti aut ducimus? Libero
                                repudiandae vitae aliquid dolores porro eius quisquam delectus, unde molestiae a odio dolorem
                                eligendi. Placeat maiores iure mollitia tempora quas repellat officiis modi. Solutafacere
                                commodi odit eveniet qui fuga corporis dolorem ratione voluptates et expedita illo,deserunt a
                                obcaecati velit, sunt voluptatibus assumenda dicta nemo harum magnam corrupti exercitationem!
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Physics" role="tabpanel">
                            <h3>Physics</h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem praesentium quaerat
                                obcaecati rem delectus hic porro excepturi odit, doloremque illum, quidem similique,impedit
                                repellat officia aliquam deserunt officiis ea. Consequuntur illo non culpa quasi tempore impedit
                                doloremque quae laborum nihil qui sunt incidunt earum, quas deleniti aut ducimus? Libero
                                repudiandae vitae aliquid dolores porro eius quisquam delectus, unde molestiae a odio dolorem
                                eligendi. Placeat maiores iure mollitia tempora quas repellat officiis modi. Solutafacere
                                commodi odit eveniet qui fuga corporis dolorem ratione voluptates et expedita illo,deserunt a
                                obcaecati velit, sunt voluptatibus assumenda dicta nemo harum magnam corrupti exercitationem!
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Chemistry" role="tabpanel">
                            <h3>Chemistry</h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem praesentium quaerat
                                obcaecati rem delectus hic porro excepturi odit, doloremque illum, quidem similique,impedit
                                repellat officia aliquam deserunt officiis ea. Consequuntur illo non culpa quasi tempore impedit
                                doloremque quae laborum nihil qui sunt incidunt earum, quas deleniti aut ducimus? Libero
                                repudiandae vitae aliquid dolores porro eius quisquam delectus, unde molestiae a odio dolorem
                                eligendi. Placeat maiores iure mollitia tempora quas repellat officiis modi. Solutafacere
                                commodi odit eveniet qui fuga corporis dolorem ratione voluptates et expedita illo,deserunt a
                                obcaecati velit, sunt voluptatibus assumenda dicta nemo harum magnam corrupti exercitationem!
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Economy" role="tabpanel">
                            <h3>Economy</h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem praesentium quaerat
                                obcaecati rem delectus hic porro excepturi odit, doloremque illum, quidem similique,impedit
                                repellat officia aliquam deserunt officiis ea. Consequuntur illo non culpa quasi tempore impedit
                                doloremque quae laborum nihil qui sunt incidunt earum, quas deleniti aut ducimus? Libero
                                repudiandae vitae aliquid dolores porro eius quisquam delectus, unde molestiae a odio dolorem
                                eligendi. Placeat maiores iure mollitia tempora quas repellat officiis modi. Solutafacere
                                commodi odit eveniet qui fuga corporis dolorem ratione voluptates et expedita illo,deserunt a
                                obcaecati velit, sunt voluptatibus assumenda dicta nemo harum magnam corrupti exercitationem!
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Computer" role="tabpanel">
                            <h3>Computer</h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem praesentium quaerat
                                obcaecati rem delectus hic porro excepturi odit, doloremque illum, quidem similique,impedit
                                repellat officia aliquam deserunt officiis ea. Consequuntur illo non culpa quasi tempore impedit
                                doloremque quae laborum nihil qui sunt incidunt earum, quas deleniti aut ducimus? Libero
                                repudiandae vitae aliquid dolores porro eius quisquam delectus, unde molestiae a odio dolorem
                                eligendi. Placeat maiores iure mollitia tempora quas repellat officiis modi. Solutafacere
                                commodi odit eveniet qui fuga corporis dolorem ratione voluptates et expedita illo,deserunt a
                                obcaecati velit, sunt voluptatibus assumenda dicta nemo harum magnam corrupti exercitationem!
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Social" role="tabpanel">
                            <h3>Social</h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem praesentium quaerat
                                obcaecati rem delectus hic porro excepturi odit, doloremque illum, quidem similique,impedit
                                repellat officia aliquam deserunt officiis ea. Consequuntur illo non culpa quasi tempore impedit
                                doloremque quae laborum nihil qui sunt incidunt earum, quas deleniti aut ducimus? Libero
                                repudiandae vitae aliquid dolores porro eius quisquam delectus, unde molestiae a odio dolorem
                                eligendi. Placeat maiores iure mollitia tempora quas repellat officiis modi. Solutafacere
                                commodi odit eveniet qui fuga corporis dolorem ratione voluptates et expedita illo,deserunt a
                                obcaecati velit, sunt voluptatibus assumenda dicta nemo harum magnam corrupti exercitationem!
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Biology" role="tabpanel">
                            <h3>Biology</h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem praesentium quaerat
                                obcaecati rem delectus hic porro excepturi odit, doloremque illum, quidem similique,impedit
                                repellat officia aliquam deserunt officiis ea. Consequuntur illo non culpa quasi tempore impedit
                                doloremque quae laborum nihil qui sunt incidunt earum, quas deleniti aut ducimus? Libero
                                repudiandae vitae aliquid dolores porro eius quisquam delectus, unde molestiae a odio dolorem
                                eligendi. Placeat maiores iure mollitia tempora quas repellat officiis modi. Solutafacere
                                commodi odit eveniet qui fuga corporis dolorem ratione voluptates et expedita illo,deserunt a
                                obcaecati velit, sunt voluptatibus assumenda dicta nemo harum magnam corrupti exercitationem!
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Trinometry" role="tabpanel">
                            <h3>Trigonometry</h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem praesentium quaerat
                                obcaecati rem delectus hic porro excepturi odit, doloremque illum, quidem similique,impedit
                                repellat officia aliquam deserunt officiis ea. Consequuntur illo non culpa quasi tempore impedit
                                doloremque quae laborum nihil qui sunt incidunt earum, quas deleniti aut ducimus? Libero
                                repudiandae vitae aliquid dolores porro eius quisquam delectus, unde molestiae a odio dolorem
                                eligendi. Placeat maiores iure mollitia tempora quas repellat officiis modi. Solutafacere
                                commodi odit eveniet qui fuga corporis dolorem ratione voluptates et expedita illo,deserunt a
                                obcaecati velit, sunt voluptatibus assumenda dicta nemo harum magnam corrupti exercitationem!
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Algebra" role="tabpanel">
                            <h3>Algebra</h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem praesentium quaerat
                                obcaecati rem delectus hic porro excepturi odit, doloremque illum, quidem similique,impedit
                                repellat officia aliquam deserunt officiis ea. Consequuntur illo non culpa quasi tempore impedit
                                doloremque quae laborum nihil qui sunt incidunt earum, quas deleniti aut ducimus? Libero
                                repudiandae vitae aliquid dolores porro eius quisquam delectus, unde molestiae a odio dolorem
                                eligendi. Placeat maiores iure mollitia tempora quas repellat officiis modi. Solutafacere
                                commodi odit eveniet qui fuga corporis dolorem ratione voluptates et expedita illo,deserunt a
                                obcaecati velit, sunt voluptatibus assumenda dicta nemo harum magnam corrupti exercitationem!
                            </p>
                        </div>
                    </div><hr style="border: 1px solid black;">
                    <div class="teach_sub" id="teach_sub" style="display:none">
                        <h3 class="text-primary font-italic">Share Your Knowledge :</h3>
                        <label for="subject" class="font-weight-bold">Select Your subject</label>
                        <select name="subject" id="subject" class="form-control" style="width: 400px">
                            <option value="Hindi">Hindi</option>
                            <option value="Urdu">Urdu</option>
                            <option value="Math">Math</option>
                            <option value="Physics">Physics</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Economy">Economy</option>
                            <option value="Computer">Computer</option>
                            <option value="Social">Social</option>
                            <option value="Biology">Biology</option>
                            <option value="Trigonometry">Trigonometry</option>
                            <option value="Algebra">Algebra</option>
                        </select>
                        <label for="share_sub" class="font-weight-bold">Write about Subject :</label><br>
                        <textarea name="share_sub" id="share_sub" rows="4" cols="50" class="form-control"></textarea>
                        <button type="button" name="" id="" class="btn btn-success btn-lg my-2">Post...</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid bg-dark my-0 py-3 text-light">
        <p class="mb-0 text-center">© 2020-2021 Desiresaurabh.com</p>
        <p class="mb-0 text-center">
            <a href="#">Back to top |</a>
            <a href="#">Privacy |</a>
            <a href="#">Terms</a>
        </p>
    </footer>


    <?php
        
        require 'signup.php';
        require 'login.php';
    ?>

    <script type="text/javascript" src="jquery\myjquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\bootstrap.js"></script>
    <script type="text/javascript" src="jquery-ui-1.12.1\jquery-ui.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // trigger dialog for Sign Up
        $('#Signup_dialog').on('click', function() {
            $('#signup').dialog({
                title: "Sign Up for an account",
                width: 600,
                draggable: true,
                resizable: false,
                //autoOpen: false,
                closeOnEscape: true,
            });
        });
        $('#signup_close').click(function() {
            $('#form_data').trigger('reset');
            $('#signup').dialog('close');
        });

            // trigger dialog for Login
        $('#Login_dialog').on('click', function() {
            $('#login').dialog({
                draggable: true,
                closeOnEscape: true,
                width: 400,
                resizable: false,
            });
        })
        $('#login_close').click(function() {
            $('#login').dialog('close');
            $('#loginform_data').trigger('reset');
        });

        // for experiment
        $('#reading_sub').click(function() {
            // alert('helo');
            $('#teach_sub').css({
                'display' : 'block',
            });
        });

    });

    // INSERT DATA INTO DATABASE THROUGH AJAX
    $(document).ready(function() {
        $('#singup_btn').on('click', function() {
            let username = $('#username').val();
            let fullname = $('#fullname').val();
            let age = $('#age').val();
            let course = $('#course').val();
            let address = $('#address').val();
            let email = $('#email').val();
            let password = $('#password').val();
            let cnfpassword = $('#cnfpassword').val();

            if (username == "") {
                $('#user_error').html('Username is required!').fadeIn();
                setTimeout(() => {
                    $('#user_error').fadeOut();
                }, 4000);
            } else if (fullname == "") {
                $('#fullname_error').html('Fullname is required!').fadeIn();
                setTimeout(() => {
                    $('#fullname_error').fadeOut();
                }, 4000);
            } else if (age == "") {
                $('#age_error').html('Age is required').fadeIn();
                setTimeout(() => {
                    $('#age_error').fadeOut();
                }, 4000);
            } else if (address == "") {
                $('#address_error').html('Address is required').fadeIn();
                setTimeout(() => {
                    $('#address_error').fadeOut();
                }, 4000);
            } else if (email == "") {
                $('#email_error').html('Email is required').fadeIn();
                setTimeout(() => {
                    $('#email_error').fadeOut();
                }, 4000);
            } else if (password == "") {
                $('#password_error').html('Password is required').fadeIn();
                setTimeout(() => {
                    $('#password_error').fadeOut();
                }, 4000);
            } else if (cnfpassword == "") {
                $('#cnfpass_error').html('Confirm password is required').fadeIn();
                setTimeout(() => {
                    $('#cnfpass_error').fadeOut();
                }, 4000);
            } else if (password != cnfpassword) {
                $('#cnfpass_error').html('Confirm password is not match').fadeIn();
                setTimeout(() => {
                    $('#cnfpass_error').fadeOut();
                }, 4000);
            } else {
                // Insert data into database
                $.ajax({
                    url: "save-data.php",
                    type: "post",
                    data: {
                        user_name: username,
                        user_fullname: fullname,
                        user_age: age,
                        user_course: course,
                        user_address: address,
                        user_email: email,
                        user_password: password
                    },
                    success: function(result) {
                        if (result == 1) {
                            $('#form_data').trigger('reset');
                            $('#signup').dialog('close');
                            let success = "Record save successfully.";
                            $('.success_message').html(success).fadeIn();
                            // $('.error_message').fadeOut();
                            setTimeout(() => {
                                $('.success_message').fadeOut('slow');
                            }, 4000);

                        } else {
                            let error = "Record not save successfully.";
                            $('.error_message').html(error).fadeIn();
                            // $('.success_message').fadeOut();
                            setTimeout(() => {
                                $('.error_message').fadeOut('slow');
                            }, 4000);
                        }
                    }
                })
            }
        })
        
        //Login user form database
        $('#login_btn').on('click', function() {
            let login_user = $('#login_user').val();
            let login_pass = $('#login_pass').val();

            if (login_user == "") {
                $('#loginuser_error').html('Username is blank!').fadeIn();
                setTimeout(() => {
                    $('#loginuser_error').fadeOut();
                }, 4000);
            } else if (login_pass == "") {
                $('#loginpass_error').html('Password is blank!').fadeIn();
                setTimeout(() => {
                    $('#loginpass_error').fadeOut();
                }, 4000);
            } else {

                // login user from database
                $.ajax({
                    url: "login-data.php",
                    type: "post",
                    data: {
                        username: login_user,
                        password: login_pass
                    },
                    success: function(data) {
                        if (data == 1) {

                            $('#loginform_data').trigger('reset');
                            $('#login').dialog('close');
                            let success = "You have logged in successfully.";
                            $('.success_message').html(success).fadeIn();
                            $('.error_message').fadeOut();
                            setTimeout(() => {
                                $('.success_message').fadeOut('slow');
                            }, 4000);
                            // location.href= 'subject.php';

                        } else {
                            let error = "logged in not successfully.";
                            $('.error_message').html(error).fadeIn();
                            $('.success_message').fadeOut();
                            setTimeout(() => {
                                $('.error_message').fadeOut('slow');
                            }, 4000);
                        }
                    }
                })
            }
        })
    })
    </script>


</body>

</html>