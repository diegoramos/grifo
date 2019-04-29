<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
        if($this->session->userdata('user_id') > 0)
        {
            redirect('home', 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('login');
    }
    public function check_login(){
        $response=array();
        if($this->form_validation->run('login')!==false){
            $result=$this->User->checkLogin();
            if($result){
                $response['status']='success';
                $sdata['user_id']=$result->user_id;
                $sdata['first_name']=$result->last_name;
                $this->session->set_userdata($sdata);
            }
            else{
                $response['status']='error';
                $response['message']='Ops! algo esta mal..!!!';
            }
        }
        else{
            $response['status']='error';
            $response['message']=validation_errors();
        }
        echo json_encode($response);
    }

    public function forgot_password($value='')
    {
    	$this->load->view('forgot_password');
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
