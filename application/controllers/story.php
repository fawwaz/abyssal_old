<?php
	class Story extends CI_Controller{
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
			$this->load->model('Story_Model','',TRUE);
		}
		public function index()
		{
			$content['data'] = $this->Story_Model->get_story();
			
			
			$this->load->view('header');
			$this->load->view('navigation');
			$this->load->view('story',$content);
			$this->load->view('footer');
		}
	}
?>