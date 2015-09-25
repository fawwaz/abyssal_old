<?php
	class Goods extends CI_Controller{
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
			$this->load->model('Goods_Model','',TRUE);
		}
		public function index()
		{
			$content['data'] = $this->Goods_Model->get_product('Wallet');
			$this->load->view('header');
			$this->load->view('navigation');
			$this->load->view('goods',$content);
			$this->load->view('footer');
		}
		
		public function browse($category)
		{
			$content['data'] = $this->Goods_Model->get_product($category);
			$this->load->view('header');
			$this->load->view('navigation');
			$this->load->view('goods',$content);
			$this->load->view('footer');
		}
		
		public function detail($id){
			$content['data'] = $this->Goods_Model->get_detail($id);
			$content['id'] = $id;
			$this->load->view('header');
			$this->load->view('navigation');
			$this->load->view('detailgoods',$content);
			$this->load->view('footer');
		}
	}
?>