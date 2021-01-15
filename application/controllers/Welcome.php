<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home/Home_model');
	}
	public function index()
	{
		$data['category_data'] = $this->Home_model->getcatdata();
		$this->load->view('welcome_message',$data);
	}
}
