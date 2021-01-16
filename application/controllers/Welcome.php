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
		$data['get_slider_data'] = $this->Home_model->getslider_data();
		$this->load->view('welcome_message',$data);
	}
	public function about()
    {
        $this->load->view('About/About_view');
	}
	public function shop()
    {
        $this->load->view('Shope/Shope_view');
	}
	public function contact()
	{
		$this->load->view('Contact/Contact_view');
	}
}
