<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model','LoginModel');
		
	} 
	public function index()
	{
		
		$this->load->view('login_view');
	}
	
	public function login_process(){
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$data = $this->LoginModel->checkLogin($username,$password);
		
		if(empty($data)){
			$this->session->set_flashdata('error_msg', 'Your username and password is invalid.Please try again');
			redirect('Login',$error);
		}else{
			$session_data['is_logged'] = 1;
			$session_data['user_id'] = $data['user_id'];
			$session_data['user_role_id'] = $data['user_role_id'];
			$this->session->set_userdata($session_data);
		}	
		
		  redirect('problems');
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
