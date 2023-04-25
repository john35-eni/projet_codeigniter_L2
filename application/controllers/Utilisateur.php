<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
        if($this->session->userdata('logged_in')!==TRUE){
            redirect('Login');
        }
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->model("mainModel");		
	}

	public function index()
	{   
		if($this->session->userdata('level')==='2'){
			$data["title"] = "Statistique";
			//$data['active'] = "active";
			$data["year_list"] = $this->mainModel->fetch_year();
		$this->load->view('Utilisateur_view/Utilisateur_header',$data);
		$this->load->view('Utilisateur_view/Utilisateur_statistique');
		}else {
			redirect("login");
		}
		
	}
	public function tables()
	{	
		if($this->session->userdata('level')==='2'){
			$data["title"] = "Arrivages des fils";
			$this->load->view('Utilisateur_view/Utilisateur_header',$data);
			$this->load->view('Utilisateur_view/Utilisateur_tables');
		}else {
			redirect('login');
		}
		
	}
	public function historique()
	{	
		if($this->session->userdata('level')==='2'){
			$data["title"] = "Historique";
			$this->load->view('Utilisateur_view/Utilisateur_header',$data);
			$this->load->view('Utilisateur_view/Utilisateur_historique');
		}else {
			redirect('login');
		}
		
	}


	
}
