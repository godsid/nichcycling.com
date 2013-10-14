<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Media extends CI_Controller {

	function index(){
		$this->load->view('welcome_message');
	}

	function gallery(){
		$this->load->view('welcome_message');
	}

	function video(){
		$this->load->view('welcome_message');
	}

	function news(){
		$this->load->view('welcome_message');
	}

}
?>