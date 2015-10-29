<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manageuser extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('Users_model','Users');
	}

	function getall(){
		$data['users'] = $this->Users->_getUsers();
		$this->load->view('users/show_all',$data);
	}

	// function getallusers(){
	// 	//$query = $this->Users->_queryUsers();
	// 	$this->load->view('users/show_all2');
	// }
}
