<?php
class MainModel extends CI_Model {

public function check_user($username, $password)
{
       $this->db->select("*");
       $this->db->from('users');
       $this->db->where('nom',$username);
       $this->db->where('password', md5($password));
       $query = $this->db->get();
       return $query; 
}

public function get_entries()
{
        $query = $this->db->get('gmagasin');
        if(count($query->result())>0) {
                return $query->result();
        }
        
}
//
// get total stock
public function get_total_stock()
{
        $query = $this->db->query('SELECT SUM(stock) AS totalstock FROM gmagasin');
        if(count($query->result()) > 0) {
                return $query->row();
        }
        
}

// get total envoyer
public function get_total_envoyer()
{
        $query = $this->db->query('SELECT SUM(quantite) AS totalenvoyer FROM commande');
        if(count($query->result()) > 0) {
                return $query->row();
        }
        
}

// insert grand magasin
public function insert_entry($data)
{
       
   return $this->db->insert('gmagasin', $data);
}
// insert petit magasin
public function insert_transfer_pm($data)
{
        return $this->db->insert('ptmagasin', $data);
}
// insert retour
public function insert_retour($data) {
        return $this->db->insert('retour', $data);  
}
// edit table
public function edit_entry($id){
        $this->db->select("*");
        $this->db->from("gmagasin");
        $this->db->where("id",$id);
        $query = $this->db->get();
        if(count($query->result()) > 0) {
                return $query->row();
        }
}
// edit return
public function edit_return($id){
        $this->db->select("*");
        $this->db->from("ptmagasin");
        $this->db->where("idptmagasin",$id);
        $query = $this->db->get();
        if(count($query->result()) > 0) {
                return $query->row();
        }
}
// insert users
public function insert_entry_users($data)
{
       
   return $this->db->insert('users', $data);
}
public function delete_entry($id) {
 return $this->db->delete('gmagasin',array('id'=> $id));
}
// delete historique
public function delete_entry_historique($id) {
        return $this->db->delete('commande',array('idCommande'=> $id));
       }
// delete detail ptmagasin
public function delete_detail_ptmagasin($id) {
        return $this->db->delete('ptmagasin',array('idptmagasin'=> $id));
}
public function update_entry($data)
{
   return  $this->db->update('gmagasin', $data, array('id' => $data['id']));
}

// get destination
public function get_destination()
{
        $query = $this->db->get('destination');
        if(count($query->result())>0) {
                return $query->result();
        }
        
}
// get location
public function get_location()
{       
        $query = $this->db->get('location');
        if(count($query->result())>0) {
                return $query->result();
        }
}
// insert transfere
public function insert_transfer($data)
{
        return $this->db->insert('commande',$data);
}
// get stock
public function get_stock($id)
{
        $this->db->select("stock");
        $this->db->from("gmagasin");
        $this->db->where("id",$id);
        $query = $this->db->get();
        return $query;
}
//update stock
public function update_stock($update)
{
       return  $this->db->update('gmagasin', $update, array('id' => $update['id']));
}
// get quantite a garder
public function get_agarder($id)
{
        $this->db->select("agarder");
        $this->db->from("gmagasin");
        $this->db->where("id",$id);
        $query = $this->db->get();
        return $query;
}
// get transfer historique
public function get_transfere()
{       
        $query = $this->db->query('SELECT commande.idCommande AS id ,  commande.quantite AS quantite,  commande.envoyeur AS envoyeur, commande.dateCommande AS dateCommande,gmagasin.numCommande AS produit,  destination.nom AS destination
        FROM commande
        INNER JOIN gmagasin
        ON commande.produit = gmagasin.id
        INNER JOIN destination
        ON commande.destination = destination.idDestination
        ORDER BY dateCommande DESC  ');
        if(count($query->result())>0) {
                return $query->result();
        }
        
}
// get ptmagasin
public function get_commande_ptmagasin()
{       
        $query = $this->db->query('SELECT ptmagasin.idptmagasin AS id ,ptmagasin.quantite AS quantite,  ptmagasin.envoyeur AS envoyeur, ptmagasin.dateCommande AS dateCommande,gmagasin.numCommande AS produit
        FROM ptmagasin
        INNER JOIN gmagasin
        ON ptmagasin.produit = gmagasin.id
        ORDER BY dateCommande DESC  ');
        if(count($query->result())>0) {
                return $query->result();
        }
        
}
//get quantite ptmagasin
public function get_quantite_ptmagasin($id)
{
        $this->db->select("quantite");
        $this->db->from("ptmagasin");
        $this->db->where("idptmagasin",$id);
        $query = $this->db->get();
        return $query;
}
//update stock
public function update_quantite_ptmagasin($update)
{
       return  $this->db->update('ptmagasin', $update, array('idptmagasin' => $update['idptmagasin']));
}
//STATISTIQUE ******
// fetch_year statistique
public function fetch_year()
{
  $query = $this->db->query('SELECT YEAR(arrive) AS annee FROM gmagasin GROUP BY annee ORDER BY annee DESC ');
  return $query;

}
// fecth_chart_data
public function fetch_chart_data($annee)
{
  /*$sql = "SELECT cpaisage FROM gmagasin WHERE YEAR(arrive) = ?";
  $query = $this->db->query($sql, array($annee));
  return $query->result();*/
  $this->db->select("SUM(cpaisage) AS quantite, MONTH(arrive) AS moi ");
  $this->db->from("gmagasin");
  $this->db->where('YEAR(arrive)',$annee);
  $this->db->group_by("MONTH(arrive)");
  $this->db->order_by('MONTH(arrive)','ASC');
  $query= $this->db->get();
  return $query;
}

}