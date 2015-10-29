<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function _getuser(){
			
			$result = $this->db->get('users');
			return $result;
		}

		function form_insert($data){
			$this->db->insert('users',$data);

		}

		function _update_user($id,$name,$age,$email,$tel){
			$result = $this->db->where('id',$id)
									 ->set('name',$name)
									 ->set('age',$age)
									 ->set('email',$email)
									 ->set('tel',$tel)

									 ->update('users');
				return $result;
		}



		function delete_user_id($id){
			$this->db->where ('id',$id);
			$this->db->delete('users');
			
		}

	function search($keyword)
    {
        $this->db->like('id',$keyword);
        $result =   $this->db->get('users');
        return $result;
    }


}

		