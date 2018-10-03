<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_User extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_all_user(){
		$this->datatables->select('id_user,username,email');
		$this->datatables->add_column('edit',anchor('user/edituser/$1','Edit', array('class'=>'btn btn-warning btn-sm btn-block')),'id_user');
		$this->datatables->add_column('hapus',anchor('user/hapusUser/$1', 'Hapus', array('class'=>'btn btn-danger btn-sm btn-block')),'id_user');
		$this->datatables->from('tbl_user');
		$this->datatables->where('status =','user');
		return $this->datatables->generate();
	}

	public function get_User($id){
		$this->db->select('tbl_user.*,DATE_FORMAT(tanggal_lahir,"%d %M %Y") as tanggal');
		$this->db->where('id_user', $id);
		$query = $this->db->get('tbl_user');
		return $query->result();
	}

	public function insertUser(){
		$object = array('username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
			'nama_user'=>$this->input->post('nama'),
			'jenis_kelamin'=>$this->input->post('jk'),
			'tanggal_lahir'=>$this->input->post('tanggal'),
			'email'=>$this->input->post('email'),
			'no_telp'=>$this->input->post('telp'),
			'alamat'=>$this->input->post('alamat'),
			'status'=>'User'
			);
		$this->db->insert('tbl_user', $object);
	}

	public function updateUser($id){
		$object = array('username'=>$this->input->post('username'),
			'nama_user'=>$this->input->post('nama'),
			'jenis_kelamin'=>$this->input->post('jk'),
			'tanggal_lahir'=>$this->input->post('tanggal'),
			'email'=>$this->input->post('email'),
			'no_telp'=>$this->input->post('telp'),
			'alamat'=>$this->input->post('alamat'),
			);
		$this->db->where('id_user', $id);
		$this->db->update('tbl_user', $object);
	}

	public function updatePassword($id){
		$object = array('password' => md5($this->input->post('password_baru')));
		$this->db->where('id_user', $id);
		$this->db->update('tbl_user', $object);
	}

	public function getPassword($id){
		$this->db->where('id_user', $id);
		$query = $this->db->get('tbl_user');
		return $query->row()->password;
	}

	public function deleteUser($id){
		$this->db->where('id_user', $id);
		$this->db->delete('tbl_user');
	}

}

/* End of file Model_User.php */
/* Location: ./application/models/Model_User.php */