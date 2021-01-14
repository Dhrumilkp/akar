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
            $this->load->view('Home/Home_view');
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
}
