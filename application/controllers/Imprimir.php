<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imprimir extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->library('ciqrcode');
		$this->load->model('Imprime');

	}

	public function prueba($value='')
	{
		$data = $this->Imprime->get_print();
		echo "<pre>";
		print_r ($data);
		echo "</pre>";
		exit();
	}

	public function prueba2($id)
	{
		$data = $this->Imprime->get_print_detale_id($id);
		echo "<pre>";
		print_r ($data);
		echo "</pre>";
		exit();
	}
	// List all your items
	public function index( $offset = 0 )
	{
        $mpdf = new \Mpdf\Mpdf(['format' => [80, 180]]);
        $html = $this->load->view('html_to_pdf',[],true);
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        //$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name
	}
	public function code_qr()
	{
		//$this->load->view('welcome_message');
		$params['data'] = '343434|fsfdsf|safkjd|342.8431dfdf|hf|7dttrt|dgtdfgdg|sd';
		$params['level'] = 'H';
		$params['size'] = 3;
		$params['savename'] = FCPATH.'uploads/tes.png';
		$data['qr'] = $this->ciqrcode->generate($params);
		$this->load->view('imprimir_ticket', $data, FALSE);
		//echo '<img src="'.base_url().'tes.png" />';
	}

	public function ver_html($id)
	{
		$data['info'] = $this->Imprime->get_print_id($id);
		$data['items'] = $this->Imprime->get_print_detale_id($id);
		$this->load->view('imprimir_ticket', $data);
	}

	public function ver_pdf($id)
	{
		$data['info'] = $this->Imprime->get_print_id($id);
		$data['items'] = $this->Imprime->get_print_detale_id($id);

        $mpdf = new \Mpdf\Mpdf(['format' => [80, 180]]);
        $html = $this->load->view('imprimir_ticket',$data,true);
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->WriteHTML($html);
        $mpdf->Output();

	}

}

/* End of file Print.php */
/* Location: ./application/controllers/Print.php */