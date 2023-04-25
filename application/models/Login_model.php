<?php
class Login_model extends CI_Model {

public function __construct()
{
    parent::__construct();
    
}
public function check_user($phone, $password)
{
       $this->db->select("*");
       $this->db->from('users');
       $this->db->where('phone',$phone);
       $this->db->where('password', md5($password));
       $query = $this->db->get();
       return $query; 
}



}