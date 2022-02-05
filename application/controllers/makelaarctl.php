<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class makelaarctl extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
    }

    public function index(){
        $this->load->model('master');
            $result1 = $this->master->getAllUser();
            $data1['users'] = $result1;
        $result2 = $this->master->getAllTask();
        $data2['tasked']= $result2;
            $result3 = $this->master->getReviewed();
            $data3['reviewed'] = $result3;

        $this->load->view('makelaar/header');
        $this->load->view('makelaar/body1', $data1);
        $this->load->view('makelaar/body2', $data2);
        $this->load->view('makelaar/body3', $data3);
        $this->load->view('makelaar/footer');
    }

    public function getDataUsers(){
        $this->load->model('master');
            $result1 = $this->master->getAllEditor();
            $data1['editor'] = $result1;
        $result2 = $this->master->getAllReviewer();
        $data2['reviewer'] = $result2;
        $this->load->view('common/header_back');
        $this->load->view('makelaar/detailedUser1', $data1);
        $this->load->view('makelaar/detailedUser2', $data2);
        $this->load->view('makelaar/footer');
    }

    public function getDataTask(){
        $this->load->model('master');
            $result1 = $this->master->getPendingTask();
            $data1['pending'] = $result1;
        $result2 = $this->master->getAcceptedTask();
        $data2['accepted'] = $result2;
            $result3 = $this->master->getWaitingForPaymentTask();
            $data3['waiting'] = $result3;
        $result4 = $this->master->getFinishedTask();
        $data4['finished'] = $result4;
            $result5 = $this->master->getRejectedTask();
            $data5['rejected'] = $result5;
        $result6 = $this->master->getHaventConfirmedTask();
        $data6['waity'] = $result6;
        
        $this->load->view('common/header_back');
        $this->load->view('makelaar/detailedTask1', $data1);
        $this->load->view('makelaar/detailedTask2', $data2);
        $this->load->view('makelaar/detailedTask3', $data3);
        $this->load->view('makelaar/detailedTask4', $data6);
        $this->load->view('makelaar/detailedTask5', $data4);
        $this->load->view('makelaar/detailedTask6', $data5);
        $this->load->view('makelaar/footer');
    }

    public function getUserNum(){
        $this->load->model('master');
        $results = $this->master->getAllUser();
    
        return sizeof($results) . '<br>';
    }

    public function getTaskNum(){
        $this->load->model('master');
        $results = $this->master->getAllTask();
    
        return sizeof($results) . '<br>';
    }

    public function downloadFile($file_penugasan){
		$this->load->helper('download');
		$filepath = '../../ereview/berkas/'.$file_penugasan;
		force_download($filepath, NULL);
	}
}