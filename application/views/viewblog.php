<?php foreach($blog as $blog):?>
<div class="banner banner-2">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2><?php echo $blog->title;?></h2>
                    <p><?php echo $blog->summary;?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <h2><?php echo $blog->title;?></h2>
                <h6><?php echo $blog->date;?></h6>
                <img src="<?php echo base_url($blog->image); ?>" alt="<?php echo $blog->title;?>">
                <p><?php echo $blog->body;?></p>
            </div>
            
            
        </div>
    </div>
</div>
<?php endforeach;?>