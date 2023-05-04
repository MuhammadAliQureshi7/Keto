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
                    <h2>Rate Your Plan</h2>
                    <form action="<?php echo base_url('user/rate/'.$id); ?>" method="post">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Image <span>*</span></label>
                                <input type="text" name="full_name" class="form-control" min="1" value="<?php echo $user_details[0]->full_name;?>" placeholder="Enter your Age">                        
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Email <span>*</span></label>
                                <input type="text" name="email" class="form-control" min="1" value="<?php echo $user_details[0]->email;?>" placeholder="Enter your Age">                        
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Age <span>*</span></label>
                                <input type="number" name="age" class="form-control" min="1" placeholder="Enter your Age">                        
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Gender <span>*</span></label>
                                <select name="gender" class="form-control">
                                    <option value="">Select a Gender</option>
                                    <option <?php if($user_details[0]->gender == "Male"){ echo "selected"; };?>>Male</option>
                                    <option <?php if($user_details[0]->gender == "Female"){ echo "selected"; };?>>Female</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Height <span>*</span></label>
                                <input type="number" name="height" class="form-control" min="1" placeholder="Enter your Height in Inches">
                                
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Weight <span>*</span></label>
                                <input type="number" name="weight" class="form-control" min="1" placeholder="Enter your Weight in KGs">                                
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Physical Activity Level <span>*</span></label>
                                <select name="activity_level" class="form-control">
                                    <option value="">Select a Physical Activity Level</option>
                                    <option>Poor</option>
                                    <option>Average</option>
                                    <option>Excellent</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Health Status <span>*</span></label>
                                <select name="health_status" class="form-control">
                                    <option value="">Select a Physical Activity Level</option>
                                    <option>Poor</option>
                                    <option>Average</option>
                                    <option>Excellent</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label for="">Food Preferences <span>*</span></label>
                                <select name="food_preferences" class="form-control">
                                    <option value="">Select Food Preferences</option>
                                    <option>Vegetarian</option>
                                    <option>Non-Vegetarian</option>
                                    <option>Both</option>
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