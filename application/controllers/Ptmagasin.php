<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ptmagasin extends CI_Controller {

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
		if($this->session->userdata('level')==='3'){
			$data["title"] = "Statistique";
		$this->load->view('Ptmagasin_view/Ptmagasin_header',$data);
		$this->load->view('Ptmagasin_view/Ptmagasin_index');
		}else {
			redirect("login");
		}
		
	}
	public function tables()
	{	
		if($this->session->userdata('level')==='3'){
			$data["title"] = "Arrivages des fils";
			$this->load->view('Ptmagasin_view/Ptmagasin_header',$data);
			$this->load->view('Ptmagasin_view/Ptmagasin_tables');
		}else {
			redirect('login');
		}
		
	}
	public function commande()
	{	
		if($this->session->userdata('level')==='3'){
			$data["title"] = "Commandes";
			$this->load->view('Ptmagasin_view/Ptmagasin_header',$data);
			$this->load->view('Ptmagasin_view/Ptmagasin_commande');
		}else {
			redirect('login');
		}
		
	}


	
}
