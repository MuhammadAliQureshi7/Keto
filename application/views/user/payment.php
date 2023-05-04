<div class="banner banner-2">
    <div class="overlay">
        <div class="container">
            <div class="row">
               <div class="col-xl-12">
                    <h2>Payment Method</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse ab voluptates voluptas est voluptate hic fugit explicabo, minima tenetur, nesciunt provident facere, reiciendis beatae expedita voluptatibus autem repudiandae? Ipsam, placeat?</p>
               </div>
            </div>
        </div>
    </div>
</div>
<?php foreach($package as $pack):?>
<div class="payment">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6"></div>
            <div class="col-xl-6 col-lg-6">
                <div class="panel">
                    <div class="head">
                        <h3>Cart Details</h3>
                    </div>
                    <div class="body">
                        <div class="bottom">                            
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">                                    
                                    <h4><?php echo $pack->title; ?></h4>
                                    <p><?php echo $pack->days; ?> days</p>
                                    <p><?php echo $pack->description; ?></p>
                                    <ul>
                                        
                                    <?php  $meal = json_decode($pack->meals); foreach($meal as $m):?>
                                        <li><?php echo $m; ?></li>
                                    <?php endforeach;?>
                                    </ul>
                                    
                                </div>
                                <div class="col-xl-8 col-lg-8"></div>
                                <div class="col-xl-4 col-lg-4">   
                                    <label for="">Cart Total:</label>                                 
                                    <h6>SAR <?php echo $pack->price; ?></h6>
                                </div>                                
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                
                <div class="panel">
                    <div class="head">
                        <h3>Payment Method</h3>
                    </div>
                    <div class="body">
                        <form action="<?php echo base_url('user/payment/'.$id); ?>" method="post">
                            <div class="top">
                                <div class="input">
                                    Credit Card Payment
                                    <input type="radio" name="payment_method" checked>
                                    <span class="checkmark"></span>
                                </div>
                                <img src="<?php echo base_url('assets/images/payment-method.png'); ?>" alt="">
                            </div>
                            <div class="bottom">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <label for="">Card Number <span>*</span></label>
                                        <input class="form-control" type="number" min="0" value="<?php echo set_value('card_number');?>" name="card_number" placeholder="1234567890123456">
                                        <?php echo form_error('card_number') ?>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <label for="">Name on Card <span>*</span></label>
                                        <input type="text" class="form-control" name="name" value="<?php echo set_value('name');?>" placeholder="Enter Name on Card">
                                        <?php echo form_error('name') ?>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <label for="">Expiry Date <span>*</span></label>
                                        <input type="text" class="form-control" value="<?php echo set_value('expiry');?>" name="expiry" placeholder="00/00">
                                        <?php echo form_error('expiry') ?>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <label for="">CVV <span>*</span></label>
                                        <input type="number" class="form-control" value="<?php echo set_value('cvv');?>" min="0" name="cvv" placeholder="000">
                                        <?php echo form_error('cvv') ?>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <button class="btn btn-success" type="submit">Pay Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>