<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Sale');
		$this->load->model('Detail');
	}

	// List all your items
	public function index( $offset = 0 )
	{
		$data['info'] = "";
		$this->load->view('template/header', $data, FALSE);
		$this->load->view('template/menu', $data, FALSE);
		$this->load->view('sales', $data, FALSE);
		$this->load->view('template/footer', $data, FALSE);
	}

	public function add_sales()
	{
		$data_sale = array(
				'emp' => $this->input->post('emp'),
				'fecha' => $this->input->post('fecha'),
				'hora' => $this->input->post('hora'),
				'nro' => $this->input->post('nro'),
				'nro2' => $this->input->post('nro2'),
				'nro3' => $this->input->post('nro3'),
				'nom' => $this->input->post('nom'),
				'ruc' => $this->input->post('ruc'),
				'dir' => $this->input->post('dir'),
				'usu' => $this->input->post('usu'),
				'tur' => $this->input->post('tur'),
				'placa' => $this->input->post('placa'),
				'caja' => $this->input->post('caja'),
				'maq' => $this->input->post('maq'),
				'mangue' => $this->input->post('mangue'),
				'recibo' => $this->input->post('recibo'),
				'kilome' => $this->input->post('kilome'),
				'fecha_revi' => $this->input->post('fecha_revi'),
				'fecha_cili' => $this->input->post('fecha_cili'),
				'sub' => $this->input->post('sub_total'),
				'igv' => $this->input->post('igv'),
				'total' => $this->input->post('precio_total')
			);

		$insert = $this->Sale->save_item($data_sale);

		if (isset($_POST['articulo'])) {
			for ($i=0; $i < count($_POST['articulo']); $i++) {
				$data_detail = array(
					'salida' => $insert,
					'prod' => $_POST['articulo'][$i],
					'cantidad' => $_POST['cantidad'][$i],
					'precio' => $_POST['precio'][$i],
					'sub' => $_POST['total'][$i],
				);
				$this->Detail->save_detail($data_detail);
			}
		}

		echo json_encode(array("status" => TRUE));
	}

}

/* End of file Sales.php */
/* Location: ./application/controllers/Sales.php */
