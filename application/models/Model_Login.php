<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Login extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function RegistrasiUser(){
		$daftar = array('username' =>$this->input->post('username'),
			'password'=>MD5($this->input->post('password')),
			'email' =>$this->input->post('email'),
			'status' => "User"
			);
		$this->db->insert('tbl_user', $daftar);
	}

	public function Login($user,$pass){
		$this->db->select('id_user,username,password,status');
		$this->db->from('tbl_user');
		$this->db->where('username', $user);
		$this->db->where('password', MD5($pass));

		$query = $this->db->get();
		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}


	public function CekUser($user){
		$this->db->select('username');
		$this->db->from('tbl_user');
		$this->db->where('username', $user);

		$query = $this->db->get();
		if($query->num_rows()==0){
			return true;
		}else{
			return false;
		}
	}
}

/* End of file Model_Login.php */
/* Location: ./application/models/Model_Login.php */