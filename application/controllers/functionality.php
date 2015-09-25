<?php
	class Functionality extends CI_Controller{
	
		public function getvote()
		{
			$id = $this->input->post('good_id');
			echo $this->goods_model->get_voting($id);
		}
		
		public function vote()
		{
			$id = $this->input->post('good_id');
			echo $this->goods_model->voting($id);
		}
		
		public function tweet()
		{
			$id = $this->input->post('good_id');
			echo $this->goods_model->tweet($id);
		}
		
		public function facebook()
		{
			$id = $this->input->post('good_id');
			echo $this->goods_model->facebook($id);
		}
	}
?>