<div class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 no-padding">
                <div class="owl-carousel owl-theme" id="banner">
                    <div class="item">
                        <div class="img-box"><img src="<?php echo base_url('assets/images/1.jpg') ?>" alt=""></div>
                        <div class="text-wrap">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2"></div>
                                <div class="col-xl-8 col-lg-8">
                                    <h4>Transform your body with the power of the keto diet</h4>
                                    <h1>Get customized meal plans and expert guidance to achieve your health and fitness goals.</h1>
                                    <a href="#packages">Packages</a>
                                </div>
                                <div class="col-xl-2 col-lg-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box"><img src="<?php echo base_url('assets/images/2.jpg') ?>" alt=""></div>
                        <div class="text-wrap">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2"></div>
                                <div class="col-xl-8 col-lg-8">
                                    <h4>Discover the benefits of ketosis and maximize your weight loss potential</h4>
                                    <h1>Start your journey today with our tailored diet plans and effective exercise routines. </h1>
                                    <a href="#packages">Pacakges</a>
                                </div>
                                <div class="col-xl-2 col-lg-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box"><img src="<?php echo base_url('assets/images/3.jpg') ?>" alt=""></div>
                        <div class="text-wrap">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2"></div>
                                <div class="col-xl-8 col-lg-8">
                                    <h4>Join our community of keto enthusiasts and let's achieve your dream body together!</h4>
                                    <h1>Our website offers customized diet plans and exercise routines specifically designed for those following a keto lifestyle</h1>
                                    <a href="#packages">Packages</a>
                                </div>
                                <div class="col-xl-2 col-lg-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 no-padding">
                <div class="panel gold">
                    <i class="fa-solid fa-scale-balanced"></i>
                    <h2>Ration Nutrition</h2>                    
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 no-padding">
                <div class="panel orange">
                    <i class="fa-solid fa-dumbbell"></i>
                    <h2>Fit Body Form</h2>                    
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 no-padding">
                <div class="panel green">
                    <i class="fa-solid fa-weight-scale"></i>
                    <h2>Excess Weight</h2>                    
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 no-padding">
                <div class="panel blue">
                    <i class="fa-solid fa-pills"></i>
                    <h2>Vitamins</h2>                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="steps">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <h5>WAYS TO GET FIT</h5>
                <h2>Steps to Your Perfect Body</h2>
                <img src="<?php echo base_url('assets/images/img1.png');?>" alt="">
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="panel">
                    <h3>01.</h3>
                    <img src="<?php echo base_url('assets/images/keto_diet.jpg');?>" alt="">
                    <h4>Keto Diet</h4>
                    <p>The ketogenic diet, also known as the keto diet, is a low-carb, high-fat diet that has gained popularity in recent years due to its potential health benefits.</p>
                    <a href="#keto" data-toggle="modal">Learn More</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="panel">
                    <h3>02.</h3>
                    <img src="<?php echo base_url('assets/images/fasting.jpg');?>" alt="">
                    <h4>Fasting</h4>
                    <p>Fasting diets have become increasingly popular in recent years as a way to promote weight loss and improve overall health.</p>
                    <a href="#fasting" data-toggle="modal">Learn More</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="panel">
                    <h3>03.</h3>
                    <img src="<?php echo base_url('assets/images/calorie_deficit.jpg');?>" alt="">
                    <h4>Calorie Deficit Diet</h4>
                    <p>A calorie deficit diet is a type of diet in which you consume fewer calories than your body needs to maintain its current weight. </p>
                    <a href="#calorie" data-toggle="modal">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="packages" id="packages">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="text-wrap">
                        <h5>OUR PLANS</h5>
                        <h2>Customized Nutritional Plans</h2>
                        <img src="<?php echo base_url('assets/images/img1.png')?>" alt="">                        
                    </div>                           
                </div>
                <div class="col-xl-1 col-lg-1"></div>
                <div class="col-xl-10 col-lg-10">
                    <div class="owl-carousel owl-theme" id="pack">
                        <?php foreach($packages as $pack):?>
                            <?php if($pack->is_special == 1):?>
                                <div class="item">
                                    <div class="panel premium">
                                    <div class="top <?php echo $pack->class; ?>">
                                            <h4><?php echo $pack->title; ?></h4>
                                            <h2>SAR <?php echo $pack->price; ?></h2>
                                            <p><?php echo $pack->description; ?></p>
                                        </div>
                                        <ul>
                                            
                                            <li><?php echo $pack->days." days"; ?></li>
                                            <li><?php echo $pack->calories." Calories"; ?></li>                                            
                                            <?php $meal = json_decode($pack->meals); foreach($meal as $meal):?>                                           
                                            <li><?php echo $meal;?></li>
                                            <?php endforeach;?>                                            
                                        </ul>
                                        <a href="<?php echo base_url('home/query_form/'.$pack->id);?>">Generate</a>
                                    </div>
                                </div>
                            <?php else:?>
                                <div class="item">
                                    <div class="panel">
                                        <div class="top <?php echo $pack->class; ?>">
                                            <div class="overlay">
                                                <h4><?php echo $pack->title; ?></h4>
                                                <h2>SAR <?php echo $pack->price; ?></h2>
                                                <p><?php echo $pack->description; ?></p>
                                            </div>
                                        </div>
                                        <ul>
                                            
                                            <li><?php echo $pack->days." days"; ?></li>
                                            <li><?php echo $pack->calories." Calories"; ?></li> 
                                            <?php $meal = json_decode($pack->meals); foreach($meal as $meal):?>                                           
                                            <li><?php echo $meal;?></li>
                                            <?php endforeach;?>                                            
                                        </ul>
                                        <a href="<?php echo base_url('home/query_form/'.$pack->id);?>">Generate</a>
                                    </div>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>                                                
                    </div>
                </div>
               <!--  <div class="col-xl-3 col-lg-3">
                    
                </div>
                <div class="col-xl-3 col-lg-3">
                    
                </div> -->
                
            </div>
        </div>
    </div>
</div>
<div class="timeline" id="steps">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="text-wrap">
                    <h5>STEPS TO GET FIT</h5>
                    <h2>How it works</h2>
                    <img src="<?php echo base_url('assets/images/img1.png');?>" alt="">
                </div>
            </div>
        </div>
		<div class="timeline-row">
			<div class="timeline-time">
				<h3>1st Step</h3>
			</div>
			<div class="timeline-content">
                <i class="fa-solid fa-layer-group"></i>
				<h4>Select a Package</h4>
				<p>The first step is to select a package according to your need.</p>
				
			</div>
		</div>
        <div class="timeline-row">
			<div class="timeline-time">
                <h3>2nd Step</h3>
			</div>
			<div class="timeline-content">
                <i class="fa-solid fa-pen-to-square"></i>
				<h4>Fill Query Form</h4>
				<p>The next step is to fill out a query form that will help the platform understand your specific requirements and preferences. You will need to provide information about your age, gender, weight, height, activity level, dietary restrictions, and goals.</p>			
			</div>
		</div>
		<div class="timeline-row">
			<div class="timeline-time">
                <h3>3rd Step</h3>
			</div>
			<div class="timeline-content">
                <i class="fa-solid fa-right-to-bracket"></i>
				<h4>Login or Register</h4>
				<p>
                Once you have registered, you can log in to your account with your email address and password. This will give you access to the diet plans and other related resources on the platform.
				</p>
				
			</div>
		</div>

		

		<div class="timeline-row">
			<div class="timeline-time">
                <h3>4th Step</h3>
			</div>
			<div class="timeline-content">
                <i class="fa-solid fa-credit-card"></i>
				<h4>Pay via Payment Method</h4>
				<p>After filling out the query form, you will need to select a payment method to pay for the diet plan. Most platforms offer various payment options, such as credit/debit cards, PayPal, or bank transfers.</p>				
			</div>
		</div>

		<div class="timeline-row">
			<div class="timeline-time">
                <h3>5th Step</h3>
			</div>
			<div class="timeline-content">
                <i class="fa-solid fa-envelope"></i>
				<h4>Get Response through Email</h4>
				<p class="no-margin">Once your payment has been processed, you will receive an email from the platform confirming your order and providing you with the details of your selected diet plan.</p>				
			</div>
		</div>

		<div class="timeline-row">
			<div class="timeline-time">
                <h3>6th Step</h3>
			</div>
			<div class="timeline-content">
                <i class="fa-solid fa-file-pdf"></i>
				<h4>Download the PDF</h4>
				<p>
                The last step is to download the PDF of the diet plan. You can access the PDF through the link provided in the confirmation email. The PDF will contain all the details of your customized diet plan, including meal plans, recipes, and nutrition information.
				</p>
				
			</div>
		</div>		

	</div>
</div>
<!-- <div class="schedule">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="text-wrap">
                    <h5>HEALTHY LIVING EVENTS</h5>
                    <h2>Health Seminar Schedule</h2>
                    <img src="<?php echo base_url('assets/images/img1.png')?>" alt="">
                </div>
                
                <div class="tabs">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#day1">Day 1</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#day2">Day 2</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#day3">Day 3</a>
                        </li>
                    </ul>
                    
                   
                    <div class="tab-content">
                        <div class="tab-pane container active" id="day1">
                            <div class="child-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#hallA">MAIN HALL A</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#hallB">MAIN HALL B</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#hallVIP">VIP HALL</a>
                                    </li>
                                </ul>
                                
                                
                                <div class="tab-content">
                                    <div class="tab-pane container active" id="hallA">
                                        <ul>
                                            <li>
                                                <h6>9:30 AM - 11:30 AM</h6>
                                                <h3>Welcome & Registration</h3>
                                                <div class="toggle">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repellendus blanditiis fugiat, labore asperiores, quidem mollitia quae aut, accusantium quisquam eaque sequi perspiciatis facilis. Ducimus repellendus sequi quia illo corporis!</p>
                                                    <span><strong>Sophie Brown</strong> / Founder</span>
                                                </div>
                                            </li>
                                            <li>
                                                <h6>9:30 AM - 11:30 AM</h6>
                                                <h3>Welcome & Registration</h3>
                                                <div class="toggle">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repellendus blanditiis fugiat, labore asperiores, quidem mollitia quae aut, accusantium quisquam eaque sequi perspiciatis facilis. Ducimus repellendus sequi quia illo corporis!</p>
                                                    <span><strong>Sophie Brown</strong> / Founder</span>
                                                </div>
                                            </li>
                                            <li>
                                                <h6>9:30 AM - 11:30 AM</h6>
                                                <h3>Welcome & Registration</h3>
                                                <div class="toggle">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repellendus blanditiis fugiat, labore asperiores, quidem mollitia quae aut, accusantium quisquam eaque sequi perspiciatis facilis. Ducimus repellendus sequi quia illo corporis!</p>
                                                    <span><strong>Sophie Brown</strong> / Founder</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane container fade" id="hallB">...</div>
                                    <div class="tab-pane container fade" id="hallVIP">...</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="day2">...</div>
                        <div class="tab-pane container fade" id="day3">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="stories" id="reviews">
    <div class="top">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <h4>CUSTOMER REVIEWS</h4>
                        <h2>Success Stories</h2>
                        <img src="<?php echo base_url('assets/images/img2.png')?>" alt="">
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="owl-carousel owl-theme" id="stories">
                            <div class="item">
                                <div class="text-wrap">
                                    <p>I had struggled with my weight for most of my adult life and had tried numerous diets and weight loss programs with little success. But when I stumbled upon an online weight loss app, I decided to give it a try, and it turned out to be the best decision I ever made.</p>
                                    <h3>User123</h3>
                                </div>
                                <div class="img-box">
                                    <img src="<?php echo base_url('assets/images/stories/1.jpeg'); ?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="text-wrap">
                                    <p>I had struggled with my weight for most of my adult life and had tried numerous diets and weight loss programs with little success. But when I stumbled upon an online weight loss app, I decided to give it a try, and it turned out to be the best decision I ever made.</p>
                                    <h3>User123</h3>
                                </div>
                                <div class="img-box">
                                    <img src="<?php echo base_url('assets/images/stories/2.jpeg'); ?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="text-wrap">
                                    <p>I had struggled with my weight for most of my adult life and had tried numerous diets and weight loss programs with little success. But when I stumbled upon an online weight loss app, I decided to give it a try, and it turned out to be the best decision I ever made.</p>
                                    <h3>User123</h3>
                                </div>
                                <div class="img-box">
                                    <img src="<?php echo base_url('assets/images/stories/3.jpeg'); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(!empty($blogs)):?>
<div class="blogs">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="text-box">
                    <h5>BE FIRST TO READ</h5>
                    <h2>Latest News & Trends</h2>
                    <img src="<?php echo base_url('assets/images/img1.png');?>" alt="">
                </div>
                <div class="owl-carousel owl-theme" id="blogs">
                    <?php foreach($blogs as $blog): ?>
                    <div class="item">
                        <div class="img-box">
                            <img src="<?php echo base_url($blog->image); ?>" alt="<?php echo $blog->title;?>">
                        </div>
                        <div class="text-wrap">
                            <h6><?php echo $blog->date; ?></h6>
                            <h3><?php echo $blog->title; ?></h3>
                            <p><?php echo $blog->summary; ?></p>
                            <a href="<?php echo base_url('home/viewblog/'.$blog->slug) ?>">Read More</a>
                        </div>
                    </div>
                    <?php endforeach;?>                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>

<!-- The keto Modal -->
<div class="modal fade plans" id="keto">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="overlay">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Keto Diet</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <p>The ketogenic diet, also known as the keto diet, is a low-carb, high-fat diet that has gained popularity in recent years due to its potential health benefits. The diet involves drastically reducing carbohydrate intake and replacing it with healthy fats and moderate amounts of protein.</p>
            <p>The main principle behind the keto diet is to force the body into a state of ketosis, where it burns fat for energy instead of carbohydrates. This is achieved by reducing carbohydrate intake to less than 50 grams per day, which puts the body in a state of ketosis within a few days.</p>
            <p>Some of the potential benefits of the keto diet include weight loss, improved blood sugar control, reduced inflammation, and improved heart health. However, it is important to note that the diet is not suitable for everyone and may have potential side effects, such as the "keto flu" and an increased risk of kidney stones.</p>
            <p>To follow the keto diet, it is important to consume foods that are high in healthy fats, such as avocados, nuts, seeds, and olive oil, while avoiding high-carbohydrate foods like bread, pasta, and sugary drinks. It is also important to consume moderate amounts of protein, as excessive protein intake can interfere with ketosis.</p>
            <p>Overall, the keto diet can be a beneficial dietary approach for some individuals, but it is important to consult with a healthcare professional before starting any new diet or making significant dietary changes.</p>
        </div>
      </div>
      

    </div>
  </div>
</div>
<!-- End keto Modal -->
<!-- The Fasting Modal -->
<div class="modal fade plans" id="fasting">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="overlay">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Fasting Diet</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <p>Fasting diets have become increasingly popular in recent years as a way to promote weight loss and improve overall health. Fasting involves abstaining from food and, in some cases, liquids for a specific period of time.</p>
            <p>There are several types of fasting diets, including intermittent fasting, alternate-day fasting, and prolonged fasting. Intermittent fasting involves restricting food intake for certain periods of time, such as only eating during an 8-hour window each day. Alternate-day fasting involves eating normally one day and then severely restricting calories the next. Prolonged fasting typically involves abstaining from food for several days.</p>
            <p>Fasting has been shown to have several health benefits, including improved insulin sensitivity, reduced inflammation, and increased autophagy, which is the body's natural process of breaking down and removing old or damaged cells.</p>
            <p>In addition to the health benefits, fasting can also be an effective way to lose weight. By reducing calorie intake, the body is forced to use stored fat for energy, leading to weight loss over time.</p>
            <p>However, it's important to approach fasting diets with caution and consult with a healthcare professional before beginning any new diet or exercise program. Fasting can be challenging and may not be appropriate for everyone, especially those with certain medical conditions.</p>
            <p>Overall, fasting diets can be an effective way to improve health and promote weight loss when done safely and under the guidance of a healthcare professional.</p>
        </div>
      </div>
      

    </div>
  </div>
</div>
<!-- End Fasting Modal -->
<!-- The Calorie Deficit Modal -->
<div class="modal fade plans" id="calorie">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="overlay">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Calorie Deficit Diet</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <p>A calorie deficit diet is a type of diet in which you consume fewer calories than your body needs to maintain its current weight. The idea behind this diet is to create a calorie deficit, which can lead to weight loss over time.</p>
            <p>Here are some basics to keep in mind when following a calorie deficit diet:</p>
            <ol>
                <li>Determine your daily calorie needs: The first step is to determine how many calories your body needs to maintain its current weight. This can be done by using a calorie calculator or consulting a nutritionist.</li>
                <li>Create a calorie deficit: Once you know your daily calorie needs, you can create a calorie deficit by consuming fewer calories than your body needs. A safe and effective calorie deficit is typically around 500 to 1000 calories per day.</li>
                <li>Choose nutrient-dense foods: To ensure that you are still getting all the necessary nutrients while on a calorie deficit diet, it's important to choose nutrient-dense foods such as fruits, vegetables, whole grains, lean proteins, and healthy fats.</li>
                <li>Track your calorie intake: To make sure you are staying within your calorie deficit, it's important to track your calorie intake. This can be done using a food diary or an app that tracks calories.</li>
                <li>Be patient and consistent: Weight loss can take time, so it's important to be patient and consistent with your calorie deficit diet. Stick to your calorie goals, and remember that small changes over time can lead to big results.</li>
            </ol>
            <p>It's also important to consult with a healthcare professional before starting any new diet or exercise regimen, especially if you have any pre-existing medical conditions.</p>
        </div>
      </div>
      

    </div>
  </div>
</div>
<!-- End Calorie Deficit Modal -->