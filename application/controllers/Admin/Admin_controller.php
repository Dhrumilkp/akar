<?php 
class Admin_controller extends CI_Controller 
{
    public function admin()
    {
        if(isset($_SESSION['csrf']))
        {
            redirect(base_url()."home");
        }
        else
        {
            $this->load->view('Admin/login_view');
        }
    }
}
