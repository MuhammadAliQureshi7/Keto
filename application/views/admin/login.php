<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $title;?></title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/admin-login.css');?>" type="text/css" media="all" />

</head>

<body>
    <div class="signinform">
        <h1>Admin Login</h1>
        <!-- container -->
        <div class="container">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h2>Login</h2>
                    <?php if($msg = $this->session->flashdata('msg')):
                            $msg_class = $this->session->flashdata('msg_class');?> 
                        <div class="alert <?php echo $msg_class;?>">
                            <?php echo $msg;?>
                        </div>
                    <?php endif;?>
                    <form action="<?php echo base_url('adminlogin/index');?>" method="post">
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="email" name="email" placeholder="Email" value="<?php echo set_value('email');?>" required="">
                            <?php echo form_error('email') ?>
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-key" aria-hidden="true"></i></span>
                            <input type="Password" name="password" value="<?php echo set_value('password');?>" placeholder="Password" required="">
                            <?php echo form_error('password') ?>
                        </div>
                        <!-- <div class="form-row bottom">
                            <div class="form-check">
                                <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                <label for="remenber"> Remember me?</label>
                            </div>
                            <a href="#url" class="forgot">Forgot password?</a>
                        </div> -->
                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                    </form>
                    <!-- <p class="continue"><span>or Login with</span></p>
                    <div class="social-login">
                        <a href="#facebook">
                            <div class="facebook">
                                <span class="fab fa-facebook-f" aria-hidden="true"></span>

                            </div>
                        </a>
                        <a href="#twitter">
                            <div class="twitter">
                                <span class="fab fa-twitter" aria-hidden="true"></span>
                            </div>
                        </a>
                        <a href="#google">
                            <div class="google">
                                <span class="fab fa-google" aria-hidden="true"></span>
                            </div>
                        </a>
                    </div>   -->                 
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <div class="footer">
            <p>&copy; <?php echo date("Y");?> Nutrition & Keto. All Rights Reserved | Design by <a href="https://rholab.net/"
                    target="blank">Rholab</a></p>
        </div>
        <!-- footer -->
    </div>

    <!-- fontawesome v5-->
    <script src="<?php echo base_url('assets/js/fontawesome.js');?>"></script>

</body>

</html>