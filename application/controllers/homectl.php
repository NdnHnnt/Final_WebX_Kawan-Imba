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
		$this->load->view("home/header2");
		$this->load->view("home/body3", $data3);
		$this->load->view("home/body4", $data4);
		$this->load->view("home/footer2");

	}
//FRONTEND BELUM
	public function viewEvent($id_event){
		$this->load->model('master');
		$results5 = $this->master->viewSpecificEvent($id_event);
		$data5['events'] = $results5;
			$results6 = $this->master->viewParticipants($id_event);
			$data6['other_events'] = $results6;
		$this->load->view("home/header2");
		$this->load->view("home/body3", $data5);
		$this->load->view("home/body4", $data6);
		$this->load->view("home/footer2");
	}

	public function Edit(){	
		$this->load->helper(array('form', 'url'));
		$this->load->view("home/header3"); //header
		$this->load->view("home/body5", array("error" => "")); //body $id_user
		$this->load->view("home/footer2"); //footer
		return;
	}

	public function editProfile(){
		$this->load->helper(array('form', 'url', 'security'));
		$this->load->model('account');
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules('username',
		'Username', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('password',
		'Password', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('email',
		'Email', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('location',
		'Location', 'trim|min_length[2]|max_length[256]|xss_clean');
		$this->form_validation->set_rules('instagram',
		'Instagram', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('whatsapp',
		'Whatsapp', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('telegram',
		'Telegram', 'trim|min_length[2]|max_length[128]|xss_clean');
		$this->form_validation->set_rules('link',
		'Link', 'trim|min_length[2]|max_length[256]|xss_clean');
		$this->form_validation->set_rules('des',
		'Des', 'trim|min_length[2]|max_length[512]|xss_clean');


		$res = $this->form_validation->run();
		if($res == FALSE) {
			$error = array('error' => validation_errors());
			$this->load->view("home/header3"); //header
			$this->load->view("home/body5", array("error" => "")); //body $id_user
			$this->load->view("home/footer2"); //footer
			return FALSE;
		}

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
			$this->load->view("home/header3"); //header
			$this->load->view("home/body5", array("error" => "")); //body $id_user
			$this->load->view("home/footer2"); //footer
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
			'user_cat1'=>$temp[0]['user_cat1'],
			'user_cat2'=>$temp[0]['user_cat2'],
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