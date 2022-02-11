<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homectl extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
    }
	
	public function index(){
		if(!$this->session->userdata('logged_in')){
			redirect('welcome/login');
		}
		/*
		$this->load->model('master');
		$results1 = $this->master->getListReviewers();
		$data1['reviewers'] = $results1;
			$session_data = $this->session->userdata('logged_in');
        	$id_user = $session_data["id_akun"];
			$results2 = $this->master->getListAssigned($id_user);
			$data2['task'] = $results2;
		$results3 = $this->master->getReviewedPapers($id_user);
		$data3['paper'] = $results3;
		//view("editor/body", array('reviewers' => $results));

        $this->load->view("editor/header");
		$this->load->view("editor/body1",$data2);
		$this->load->view("editor/body2",$data3);
		$this->load->view("editor/body3");
		$this->load->view("editor/body4",$data1);
        $this->load->view("editor/footer");
		

		$session_data = $this->session->userdata('logged_in');
        $id_user = $session_data["user_id"];
		$results1 = $this->master->getListEvents($id_user);
		$data1['my_events'] = $results1;
			
			
*/		
		$this->load->model('master');
		$session_data = $this->session->userdata('logged_in');
		$id_user = $session_data["user_id"];
		$results1 = $this->master->getListEvents($id_user);
		$data1['my_events'] = $results1;
			$results2 = $this->master->getListUsers($id_user);
			$data2['other_user'] = $results2;
		$this->load->view("home/header");
		$this->load->view("home/body1", $data1);
		$this->load->view("home/body2", $data2);
		$this->load->view("home/footer");
	}


	public function viewTheEvents(){
		$this->load->model('master');
		$session_data = $this->session->userdata('logged_in');
		$id_user = $session_data["user_id"];
		$results3 = $this->master->getListEvents($id_user);
		$data3['my_events'] = $results3;
			$results4 = $this->master->getListAllEvents($id_user);
			$data4['other_events'] = $results4;
		$this->load->view("home/header");
		$this->load->view("home/body3", $data3);
		$this->load->view("home/body4", $data4);
		$this->load->view("home/footer");

	}
	public function viewUser($id_user){
		$this->load->model('master');
		$results7 = $this->master->getInfo($id_user);
		$data7['this_user'] = $results7;

		$this->load->view("home/header");
		$this->load->view("home/body6", $data7);
		$this->load->view("home/footer");
	}

	public function specificEvent($id_event){
		$this->load->model('master');
		$results8 = $this->master->getEvent($id_event);
		$data8['this_event'] = $results8;

		$this->load->view("home/header");
		$this->load->view("home/body9", $data8);
		$this->load->view("home/footer");
	}

	public function viewAllUser(){
		$this->load->model('master');
		$session_data = $this->session->userdata('logged_in');
		$id_user = $session_data["user_id"];
		$results2 = $this->master->getListUsers($id_user);
		$data2['other_user'] = $results2;
			$this->load->view("home/header");
			$this->load->view("home/body7", $data2);
	}

//belum FRONTEND
	public function createEvent(){
		$this->load->helper(array('form', 'url', 'security')) ;
		$this->load->model('master');
		$this->load->library(array('form_validation'));

		//validasi terhadap isi field di form 'nama','alias', 'trim->memotong spasi|min 2 chara|max 128|pembersih`
		$this->form_validation->set_rules('nama',
		'Nama', 'min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('tanggal',
		'Tanggal', 'min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('lokasi',
		'Lokasi', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('des',
		'Des', 'min_length[2]|max_length[512]|xss_clean');
		$this->form_validation->set_rules('nomor',
		'Nomor', 'min_length[2]|max_length[512]|xss_clean');

		$res = $this->form_validation->run();
		if ($res == FALSE){
			$results9 = $this->master->getType();
			$data9['eve'] = $results9;
			$this->load->view('home/header');
			$this->load->view('home/body8', $data9);
			$this->load->view('home/footer');
			return FALSE;
		}
		//Checking file
		$config['upload_path'] 		=		'./img/Events/';
		$config['allowed_types'] 	=		'gif|png|jpg';
		$config['max_size'] 		=		100000;
		$config['max_width']		=		1000;
		$config['max_height']		= 		1000;
		$newName = time() . '_' . $_FILES["gambar"]['name'];
		$config['file_name'] = $newName;
		var_dump(isset($_FILES['gambar']));

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('gambar')){
			//Failed to upload
			$error = array('error' => $this->upload->display_errors());
			$results9 = $this->master->getType();
			$data9['eve'] = $results9;
			$this->load->view('home/header');
			$this->load->view('home/body8', $data9);
			$this->load->view('home/footer');
			return;
		}
		$session_data = $this->session->userdata('logged_in');
        $userPass = $session_data["user_id"];
		$data = array('upload_data' => $this->upload->data());
		//insert data akun ke database => query
		$id_user = $this->master->CreateNewEvent($newName, $userPass);
		redirect('homectl/viewTheEvents');
		/*
		$results9 = $this->master->getType();
			$data9['eve'] = $results9;
		$this->load->view('home/header');
		$this->load->view('home/body8', $data9);
		$this->load->view('home/footer');
		return;
	*/	
	}

//FRONTEND BELUM
	public function viewEvent($id_event){
		$this->load->model('master');
		$results5 = $this->master->viewSpecificEvent($id_event);
		$data5['events'] = $results5;
			$results6 = $this->master->viewParticipants($id_event);
			$data6['other_events'] = $results6;
		$this->load->view("home/header");
		$this->load->view("home/body3", $data5);
		$this->load->view("home/body4", $data6);
		$this->load->view("home/footer");
	}

	public function Edit(){	
		$this->load->model('master');
		$results8 = $this->master->getCat();
		$data8['cat'] = $results8;

		$this->load->helper(array('form', 'url'));
		$this->load->view("home/header"); //header
		$this->load->view("home/body5", $data8); //body $id_user
		$this->load->view("home/footer"); //footer
		return;
	}

	public function editProfile(){
		$this->load->helper(array('form', 'url', 'security'));
		$this->load->model('account');
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules('username',
		'Username', 'min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('password',
		'Password', 'min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('email',
		'Email', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('location',
		'Location', 'min_length[2]|max_length[256]|xss_clean');
		$this->form_validation->set_rules('instagram',
		'Instagram', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('whatsapp',
		'Whatsapp', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('telegram',
		'Telegram', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('link',
		'Link', 'trim|min_length[2]|max_length[256]|xss_clean');
		$this->form_validation->set_rules('des',
		'Des', 'min_length[2]|max_length[512]|xss_clean');


		$res = $this->form_validation->run();
		if($res == FALSE) {
			$error = array('error' => validation_errors());
			$this->load->model('master');
			$results8 = $this->master->getCat();
			$data8['cat'] = $results8;
			$this->load->view("home/header"); //header
			$this->load->view("home/body_error");
			$this->load->view("home/body5", $data8); //body $id_user
			$this->load->view("home/footer"); //footer
			return FALSE;
		}

		//Jika tidak ada file yg di-upload
		if ((empty($_POST['gambar']))){
			$session_data = $this->session->userdata('logged_in');
            $newName = $session_data["user_pic"];
			$id_user = $session_data["user_id"];
			//insert data akun ke database => query
			$this->account->updateProfile($id_user, $newName);
			$user_id = $this->session->userdata('logged_in')['user_id'];
			$temp = $this->account->getTheUser($user_id);
			$sess_array = array(
				'user_id'=>$temp[0]['user_id'],
				'user_nama'=>$temp[0]['user_nama'],
				'user_email'=>$temp[0]['user_email'],
				'user_password'=>$temp[0]['user_password'],
				'user_cat1'=>$temp[0]['user_cat1'],
				'user_loc'=>$temp[0]['user_loc'],
				'user_pic'=>$temp[0]['user_pic'],
				'user_insta'=>$temp[0]['user_insta'],
				'user_wa'=>$temp[0]['user_wa'],
				'user_telegram'=>$temp[0]['user_telegram'],
				'user_shop'=>$temp[0]['user_shop'],
				'user_des'=>$temp[0]['user_des']);
			$this->session->set_userdata('logged_in', $sess_array);
			redirect('homectl');
			//ganti layout
			return;
		}

		//Jika ada file yg di-upload
		else {
			$config['upload_path']		= 'img/Users/';
			$config['allowed_types']	= 'png|jpg|jpeg';
			$config['max_size']			= 10000;

			$newName = time() . '_' . $_FILES["gambar"]['name'];
			$config['file_name'] = $newName;

			$this->load->library('upload', $config);
			if( ! $this->upload->do_upload('gambar')) //userfile -> field yang telah dideclare di signup
			{
			//jika gagal upload
				$error = array('error' => $this->upload->display_errors());
				$this->load->model('master');
				$results8 = $this->master->getCat();
				$data8['cat'] = $results8;
				$this->load->view("home/header"); //header
				$this->load->view("home/body_error");
				$this->load->view("home/body5", $data8); //body $id_user
				$this->load->view("home/footer"); //footer
				return;
			}
			$session_data = $this->session->userdata('logged_in');
            $id_user = $session_data["user_id"];
			$data = array('upload_data' => $this->upload->data());
			//insert data akun ke database => query
			$this->account->updateProfile($id_user, $newName);
			$user_id = $this->session->userdata('logged_in')['user_id'];
			$temp = $this->account->getTheUser($user_id);
			$sess_array = array(
				'user_id'=>$temp[0]['user_id'],
				'user_nama'=>$temp[0]['user_nama'],
				'user_email'=>$temp[0]['user_email'],
				'user_password'=>$temp[0]['user_password'],
				'user_cat1'=>$temp[0]['user_cat1'],
				'user_loc'=>$temp[0]['user_loc'],
				'user_pic'=>$temp[0]['user_pic'],
				'user_insta'=>$temp[0]['user_insta'],
				'user_wa'=>$temp[0]['user_wa'],
				'user_telegram'=>$temp[0]['user_telegram'],
				'user_shop'=>$temp[0]['user_shop'],
				'user_des'=>$temp[0]['user_des']);
			$this->session->set_userdata('logged_in', $sess_array);
			redirect('homectl');
			//ganti layout
			return;
		}
	}

	public function getCat($id_cat){
		$this->load->model('master');
		$results8 = $this->master->getTags($id_cat);
		
		return $results8;
	}

	public function getEvType($id_type){
		$this->load->model('master');
		$results8 = $this->master->getEvTy($id_type);
		
		return $results8;
	}

	public function getUname($id_user){
		$this->load->model('master');
		$results9 = $this->master->getById($id_user);
		
		return $results9;
	}

}