<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
    }

	public function index(){
		$this->load->view("common/header");
		$this->load->view("common/body");
		$this->load->view("common/footer");
	}

	public function login(){
		$this->load->helper(array('form', 'url'));
		if(!$this->session->userdata('logged_in')){
			$this->load->view('common/header_log-sign');
			$this->load->view('common/login');
		}
		else {
			$session_data = $this->session->userdata('logged_in');
			if ($session_data){
				redirect('homectl');
			}
			else{
				redirect('welcome');
			}
			return;
		}
	}

	public function signUp(){
		$this->load->helper(array('form', 'url'));

		$this->load->view('common/header_log-sign');
		$this->load->view('common/signUp', array("error" => ""));
		$this->load->view('common/footer');
		return;
	}

	public function signingUp(){
		//security agar tidak ada SQL Injection
		$this->load->helper(array('form', 'url', 'security')) ;

		//model akun
		$this->load->model('account');

		//library form_validation => validasi terhadap field di form
		$this->load->library(array('form_validation'));

		//validasi terhadap isi field di form 'nama','alias', 'trim->memotong spasi|min 2 chara|max 128|pembersih`
		$this->form_validation->set_rules('username',
		'Username', 'min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('password',
		'Password', 'min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('email',
		'Email', 'trim|min_length[2]|max_length[256]|xss_clean');

		$res = $this->form_validation->run();
		if ($res == FALSE){
			$this->load->view('common/header_log-sign');
			$this->load->view('common/signup');
			$this->load->view('common/signUp_error');
			$this->load->view('common/footer');
			return FALSE;
		}
		//Checking file
		$config['upload_path'] 		=		'./img/Users/';
		$config['allowed_types'] 	=		'gif|png|jpg';
		$config['max_size'] 		=		100000;
		$config['max_width']		=		10000;
		$config['max_height']		= 		10000;
		$newName = time() . '_' . $_FILES["userfile"]['name'];
		$config['file_name'] = $newName;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('userfile')){
			//Failed to upload
			$this->load->view('common/header_log-sign');
			$this->load->view('common/signUp');
			$this->load->view('common/signUp_error');
			$this->load->view('common/footer');
			return;
		}
		//Berhasil Upload
		$data = array('upload_data' => $this->upload->data());
		//Insert data akun ke dataBase
		$id_user = $this->account->InsertNewUser($newName);
		$this->load->view('common/header_log-sign');
		$this->load->view('common/login');
		return;

	}

	function checkingLogin(){
		$this->load->helper(array('form', 'url', 'security'));
		$this->load->model('account');
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules
		('username', 'Username', 'min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules
		('password', 'Password', 'min_length[2]|max_length[128]|xss_clean');

		$res = $this->form_validation->run();
		if ($res == FALSE){
			$msg = validation_errors();
			$this->load->view('common/header_log-sign');
			$this->load->view('common/login_error');
			$this->load->view('common/login');
			return FALSE;
		}
		//periksa di database
		$user = $this->account->getIDuser();

		if (sizeof($user) <= 0){
			//$msg = validation_errors();
			$this->load->view('common/header_log-sign');
			$this->load->view('common/login_error');
			$this->load->view('common/login');
			return FALSE;
		}
		else {
			$sess_array = array(
                'user_id'=>$user[0]['user_id'],
                'user_nama'=>$user[0]['user_nama'],
				'user_email'=>$user[0]['user_email'],
				'user_password'=>$user[0]['user_password'],
				'user_cat1'=>$user[0]['user_cat1'],
				'user_loc'=>$user[0]['user_loc'],
				'user_pic'=>$user[0]['user_pic'],
				'user_insta'=>$user[0]['user_insta'],
				'user_wa'=>$user[0]['user_wa'],
				'user_telegram'=>$user[0]['user_telegram'],
				'user_shop'=>$user[0]['user_shop'],
				'user_des'=>$user[0]['user_des']);
            $this->session->set_userdata('logged_in', $sess_array);

			$session_data = $this->session->userdata('logged_in');
			if ($session_data){
				redirect('homectl');
			}
			else{
				redirect('welcome');
			}
			return;
		}
	}

	function logout(){
		if(!$this->session->userdata('logged_in')){
			redirect('welcome/login');
		}
		$session_data = $this->session->userdata('logged_in');
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect("welcome");
	}
}
