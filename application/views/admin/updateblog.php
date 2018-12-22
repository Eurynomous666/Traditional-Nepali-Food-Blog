 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url();?>asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Food Blog
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item active">
                <a href="<?php echo base_url();?>admin/addblog" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Blog </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Edit Blog</p>
                </a>
              </li>
              
            </ul>
          </li>
         


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
      <?php foreach($blog as $row){?>
      <?php echo form_open_multipart(base_url()."fetchdata/updateblog");?>
       <form method="POST" action="<?php echo base_url();?>fetchdata/updateblog">
            <div class="form-group">
                <!-- <label for="name"> Name:</label> -->
                <input type="hidden" class="form-control"  name="blog_id" value="<?php echo $row->blog_id;?>">
                <input type="text" class="form-control"  name="name" value="<?php echo $row->name;?>" >
            </div>
            <div class="form-group">
                <!-- <label for="description"> Email:</label> -->
                <input type="file" class="form-control" name="image" ><span>currentimage :<?php echo $row->image;?></span>
            </div>
            <div class="form-group">
               <!--  <label for="name"> Message:</label> -->
                <textarea class="form-control" type="textarea" name="description"  > <?php echo $row->description;?></textarea>
            </div>
            <div class="form-group">
                <!-- <label for="name"> Name:</label> -->
                <input type="text" class="form-control"  name="location" value="<?php echo $row->location;?>">
            </div>
            <div class="form-group">
                <!-- <label for="name"> Name:</label> -->
                <input type="number" class="form-control"  name="price" value="<?php echo $row->price; ?>">
            </div>
            <button type="submit" class="btn btn-lg btn-success pull-right" id="btnContactUs">Update Page &rarr;</button>
        </form>
      <?php } ?>
    </div>
  </div>