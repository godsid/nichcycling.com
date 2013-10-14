<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Intro extends CI_Controller {

	function index(){
		$this->load->view('intro');
	}

}