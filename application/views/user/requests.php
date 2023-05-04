<div class="banner banner-2">
    <div class="overlay">
        <div class="container">
            <div class="row">
               <div class="col-xl-12">
                    <h2>Requests</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse ab voluptates voluptas est voluptate hic fugit explicabo, minima tenetur, nesciunt provident facere, reiciendis beatae expedita voluptatibus autem repudiandae? Ipsam, placeat?</p>
               </div>
            </div>
        </div>
    </div>
</div>
<div class="request">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">               
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Age</th>
                            <th>Height</th>
                            <th>Weight</th>                            
                            <th>Budget</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($requests)):?>
                            <?php foreach($requests as $request):?>
                                <tr>
                                    <td><?php echo $request->created;?></td>
                                    <td><?php echo $request->age;?></td>
                                    <td><?php echo $request->height;?></td>
                                    <td><?php echo $request->weight;?></td>
                                    <td><?php echo $request->budget;?></td>
                                    <td>
                                        <a href="<?php echo base_url('user/view_details/'.$request->id); ?>" class="btn btn-info">View</a>
                                        <a data-id="<?php echo $request->id; ?>" data-toggle="modal" class="btn btn-success rate">Rate this plan</a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        <?php else:?>
                            <tr>
                                <td colspan="5">No Data Available</td>
                            </tr>
                        <?php endif;?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- The Modal -->
<div class="modal fade" id="ratemodal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <input type="text" name="" class="query">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>