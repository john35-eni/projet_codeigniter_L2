<?php
class AdminModel extends CI_Model {

public function __construct()
{
    parent::__construct();
    
}
public function insert_crud($data)
{
       $this->db->insert('upload', $data);
}

public function insert_utilisateur($data)
{
       $this->db->insert('users', $data);
}
public function get_entries()
{
        $query = $this->db->get('users');
        if(count($query->result())>0) {
                return $query->result();
        }
        
}
// delete users
public function delete_utilisateur($id) {
       return $this->db->delete('users',array('id'=> $id));
      }

}