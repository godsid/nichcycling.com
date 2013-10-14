<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MX_Controller {

	public function index()
	{
		$this->load->view('frame');

		//modules::run('module/controller/method', $params, $...);
	}

	public function checkLogin(){
		return array('username'=>'tui');
	}
}

/* End of file user.php */
/* Location: ./application/modules/backoffice/controllers/user.php */