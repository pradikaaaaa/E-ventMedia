<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Event extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_all_kategori(){
		$this->datatables->select('kode_kategori,kategori_event');
		$this->datatables->add_column('edit',anchor('','Edit', array('class'=>'btn btn-warning btn-sm btn-block')),'kode_kategori');
		$this->datatables->add_column('hapus',anchor('','Hapus', array('class'=>'btn btn-danger btn-sm btn-block')),'kode_kategori');
		$this->datatables->from('tbl_kategori_event');
		return $this->datatables->generate();
	}

	public function getKategori(){
		$query = $this->db->query('select * from tbl_kategori_event');
		return $query->result();
	}

	public function get_kategori($kode){
		$this->db->where('kode_kategori', $kode);
		$query = $this->db->get('tbl_kategori_event');
		return $query->result();
	}

	public function insertKategori(){
		$object = array('kode_kategori' => $this->input->post('newkode'),
			'kategori_event' => $this->input->post('newkategori'),
		);
		$this->db->insert('tbl_kategori_event', $object);
	}

	public function updateKategori($kode){
		$data = array('kategori_event' => $this->input->post('kategori'));
		$this->db->where('kode_kategori', $kode);
		$this->db->update('tbl_kategori_event', $data);
	}

	public function deleteKategori($kode){
		$this->db->where('kode_kategori', $kode);
		$this->db->delete('tbl_kategori_event');
	}


/*-----------------------------------------------*/
	public function getEvent(){
		//$query = $this->db->query('select * from tbl_event');
		$this->db->select('idevent, nama_event, DATE_FORMAT(tanggal_event,"%d %M %Y") as tanggal,lokasi,kapasitas,tiket,status_tampil');
		$this->db->from('tbl_event');
		$query = $this->db->get();
		return $query->result();
	}

	public function insertEvent(){
		$object = array('nama_event'=>$this->input->post('nama_event'),
				'kode_kategori'=>$this->input->post('kategori'),
				'tanggal_event'=>$this->input->post('tanggal'),
				'lokasi'=>$this->input->post('lokasi'),
				'kapasitas'=>$this->input->post('kapasitas'),
				'tiket'=>$this->input->post('harga_tiket'),
				'deskripsi'=>$this->input->post('deskripsi'),
				'image'=>$this->upload->data('file_name'),
				'status_tampil'=>'0'
			);
		//return print_r($object);
		$this->db->insert('tbl_event', $object);
	}

	public function updateEvent($id){
		$object = array('nama_event'=>$this->input->post('nama_event'),
				'kode_kategori'=>$this->input->post('kategori'),
				'tanggal_event'=>$this->input->post('tanggal'),
				'lokasi'=>$this->input->post('lokasi'),
				'kapasitas'=>$this->input->post('kapasitas'),
				'tiket'=>$this->input->post('tiket'),
			);
		$this->db->where('idevent', $id);
		$this->db->update('tbl_event', $object);
	}

	public function updateDeskripsi($id){
		$object = array('deskripsi'=>$this->input->post('deskripsi'));
		$this->db->where('idevent', $id);
		$this->db->update('tbl_event', $object);
	}

	public function updateImage($id){
		$object = array('image'=>$this->upload->data('file_name'));
		$this->db->where('idevent', $id);
		$this->db->update('tbl_event', $object);
	}

	public function detailEvent($id){
		$this->db->select('idevent, nama_event, kategori_event, DATE_FORMAT(tanggal_event,"%d %M %Y") as tanggal, DATE_FORMAT(tanggal_event,"%H:%i") as jam,lokasi,kapasitas,tiket,image,deskripsi,tanggal_event');
		$this->db->from('tbl_event');
		$this->db->join('tbl_kategori_event', 'tbl_event.kode_kategori = tbl_kategori_event.kode_kategori', 'inner');
		$this->db->where('idevent', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function status_tampil($id){
		$data = array('status_tampil' => $this->input->post('status_tampil'));
		$this->db->where('idevent', $id);
		$this->db->update('tbl_event', $data);
	}

	public function deleteEvent($id){
		$this->db->where('idevent', $id);
		$this->db->delete('tbl_event');
	}

	/*-----------front end----------------*/
	public function cari_event($field,$value){
		$this->db->where($field, $value);
		$this->db->where('status_tampil', '1');
		$query = $this->db->get('tbl_event');
		return $query->result();
	}

	public function cari_event_like($field,$value){
		$this->db->like($field, $value);
		$this->db->where('status_tampil', '1');
		$query = $this->db->get('tbl_event');
		return $query->result();
	}

	public function daftar_event($limit){
		//$this->db->order_by('title', 'desc');
		$this->db->where('status_tampil', '1');
		$query = $this->db->get('tbl_event',$limit);
		return $query->result();
	}

	public function random_event($id){
		$this->db->where('idevent !=', $id);
		$this->db->where('status_tampil', 1 );
		$this->db->order_by('idevent', 'random');
		return $this->db->get('tbl_event', 1)->result();
	}

	/*----------------Pagination-------------------*/
	public function jumlah_event(){
		$query = $this->db->get('tbl_event');
		return $query->num_rows();
	}

	public function data_event($number,$offset){
		$this->db->where('status_tampil', '1');
		$query = $this->db->get('tbl_event', $number, $offset);
		return $query->result();
	}

}

/* End of file Model_Event.php */
/* Location: ./application/models/Model_Event.php */