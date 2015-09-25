<?php
	class Goods_Model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->database();
		}
		
		var $table = 'goods';
		
		function get_category(){
			$query = $this->db->get('category');
			return $query->result();
		}
		
		function get_product($category){
			$query = $this->db->get_where($this->table,array('category'=>$category));
			return $query->result();
		}
		
		function get_detail($id){
			$query = $this->db->get_where($this->table,array('id_goods'=>$id));
			return $query->result();
		}
		
		function voting($id){
			$this->db->set('vote', 'vote+1', FALSE);
			$this->db->where('id_goods', $id);
			$this->db->update($this->table);
		}
		
		function tweet($id){
			$this->db->set('tweeter', 'tweeter+1', FALSE);
			$this->db->where('id_goods', $id);
			$this->db->update($this->table);
		}
		
		function facebook($id){
			$this->db->set('facebook', 'facebook+1', FALSE);
			$this->db->where('id_goods', $id);
			$this->db->update($this->table);
		}
		
		function update_goods(){
			
		}
	}
?>
