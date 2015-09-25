<?php
	class Journal extends CI_Controller{
		function __construct()
		{
			// Call the Model constructor
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->helper('date');
			$this->load->library('pagination');
			$this->load->helper('security');
			$this->load->model('Journal_Model','',TRUE);
		}
		public function index()
		{
			$content['data'] = $this->Journal_Model->get_post();
			$content['data1'] = $this->Journal_Model->get_month();
			$id_blog = 0;
			foreach($content['data'] as $row){
				$id_blog = $row->id_blog;
			}
			$content['data2'] = $this->Journal_Model->get_alltag();
			//print_r($content['data2']);
			$i=0;
			$text = array();
			foreach($content['data2'] as $row){
				$text[$i] = $this->Journal_Model->get_tag_content($row->id_tag);
				$i++;
			}
			$content['data3'] = $text;
			//print_r($content['data3']);
			//print_r($content['data']);
			
			$this->load->view('header');
			$this->load->view('navigation');
			$this->load->view('journal',$content);
			$this->load->view('footer');
		}
		public function bydate($time){
			$content['data'] = $this->Journal_Model->get_content_by_date($time);
			$content['data'] = $this->Journal_Model->get_post();
			$content['data1'] = $this->Journal_Model->get_month();
			$id_blog = 0;
			foreach($content['data'] as $row){
				$id_blog = $row->id_blog;
			}
			$content['data2'] = $this->Journal_Model->get_alltag();
			//print_r($content['data2']);
			$i=0;
			$text = array();
			foreach($content['data2'] as $row){
				$text[$i] = $this->Journal_Model->get_tag_content($row->id_tag);
				$i++;
			}
			$content['data3'] = $text;
			$this->load->view('journal',$content);
		}
	}
?>