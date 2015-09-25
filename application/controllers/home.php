<?php
	class Home extends CI_Controller{
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
		}
		public function index()
		{
			$this->load->view('header');
			$this->load->view('navigation');
			$this->load->view('home');
			$this->load->view('footer');
		}
	}
?>