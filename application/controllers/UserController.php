<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MainModel');
        $this->load->helper('security');


    }

    public function index()
    {
        $userRole = $this->session->userdata('user_active');
        if ($userRole != null) {
            redirect('dashboard');
        }
        $this->load->view('login');
    }


    public function loginCheck()
    {

        $email = $this->input->post('user_email');
        $password = md5($this->input->post('user_password'));
        $user = "select * from users  
where users.user_pass='$password' and users.user_email='$email' and users.user_status='active'";
        $userResult = $this->MainModel->SingleQueryData($user);
        if ($userResult) {
            $data['user_name'] = $userResult->user_name;
            $data['user_type'] = $userResult->user_type;
            $data['user_picture'] = $userResult->user_picture;
            $data['user_active'] = $userResult->user_status;
            $data['user_type'] = $userResult->user_type;
            $data['registered_date'] = date('j,M,Y', strtotime($userResult->registered_date));
            $this->session->set_userdata($data);
            redirect('dashboard');
        } else {
            $data['error'] = "Invalid Email  or password  hhhh  !!!!";
            $this->session->set_userdata($data);
            redirect('admin');
        }

    }


    public function logOut()
    {
        $this->session->unset_userdata('user_active');
        $data['message'] = "You are successfully Logout!!!!!!!!!";
        $this->session->set_userdata($data);
        redirect('admin');


    }


}
