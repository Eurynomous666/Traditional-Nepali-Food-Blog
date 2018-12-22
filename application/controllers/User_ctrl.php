<?php

/**
* 
*/
class User_ctrl extends CI_Controller
{
	
	public function loginUser(){

		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$this->load->model('User_mgmt');
		$login=$this->User_mgmt->validateLogin($username,$password);

		if ($login) {
			$this->load->library('session');
			$this->session->set_userdata('user_id',$login);
			// $this->load->model('display_model');
			// $data['query'] = $this->display_model->displaycount();

			// $this->load->model('display_model');
			// $data['query'] = $this->display_model->displaycounttest();

			$this->load->view('admin/templates/header');
			$this->load->view('admin/home');
			$this->load->view('admin/templates/footer');
		}else{
			$this->session->set_flashdata('error','Invalid Username or Password');
			$this->load->view('login');
		}
		
	}	
	

	public function logout() {
		$this->session->sess_destroy();
        
        $this->load->helper('url');
		redirect(base_url());
    }

}

?>