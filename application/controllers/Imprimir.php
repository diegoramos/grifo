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
		echo "Error al acceder";
	}

	public function ver_html($id)
	{
		$data['info'] = $this->Imprime->get_print_id($id);
		$data['items'] = $this->Imprime->get_print_detale_id($id);

		$params['data'] = "'".$data['info']->ruc."|".$data['info']->nro."|".$data['info']->igv."|".$data['info']->total."|".$data['info']->fecha."'";
		$params['level'] = 'H';
		$params['size'] = 3;
		$params['savename'] = FCPATH.'uploads/'.$data['info']->nro.'.png';
		$data['qr'] = $this->ciqrcode->generate($params);
		if ($data['info']->emp == 'GRIFOS DIANA SAC') {
			$this->load->view('imprimir_ticket', $data, FALSE);
		}else{
			$this->load->view('imprimir_paso', $data, FALSE);
		}
	}

	public function ver_pdf($id)
	{
		$data['info'] = $this->Imprime->get_print_id($id);
		$data['items'] = $this->Imprime->get_print_detale_id($id);

		$params['data'] = "'".$data['info']->ruc."|".$data['info']->nro."|".$data['info']->igv."|".$data['info']->total."|".$data['info']->fecha."'";
		$params['level'] = 'H';
		$params['size'] = 3;
		$params['savename'] = FCPATH.'uploads/'.$data['info']->nro.'.png';
		$data['qr'] = $this->ciqrcode->generate($params);

        $mpdf = new \Mpdf\Mpdf(['format' => [80, 200]]);
        if ($data['info']->emp == 'GRIFOS DIANA SAC') {
        	$html = $this->load->view('imprimir_ticket',$data, true);
        }else{
        	$html = $this->load->view('imprimir_paso',$data, true);
        }
        
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->WriteHTML($html);
        $mpdf->Output();

	}

	function print_documento($id){
	       echo  '<div class="button-group">
	          <a href="#" class="btn btn-success" onclick="printJS(\''.base_url().'imprimir/ver_pdf/'.$id.'\')">
	            IMPRIMIR
	          </a>
	          <a class="btn btn-primary" target="_blank" href="'.base_url().'imprimir/ver_pdf/'.$id.'">Abrir en navegador</a>
	          <a class="btn btn-secondary" data-dismiss="modal">Cerrar</a>
	        </div>
	        <br>
	        <iframe src="'.base_url().'imprimir/ver_pdf/'.$id.'" width="100%" height="400" frameborder="none">

	        </iframe>';

	    }

}

/* End of file Print.php */
/* Location: ./application/controllers/Print.php */