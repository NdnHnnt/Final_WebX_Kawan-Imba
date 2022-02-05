<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reviewerctl extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
    }
	
	public function index(){
		$this->load->model('master');
		$session_data = $this->session->userdata('logged_in');
        $id_user = $session_data["id_akun"];
			$results1 = $this->master->getListTaskRequested($id_user);
			$data1['tasked'] = $results1;
				$results2 = $this->master->getListAssigned($id_user);
				$data2['task'] = $results2;
			$results3 = $this->master->getListTaskWaiting($id_user);
			$data3['pay'] = $results3;
				$results4 = $this->master->getListTaskAccepted($id_user);
				$data4['all'] = $results4;

		$this->load->view('reviewer/header');
        $this->load->view('reviewer/body1', $data1);
		$this->load->view('reviewer/body2', $data4);
		$this->load->view('reviewer/body3');
		$this->load->view('reviewer/body4', $data3);
		$this->load->view('reviewer/body5', $data2);
        $this->load->view('reviewer/footer');
    }

    public function AksiUpload()
	{
		$this->load->helper(array('form', 'url', 'security'));
		$this->load->model('Master');
		$this->load->library(array('form_validation'));
		$this->form_validation->set_rules('idtugas',
		'Tugas', 'trim|min_length[1]|max_length[20]|xss_clean');

		$res = $this->form_validation->run();
		if($res == FALSE) {
			$error = array('error' => validation_errors());
			$this->load->view("common/header_back");
			$this->load->view("reviewer/submitReview", $error);
			$this->load->view("reviewer/footer");
			return FALSE;
		}
		$config['upload_path']		= '../../ereview/berkas/';
		$config['allowed_types']	= 'pdf|doc|docx';
		$config['max_size']			= 0; //agar tak terbatas...MB

		$newName =  time() . '_' . $_FILES["userfile"]['name'];
		$config['file_name'] = $newName;

		$this->load->library('upload', $config);
		if( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view("common/header_back");
			$this->load->view('reviewer/submitReview', $error);
			$this->load->view("reviewer/footer");
			return;
		}
		$session_data = $this->session->userdata('logged_in');
            $id_user = $session_data["id_akun"];
	
		$data = array('upload_data' => $this->upload->data());
	
		$this->Master->insertNewReview($newName, $id_user);
		$this->load->view("common/header_back");
		$this->load->view('reviewer/uploadSuccess');
		$this->load->view("reviewer/footer");
		return;
	}

	public function SubmitReview()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->view("common/header_back");
		$this->load->view("reviewer/submitReview");
		$this->load->view("reviewer/footer");
		return;
	}

	public function downloadFile($file_penugasan){
		$this->load->helper('download');
		$filepath = '../../ereview/berkas/'.$file_penugasan;
		force_download($filepath, NULL);
	}

	public function downloadTransaction($file_penugasan){
		$this->load->helper('download');
		$filepath = '../../ereview/buktiTransfer/'.$file_penugasan;
		force_download($filepath, NULL);
	}

	public function viewNumTaskRequested(){
		$session_data = $this->session->userdata('logged_in');
			$id_user = $session_data["id_akun"];
		$this->load->model('master');
		$results = $this->master->getListTaskRequested($id_user);

		return sizeof($results) . '<br>';

	}

	public function viewNumTaskOngoing(){
		$session_data = $this->session->userdata('logged_in');
			$id_user = $session_data["id_akun"];
		$this->load->model('master');
		$results = $this->master->getListTaskAccepted($id_user);

		return sizeof($results) . '<br>';
	}

	public function acceptTask($id_penugasan){
		$this->load->model('master');
		$this->master->acceptingTask($id_penugasan);
		redirect('reviewerctl');		
	}

	public function rejectTask($id_penugasan){
		$this->load->model('master');
		$this->master->rejectingTask($id_penugasan);
		redirect('reviewerctl');
	}

	public function viewEditor($id_editor){
		$this->load->model('master');
		$temp = $this->master->getEditorName($id_editor);

		return $temp;
	}

	public function Edit()
	{	
		$this->load->helper(array('form', 'url'));
		$this->load->view("common/header_back"); //header
		$this->load->view("reviewer/editProfile", array("error" => "")); //body $id_user
		$this->load->view("reviewer/footer"); //footer
		return;
	}

	public function editProfile()
	{
		$this->load->helper(array('form', 'url', 'security'));
		$this->load->model('Account');

		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules('nama',
		'Nama', 'trim|min_length[2]|max_length[128]|xss_clean');

		$res = $this->form_validation->run();
		if($res == FALSE) {
			$error = array('error' => validation_errors());
			$this->load->view("common/header_back");
			$this->load->view("reviewer/editProfile", $error);
			$this->load->view("reviewer/footer");
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
			$this->load->view("common/header_back");
			$this->load->view("reviewer/editProfile", $error);
			$this->load->view("reviewer/footer"); 
			return;
		}
		$session_data = $this->session->userdata('logged_in');
            $id_user = $session_data["id_akun"];
		$data = array('upload_data' => $this->upload->data());
		//insert data akun ke database => query
		$this->Account->updateProfile($id_user, $newName);
		$this->load->view("common/header_back");
		$this->load->view("reviewer/uploadSuccess");
		$this->load->view("reviewer/footer");
		return;
	}
	public function confirm()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->view("common/header_back");
		$this->load->view("reviewer/confirmation");
		$this->load->view("reviewer/footer");
		return;
	}
	
	public function confirming()
	{	$this->load->model('master');
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules('id_penugasan',
		'id_penugasan', 'trim|min_length[1]|max_length[4]|xss_clean');

		$res = $this->form_validation->run();
		if($res == FALSE) {
			$error = array('error' => validation_errors());
			$this->load->view("common/header_back");
			$this->load->view("reviewer/confirmation", $error);
			$this->load->view("reviewer/footer");
			return FALSE;
		}
		
		$this->master->confirmTask();
		$this->load->view("common/header_back");
		$this->load->view("reviewer/uploadSuccess");
		$this->load->view("reviewer/footer");
		return;
	}

	public function fetchImage(){
		$session_data = $this->session->userdata('logged_in');
            $id_user = $session_data["id_akun"];
		$this->load->model('master');
		$result = $this->master->getImage($id_user);
		//var_dump($result);
		return $result;
	}
}