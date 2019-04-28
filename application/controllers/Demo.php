<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

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

	// Add a new item
	public function add()
	{
        $mpdf = new \Mpdf\Mpdf(['format' => [80, 180]]);
        $html = $this->load->view('demo3',[],true);
        $mpdf->SetDisplayMode('fullwidth');
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        //$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name
	}

	//Update one item
	public function update( $id = NULL )
	{
		$this->load->view('demo3', FALSE);
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$this->load->view('html_to_pdf', FALSE);
	}
	public function demo4($value='')
	{
		$this->load->view('demo4', FALSE);
	}

	public function demo4pdf($value='')
	{
        $mpdf = new \Mpdf\Mpdf(['format' => [80, 180]]);
        $html = $this->load->view('demo4',[], TRUE);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
	}
}

/* End of file Demo.php */
/* Location: ./application/controllers/Demo.php */
