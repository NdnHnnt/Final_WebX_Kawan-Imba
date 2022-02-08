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

	public function viewTaskRequested(){
		
			$session_data = $this->session->userdata('logged_in');
        	$id_user = $session_data["id_akun"];
		$this->load->model('master');
		$results = $this->master->getTaskRequested($id_user);
		$data['tasks']=$results;

		$this->load->view("common/header_back");
		$this->load->view("editor/taskRequested", $data);
		$this->load->view("editor/footer");
	}

    public function viewNumReviewers(){
		$this->load->model('master');
		$results = $this->master->getListReviewers();

		return sizeof($results) . '<br>';
	}
/*
    public function selectedRoles() {
		$id_user = $this->session->userdata('logged_in')["id_akun"];
		$this->load->model('master');
		$results1 = $this->master->roleFilter($id_user);
		//var_dump($results1);
		return sizeof($results1);
	}
*/
	public function addingTask(){
		$this->load->helper(array('form', 'url'));
		$this->load->view("common/header_back");
		$this->load->view("editor/addTask");
		$this->load->view("editor/footer");
		return;
	}
	public function assigningTask()
	{
		$this->load->helper(array('form', 'url', 'security'));
		$this->load->model('Master');
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules('judul', 'Judul', 'trim|min_length[2]|max_length[150]', 'xss|clean');
        $this->form_validation->set_rules('katakunci', 'Katakunci', 'trim|min_length[2]|max_length[150]', 'xss|clean');
        $this->form_validation->set_rules('jumlahkata', 'Jumlahkata');

		$res = $this->form_validation->run();
		if($res == FALSE) {
			$error = array('error' => validation_errors());
			$this->load->view("common/header_back");
			$this->load->view("editor/addTask", $error);
			$this->load->view("editor/footer");
			return FALSE;
		}
		
		$config['upload_path']		= '../../berkas/';
		$config['allowed_types']	= 'pdf|doc|docx';
		$config['max_size']			= 0; //agar tak terbatas...MB

		
		$newName =  time() . '_' . $_FILES["userfile"]['name'];
		$config['file_name'] = $newName;

		$this->load->library('upload', $config);
		if( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view("common/header_back");
			$this->load->view('editor/addTask', $error);
			$this->load->view("common/footer");
			return;
		}
		$session_data = $this->session->userdata('logged_in');
        $id_user = $session_data["id_akun"];
		$data = array('upload_data' => $this->upload->data());
		
		$this->Master->insertNewTask($newName, $id_user);
		$this->load->view("common/header_back");
		$this->load->view('editor/uploadSuccess');
		$this->load->view("editor/footer");
		return;
	}

	public function viewListAssignedTask(){
		$this->load->model('master');
		$session_data = $this->session->userdata('logged_in');
        $id_user = $session_data["id_akun"];
		$results2 = $this->master->getListAssigned($id_user);
		$data2['task'] = $results2;
		//view("editor/body", array('reviewers' => $results));

		$this->load->view("editor/header");
		$this->load->view("editor/assignedTask",$data2);
        $this->load->view("editor/footer");
	}

	public function addTransaction(){
		$this->load->helper(array('form', 'url'));
		$this->load->view("common/header_back");
		$this->load->view("editor/uploadTransaksi");
		$this->load->view("editor/footer");
		return;
	}

	public function uploadTransaction()
	{
		$this->load->helper(array('form', 'url', 'security'));
		$this->load->model('Master');
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules('id_penugasan', 'id_penugasan', 'trim|min_length[1]|max_length[50]|xss_clean');

		$res = $this->form_validation->run();
		if($res == FALSE) {
			$msg = validation_errors();
			$this->load->view("common/header_back");
			$this->load->view("editor/uploadTransaksi", $msg);
		 	$this->load->view("editor/footer");
			return FALSE;
		}

		$config['upload_path'] 			= '../../buktiTransfer/';
		$config['allowed_types']		= 'gif|jpg|jpeg|png';
		$config['max_size']				= '3000';
		$config['max_width']			= '1500';
		$config['max_height']			= '2000';

		$newName =  time() . '_' . $_FILES["userfile"]['name'];
		$config['file_name'] = $newName;
		
		$this->load->library('upload', $config);
		if( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view("common/header_back");
			$this->load->view("editor/uploadTransaksi", $error);
			$this->load->view("editor/footer");
			return;
		}
		
		$data = array('upload_data' => $this->upload->data());
		
		$this->Master->insertNewTransaction($newName);
		$this->load->view("common/header_back");
		$this->load->view("editor/transaksiBerhasil");
		$this->load->view("editor/footer");
		return;
	}

	public function viewReviewerAcc($id_reviewer){
		$this->load->model('master');
		$result = $this->master->getReviewerAcc($id_reviewer);
		return $result;
	}

	public function downloadFile($file_penugasan){
		$this->load->helper('download');
		$filepath = '../../berkas/'.$file_penugasan;
		force_download($filepath, NULL);
	}   
}