<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Profile extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}


	public function getProfile($id){
		$this->db->where('id_user', $id);
		$query = $this->db->get('tbl_user');
		return $query->result();
	}

	public function getSimpan($idevent,$iduser){
		$this->db->where('idevent', $idevent);
		$this->db->where('id_user', $iduser);
		return $this->db->get('tbl_simpan_event')->result();
	}

	public function getSimpanEvent($iduser){
		$this->db->select('id_simpan,tbl_simpan_event.idevent as id_event,nama_event,image');
		$this->db->from('tbl_event');
		$this->db->join('tbl_simpan_event', 'tbl_simpan_event.idevent = tbl_event.idevent', 'inner');
		$this->db->where('id_user', $iduser);
		return $this->db->get()->result();
	}

	public function saveEvent($idevent,$iduser){
		$object = array('idevent' => $idevent ,
			'id_user'=>$iduser);
		$this->db->insert('tbl_simpan_event', $object);
	}

	public function batalSimpan($id){
		$this->db->where('id_simpan', $id);
		$this->db->delete('tbl_simpan_event');
	}

}

/* End of file Model_Profile.php */
/* Location: ./application/models/Model_Profile.php */