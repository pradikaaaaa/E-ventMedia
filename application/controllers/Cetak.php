<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cetak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_event');
		$this->load->library('dompdf_gen');
		$this->load->helper('file');
	}

	public function index()
	{
		
	}

	public function previewEvent(){
		$data['event'] = $this->model_event->detailEvent('8');
		$this->load->view('print/print_event',$data);
	}

	public function cetakEvent($id,$filename){
		$data['event'] = $this->model_event->detailEvent($id);
		$this->load->view('print/print_event',$data);
		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();



		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Event ".$filename.".pdf");
		unset($html);
		unset($dompdf);

	}

}

/* End of file Cetak.php */
/* Location: ./application/controllers/Cetak.php */