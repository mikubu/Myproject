<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manageuser extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('Users_model','users');

	}

	function getall(){
		$data['users'] = $this->users->_getuser();
		$this->load->view('show_all3',$data);


	
	}


	function insert(){
		$postdata = array(
			'id' => $this->input->post('in_id'),
			'name' => $this->input->post('in_name'),
			'age' => $this->input->post('in_age'),
			'email' => $this->input->post('in_email'),
			'tel' => $this->input->post('in_tel'),
			);
		$this->users->form_insert($postdata);


		$data['users'] = $this->users->_getuser();
		$this->load->view('show_all3',$data);
	}

	function update(){

		$id 	=	$_POST['up_id'];
		$name 	=	$_POST['up_name'];
		$age 	=	$_POST['up_age'];
		$email 	=	$_POST['up_email'];
		$tel 	=	$_POST['up_tel'];

		$this->users->_update_user($id,$name,$age,$email,$tel);

		$data['users'] = $this->users->_getuser();
		$this->load->view('show_all3',$data);
		
		}


		function delete_user(){
		$id = $_POST['del_id'];
		$this->users->delete_user_id($id);

		$data['users'] = $this->users->_getuser();
		$this->load->view('show_all3',$data);
	}
	

     function search_keyword()
    {
        $keyword = $this->input->post('keyword');
        $data['users'] = $this->users->search($keyword);
        $this->load->view('show_all3',$data);
    }


}
	




