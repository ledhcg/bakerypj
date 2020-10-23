<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>LOGIN Dashboard</title>
    <link rel="stylesheet" href="public/admin/assets/css/bootstrap.css">
    
    <link rel="shortcut icon" href="public/admin/assets/logo/AmBakery.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/admin/assets/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,500;1,600&display=swap" rel="stylesheet">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="{{('public/admin/assets/logo/AmBakery.svg')}}" height="150" class='mb-4'>
                        <h3>Sign In</h3>
                        <p>Please log in to continue to ADMIN DASHBOARD</p>
                    </div>
                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo $message;
                            Session::put('message', null);
                        }
                    ?>
                    <form action="{{URL::to('/admin_dashboard')}}" method="post">
                    {{csrf_field()}}
                        <div class="form-group position-relative has-icon-left">
                            <label for="email">Email</label>
                            <div class="position-relative"> 
                                <input type="text" class="form-control" name="admin_email" id="email" require="">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                                <a href="auth-forgot-password.html" class='float-right'>
                                    <small>Forgot password?</small>
                                </a>
                            </div>
                            <div class="position-relative">
                                <input type="password" class="form-control" name="admin_password" id="password" require="">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class='form-check clearfix my-4'>
                            <div class="checkbox float-left">
                                <input type="checkbox" id="checkbox1" class='form-check-input' >
                                <label for="checkbox1">Remember me</label>
                            </div>
                            <div class="float-right">
                                <a href="auth-register.html">Don't have an account?</a>
                            </div>
                        </div>
                        
                        <div class="clearfix">
                            <button type="submit" class="btn btn-primary float-right" name="login">Login</button>
                        </div>
                    </form>
                    <div class="divider">
                        <div class="divider-text">OR</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i> Facebook</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i> Github</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="public/admin/assets/js/feather-icons/feather.min.js"></script>
    <script src="public/admin/assets/js/app.js"></script>
    
    <script src="public/admin/assets/js/main.js"></script>
</body>

</html>
