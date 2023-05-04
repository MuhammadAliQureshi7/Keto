<!-- <div class="banner banner-2">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2>Add your Query</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, consectetur. Ullam incidunt similique aliquam placeat maxime explicabo. Illo, voluptatem, fugiat magnam quidem officiis, alias quod est debitis magni odit soluta?</p>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="form">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2"></div>
                <div class="col-xl-8 col-lg-8">
                    <h2>Add your Query</h2>
                    <form action="<?php echo base_url('home/query_form/'.$this->uri->segment(3)); ?>" method="post">
                        <div class="row">                            
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Age <span>*</span></label>
                                <input type="number" name="age" class="form-control" min="1" placeholder="Enter your Age" value="<?php echo set_value('age');?>">   
                                <?php echo form_error('age') ?>                     
                            </div>                            
                            <div class="col-xl-6 col-lg-6">
                                
                                <div class="fields">
                                    <div class="field">
                                        <label for="">Height <span>*</span></label>
                                        <input type="number" name="height" class="form-control" min="1" placeholder="Enter your Height" value="<?php echo set_value('height');?>">
                                        <?php echo form_error('height') ?>  
                                    </div>
                                    <div class="field">
                                        <label for="">Height Unit <span>*</span></label>
                                        <select name="height_unit" class="form-control">
                                            <option value="">Select a Height Unit</option>
                                            <option>Inches</option>
                                            <option>Centimeters</option>
                                        </select>
                                        <?php echo form_error('height_unit') ?>  
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="fields">
                                    <div class="field">
                                        <label for="">Weight <span>*</span></label>
                                        <input type="number" name="weight" class="form-control" min="1" placeholder="Enter your Weight" value="<?php echo set_value('weight');?>">                                
                                        <?php echo form_error('weight') ?>  
                                    </div>
                                    <div class="field">
                                        <label for="">Weight Unit <span>*</span></label>
                                        <select name="weight_unit" class="form-control">
                                            <option value="">Select a Weight Unit</option>
                                            <option>kgs</option>
                                            <option>lbs</option>
                                        </select>
                                        <?php echo form_error('weight_unit') ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Physical Activity Level <span>*</span></label>
                                <select name="activity_level" class="form-control">
                                    <option value="">Select a Physical Activity Level</option>
                                    <option>Poor</option>
                                    <option>Average</option>
                                    <option>Excellent</option>
                                </select>
                                <?php echo form_error('activity_level') ?> 
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Health Status <span>*</span></label>
                                <select name="health_status" class="form-control">
                                    <option value="">Select a Health Status</option>
                                    <option>Poor</option>
                                    <option>Average</option>
                                    <option>Excellent</option>
                                </select>
                            </div>
                            
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Cooking Skills <span>*</span></label>
                                <select name="cooking_skills" class="form-control">
                                    <option value="">Select Cooking Skills</option>
                                    <option>Poor</option>
                                    <option>Average</option>
                                    <option>Excellent</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Budget <span>*</span></label>
                                <input type="number" name="budget" class="form-control" min="1" placeholder="Enter your Budget  ">
                            </div>    
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Food Preference <span>*</span></label>
                                <select name="food_preferences" class="form-control">
                                    <option value="">Select Food Preference</option>
                                    <option>Vegetarian</option>
                                    <option>Non-Vegetarian</option>
                                    <option>Both</option>
                                </select>
                            </div> 
                            <div class="col-xl-12 col-lg-12">
                                <label for="">Food Preference Details</label>
                                <textarea name="food_preference_details" class="form-control" cols="30" rows="10" placeholder="Enter your Food Preference Details "></textarea>
                                <?php echo form_error('food_preference_details') ?>
                            </div>                        
                            <div class="col-xl-12 col-lg-12">
                                <center><button type="submit" class="btn btn-success">Submit</button></center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>