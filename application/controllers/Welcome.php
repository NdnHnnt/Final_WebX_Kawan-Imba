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
			$this->load->view('common/header_back');
			$this->load->view('login');
			$this->load->view('common/footer');
		}
		else {
			$session_data = $this->session->userdata('logged_in');
			switch ($session_data['id_group']){
				case 1:
					redirect('editorctl');
					break;
				case 2:
					redirect('reviewerctl');
					break;
				case 3:
					redirect('makelaarctl');
					break;
				default:
					redirect('welcome');
					break;
			}
			return;
		}
	}

	public function signUp(){
		$this->load->helper(array('form', 'url'));

		$this->load->view('common/header_back');
		$this->load->view('signUp', array("error" => ""));
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
		$this->form_validation->set_rules('nama', 
		'Nama', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('username',
		'Username', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('password',
		'Password', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('email',
		'Email', 'trim|min_length[2]|max_length[256]|xss_clean');

		$res = $this->form_validation->run();
		if ($res == FALSE){
			$error = array('error' => validation_errors());
			$this->load->view('common/header_back');
			$this->load->view('signup', $error);
			$this->load->view('common/footer');
			return FALSE;
		}
		//Checking file
		$config['upload_path'] 		=		'./img/Users/';
		$config['allowed_types'] 	=		'gif|png|jpg';
		$config['max_size'] 		=		1000;
		$config['max_width']		=		250;
		$config['max_height']		= 		250;

		$newName = time() . '_' . $_FILES["userfile"]['name'];
		$config['file_name'] = $newName;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('userfile')){
			//Failed to upload
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('common/header_back');
			$this->load->view('signup', $error);
			$this->load->view('common/footer');
			return;
		}
		//Berhasil Upload
		$data = array('upload_data' => $this->upload->data());
		//Insert data akun ke dataBase
		$id_user = $this->account->InsertNewUser($newName);
		$this->load->view('common/header_back');
		$this->load->view('signup_success');
		$this->load->view('common/footer');
		return;

	}

	function checkingLogin(){
		$this->load->helper(array('form', 'url', 'security'));
		$this->load->model('account');
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules
		('username', 'Username', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules
		('password', 'Password', 'trim|min_length[2]|max_length[128]|xss_clean');

		$res = $this->form_validation->run();
		if ($res == FALSE){
			$msg = validation_errors();
			$this->load->view('common/header');
			$this->load->view('login');
			$this->load->view('common/footer');
			return FALSE;
		}
		//periksa di database
		$user = $this->account->getIDuser();

		if (sizeof($user) <= 0){
			//$msg = validation_errors();
			$this->load->view('common/header');
			$this->load->view('login');
			$this->load->view('common/footer');
			return FALSE;
		}
		else {
			$sess_array = array(
                'id_akun'=>$user[0]['id_user'],
                'namalengkap'=>$user[0]['nama'],
                'username'=>$user[0]['username'],
				'email'=>$user[0]['email'],
                'id_group'=>$user[0]['id_group']);
            $this->session->set_userdata('logged_in', $sess_array);

			switch ($user[0]['id_group']){
				case 1:
					redirect('editorctl');
					break;
				case 2:
					redirect('reviewerctl');
					break;
				case 3:
					redirect('makelaarctl');
					break;
				default:
					redirect('welcome');
					break;
			}
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

	function switchLang($language=""){
		$language = ($language!="") ? $language:"english";
		$this->session->set_userdata('siteLang', $language);
		redirect('welcome');

	}

	public function viewListReviewers(){
		$this->load->model('master');
		$results1 = $this->master->getListReviewers();

		return sizeof($results1) . '<br>';
	}

	public function viewListEditors(){
		$this->load->model('master');
		$results2 = $this->master->getListEditors();

		return sizeof($results2) . '<br>';
	}

	public function viewListUsers(){
		$this->load->model('master');
		$results2 = $this->master->getListUsers();

		return sizeof($results2) . '<br>';
	}

}
