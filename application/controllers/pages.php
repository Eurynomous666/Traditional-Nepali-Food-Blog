<?php
class Pages extends CI_controller{

	public function view($page = 'home'){
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}
		// $this->load->model('display_model');
		// $data['video']=$this->display_model->displayrecords();

		$this->load->model('display_model');
		$data['blogs']=$this->display_model->displayblog();

		// $this->load->model('display_model');
		// $data['testimonial']=$this->display_model->displaytestimonial();

		// $this->load->model('display_model');
		// $data['gallery']=$this->display_model->displaygallery();

		// $this->load->model('display_model');
		// $data['expensive']=$this->display_model->displayexpensivepackage();

		// $this->load->model('display_model');
		// $data['treklist']=$this->display_model->displaytreklist();

		// $this->load->model('display_model');
		// $data['hikelist']=$this->display_model->displayhikelist();
		
		$this->load->view('template/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('template/footer');
	}

	public function blogsingle(){
		$blog_id = $this->uri->segment('3');;
		$this->load->model('blog_model');
		$data['blog'] = $this->blog_model->singlebloglist($blog_id);

		$this->load->view('template/header');
		$this->load->view('single', $data);
		$this->load->view('template/footer');
	}

	// public function searchkey(){
	// 	$keyword    =   $this->input->post('search');
	// 	$this->load->model('display_model');
 //        $data['search'] = $this->display_model->search($keyword);
        
 //        $this->load->view('template/header');
 //        $this->load->view('search',$data);
 //        $this->load->view('template/footer');
	// }
	
}