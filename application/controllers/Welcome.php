<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->library('ciqrcode');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');

		$params['data'] = '343434|fsfdsf|safkjd|342.8431dfdf|hf|7dttrt|dgtdfgdg|sd';
		$params['level'] = 'H';
		$params['size'] = 3;
		$params['savename'] = FCPATH.'tes.png';
		$data['qr'] = $this->ciqrcode->generate($params);
		$this->load->view('html_to_pdf', $data, FALSE);
		//echo '<img src="'.base_url().'tes.png" />';
	}
}
