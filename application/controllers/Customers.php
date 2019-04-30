<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
        if($this->session->userdata('user_id') <= 0 )
        {
            redirect('login');
        }
		$this->load->model('Sale');

	}

	// List all your items
	public function index( $offset = 0 )
	{
		$data['info'] = "";
		$this->load->view('template/header', $data, FALSE);
		$this->load->view('template/menu', $data, FALSE);
		$this->load->view('customers', $data, FALSE);
		$this->load->view('template/footer', $data, FALSE);
	}

	public function ajax_list()
	{
		$list = $this->Sale->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customer) {
			$no++;
			$row = array();
			$row[] = $customer->fecha;
			$row[] = $customer->emp;
			$row[] = $customer->nro;
			$row[] = $customer->nom;
			$row[] = $customer->usu;
			//add html for action
            $row[] = '<a class="btn btn-success" onclick="imprimir_pdf(\''.$customer->id.'\')" target="_blank"><i class="sidebar-item-icon fa fa-download"></i> Descargar</a>
            	<a class="btn btn-primary" href="'.base_url().'imprimir/ver_html/'.$customer->id.'" target="_blank"><i class="sidebar-item-icon fa fa-print"></i> Imprimir</a>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Sale->count_all(),
						"recordsFiltered" => $this->Sale->count_filtered(),
						"data" => $data,
				);
		//output to json format printJS(\''.base_url().'imprimir/ver_pdf/'.$customer->id.'\')
		echo json_encode($output);

	}
	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file Customers.php */
/* Location: ./application/controllers/Customers.php */
