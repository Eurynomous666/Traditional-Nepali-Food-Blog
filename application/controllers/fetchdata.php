<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fetchdata extends CI_Controller {

	public function addblog(){
		$config['upload_path']="asset/images/blog";
		$config['allowed_types']="*";
		$this->load->library('upload',$config);
		$this->upload->do_upload('image');
		$data=array('upload_data'=>$this->upload->data());

		$name=$this->input->POST("name");
		$image=$data['upload_data']['file_name'];
		$description=$this->input->POST('description');
		$location=$this->input->POST('location');
		$price=$this->input->POST('price');

		$this->load->model('blog_model');
		$addblog=$this->blog_model->saveblog($name,$image,$description,$location,$price);

		if($addblog){
			$this->session->set_flashdata('error','You Have Successfully Entered package');
			redirect(base_url().'admin/editblog');
		}else{
			$this->session->set_flashdata('error','Sorry to Bug you again');
			redirect(base_url().'admin/addblog');
		}
	}
	public function deleteblog($blog_id){
		$this->load->model('blog_model');
		$datadel['blog'] = $this->blog_model->deleteblog($blog_id);
		redirect('admin/editblog');
	}

	public function updateblog(){
		$config['upload_path']="asset/images/package";
		$config['allowed_types']="*";
		$this->load->library('upload',$config);
		$this->upload->do_upload('image');
		$data=array('upload_data'=>$this->upload->data());

		
		
		$blog_id=$this->input->POST("blog_id");
		$name=$this->input->POST("name");
		$description=$this->input->POST("description");
		$image=$this->input->POST("image");
		$location=$this->input->POST("location");
		$price=$this->input->POST("price");

		$this->load->model("blog_model");
		$blogdetail['blog'] = $this->blog_model->singleblogupdate($blog_id,$name,$image,$description,$location,$price);

		if($blogdetail){
			$this->session->set_flashdata('error','Your Data is Updated');
			redirect(base_url(). 'admin/editblog');
		}else{
			$this->session->set_flashdata('error','Error While Updating');
			redirect(base_url(). 'admin/editblog');
		}
	}
 
}
?>