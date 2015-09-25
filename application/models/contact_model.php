<?php
	class Contact_Model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->library('session');
		}
		
		var $table = 'message';
		
		function post_message($data){
			$this->db->insert($this->table,$data);
		}
	}
?>
