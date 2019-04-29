<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imprimir extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
        if($this->session->userdata('user_id') <= 0 )
        {
            redirect('login');
        }

		$this->load->library('ciqrcode');
		$this->load->model('Imprime');

	}

	// List all your items
	public function index( $offset = 0 )
	{
		echo "Errpr al acceder";
	}

	public function ver_html($id)
	{
		$dataqr = $this->Imprime->get_print_id($id);
		$data['info'] = $this->Imprime->get_print_id($id);
		$data['items'] = $this->Imprime->get_print_detale_id($id);

		$params['data'] = "'".$dataqr->ruc."|".$dataqr->nro."|".$dataqr->igv."|".$dataqr->total."|".$dataqr->fecha."'";
		$params['level'] = 'H';
		$params['size'] = 2;
		$params['savename'] = FCPATH.'uploads/'.$dataqr->nro.'.png';
		$data['qr'] = $this->ciqrcode->generate($params);

		$this->load->view('imprimir_ticket', $data, FALSE);
	}

	public function ver_pdf($id)
	{
		$data['info'] = $this->Imprime->get_print_id($id);
		$data['items'] = $this->Imprime->get_print_detale_id($id);

		$dataqr = $this->Imprime->get_print_id($id);
		$data['info'] = $this->Imprime->get_print_id($id);
		$data['items'] = $this->Imprime->get_print_detale_id($id);

		$params['data'] = "'".$dataqr->ruc."|".$dataqr->nro."|".$dataqr->igv."|".$dataqr->total."|".$dataqr->fecha."'";
		$params['level'] = 'H';
		$params['size'] = 2;
		$params['savename'] = FCPATH.'uploads/'.$dataqr->nro.'.png';
		$data['qr'] = $this->ciqrcode->generate($params);

        $mpdf = new \Mpdf\Mpdf(['format' => [80, 180]]);
        $html = $this->load->view('imprimir_ticket',$data, true);
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->WriteHTML($html);
        $mpdf->Output();

	}

}

/* End of file Print.php */
/* Location: ./application/controllers/Print.php */