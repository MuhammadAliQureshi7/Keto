<!doctype html>
<html lang="en">

<head>
  <?php include('head.php');?>
</head>

<body class="sidebar-menu-collapsed">
    
  <div class="se-pre-con"></div>
  <section>  
    <div class="sidebar-menu sticky-sidebar-menu">

      <!-- logo start -->
      <div class="logo">
        <h1><a href="<?php echo base_url('admin');?>">Collective</a></h1>
      </div>
    

      <div class="logo-icon text-center">
        <a href="<?php echo base_url('admin');?>" title="logo"><img src="<?php echo base_url('assets/images/logo-admin.png');?>" alt="logo-icon"> </a>
      </div>
      <!-- //logo end -->

      <div class="sidebar-menu-inner">

        <!-- sidebar nav start -->
        <ul class="nav nav-pills nav-stacked custom-nav">
          <li class="active"><a href="<?php echo base_url('admin');?>"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
          </li>
          <li class="menu-list">
            <a href="#"><i class="fa fa-cogs"></i>
              <span>Elements <i class="lnr lnr-chevron-right"></i></span></a>
            <ul class="sub-menu-list">
              <li><a href="carousels.html">Carousels</a> </li>
              <li><a href="cards.html">Default cards</a> </li>
              <li><a href="people.html">People cards</a></li>
            </ul>
          </li>
          <li><a href="pricing.html"><i class="fa fa-table"></i> <span>Pricing tables</span></a></li>
          <li><a href="blocks.html"><i class="fa fa-th"></i> <span>Content blocks</span></a></li>
          <li><a href="forms.html"><i class="fa fa-file-text"></i> <span>Forms</span></a></li>
          <li class="menu-list">
            <a href="javascript:void(0)"><i class="fa fa-clone"></i> <span>Packages</span></a>
            <ul class="sub-menu-list">
              <li><a href="<?php echo base_url('admin/add_package'); ?>">Add Packages</a> </li>
              <li><a href="<?php echo base_url('admin/packages'); ?>">Packages List</a> </li>
            </ul>
          </li>
          <li class="menu-list">
            <a href="javascript:void(0)"><i class="fa fa-pencil"></i> <span>Articles</span></a>
            <ul class="sub-menu-list">
              <li><a href="<?php echo base_url('admin/add_article'); ?>">Add Article</a> </li>
              <li><a href="<?php echo base_url('admin/articles'); ?>">Article List</a> </li>
            </ul>
          </li>
          
          
        </ul>
        <!-- //sidebar nav end -->
        <!-- toggle button start -->
        <a class="toggle-btn">
          <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
          <i class="fa fa-angle-double-right menu-collapsed__right"></i>
        </a>
        <!-- //toggle button end -->
      </div>
    </div>
    <!-- //sidebar menu end -->
    <!-- header-starts -->
    <div class="header sticky-header">

      <!-- notification menu start -->
      <div class="menu-right">
        <div class="navbar user-panel-top">
          <!-- <div class="search-box">
            <form action="#search-results.html" method="get">
              <input class="search-input" placeholder="Search Here..." type="search" id="search">
              <button class="search-submit" value=""><span class="fa fa-search"></span></button>
            </form>
          </div> -->
          <div class="user-dropdown-details d-flex">
            <!-- <div class="profile_details_left">
              <ul class="nofitications-dropdown">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                      class="fa fa-bell-o"></i><span class="badge blue">3</span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="notification_header">
                        <h3>You have 3 new notifications</h3>
                      </div>
                    </li>
                    <li><a href="#" class="grid">
                        <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                        <div class="notification_desc">
                          <p>Johnson purchased template</p>
                          <span>Just Now</span>
                        </div>
                      </a></li>
                    <li class="odd"><a href="#" class="grid">
                        <div class="user_img"><img src="assets/images/avatar2.jpg" alt=""></div>
                        <div class="notification_desc">
                          <p>New customer registered </p>
                          <span>1 hour ago</span>
                        </div>
                      </a></li>
                    <li><a href="#" class="grid">
                        <div class="user_img"><img src="assets/images/avatar3.jpg" alt=""></div>
                        <div class="notification_desc">
                          <p>Lorem ipsum dolor sit amet </p>
                          <span>2 hours ago</span>
                        </div>
                      </a></li>
                    <li>
                      <div class="notification_bottom">
                        <a href="#all" class="bg-primary">See all notifications</a>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                      class="fa fa-comment-o"></i><span class="badge blue">4</span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="notification_header">
                        <h3>You have 4 new messages</h3>
                      </div>
                    </li>
                    <li><a href="#" class="grid">
                        <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                        <div class="notification_desc">
                          <p>Johnson purchased template</p>
                          <span>Just Now</span>
                        </div>
                      </a></li>
                    <li class="odd"><a href="#" class="grid">
                        <div class="user_img"><img src="assets/images/avatar2.jpg" alt=""></div>
                        <div class="notification_desc">
                          <p>New customer registered </p>
                          <span>1 hour ago</span>
                        </div>
                      </a></li>
                    <li><a href="#" class="grid">
                        <div class="user_img"><img src="assets/images/avatar3.jpg" alt=""></div>
                        <div class="notification_desc">
                          <p>Lorem ipsum dolor sit amet </p>
                          <span>2 hours ago</span>
                        </div>
                      </a></li>
                    <li><a href="#" class="grid">
                        <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                        <div class="notification_desc">
                          <p>Johnson purchased template</p>
                          <span>Just Now</span>
                        </div>
                      </a></li>
                    <li>
                      <div class="notification_bottom">
                        <a href="#all" class="bg-primary">See all messages</a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div> -->
            <div class="profile_details">
              <ul>
                <?php foreach($admin as $admin):?>
                <li class="dropdown profile_details_drop">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="profile_img">
                      <?php if(empty($admin->image)): ?>
                        <img src="<?php echo base_url('assets/images/user-placeholder.png');?>" class="rounded-circle" alt="" >
                      <?php else:?>
                        <img src="<?php echo $admin->image?>" class="rounded-circle" alt="" >
                      <?php endif;?>
                      <div class="user-active">
                        <span></span>
                      </div>
                    </div>
                  </a>
                  <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                    <li class="user-info">
                      <h5 class="user-name"><?php echo $admin->full_name;?></h5>
                      <span class="status ml-2">Available</span>
                    </li>
                    <li> <a href="#"><i class="lnr lnr-user"></i>My Profile</a> </li>                   
                    <li class="logout"> <a href="<?php echo base_url('admin/logout');?>"><i class="fa fa-power-off"></i> Logout</a> </li>
                  </ul>
                </li>
                <?php endforeach;?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--notification menu end -->
    </div>
    <!-- //header-ends -->