<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {


	public function index()
	{
		$this->load->view('login');
	}
	public function submit(){

		if($this->input->post('username')&&$this->input->post('password')){
			
			
			redirect('/backoffice/frame');
			
		}
		$data['error'] = "Missing Username or Password ";
		$this->load->view('login',$data);
	}
}

/* End of file /login.php */
/* Location: ./application/modules/backoffice/controllers/welcome.php */