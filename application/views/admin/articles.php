<div class="main-content">
    <div class="container-fluid content-top-gap">
        <div class="data-tables">
            <div class="row">
                <div class="col-lg-12">
                    <?php if($msg = $this->session->flashdata('msg')):
                            $msg_class = $this->session->flashdata('msg_class');?> 
                        <div class="alert <?php echo $msg_class;?>">
                            <?php echo $msg;?>
                        </div>
                    <?php endif;?>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="card card_border p-4">
                        <div class="top">
                            <h3 class="card__title">All Articles</h3>
                            <input type="text" class="form-control" placeholder="Search an article" name="search_article" id="search_article">
                        </div>
                        <div class="table-responsive">
                            <div id="example_wrapper" class="dataTables_wrapper no-footer"> 
                                <!-- <div id="result"></div>                                -->
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan='2'>Title</th>
                                            <th colspan='2'>Slug</th>
                                            <th colspan='2'>Date</th>
                                            <th colspan='1'>Summary</th>
                                            <th colspan='2'>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="result">
                                        <!-- <?php// if(!empty($articles)):?>
                                            <?php foreach($articles as $art):?>
                                                <tr>
                                                    <td><?php echo $art->title;?></td>
                                                    <td><?php echo $art->slug;?></td>
                                                    <td><?php echo $art->date;?></td>
                                                    <td><?php echo $art->summary;?></td>
                                                    <td>
                                                        <a href="#" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach;?> 
                                        <?php// else:?>
                                            <tr>
                                                <td colspan="4"><p class="text-danger text-center">No Data Found</p></td>
                                            </tr>
                                        <?php// endif;?> -->
                                    
                                    </tbody>
                                </table>  
                                <div class="bottom">
                                    <!-- <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 5 of 19 entries</div> -->
                                    <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                                        <!-- <a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0" tabindex="-1" id="example_previous">Previous</a>
                                        <span>
                                            <a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a>
                                            <a class="paginate_button " aria-controls="example" data-dt-idx="2" tabindex="0">2</a>
                                            <a class="paginate_button " aria-controls="example" data-dt-idx="3" tabindex="0">3</a>
                                            <a class="paginate_button " aria-controls="example" data-dt-idx="4" tabindex="0">4</a>
                                        </span>
                                        <a class="paginate_button next" aria-controls="example" data-dt-idx="5" tabindex="0" id="example_next">Next</a> -->
                                        
                                    </div>
                                </div>                             
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
