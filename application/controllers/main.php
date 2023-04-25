<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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

	/*public function index()
	{   
		$this->load->view('header');
		$this->load->view('index');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function tables()
	{
		$this->load->view('header');
		$this->load->view('tables');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function logout()
	{
		$this->load->view('login');
	}*/
	
	/* ------ USERS -------- */

	//insertion des commandes arrivé
	public function insert()
	{	
		if($this->session->userdata('level')==='2') {

			if($this->input->is_ajax_request()){
				$this->form_validation->set_rules('numCommande', 'NumCommande', 'required');
				$this->form_validation->set_rules('couleur', 'Couleur', 'required');
				$this->form_validation->set_rules('batte', 'Batte', 'required');
				$this->form_validation->set_rules('quantite', 'Quantite', 'required|numeric');
				$this->form_validation->set_rules('fibre', 'Fibre', 'required|max_length[3]');
				$this->form_validation->set_rules('fournisseur', 'Fournisseur', 'required');
				$this->form_validation->set_rules('nbPolibague', 'NbPolibague', 'required|numeric');
				$this->form_validation->set_rules('tpEmbalage', 'TpEmbalage', 'required');
				$this->form_validation->set_rules('transporteur', 'Transporteur', 'required');
				$this->form_validation->set_rules('depart', 'Depart', 'required');
				$this->form_validation->set_rules('arrive', 'Arrive', 'required');
				$this->form_validation->set_rules('cpaisage', 'Contre_paisage', 'required|numeric');
				$this->form_validation->set_rules('stock', 'Stock', 'required|numeric');
				$this->form_validation->set_rules('agarder', 'Quantité à garder', 'required|numeric');
				$this->form_validation->set_rules('location', 'Location', 'required');

				
				if($this->form_validation->run()== FALSE){
					$data = array('responce' =>'error', 'message'=> validation_errors());
				}else{
	
					$ajax_data = $this->input->post();
					if($this->mainModel->insert_entry($ajax_data)){
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

	// affichage des commandes arrivé

	public function fetch()
	{	
		if($this->session->userdata('level')==='2') {
			if($this->input->is_ajax_request()){
				$total_stock = $this->mainModel->get_total_stock();
				$total_envoyer = $this->mainModel->get_total_envoyer();
				if($posts = $this->mainModel->get_entries()) {
					$data = array('responce' => 'success', 'posts'=> $posts, 'totalStock' => $total_stock, 'totalEnvoyer' => $total_envoyer);
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
	//delete of commandes whom was arrived
	public function delete() {

		if($this->session->userdata('level')==='2') {
			if($this->input->is_ajax_request()) {
				$del_id = $this->input->post('del_id');
				if($this->mainModel->delete_entry($del_id)){
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
	
		//delete Historique
		public function delete_historique() {

			if($this->session->userdata('level')==='2') {
				if($this->input->is_ajax_request()) {
					$del_id = $this->input->post('del_id');
					if($this->mainModel->delete_entry_historique($del_id)){
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

	// edit of commandes whom was arrived

	public function edit() {
		if($this->session->userdata('level')==='2'){
			if($this->input->is_ajax_request()) {
				$edit_id = $this->input->post('edit_id');
				$location = $this->mainModel->get_location();
				if($post = $this->mainModel->edit_entry($edit_id)) {
					$data = array('responce' => 'success', 'post'=>$post, 'location' =>$location);
	
				}else{
					$data = array('responce' =>'error', 'message'=>'failed to fetch record');
				}
				echo json_encode($data);
			}else{
				echo "No direct script access allowed";
			}
		}else{
			redirect("login");
		}
		
	}

	// update of commandes whom was arrived
	public function update() {
		if($this->session->userdata('level')==='2') {
			if($this->input->is_ajax_request()) {
			


				$this->form_validation->set_rules('edit_numCommande', 'NumCommande', 'required');
				$this->form_validation->set_rules('edit_couleur', 'Couleur', 'required');
				$this->form_validation->set_rules('edit_batte', 'Batte', 'required');
				$this->form_validation->set_rules('edit_quantite', 'Quantite', 'required|numeric');
				$this->form_validation->set_rules('edit_fibre', 'Fibre', 'required|max_length[3]');
				$this->form_validation->set_rules('edit_fournisseur', 'Fournisseur', 'required');
				$this->form_validation->set_rules('edit_nbPolibague', 'NbPolibague', 'required|numeric');
				$this->form_validation->set_rules('edit_tpEmbalage', 'TpEmbalage', 'required');
				$this->form_validation->set_rules('edit_transporteur', 'Transporteur', 'required');
				$this->form_validation->set_rules('edit_depart', 'Depart', 'required');
				$this->form_validation->set_rules('edit_arrive', 'Arrive', 'required');
				$this->form_validation->set_rules('edit_cpaisage', 'Contre_paisage', 'required|numeric');
				$this->form_validation->set_rules('edit_stock', 'Stock', 'required|numeric');
				$this->form_validation->set_rules('edit_agarder', 'Edit_agarder', 'required|numeric');
				$this->form_validation->set_rules('edit_liste_location', 'Location', 'required');
				if($this->form_validation->run()== FALSE){
					$data = array('responce' =>'error', 'message'=> validation_errors());
				}else{
	
					$data['id'] = $this->input->post('edit_record_id');
					$data['numCommande'] = $this->input->post('edit_numCommande');
					$data['couleur'] = $this->input->post('edit_couleur');
					$data['batte'] = $this->input->post('edit_batte');
					$data['quantite'] = $this->input->post('edit_quantite');
					$data['fibre'] = $this->input->post('edit_fibre');
					$data['fournisseur'] = $this->input->post('edit_fournisseur');
					$data['nbPolibague'] = $this->input->post('edit_nbPolibague');
					$data['tpEmbalage'] = $this->input->post('edit_tpEmbalage');
					$data['transporteur'] = $this->input->post('edit_transporteur');
					$data['depart'] = $this->input->post('edit_depart');
					$data['arrive'] = $this->input->post('edit_arrive');
					$data['cpaisage'] = $this->input->post('edit_cpaisage');
					$data['stock'] = $this->input->post('edit_stock');
					$data['agarder'] = $this->input->post('edit_agarder');
					$data['location'] = $this->input->post('edit_liste_location');
					if($this->mainModel->update_entry($data)){
						$data = array('responce' =>'success', 'message'=>'Donné modifier' );
					}else{
						$data = array('responce' =>'error', 'message'=>'erreur de connection à la base de donnée' );
					}				
				}
	
				echo json_encode($data);
				
	
			}else {
				echo "No direct script access allowed";
			}
		}else {
			redirect("login");
		}
	}
	// get total stock
/*	public function total_stock() {
		if($this->input->is_ajax_request()){
			if($posts = $this->mainModel->get_total_stock()) {
				$data = array('responce' => 'success', 'posts'=> $posts);
			}else{
				$data = array('responce'=>'error', 'message' => 'failed to fetch data');
			}
			echo json_encode($data);

		}else{
			echo "No direct script access allowed ";
		}
	}*/

		// get destination
		public function destination() {
			if($this->input->is_ajax_request()){
				if($posts = $this->mainModel->get_destination()) {
					$data = array('responce' => 'success', 'posts'=> $posts);
				}else{
					$data = array('responce'=>'error', 'message' => 'failed to fetch data');
				}
				echo json_encode($data);
	
			}else{
				echo "No direct script access allowed ";
			}
	
		}
		
		// get location
		public function location() {
			if($this->input->is_ajax_request()){
				if($posts = $this->mainModel->get_location()) {
					$data = array('responce' => 'success', 'posts'=> $posts);
				}else{
					$data = array('responce'=>'error', 'message' => 'failed to fetch data');
				}
				echo json_encode($data);
	
			}else{
				echo "No direct script access allowed ";
			}
	
		}

		// ajout transfère
		public function transfer_ajout() {
			if($this->input->is_ajax_request()){
				$this->form_validation->set_rules('transfer_id', 'Transfer_id', 'required');
				$this->form_validation->set_rules('destination', 'Destination', 'required');
				$this->form_validation->set_rules('transfer_quantite', 'Quantité à transferer', 'required|greater_than[0]');
				$this->form_validation->set_rules('transfer_date', 'Date de transfère', 'required');
				$this->form_validation->set_rules('envoyeur', 'Envoyeur', 'required');

				if($this->form_validation->run()== FALSE){
					$data = array('responce' =>'error', 'message'=> validation_errors());
				}else{				
					$ajax_data = array(
						"destination" =>$this->input->post("destination"),
						"produit" =>$this->input->post("transfer_id"),
						"quantite" =>$this->input->post("transfer_quantite"),
						"dateCommande" =>$this->input->post("transfer_date"),
						"envoyeur" => $this->input->post("envoyeur")
						);
					$ajax_data_ptmagasin = array(
						"produit" =>$this->input->post("transfer_id"),
						"quantite" =>$this->input->post("transfer_quantite"),
						"dateCommande" =>$this->input->post("transfer_date"),
						"envoyeur" => $this->input->post("envoyeur")
					);	
					$req = $this->mainModel->get_agarder($ajax_data["produit"]);// get quantité à garder
					foreach($req->result() as $ligne) {
						$garde = $ligne->agarder;
				    }	
					$query = $this->mainModel->get_stock($ajax_data["produit"]);// get stock
					foreach($query->result() as $row) {
							$stock = $row->stock;
					}					

					$operation = ((float)$stock) - (float)$ajax_data["quantite"];
					
					if($operation >=$garde ){
						$update = array("id" => $ajax_data["produit"],
										"stock" =>$operation
										);
						$this->mainModel->update_stock($update);
						//insert ptmagasin
						if($ajax_data["destination"]==1){
							$this->mainModel->insert_transfer_pm($ajax_data_ptmagasin);
						}				
						// fin insert ptmagasin
						if($this->mainModel->insert_transfer($ajax_data)){						
							$data = array('responce' =>'success', 'message'=>'Donné insérer dans la base, stock modifié à : '.$operation);
						}else{
							$data = array('responce' =>'error', 'message'=>'Transfère échoué' );
						}
					}else{
						$data = array('responce' =>'error', 'message'=>'transfère échoué' );
					}
									
				}
				echo json_encode($data);

			}else {
				echo "No direct script access allowed";
			}
		}

		// afficher transfère
		public function fetch_transfer() {
			if($this->session->userdata('level')==='2') {
				if($this->input->is_ajax_request()){
					if($posts = $this->mainModel->get_transfere()) {
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
		// afficher transfère
		public function fetch_transfer_ptmagasin() {
			if($this->session->userdata('level')==='3') {
				if($this->input->is_ajax_request()){
					if($posts = $this->mainModel->get_commande_ptmagasin()) {
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
     /* ------- ADMIN ------ */


	// insert users
	public function insert_users()
	{
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('nom', 'Nom', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('level', 'Level', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if($this->form_validation->run()== FALSE){
				$data = array('responce' =>'error', 'message'=> validation_errors());
			}else{

                $ajax_data = $this->input->post();
				if($this->mainModel->insert_entry_users($ajax_data)){
					$data = array('responce' =>'success', 'message'=>'Donné insérer dans la base' );
				}else{
					$data = array('responce' =>'error', 'message'=>'erreur de connection à la base de donnée' );
				}				
			}
			//$data = "success";

		}else{
			echo 'No direct script access allowed';
		}
		echo json_encode($data);
	}
	
	// ajout return MBOLA HAMBOARINA
	public function return_ajout() {
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('retour_id', 'Retour_id', 'required');
			$this->form_validation->set_rules('retour_quantite', 'Quantité à retourner', 'required|greater_than[0]');
			$this->form_validation->set_rules('retour_date', 'Date de retour', 'required');
			$this->form_validation->set_rules('envoyeur', 'Envoyeur', 'required');
			$this->form_validation->set_rules('produit_id', 'Produit_id', 'required');

			if($this->form_validation->run()== FALSE){
				$data = array('responce' =>'error', 'message'=> validation_errors());
			}else{	
							
				$ajax_data = array(
					"produit_id" =>$this->input->post("produit_id"),
					"quantite" =>$this->input->post("retour_quantite"),
					"dateRetour" =>$this->input->post("retour_date"),
					"envoyeur" => $this->input->post("envoyeur"),
					"retour_id" =>$this->input->post("retour_id")
					);
					
				$query = $this->mainModel->get_stock($ajax_data["produit_id"]);// get stock gmagasin
					foreach($query->result() as $row) {
							$stock = $row->stock;
					}
				
				$get_qt = $this->mainModel->get_quantite_ptmagasin($ajax_data["retour_id"]);
					foreach($get_qt->result() as $ligne){
						$qt = $ligne->quantite;
					}	
				$quantite_a_envoyer = (float)$ajax_data["quantite"];
				if($quantite_a_envoyer > $qt){
					$data = array('responce'=>'error', 'message'=>'quantité trop grande');
				}else{
					$qt_modifier = ((float)$qt) - (float)$quantite_a_envoyer; // quantite à modifier
					$qt_envoyer= ((float)$stock) + (float)$ajax_data["quantite"];// additionne le stock dans gmagasin
					$update_stock_gmagasin = array("id" => $ajax_data["produit_id"],
										"stock" =>$qt_envoyer
										);
					$ajax_data_retour = array(
											"quantite" =>$this->input->post("retour_quantite"),
											"envoyeur" =>$this->input->post("envoyeur"),
											"dateRetour"=>$this->input->post("retour_date"),
											"produitretour"=>$this->input->post("produit_id")
										);
					$this->mainModel->update_stock($update_stock_gmagasin);
					$update_quantite_ptmagasin = array("idptmagasin" =>$ajax_data["retour_id"],
												"quantite"=>$qt_modifier);
					$this->mainModel->update_quantite_ptmagasin($update_quantite_ptmagasin);
					$this->mainModel->insert_retour($ajax_data_retour);
					if($qt_modifier == 0){
						$this->mainModel->delete_detail_ptmagasin($ajax_data["retour_id"]);
					}
					$data = array('responce'=>'success', 'message'=>'Retour avec succès quantité modifier');

							
				}	
						
				//$data = array('responce'=>'success', 'message'=>$ajax_data, 'quantite'=>$quantite);	
				/*		
				// get quantité à ptmagasin
				if($query = $this->mainModel->get_stock($ajax_data["produitretour"])){
					// get stock
				foreach($query->result() as $row) {
					$stock = $row->stock;
					}	
				}	
				$data = array('responce'=>'success', 'message'=>'quantité'.$garde.'stock'.$stock);
								
				//$operation = ((float)$stock) - (float)$ajax_data["quantite"];
				
				if($operation >=$garde ){
					$update = array("id" => $ajax_data["produit"],
									"stock" =>$operation
									);
					$this->mainModel->update_stock($update);				
					if($this->mainModel->insert_transfer($ajax_data)){						
						$data = array('responce' =>'success', 'message'=>'Donné insérer dans la base, stock modifié à : '.$operation);
					}else{
						$data = array('responce' =>'error', 'message'=>'Transfère échoué' );
					}
				}else{
					$data = array('responce' =>'error', 'message'=>'transfère échoué' );
				}*/
								
			}
			echo json_encode($data);

		}else {
			echo "No direct script access allowed";
		}
	}
	// edit de retour

	public function edit_retourner() {
		if($this->session->userdata('level')==='3'){
			if($this->input->is_ajax_request()) {
				$retour_id = $this->input->post('retour_id');
				if($post = $this->mainModel->edit_return($retour_id)) {
					$data = array('responce' => 'success', 'post'=>$post);
	
				}else{
					$data = array('responce' =>'error', 'message'=>'un erreur est servenu');
				}
				echo json_encode($data);
			}else{
				echo "No direct script access allowed";
			}
		}else{
			redirect("login");
		}
		
	}
	// FONCTION DES STATISTIQUES*****************
	public function fetch_data_stat()
	{
		if($this->input->is_ajax_request()){
			$chart_data = $this->mainModel->fetch_chart_data($this->input->post('annee'));
			foreach($chart_data->result_array() as $row ) {
				$output[] = array(
					'moi' => $row['moi'],
					'quantite' =>floatval($row['quantite'])
				);
			}
			echo json_encode($output);
		}else{
			echo "No direct script access allowed";
		}
	}
}
