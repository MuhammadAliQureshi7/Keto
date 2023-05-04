<!DOCTYPE html>
<html lang="en">
<head>    
</head>
<?php include 'head.php';?>
<body>    
    <div class="header">

        <div class="container">

            <div class="row">                

                <div class="col-xl-12 col-lg-12">

                    <nav class="navbar navbar-expand-md bg-dark navbar-dark">

                        <!-- Brand -->

                        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt=""></a>

                        

                        <!-- Toggler/collapsibe Button -->

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">

                            <span class="navbar-toggler-icon"></span>

                        </button>

                        

                        <!-- Navbar links -->

                        <div class="collapse navbar-collapse" id="collapsibleNavbar">

                            <ul class="navbar-nav">

                                <li class="nav-item">

                                    <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>

                                </li>
                                <li class="nav-item">

                                    <a class="nav-link" href="#packages">PACKAGES</a>

                                </li>
                                <li class="nav-item">

                                    <a class="nav-link" href="#steps">HOW IT WORKS</a>

                                </li>
                                <li class="nav-item">

                                    <a class="nav-link" href="#reviews">REVIEWS</a>

                                </li>
                                <li class="nav-item">

                                    <a class="nav-link" href="#refferals" data-toggle="modal">REFFERALS</a>

                                </li>
                                <li><div id="google_translate_element"></div></li>
                                <?php if(!empty($this->session->userdata('id'))):?>
                                <?php foreach($user_details as $user):?>
                                <li class="nav-item dropdown">

                                    <a class="nav-link dropdown-toggle reg" id="navbardrop" data-toggle="dropdown" href="#">
                                        <?php 
                                        if (strlen($user->full_name) > 10){
                                            $str = substr($user->full_name, 0, 10) . '...';

                                            echo $str;
                                        }
                                        else{
                                          echo $user->full_name;
                                        }
                                        ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <a href="<?php echo base_url('user/index'); ?>" class="dropdown-item">Requests</a>
                                        <a href="<?php echo base_url('user/account'); ?>" class="dropdown-item">Account details</a>
                                        <a href="<?php echo base_url('home/logout');?>" class="dropdown-item">Logout</a>
                                    </ul>

                                </li>
                                <?php endforeach;?>                                
                                <?php else:?>                                                                   
                                    <!-- <li class="nav-item">
                                        <a class="nav-link reg" href="<?php echo base_url('login/index/0');?>">Account</a>
                                    </li> -->
                                <?php endif;?>
                            </ul>                            
                        </div>

                    </nav>

                </div>

            </div>

        </div>

    </div>
    <div class="section">

