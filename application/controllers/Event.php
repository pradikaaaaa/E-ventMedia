<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_event');
		$this->load->helper('form');
		$this->load->library('form_validation');

		$config['upload_path'] = './assets/image/event';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '1000000000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';
		$this->load->library('upload', $config);

		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		}else{
			redirect('login','refresh');
		}
	}

	public function index()
	{
		
	}

	public function kategori_list(){
		$this->load->view('admin/kategori_list');
	}

	public function event_list(){
		$data['event']=$this->model_event->getEvent();
		$this->load->view('admin/event_list',$data);
	}

	public function event_tambah(){
		$data['select_kategori'] = $this->model_event->getKategori();
		$this->load->view('admin/event_tambah',$data);
	}

	public function event_detail($id){
		$data = array('event' => $this->model_event->detailEvent($id),
				'kategori' => $this->model_event->getKategori() );
		//$data['event']=$this->model_event->detailEvent($id);
		$this->load->view('admin/event_detail',$data);
	}


	/** ----------------------------------------------- **/
	//buat table
	public function kategori_data(){
		// echo $this->model_event->get_all_kategori();
		$data=$this->model_event->getKategori();
		echo json_encode($data);
	}

	public function tambahKategori(){
		$this->form_validation->set_rules('newkode', 'Kode Kategori', 'trim|required|max_length[4]');
		$this->form_validation->set_rules('newkategori', 'Kategori Event', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			$this->kategori_list();
		} else {
			$this->model_event->insertKategori();
			$this->kategori_list();
		}
	}

	public function editKategori(){
		$this->form_validation->set_rules('kategori', 'Kategori Event', 'trim|required');
		$kode = $this->input->post('kode');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('admin/kategori_list');
		} else {
			$this->model_event->updateKategori($kode);
			$this->kategori_list();
		}
	}

	public function hapusKategori(){
		$kode = $this->input->post('hapuskode');
		$this->model_event->deleteKategori($kode);
		$this->kategori_list();
	}

	/** ----------------------------------------------- **/

	public function tambahEvent(){
		$this->form_validation->set_rules('nama_event', 'Nama Event', 'trim|required');
		//$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('kapasitas', 'Kapasitas', 'trim|required');
		$this->form_validation->set_rules('harga_tiket', 'Tiket', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->event_tambah();
		} else {
			
			if ( !$this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else{
				// $data = array('upload_data' => $this->upload->data());
				// print_r($data);
				$this->model_event->insertEvent();
				redirect('event/event_list','refresh');
			}

		}
	}

	public function editEvent(){
		$this->form_validation->set_rules('nama_event', 'Nama Event', 'trim|required');
		//$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('kapasitas', 'Kapasitas', 'trim|required');
		$this->form_validation->set_rules('tiket', 'Tiket', 'trim|required');

		$id = $this->input->post('id');
		if ($this->form_validation->run() == FALSE) {
			$this->event_detail($id);
		} else {
			$this->model_event->updateEvent($id);
			redirect('event/event_list','refresh');
		}
	}

	public function editDeskripsi(){
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		$id = $this->input->post('id');
		if ($this->form_validation->run() == FALSE) {
			$this->event_detail($id);
		} else {
			$this->model_event->updateDeskripsi($id);
			redirect('event/event_list','refresh');
		}
	}

	public function editGambar(){
		$id = $this->input->post('id');
		if (! $this->upload->do_upload('userfile')){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}
		else{
			// $data = array('upload_data' => $this->upload->data());
			// print_r($data);
			$this->model_event->updateImage($id);
			redirect('event/event_list','refresh');
		}
	}

	public function status_tampil(){
		$this->model_event->status_tampil($this->input->post('idevent'));
		redirect('event/event_list','refresh');
	}

	public function hapusEvent()
	{
		$id = $this->input->post('hapuskode');
		$this->model_event->deleteEvent($id);
		redirect('event/event_list','refresh');
	}

}

/* End of file Event.php */
/* Location: ./application/controllers/Event.php */