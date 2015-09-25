<?php
	class Backend extends CI_Controller{
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
			$this->load->model('Goods_Model','',TRUE);
		}
		public function index()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_dashboard');
		}
		public function view_goods()
		{
			$category = $this->input->post('category');
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$content["goods"] = $this->Goods_Model->get_product($category);
			$content["category"] = $this->Goods_Model->get_category();
			$this->load->view('backend_goods_view',$content);
		}
		public function add_goods()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_goods_add');
		}
		
		public function do_add(){
			$id = $this->input->post("id_goods");
			$title = $this->input->post("title");
			$desc = $this->input->post("description");
			$price = $this->input->post("price");
			$image1 = "";
			$image2 = "";
			$image3 = "";
			$content["error"] = "";
			$content["error_img1"] = "";
			$content["error_img2"] = "";
			$content["error_img3"] = "";
			
			if ($_FILES["image1"]["error"] > 0 && $_FILES["image2"]["error"] > 0 && $_FILES["image3"]["error"] > 0)
			{
				$content["error_img1"] = $_FILES["image1"]["error"];
				$content["error_img2"] = $_FILES["image2"]["error"];
				$content["error_img3"] = $_FILES["image3"]["error"];
			}
			else
			{
				//echo "Upload: " . $_FILES["file"]["name"] . "<br>";
				//echo "Type: " . $_FILES["file"]["type"] . "<br>";
				//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
				//echo "Stored in: " . $_FILES["file"]["tmp_name"];
				$image1 = $_FILES["image1"]["name"];
				$image2 = $_FILES["image2"]["name"];
				$image3 = $_FILES["image3"]["name"];
				/*
				if (file_exists("img/" . $_FILES["image1"]["name"]))
				{
					$content["error"] = $_FILES["image1"]["name"] . " already exists. ";
				}
				else if(file_exists("img/" . $_FILES["image2"]["name"])){
					$content["error"] = $_FILES["image2"]["name"] . " already exists. ";
				}
				else if(file_exists("img/" . $_FILES["image3"]["name"])){
					$content["error"] = $_FILES["image3"]["name"] . " already exists. ";
				}
				else
				{
				*/
					$content["error"] = "success";
					move_uploaded_file($_FILES["image1"]["tmp_name"], "img/" . $_FILES["image1"]["name"]);
					move_uploaded_file($_FILES["image2"]["tmp_name"], "img/" . $_FILES["image2"]["name"]);
					move_uploaded_file($_FILES["image3"]["tmp_name"], "img/" . $_FILES["image3"]["name"]);
					
					$image1 = $_FILES["image1"]["name"];
					$image2 = $_FILES["image2"]["name"];
					$image3 = $_FILES["image3"]["name"];
					
					
					$data = array("title"=>$title, "description"=>$desc, "price"=>$price, "image1"=>$image1, "image2"=>$image2, "image3"=>$image3);
					$this->db->insert('goods', $data); 
					redirect("backend/view_goods","refresh");
					/*
				}
				*/
			}
		}
		
		public function edit_goods($id)
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$content["goods"] = $this->Goods_Model->get_detail($id);
			$content["error"] = "";
			$content["error_img1"] = "";
			$content["error_img2"] = "";
			$content["error_img3"] = "";
			$this->load->view('backend_goods_edit',$content);
		}
		
		public function do_edit()
		{
			$id = $this->input->post("id_goods");
			$title = $this->input->post("title");
			$desc = $this->input->post("description");
			$price = $this->input->post("price");
			$image1 = "";
			$image2 = "";
			$image3 = "";
			$content["error"] = "";
			$content["error_img1"] = "";
			$content["error_img2"] = "";
			$content["error_img3"] = "";
			
			if ($_FILES["image1"]["error"] > 0 && $_FILES["image2"]["error"] > 0 && $_FILES["image3"]["error"] > 0)
			{
				$content["error_img1"] = $_FILES["image1"]["error"];
				$content["error_img2"] = $_FILES["image2"]["error"];
				$content["error_img3"] = $_FILES["image3"]["error"];
			}
			else
			{
				//echo "Upload: " . $_FILES["file"]["name"] . "<br>";
				//echo "Type: " . $_FILES["file"]["type"] . "<br>";
				//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
				//echo "Stored in: " . $_FILES["file"]["tmp_name"];
				$image1 = $_FILES["image1"]["name"];
				$image2 = $_FILES["image2"]["name"];
				$image3 = $_FILES["image3"]["name"];
				/*
				if (file_exists("img/" . $_FILES["image1"]["name"]))
				{
					$content["error"] = $_FILES["image1"]["name"] . " already exists. ";
				}
				else if(file_exists("img/" . $_FILES["image2"]["name"])){
					$content["error"] = $_FILES["image2"]["name"] . " already exists. ";
				}
				else if(file_exists("img/" . $_FILES["image3"]["name"])){
					$content["error"] = $_FILES["image3"]["name"] . " already exists. ";
				}
				else
				{
				*/
					$content["error"] = "success";
					move_uploaded_file($_FILES["image1"]["tmp_name"], "img/" . $_FILES["image1"]["name"]);
					move_uploaded_file($_FILES["image2"]["tmp_name"], "img/" . $_FILES["image2"]["name"]);
					move_uploaded_file($_FILES["image3"]["tmp_name"], "img/" . $_FILES["image3"]["name"]);
					
					$image1 = $_FILES["image1"]["name"];
					$image2 = $_FILES["image2"]["name"];
					$image3 = $_FILES["image3"]["name"];
					
					if($image1 != ""){
						$data = array("image1"=>$image1);
						$this->db->where('id_goods', $id);
						$this->db->update('goods', $data); 
					}
					if($image2 != ""){
						$data = array("image2"=>$image2);
						$this->db->where('id_goods', $id);
						$this->db->update('goods', $data); 
					}
					if($image3 != ""){
						$data = array("image3"=>$image3);
						$this->db->where('id_goods', $id);
						$this->db->update('goods', $data); 
					}
					
					$data = array("title"=>$title, "description"=>$desc, "price"=>$price);
					$this->db->where('id_goods', $id);
					$this->db->update('goods', $data); 
					/*
				}
				*/
			}
			
			
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$content["goods"] = $this->Goods_Model->get_detail($id);
			$this->load->view('backend_goods_edit',$content);
		}
		
		public function manage_message()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_manage_message');
		}
		public function edit_contact()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_edit_contact');
		}
		public function story()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_story');
		}
		public function view_blog()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_blog_view');
		}
		public function add_blog()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_blog_add');
		}
		public function setting()
		{
			$this->load->view('header');
			$this->load->view('backend_sidebar');
			$this->load->view('backend_setting');
		}
	}
?>