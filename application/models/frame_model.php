<?php

class Frame_model extends CI_Model {
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }
	function getFrameList(){
		var_dump($this);
		var_dump($this->db);exit;
		//$sql = "SELECT * FROM ".$this->db->prefix."frame ";
		//$data  = $this->db->query($sql);
		//var_dump($data);
	}
}

?>