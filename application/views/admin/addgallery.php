<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>asset/dist/img/user.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?php echo base_url();?>admin/backend">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
         
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-suitcase"></i>
            <span>Packages</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>admin/addpackage"><i class="fa fa-plus"></i> Add Package</a></li>
            <li><a href="<?php echo base_url();?>admin/editpackage"><i class="fa fa-pencil"></i>
            Edit Package</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-video-camera"></i>
            <span>Videos</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>admin/addvideo"><i class="fa fa-plus"></i> Add Video</a></li>
            <li><a href="<?php echo base_url();?>admin/editvideo"><i class="fa fa-pencil"></i>
            Edit Video</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-picture-o"></i>
            <span>Gallery</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>admin/addgallery"><i class="fa fa-plus"></i> Add Photo</a></li>
            <li><a href="<?php echo base_url();?>admin/editgallery"><i class="fa fa-pencil"></i>
            Edit Photo</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-commenting-o"></i>
            <span>Testimonials</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>admin/addtestimonial"><i class="fa fa-plus"></i> Add Testimonial</a></li>
            <li><a href="<?php echo base_url();?>admin/edittestimonial"><i class="fa fa-pencil"></i>
            Edit Testimonial</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>User_ctrl/logout" >
            <i class="fa fa-power-off"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Add Gallery
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li class="active">Add Gallery</li>
      </ol>
    </section>
    <section class="content">
       <div class="box box-info">
        <div class="box-header">
          <i class="fa fa-picture-o"></i>

          <h3 class="box-title">Gallery</h3>
        </div>
        <div class="box-body">
          <?php echo form_open_multipart(base_url()."fetchdata/addgallery/");?>
          <form action="<?php echo base_url();?>fetchdata/addgallery/" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" name="caption" placeholder="Image Caption">
            </div>
            <div class="form-group">
              <input type="file" class="form-control" name="image">
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="btn btn-default" id="addVideo">Add
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </form>
        </div>
         
      </div>
    </section>
</div>