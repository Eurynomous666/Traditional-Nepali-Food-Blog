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
        <li class="active treeview">
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
        <li class="treeview">
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
        
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<div class="content-wrapper">
  <section class="content-header">
      <h1>
        Add Package
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li class="active">Add Package</li>
      </ol>
    </section>
    <section class="content">
      <?php echo form_open_multipart(base_url()."fetchdata/addpackage/");?>
      <form action="<?php echo base_url();?>fetchdata/addpackage" method="POST">
        <div class="row">
          <section class="col-lg-7 connectedSortable">

            <div class="box box-info">
              <div class="box-header">
                <i class="fa fa-envelope"></i>

                <h3 class="box-title">Trek Info</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                          data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                    <i class="fa fa-minus"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <div class="box-body">
                
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Trek Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="destination" placeholder="Destination">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="trip_duration" placeholder="Duration(Day/s)">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control" name="max_altitude" placeholder="Max Altitude(m)">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control" name="cost" placeholder="Trek Cost(Rs.)">
                  </div>
                
              </div>
              
            </div>
            <div class="nav-tabs-custom">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right">
                <li class="active"><a href="#iterenary" data-toggle="tab">Iterenary</a></li>
                <li><a href="#description" data-toggle="tab">Description</a></li>
              </ul>
              <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="iterenary" style="position: relative; height: 300px;">
                  <textarea class="textarea" placeholder="Iterenary for Trek" name="itinerary" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
                <div class="chart tab-pane" id="description" style="position: relative; height: 300px;">
                  <textarea class="textarea" placeholder="Description about the Trek" name="description" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </div>
            </div>
          </section>
          <section class="col-lg-5 connectedSortable">
            <div class="box box-info">
              <div class="box-body">
                  <div class="form-group">
                    <!-- <input type="text" class="form-control" name="trip_difficulty" placeholder="Trek Difficulty"> -->
                    <select name="trip_difficulty">
                      <option value="Easy" selected>Easy</option>
                      <option value="Moderate">Moderate</option>
                      <option value="Strenuous">Strenuous</option>
                      <option value="Challenging/Alpine">Challenging/Alpine</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <!-- <input type="text" class="form-control" name="trip_style" placeholder="Trip Style"> -->
                    <select name="trip_style">
                      <option value="Trek" selected>Trekking</option>
                      <option value="Hike">Hiking</option>
                      <option value="Tour">Tours</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="best_season" placeholder="Best Season">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="group_size" placeholder="Group Size">
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image">
                  </div>
                  <div class="form-group">
                    <label>Map</label>
                    <input type="file" class="form-control" name="map">
                  </div>
              </div>
            </div>
          </section>
        </div>
        <div class="box-footer clearfix">
          <button type="submit" class="btn btn-default" id="addVideo">Add
            <i class="fa fa-arrow-circle-right"></i></button>
        </div>
      </form>
    </section>
</div>