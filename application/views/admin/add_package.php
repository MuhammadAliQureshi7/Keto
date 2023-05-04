
 
<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">

        <!-- breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Package</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->
        <!-- forms -->
        <section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Add Package <span></span></h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('admin/add_package');?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php if($msg = $this->session->flashdata('msg')):
                                        $msg_class = $this->session->flashdata('msg_class');?> 
                                    <div class="alert <?php echo $msg_class;?>">
                                        <?php echo $msg;?>
                                    </div>
                                <?php endif;?>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="input__label">Title</label>
                                    <input type="text" name="title" class="form-control input-style" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo set_value('title');?>" placeholder="Enter Title">                                    
                                    <?php echo form_error('title') ?>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="input__label">Price</label>
                                    <input type="number" name="price" class="form-control input-style"  value="<?php echo set_value('price');?>" id="exampleInputPassword1" placeholder="Enter Price" min="0">                                        
                                    <?php echo form_error('price') ?>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="input__label">Days</label>
                                    <input type="number" name="days" class="form-control input-style"  value="<?php echo set_value('days');?>" id="exampleInputPassword1" placeholder="Enter Price" min="0">                                        
                                    <?php echo form_error('days') ?>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="input__label">Calories</label>
                                    <input type="number" name="calories" class="form-control input-style"  value="<?php echo set_value('calories');?>" id="exampleInputPassword1" placeholder="Enter Price" min="0">                                        
                                    <?php echo form_error('calories') ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="input__label">Meals</label>
                                    <div class="row">
                                        <div class="col-lg-6"><input type="checkbox" name="meals[]" value="Breakfast"> <small>Breakfast</small></div>                                     
                                        <div class="col-lg-6"><input type="checkbox" name="meals[]" value="Lunch"> <small>Lunch</small></div>                                     
                                        <div class="col-lg-6"><input type="checkbox" name="meals[]" value="Snacks"> <small>Snacks</small></div>                                     
                                        <div class="col-lg-6"><input type="checkbox" name="meals[]" value="Dinner"> <small>Dinner</small></div>                                     
                                    </div>
                                    <?php echo form_error('meals') ?>
                                </div>
                            </div>              
                            <div class="col-lg-2 col-md-2">
                                <div class="form-group">
                                    <input type="checkbox" name="is_special" value="1"> Is Highlighted                                         
                                </div>
                            </div>                            
                            <div class="col-lg-6 col-md-6">
                                <div class="for-group">
                                <label for="exampleInputPassword1" class="input__label">Description</label>
                                <textarea name="description"  id="" class="form-control" cols="30" rows="10"><?php echo set_value('body');?></textarea>
                                <?php echo form_error('description') ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-style mt-4">Submit</button>
                    </form>
                </div>
            </div>
            <!-- //forms 1 -->

            <!-- forms 2 
            <div class="card card_border py-2 mb-4">
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">Email</label>
                                <input type="email" class="form-control input-style" id="inputEmail4"
                                    placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">Password</label>
                                <input type="password" class="form-control input-style" id="inputPassword4"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="input__label">Address</label>
                            <input type="text" class="form-control input-style" id="inputAddress"
                                placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2" class="input__label">Address 2</label>
                            <input type="text" class="form-control input-style" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity" class="input__label">City</label>
                                <input type="text" class="form-control input-style" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState" class="input__label">State</label>
                                <select id="inputState" class="form-control input-style">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip" class="input__label">Zip</label>
                                <input type="text" class="form-control input-style" id="inputZip">
                            </div>
                        </div>
                        <div class="form-check check-remember check-me-out">
                            <input class="form-check-input checkbox" type="checkbox" id="gridCheck">
                            <label class="form-check-label checkmark" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-style mt-4">Sign in</button>
                    </form>
                </div>
            </div>
             //forms 2 -->

            <!-- horizontal forms-->
            <!-- forms 3 
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Horizontal Forms <span></span></h3>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label input__label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control input-style" id="inputEmail3"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label input__label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control input-style" id="inputPassword3"
                                    placeholder="Password">
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0 input__label">Radios</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                            value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            First radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                            value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Second radio
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                            value="option3" disabled>
                                        <label class="form-check-label" for="gridRadios3">
                                            Third disabled radio
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <div class="col-sm-2">Checkbox</div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Example checkbox
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary btn-style">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            //forms 3 -->
            <!-- //horizontal forms-->

            <!-- supported elements -->
            <!-- 
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Suppported elements <span></span></h3>
                </div>
                <div class="card-body">
                    <form class="was-validated">
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                            <label class="custom-control-label" for="customControlValidation1">Check this custom
                                checkbox</label>
                            <div class="invalid-feedback">Example invalid feedback text</div>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customControlValidation2"
                                name="radio-stacked" required>
                            <label class="custom-control-label" for="customControlValidation2">Toggle this custom
                                radio</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" class="custom-control-input" id="customControlValidation3"
                                name="radio-stacked" required>
                            <label class="custom-control-label" for="customControlValidation3">Or toggle this other
                                custom radio</label>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>

                        <div class="form-group">
                            <select class="custom-select input-style" required>
                                <option value="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="invalid-feedback">Example invalid custom select feedback</div>
                        </div>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </form>
                </div>
            </div>
            // -->
            <!-- supported elements -->

        </section>
        <!-- //forms -->
        </section>
        <!-- //forms  -->

    </div>
    <!-- //content -->

</div>
