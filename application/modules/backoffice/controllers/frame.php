<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frame extends MX_Controller {

	public function index()
	{
		$data['user'] = modules::run('backoffice/user/checkLogin');
		
		
		$this->load->model('frame_model','MFrame');
		$this->MFrame->getFrameList();
		
		$this->load->view('frame',$data);
	}
}

/* End of file frame.php */
/* Location: ./application/modules/backoffice/controllers/frame.php */