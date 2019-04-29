<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
        if($this->session->userdata('user_id') <= 0 )
        {
            redirect('login');
        }
	}

	// List all your items
	public function index( $offset = 0 )
	{
		$data['info'] = "";
		$this->load->view('template/header', $data, FALSE);
		$this->load->view('template/menu', $data, FALSE);
		$this->load->view('home', $data, FALSE);
		$this->load->view('template/footer', $data, FALSE);
	}

	public function logout($value='')
	{
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('first_name');
        $sdata['message']="Has salido satisfactoriamente del sistema";
        $this->session->set_userdata($sdata);
        redirect('login','refresh');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
