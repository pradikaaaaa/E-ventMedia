<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_user');
		$this->load->model('model_login');
		$this->load->helper('form');
		$this->load->library('form_validation');
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		}else{
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$this->load->view('admin/user_list');
	}

	public function user_tambah(){
		$this->load->view('admin/user_tambah');
	}

	public function user_list(){
		echo $this->model_user->get_all_user();
	}

	public function tambahUser(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_cekUsername');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'trim|required|min_length[11]|max_length[12]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->user_tambah();
		} else {
			$this->model_user->insertUser();
			redirect('User','refresh');
		}
	}

	public function cekUsername($user){
		$user = $this->input->post('username');
		$hasil = $this->model_login->CekUser($user);

		if($hasil){
			return true;
		}else{
			$this->form_validation->set_message('cekUsername',"Username sudah ada");
			return false;
		}
	}

	public function editUser($id){
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'trim|required|min_length[11]|max_length[12]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

		$data['user'] = $this->model_user->get_User($id);

		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view('admin/user_edit', $data);
		} else {
			$this->model_user->updateUser($id);
			redirect('User','refresh');
		}
	}

	public function editPassword(){
		$this->form_validation->set_rules('password_lama', 'Password Lama', 'trim|required|callback_cekPassword');
		$id = $this->input->post('id');
		$data['user'] = $this->model_user->get_User($id);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/user_edit', $data);
		} else {
			$this->model_user->updatePassword($id);
			redirect('User','refresh');
		}
	}

	public function cekPassword(){
		$id = $this->input->post('id');
		$pass1 = $this->model_user->getPassword($id);
		$pass2 = md5($this->input->post('password_lama'));

		if($pass1 != $pass2){
			$this->form_validation->set_message('cekPassword',"Password tidak sama");
			return false;
		}else{
			return true;
		}
	}

	public function hapusUser($id){
		$this->model_user->deleteUser($id);
		redirect('User','refresh');
	}


}

/* End of file User.php */
/* Location: ./application/controllers/User.php */