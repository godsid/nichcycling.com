<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {

	function index(){
		$this->load->view('welcome_message');
	}

}
?>