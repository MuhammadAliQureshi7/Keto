<?php foreach($query as $q):?>
    <div class="banner banner-2">
    <div class="overlay">
        <div class="container">
            <div class="row">
               <div class="col-xl-12">
                    <h2>Your Query</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse ab voluptates voluptas est voluptate hic fugit explicabo, minima tenetur, nesciunt provident facere, reiciendis beatae expedita voluptatibus autem repudiandae? Ipsam, placeat?</p>
               </div>
            </div>
        </div>
    </div>
</div>
<div class="details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="row">                                        
                    <div class="col-xl-12 col-lg-12">

                        <h3>User Details</h3>
                        <table>
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                            <?php foreach($user_details as $user):?>
                                <tr>
                                    <td><?php echo $user->full_name; ?></td>
                                    <td><?php echo $user->email; ?></td>
                                    <td><?php echo $user->phone; ?></td>
                                </tr>
                            <?php endforeach;?>
                        </table>
                        <h3>Request Information</h3>
                        <table>
                            <tr>
                                <th>Age</th>
                                <th>Height</th>
                                <th>Weight</th>
                                <th>Physical Activity Level</th>
                                <th>Health Status</th>
                                <th>Food Preferences</th>
                                <th>Cooking Skills</th>
                                <th>Budget</th>
                                <th>Download</th>
                            </tr>
                            <tr>
                                <td><?php echo $q->age; ?></td>
                                <td><?php echo $q->height. $q->height_unit; ?></td>
                                <td><?php echo $q->weight.$q->weight_unit; ?></td>
                                <td><?php echo $q->activity_level; ?></td>
                                <td><?php echo $q->health_status; ?></td>
                                <td><?php echo $q->food_preferences; ?></td>
                                <td><?php echo $q->cooking_skills; ?></td>
                                <td>SAR <?php echo $q->budget; ?></td>
                                <td><a href="<?php echo base_url('user/pdf/'.$q->id); ?>" class="btn btn-success">Download</a></td>
                            </tr>
                        </table>                      
                        <?php echo $q->response; ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>