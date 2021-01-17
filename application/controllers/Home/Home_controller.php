<?php 
class Home_controller extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home/Home_model');
    }
    public function home()
    {
        if(isset($_SESSION['csrf']))
        {
            $data['category_count'] = $this->Home_model->getcat_count();
            $data['get_slider_data'] = $this->Home_model->getslider_data();
            $data['get_slider_count'] = $this->Home_model->getslider_data_count();
            $this->load->view('Home/Home_view',$data);
        }
        else
        {
            redirect(base_url());
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
    public function createcat()
    {
        $this->Home_model->createcat($_POST);
    }
    public function updateslider()
    {
        $this->Home_model->updateslider($_POST);
    }
    public function admincontact()
    {
        if(isset($_SESSION['csrf']))
        {
            $data['get_contact_data'] = $this->Home_model->getcontact_data();
            $data['get_address_data'] = $this->Home_model->getaddress_data();
            $data['get_google_map'] =  $this->Home_model->getgooglemarker();
            $data['get_email_data'] = $this->Home_model->getemail();
            $this->load->view('Home/Contact_view',$data);
        }
        else
        {
            redirect(base_url());
        }
    }
    public function updatecontact()
    {
        $this->Home_model->updatecontact($_POST);
    }
    public function udpateaddress()
    {
        $this->Home_model->updateaddress($_POST);
    }
    public function updategurl()
    {
        $this->Home_model->updategoogleurl($_POST);
    }
    public function updateemail()
    {
        $this->Home_model->updatemail($_POST);
    }
    public function aabout()
    {
        if(isset($_SESSION['csrf']))
        {
            $data['get_contact_data'] = $this->Home_model->getcontact_data();
            $data['get_address_data'] = $this->Home_model->getaddress_data();
            $data['get_google_map'] =  $this->Home_model->getgooglemarker();
            $data['get_email_data'] = $this->Home_model->getemail();
            $data['get_about_header_slider'] = $this->Home_model->getaboutslider();
            $data['get_about_text_data'] = $this->Home_model->getabouttextdata();
            $this->load->view('Home/About_view',$data);
        }
        else
        {
            redirect(base_url());
        }
    }
    public function updateaboutheaderslide()
    {
        $this->Home_model->updateaboutheaderslide($_POST);
    }
    public function aboutus()
    {
        $this->Home_model->aboutusdata($_POST);
    }
}
