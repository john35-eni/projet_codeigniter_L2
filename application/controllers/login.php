<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		//$this->load->helper(array('form','url'));
		//$this->load->library('form_validation');
		$this->load->model("Login_model");		
	}
    public function index()
    {
        $this->load->view('login_view');
    }
   	// login
	function auth() 
	{
		$phone = $this->input->post('phone', TRUE);
		$password = $this->input->post('password', TRUE);
		$result = $this->Login_model->check_user($phone, $password);
		if($result->num_rows() > 0) {
			$data = $result->row_array();
			$username = $data['username'];
			$phone = $data['phone'];
			$level = $data['level'];
			$image = $data['image'];
			$sesdata = array(
				'username' => $username,
				'phone'    => $phone,
				'level'    => $level,
				'image'    =>$image,
				'logged_in'=> TRUE
			);
			$this->session->set_userdata($sesdata);
            if($level ==='1') {
				redirect('Admin');
			} elseif($level ==='2') {
				redirect('Utilisateur');
			}else{
				redirect('Ptmagasin');
			}

		}else {
			echo "<script>alert('access denied');history.go(-1)</script>";
			 
		}
		$this->load->view("login_view");
	} 
	function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
}
