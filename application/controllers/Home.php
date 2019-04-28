<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

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

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
