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
        $headers = apache_request_headers();
        if (isset($headers['csrftoken'])) {
            if ($headers['csrftoken'] !== $_SESSION['csrf']) {
                header('HTTP/1.1 403 Forbidden');
            }
            else
            {
                $this->Home_model->createcat($_POST);
            }
        }
        else
        {
            header('HTTP/1.1 403 Forbidden');
        }
    }
    public function updateslider()
    {
        $headers = apache_request_headers();
        if (isset($headers['csrftoken'])) {
            if ($headers['csrftoken'] !== $_SESSION['csrf']) {
                header('HTTP/1.1 403 Forbidden');
            }
            else
            {
                $this->Home_model->updateslider($_POST);
            }
        }
        else
        {
            header('HTTP/1.1 403 Forbidden');
        } 
    }
    public function admincontact()
    {
        if(isset($_SESSION['csrf']))
        {
            $this->load->view('Home/Contact_view');
        }
        else
        {
            redirect(base_url());
        }
    }
    public function updatecontact()
    {
        $headers = apache_request_headers();
        if (isset($headers['csrftoken'])) {
            if ($headers['csrftoken'] !== $_SESSION['csrf']) {
                header('HTTP/1.1 403 Forbidden');
            }
            else
            {
                $this->Home_model->updatecontact($_POST);
            }
        }
        else
        {
            header('HTTP/1.1 403 Forbidden');
        }
    }
}
