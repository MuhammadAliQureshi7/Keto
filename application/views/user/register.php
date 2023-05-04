<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>
<body>
    <?php include('header.php'); ?>
    <div class="section">
        <div class="banner banner-2">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <h2>Register Yourself to get maximum offers</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, consectetur. Ullam incidunt similique aliquam placeat maxime explicabo. Illo, voluptatem, fugiat magnam quidem officiis, alias quod est debitis magni odit soluta?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="register">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2"></div>
                    <div class="col-xl-8 col-lg-8">
                        <?php if($msg = $this->session->flashdata('msg')):
                                $msg_class = $this->session->flashdata('msg_class');?> 
                            <div class="alert <?php echo $msg_class;?>">
                                <?php echo $msg;?>
                            </div>
                        <?php endif;?>                  
                        <form action="<?php echo base_url('login/register'); ?>" method="post">

                            <div class="row">
                                <div class="col-xl-12"><h3>Register</h3></div>
                                <div class="col-xl-6 col-lg-6">
                                    <label>Full Name <span>*</span></label>
                                    <input type="text" class="form-control" name="full_name" value="<?php echo set_value('full_name')?>" id="">
                                    <?php echo form_error('full_name') ?>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label>Email <span>*</span></label>
                                    <input type="email" class="form-control" value="<?php echo set_value('email');?>" name="email" id="">
                                    <?php echo form_error('email') ?>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label>Phone:</label>
                                    <input type="text" class="form-control" value="<?php echo set_value('phone');?>" name="phone" id="">
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label>Gender <span>*</span></label>
                                    <select name="gender" class="form-control">
                                        <option value="">Select your gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                    <?php echo form_error('gender') ?>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label>Age</label>
                                    <input type="number" min="1" class="form-control" value="<?php echo set_value('age');?>" name="age" id="">
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label>Password <span>*</span></label>
                                    <input type="password" class="form-control" value="<?php echo set_value('password');?>" name="password" id="">
                                    <?php echo form_error('password') ?>
                                </div>
                                <div class="col-xl-6 col-lg-6"></div>
                                <div class="col-xl-6 col-lg-6">
                                    <button type="submit" class="btn btn-success pull-right">Register</button>
                                </div>
                            </div>
                        </form>
                        <div class="que"><span>Already have an account?</span> <a href="<?php echo base_url('login') ?>">Login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>