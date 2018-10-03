<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_login');
		$this->load->model('model_event');
		$this->load->model('model_user');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('pagination');
	}


	public function settingPagination(){
		$jumlah_data = $this->model_event->jumlah_event();

		$config['base_url'] = base_url().'index.php/login/allevent/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 6;
		$config['uri_segment'] = 3;
		////adsasdsa		
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		// $config['first_link'] = 'First';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		// $config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		// $config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		// $config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="disabled"><li class="active"><a href="#">';
		$config['cur_tag_close'] = '<span class="sr-only"></span></a></li>';

		$this->pagination->initialize($config);
	}

/**--------------------buat header/link----------------------------**/
	public function index()
	{	$data = array('terbaru' => $this->model_event->daftar_event(6) ,
				'minggu_ini' =>$this->model_event->daftar_event(3),
				'kategori' => $this->model_event->getKategori() );
		//$data['terbaru'] = $this->model_event->daftar_event(6);
		$this->load->view('pages/home',$data);
	}

	public function allEvent(){

		$this->settingPagination();
		$from = $this->uri->segment(3);

		$data = array('terbaru' => $this->model_event->daftar_event(6) ,
				'semua' =>$this->model_event->data_event(6,$from),
				'kategori' => $this->model_event->getKategori() );

		$this->load->view('pages/all-event',$data);
	}

	public function detailEvent($id){
		$data = array('event' => $this->model_event->detailEvent($id),
				'kategori' => $this->model_event->getKategori(),
				'random' => $this->model_event->random_event($id) );
		$this->load->view('pages/detail-event',$data);
	}

	public function login(){
		$this->load->view('login_view');
	}

	public function profile($id){
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

	public function kategoriEvent($field,$value){
		$data = array('terbaru' => $this->model_event->daftar_event(6) ,
				'kategori_event' =>$this->model_event->cari_event($field,$value),
				'kategori' => $this->model_event->getKategori(),
				'nama_kategori' => $this->model_event->get_kategori($value) );
		//$data['terbaru'] = $this->model_event->daftar_event(6);
		$this->load->view('pages/kategori-event',$data);
	}

/**-------------------------------Search----------------------------------------**/
	public function cariEvent(){
		$field = $this->input->post('field');
		$value = $this->input->post('kata_kunci');

		$data = array('terbaru' => $this->model_event->daftar_event(6) ,
				'search_event' =>$this->model_event->cari_event_like($field,$value),
				'kategori' => $this->model_event->getKategori() );
		//$data['terbaru'] = $this->model_event->daftar_event(6);
		$this->load->view('pages/search-event',$data);
	}
/**------------------------------------------------------------------------**/




/**------------------------------------------------------------------------**/
	public function cekLogin(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login_view');
		} else {
			redirect('dashboard','refresh');
		}

	}

	public function registrasi(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_cekUsername');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login_view');
		} else {
			$this->model_login->RegistrasiUser();
			redirect('login','refresh');
		}
	}

	public function cekDb($pass){
		$user = $this->input->post('username');
		$hasil = $this->model_login->Login($user,$pass);

		if($hasil){
			$sess_array = array();
			foreach ($hasil as $row) {
				$sess_array = array(
				'id_user'=>$row->id_user,
				'username'=>$row->username,
				'status'=>$row->status
				);
								
				$this->session->set_userdata('logged_in', $sess_array );
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb',"Login gagal username dan password tidak valid");
			return false;
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

	public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login','refresh');	
	}


}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */