<div class="banner banner-2">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2>Login to get maximum offers</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, consectetur. Ullam incidunt similique aliquam placeat maxime explicabo. Illo, voluptatem, fugiat magnam quidem officiis, alias quod est debitis magni odit soluta?</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="register login">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4"></div>
            <div class="col-xl-4 col-lg-4">
                <?php if($msg = $this->session->flashdata('msg')):
                        $msg_class = $this->session->flashdata('msg_class');?> 
                    <div class="alert <?php echo $msg_class;?>">
                        <?php echo $msg;?>
                    </div>
                <?php endif;?>                  
                <form action="<?php echo base_url('login'); ?>" method="post">

                    <div class="row">
                        <div class="col-xl-12"><h3>Login</h3></div>
                        
                        <div class="col-xl-12 col-lg-12">
                            <label>Email <span>*</span></label>
                            <input type="email" class="form-control" value="<?php echo set_value('email');?>" name="email" id="">
                            <?php echo form_error('email') ?>
                        </div>                                
                        <div class="col-xl-12 col-lg-12">
                            <label>Password <span>*</span></label>
                            <input type="password" class="form-control" value="<?php echo set_value('password');?>" name="password" id="">
                            <?php echo form_error('password') ?>
                        </div>
                        <div class="col-xl-6 col-lg-6"></div>
                        <div class="col-xl-6 col-lg-6">
                            <button type="submit" class="btn btn-success pull-right">Login</button>
                        </div>
                    </div>
                </form>
                <div class="que"><span>Don't have an account?</span> <a href="<?php echo base_url('login/register'); ?>">Register</a></div>
            </div>
        </div>
    </div>
</div>
   