<?php
	class Story_Model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->library('session');
		}
		
		var $table = 'story';
		
		function get_story(){
			$query = $this->db->get_where($this->table,array('id_story'=>1));
			return $query->result();
		}
	}
?>
