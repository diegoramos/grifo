<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {

	public function index()
	{
		$data['info'] = "";
		$this->load->view('template/header', $data, FALSE);
		$this->load->view('template/menu', $data, FALSE);
		$this->load->view('prueba', $data, FALSE);
		$this->load->view('template/footer', $data, FALSE);	
	}

}

/* End of file Prueba.php */
/* Location: ./application/controllers/Prueba.php */