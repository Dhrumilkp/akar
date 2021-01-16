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
		$data['get_contact_data'] = $this->Home_model->getcontact_data();
		$data['get_address_data'] = $this->Home_model->getaddress_data();
		$this->load->view('welcome_message',$data);
	}
	public function about()
    {
		$data['category_data'] = $this->Home_model->getcatdata();
		$data['get_contact_data'] = $this->Home_model->getcontact_data();
		$data['get_address_data'] = $this->Home_model->getaddress_data();
        $this->load->view('About/About_view',$data);
	}
	public function shop()
    {
		$data['category_data'] = $this->Home_model->getcatdata();
		$data['get_contact_data'] = $this->Home_model->getcontact_data();
		$data['get_address_data'] = $this->Home_model->getaddress_data();
        $this->load->view('Shope/Shope_view',$data);
	}
	public function contact()
	{
		$data['category_data'] = $this->Home_model->getcatdata();
		$data['get_contact_data'] = $this->Home_model->getcontact_data();
		$data['get_address_data'] = $this->Home_model->getaddress_data();
		$data['get_google_map'] =  $this->Home_model->getgooglemarker();
		$this->load->view('Contact/Contact_view',$data);
	}
}
