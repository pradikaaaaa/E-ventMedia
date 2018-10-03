<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_user');
		$this->load->model('model_login');
		$this->load->model('model_event');
		$this->load->model('model_profile');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		
	}

	public function profil($id){
		$data = array('profil' => $this->model_user->get_user($id),
				'kategori' => $this->model_event->getKategori() );
		// $data['profil'] = $this->model_profile->getProfile($id);
		$this->load->view('pages/user_view', $data);
	}

	public function editprofile($id){
		$data = array('user' => $this->model_user->get_user($id),
				'kategori' => $this->model_event->getKategori() );
		// $data['profil'] = $this->model_profile->getProfile($id);
		$this->load->view('pages/user_edit', $data);
	}

	public function eventTersimpan($id){
		$data = array('profil' => $this->model_user->get_user($id),
				'kategori' => $this->model_event->getKategori(),
				'simpan' => $this->model_profile->getSimpanEvent($id) );
		// $data['profil'] = $this->model_profile->getProfile($id);
		$this->load->view('pages/simpan_event', $data);
	}
	/*-------*/
	public function editUser($id){
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('telp', 'Nomor Telepon', 'trim|required|min_length[11]|max_length[12]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

		//$data['user'] = $this->model_user->get_User($id);

		if ($this->form_validation->run() ==  FALSE) {
			//$this->editUser($id);
			//echo "error";
			redirect('profile/editprofile/'.$id,'refresh');
		} else {
			// 
			$this->model_user->updateUser($id);
			redirect('profile/profil/'.$id,'refresh');
		}
	}


	public function editPassword(){
		$this->form_validation->set_rules('password_lama', 'Password Lama', 'trim|required|callback_cekPassword');
		$id = $this->input->post('id');
		$data['user'] = $this->model_user->get_User($id);
		if ($this->form_validation->run() == FALSE) {
			redirect('profile/editprofile/'.$id,'refresh');
		} else {
			$this->model_user->updatePassword($id);
			redirect('login/logout','refresh');
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

	/*-------*/
	public function simpanEvent($idevent,$iduser){
		$cek = $this->model_profile->getSimpan($idevent,$iduser);
		if(empty($cek)){
			$this->model_profile->saveEvent($idevent,$iduser);
		}
		redirect('login/detailevent/'.$idevent,'refresh');	
	}

	public function hapusSimpan($idevent,$iduser){
		$this->model_profile->batalsimpan($idevent);
		redirect('profile/eventTersimpan/'.$iduser,'refresh');
	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */