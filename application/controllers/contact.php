<?php
	class Contact extends CI_Controller{
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
			$this->load->model('Contact_Model','',TRUE);
		}
		public function index()
		{
			$this->load->view('header');
			$this->load->view('navigation');
			$this->load->view('contact');
			$this->load->view('footer');
		}
		
		public function post_message(){
			$message['name'] = $this->input->post('name');
			$message['email'] = $this->input->post('email');
			$message['phone'] = $this->input->post('phone');
			$message['message'] = $this->input->post('message');
			
			$this->Contact_Model->post_message($message);
			$location = base_url();
			redirect($location.'contact');
		}
	}
?>