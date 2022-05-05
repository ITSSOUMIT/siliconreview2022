<?php
    include('config.php');
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <?php include('const/stylesheet.php'); ?>

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="login" class="h1"><b>Silicon</b> Review Portal</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form>
                    <input type="hidden" name="intent" value="_login">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username (SIC)" id="_username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password (Phone Number in ERP)" id="_password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block" id="submitBtn">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <?php include('const/js.php'); ?>

    <script>
        $(document).ready(function() {
            $('#submitBtn').click(function(e) {
                e.preventDefault();
                var username = document.getElementById('_username').value;
                var password = document.getElementById('_password').value;

                if(username == '' || password == '') {
                    toastr.error('Please fill all the fields.');
                    return;
                }else{
                    $.ajax({
                        url: 'ajax/login',
                        type: 'POST',
                        data: {
                            username: username,
                            password: password
                        },
                        success: function(response) {
                            if(response == 'success') {
                                toastr.success('Login Successful. Redirecting to your dashboard');

                                setTimeout(function(){
                                    window.location.href = 'dashboard';
                                }, 1000);                                
                            }else{
                                toastr.error(response);
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
