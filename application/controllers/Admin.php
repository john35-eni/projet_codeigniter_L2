<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
        if($this->session->userdata('logged_in')!==TRUE){
            redirect('Login');
        }
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->model("mainModel");
		$this->load->model("adminModel");		
	}
    public function tableUser() {
		if($this->session->userdata('level')==='1') {
			$data["title"] = "listes des utilisateurs";
        	$this->load->view('Admin_view/admin_header', $data);
        	$this->load->view('Admin_view/table_users');
		}else {
			redirect("login");
		}
		
    }

	public function index()
	{   
		if($this->session->userdata('level')==='1') {
			$this->load->view('Admin_view/admin_header');
			$this->load->view('Admin_view/admin_index');
		}else{
			redirect("login");
		}
		
	}
	public function upload_image()
	{	
		
		if(isset($_FILES['user_image']['name'])) {
			$config['upload_path'] = './upload/' ;
			$config['allowed_types'] = 'jpg|jpeg|png';
			//$config['max_size'] = 100;
			//$config['max_width'] = 1024;
			//$config['max_height'] = 768;
			$image = $_FILES['user_image']['name'];
			$file = explode('.', $image);
			$filename = $file['0'];
			$extension = $file['1'];
			$new_name = rand(). '.'. $extension;
			$config['file_name'] = $new_name;
			$img_types = array("jpg", "jpeg", "png");
			$don = array(
				'image' => $new_name,
				'nom'=>$_POST['nom']
			);
			//$this->load->model('adminModel');
			if(in_array($extension,$img_types)) {
				$this->load->library("upload", $config);
				if($this->upload->do_upload("user_image")) {
					//$data = $this->adminModel->insert_crud($don);
					//echo json_encode("image sauvé");
				}else{
					//echo "not saved";
				}
			}
			
		}
		return $new_name;
	}
	public function insert_users()
	{	
		if($this->session->userdata('level')==='1') {

			if($this->input->is_ajax_request()){
				$this->form_validation->set_rules('nom', 'Nom', 'required');
				$this->form_validation->set_rules('prenom', 'Prenom', 'required');
				$this->form_validation->set_rules('phone', 'Phone', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('level', 'Level', 'required');
				
				if($this->form_validation->run()== FALSE){
					$data = array('responce' =>'error', 'message'=> validation_errors());
				}else{
	
					$ajax_data = array(
						"username" =>$this->input->post('nom'),
						"lastName" =>$this->input->post('prenom'),
						"phone" => $this->input->post('phone'),
						"password" => md5($this->input->post( 'password')),
						"level" => $this->input->post('level'),
						"image" => $this->upload_image()
					);
					if($this->adminModel->insert_utilisateur($ajax_data)){
						$data = array('responce' =>'success', 'message'=>'Donné insérer dans la base' );
					}else{
						$data = array('responce' =>'error', 'message'=>'erreur de connection à la base de donnée' );
					}				
				}
	
			}else{
				echo 'No direct script access allowed';
			}
			echo json_encode($data);

		}else {
			redirect("login");
		}
		
	}
/*	function user_action() {
		if($_POST['action'] == "Add") {
			$insert_data = array(
				'username' =>$this->input->post('nom'),
				"lastName" =>$this->input->post('prenom'),
				"phone" => $this->input->post('phone'),
				"password" => $this->input->post(md5('password')),
				"level" => $this->input->post('level'),
				'image' => upload_image()
			);
			$this->load->model('adminModel');
			$this->adminModel->insert_crud($insert_data);
			echo 'Data Inserted';
		}
	}*/
	/*function upload_image()
	{
		if(isset($_FILES['user_image'])){
			$extension = explode('.', $_FILES['user_image']['name']);
			$new_name = rand(). '.'. $extension[1];
			$destination = './upload/' . $new_name;
			move_uploaded_file($_FILES['image']['tmp_name'], $destination);
			return $new_name;
		}
	}*/
	//delete of commandes whom was arrived
	public function delete_users() {

		if($this->session->userdata('level')==='1') {
			if($this->input->is_ajax_request()) {
				$del_id = $this->input->post('del_id');
				if($this->adminModel->delete_utilisateur($del_id)){
					$data= array('responce'=>'success');
				}else{
					$data = array('responce'=>'error');
				}
				echo json_encode($data);
			}else {
				echo "No direct script access allowed";
			}
		}else {
			redirect("login");
		}

		
	}
	// sauvegarde image

	public function fetch_users()
	{	
		if($this->session->userdata('level')==='1') {
			if($this->input->is_ajax_request()){
				if($posts = $this->adminModel->get_entries()) {
					$data = array('responce' => 'success', 'posts'=> $posts);
				}else{
					$data = array('responce'=>'error', 'message' => 'failed to fetch data');
				}
				echo json_encode($data);
			}else{
				echo 'No direct script access allowed';
			}
		}else {
			redirect("login");
		}

		
		
	}
	
}
