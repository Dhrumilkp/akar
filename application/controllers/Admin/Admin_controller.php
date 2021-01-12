<?php 
class Admin_controller extends CI_Controller 
{
    public function admin()
    {
        $this->load->view('Admin/login_view.html');
    }
}
