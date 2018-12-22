<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class admin extends CI_Controller {

	
// 	public function backend()
// 	{	
// 		$this->load->model('display_model');
// 		$data['query'] = $this->display_model->displaycount();

// 		$this->load->model('display_model');
// 		$data['query'] = $this->display_model->displaycounttest();
		
// 		$this->load->view('admin/templates/header');
// 		$this->load->view('admin/home' ,$data);
// 		$this->load->view('admin/templates/footer');
// 	}
	//videos
	public function addblog()
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/addblog');
		$this->load->view('admin/templates/footer');
	}

	public function editblog(){ 
		$this->load->model('blog_model');
		$data['blog'] = $this->blog_model->listblog();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/editblog',$data);
		$this->load->view('admin/templates/footer');
	}

	public function updateblog(){
		$blog_id = $this->uri->segment('3');;
		$this->load->model('blog_model');
		$data['blog'] = $this->blog_model->singlebloglist($blog_id);

		$this->load->view('admin/templates/header');
		$this->load->view('admin/updateblog', $data);
		$this->load->view('admin/templates/footer');
	}


// 	//testimonials
// 	public function addtestimonial(){ 
// 		$this->load->view('admin/templates/header');
// 		$this->load->view('admin/addtestimonial');
// 		$this->load->view('admin/templates/footer');
// 	}

// 	public function edittestimonial(){ 
// 		$this->load->model('testimonial_model');
// 		$data['testimonial'] = $this->testimonial_model->listtestimonial();

// 		$this->load->view('admin/templates/header');
// 		$this->load->view('admin/edittestimonial', $data);
// 		$this->load->view('admin/templates/footer');
// 	}

// 	public function updatetestimonial(){
// 		$testimonialid = $this->uri->segment('3');;
// 		$this->load->model('testimonial_model');
// 		$data['testimonial'] = $this->testimonial_model->singletestimoniallist($testimonialid);

// 		$this->load->view('admin/templates/header');
// 		$this->load->view('admin/updatetestimonial', $data);
// 		$this->load->view('admin/templates/footer');
// 	}


// 	//gallery
// 	public function addgallery()
// 	{
// 		$this->load->view('admin/templates/header');
// 		$this->load->view('admin/addgallery');
// 		$this->load->view('admin/templates/footer');
// 	}
// 	public function editgallery(){ 
// 		$this->load->model('gallery_model');
// 		$data['gallery'] = $this->gallery_model->listgallery();

// 		$this->load->view('admin/templates/header');
// 		$this->load->view('admin/editgallery', $data);
// 		$this->load->view('admin/templates/footer');
// 	}

// 	public function updategallery(){
// 		$galleryid = $this->uri->segment('3');;
// 		$this->load->model('gallery_model');
// 		$data['gallery'] = $this->gallery_model->singlegallerylist($galleryid);

// 		$this->load->view('admin/templates/header');
// 		$this->load->view('admin/updategallery', $data);
// 		$this->load->view('admin/templates/footer');
// 	}


// 	//package
// 	public function addpackage()
// 	{ 
// 		$this->load->view('admin/templates/header');
// 		$this->load->view('admin/addpackage');
// 		$this->load->view('admin/templates/footer');
// 	}
// 	public function editpackage(){ 
// 		$this->load->model('package_model');
// 		$data['package'] = $this->package_model->listpackage();

// 		$this->load->view('admin/templates/header');
// 		$this->load->view('admin/editpackage', $data);
// 		$this->load->view('admin/templates/footer');
// 	}

// 	public function updatepackage(){
// 		$packageid = $this->uri->segment('3');;
// 		$this->load->model('package_model');
// 		$data['package'] = $this->package_model->singlepackagelist($packageid);

// 		$this->load->view('admin/templates/header');
// 		$this->load->view('admin/updatepackage', $data);
// 		$this->load->view('admin/templates/footer');
// 	}
 }
 