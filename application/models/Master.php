<?php
Class Master extends CI_Model
{
    public function __construct() {
            parent::__construct();
    }
/*
#########
Home
#########
*/
    function getListEvents($id_user){
    $query00 ="SELECT events.*
                FROM events, assign
                WHERE assign.assign_event=events.event_id AND assign.assign_user = " .$id_user;
    $res00 = $this->db->query($query00);
    return $res00->result_array();
    }

    function getListUsers($id_user){
    $query01 ="SELECT *
            FROM users
            WHERE users.user_id <> " .$id_user;
    $res01 = $this->db->query($query01);
    return $res01->result_array();
    }

    function getListAllEvents($id_user){
    $query02 ="SELECT events.*
            FROM events, assign
            WHERE assign.assign_event=events.event_id AND assign.assign_user <> " .$id_user;
    $res02 = $this->db->query($query02);
    return $res02->result_array();    
    }

    function viewSpecificEvent($id_event){
    $query03 ="SELECT events.*
        FROM events
        WHERE events.event_id <> " .$id_event;
    $res03 = $this->db->query($query03);
    return $res03->result_array();      
    }

    function viewParticipants($id_event){
    $query04 ="SELECT users.*
        FROM users, assign
        WHERE assign.assign_event <> " .$id_event;
    $res04 = $this->db->query($query04);
    return $res04->result_array();    
    }

    function getInfo($id_user){
    $query05 ="SELECT users.*
        FROM users
        WHERE user_id = " .$id_user;
    $res05 = $this->db->query($query05);
    return $res05->result_array();    
    }

    function getEvent($id_event){
        $query08 ="SELECT *
            FROM events
            WHERE event_id = " .$id_event;
        $res08 = $this->db->query($query08);
        return $res08->result_array();    
        }

    function getCat(){
    $query06 ="SELECT *
        FROM category";
    $res06 = $this->db->query($query06);
    return $res06->result_array();
    }

    function getType(){
        $query07 ="SELECT *
            FROM type";
        $res07 = $this->db->query($query07);
        return $res07->result_array();
        }

    function getTags($id_cat){
        $this->db->select('cat_des');
        $this->db->from('category');
        $this->db->where('cat_id', $id_cat);
    $res07 = $this->db->get()->result_array();

    $desc = $res07[0]['cat_des'];
    return $desc;
    }

    function getEvTy($id_ev){
        $this->db->select('type_des');
        $this->db->from('type');
        $this->db->where('type_id', $id_ev);
    $res09 = $this->db->get()->result_array();

    $desc = $res09[0]['type_des'];
    return $desc;
    }

    function getById($id_user){
        $this->db->select('user_nama');
        $this->db->from('users');
        $this->db->where('user_id', $id_user);
    $res10 = $this->db->get()->result_array();

    $desc = $res10[0]['user_nama'];
    return $desc;
    }

    function createNewEvent($newName, $userPass){
        $thequery = "INSERT INTO events (event_name, event_date, event_type, event_loc, event_des, event_contact, event_pic, event_creator)
                    VALUES ('"      . $this->input->post('nama') . "','"
                                    . $this->input->post('tanggal') . "','"
                                    . $this->input->post('type') . "','"
                                    . $this->input->post('lokasi') . "','"
                                    . $this->input->post('des') . "','"
                                    . $this->input->post('nomor') . "','"
                                    . $newName ."','"
                                    . $userPass ."')";
        $this->db->query($thequery);
        $id_event = $this->db->insert_id();

        $thequery2 = "INSERT INTO assign (assign_user, assign_event)
                    VALUES ('"      . $userPass . "','"
                                    . $id_event ."')";
        $this->db->query($thequery2);
    }


/*
#########
Welcome
#########
*/
    function getListEditors($stts=1) {
    $query2 = "SELECT * FROM editor WHERE editor_status = " . $stts ;
    $res2 = $this->db->query($query2 );

     return $res2->result_array();
    }
/*
#########
Common
#########
*/
    function roleFilter($id_user){
        $query4 ="SELECT member.id_user, member.id_group
                FROM member, user
                WHERE member.id_user = user.id_user
                AND user.id_user = " .$id_user;
        $res4 = $this->db->query($query4 );
    return $res4->result_array();
    }

/*
#########
Editorctl
#########
*/
    function getListReviewers($stts=1) {
       $query1 = "SELECT reviewer.id_reviewer, user.nama, reviewer.bidang_ilmu
                FROM reviewer, user
                WHERE user.id_user=reviewer.id_user
                AND reviewer_status = " . $stts ;
       $res1 = $this->db->query($query1);

        return $res1->result_array();
    }
    
    function insertNewTask($filename, $id_user){
        $this->db->select('id_editor');
        $this->db->from('editor');
        $this->db->where('editor.id_user', $id_user);
            $result6 = $this->db->get()->result_array();
            $id_editor = $result6[0]['id_editor'];

        $thequery = "INSERT INTO penugasan (id_editor, id_reviewer, judul, kata_kunci, file_penugasan)
                    VALUES (". $id_editor .", '". $this->input->post('idreviewer'). "', '". $this->input->post('judul') ."', 
                    '".$this->input->post('katakunci'). "', '$filename')";
        $result = $this->db->query($thequery);
    }

    function getTaskRequested($id_user){
        $this->db->select('id_editor');
        $this->db->from('editor');
        $this->db->where('editor.id_user', $id_user);
            $result = $this->db->get()->result_array();
            $id_editor = $result[0]['id_editor'];
        
        $thequery = "SELECT penugasan.penugasan_status, penugasan.id_reviewer, penugasan.judul, penugasan.kata_kunci, penugasan.file_penugasan, hasilreview.filereview
                    FROM penugasan, hasilreview
                    WHERE penugasan.id_penugasan = hasilreview.id_penugasan
                    AND penugasan.id_editor =" .$id_editor;
        $res = $this->db->query($thequery);
        return $res->result_array();
    }

    function getListAssigned($id_user){
        $this->db->select('id_editor');
        $this->db->from('editor');
        $this->db->where('editor.id_user', $id_user);
            $result7 = $this->db->get()->result_array();
            $id_editor = $result7[0]['id_editor'];

        $query7 ="SELECT judul, kata_kunci, file_penugasan, penugasan_status, id_reviewer
                    FROM penugasan
                    WHERE penugasan.id_editor =" .$id_editor;
        $res7 = $this->db->query($query7);
        return $res7->result_array();
    }

    

    function getReviewedPapers($id_user){
        $this->db->select('id_editor');
        $this->db->from('editor');
        $this->db->where('editor.id_user', $id_user);
            $result8 = $this->db->get()->result_array();
            $id_editor = $result8[0]['id_editor'];
        
        $query  = "SELECT penugasan.id_penugasan, penugasan.id_reviewer, penugasan.judul, hasilreview.filereview, hasilreview.biaya_review, penugasan.penugasan_status
                FROM penugasan,hasilreview
                WHERE penugasan.penugasan_status=3
                AND penugasan.id_penugasan = hasilreview.id_penugasan
                AND penugasan.id_editor ='" .$id_editor."'
                OR penugasan.penugasan_status=4
                AND penugasan.id_penugasan = hasilreview.id_penugasan
                AND penugasan.id_editor =" .$id_editor;
        $res = $this->db->query($query);
        return $res->result_array();
    }

    function getReviewedPapers2($id_user){
        $this->db->select('id_editor');
        $this->db->from('editor');
        $this->db->where('editor.id_user', $id_user);
            $result8 = $this->db->get()->result_array();
            $id_editor = $result8[0]['id_editor'];
        
        $query  = "SELECT penugasan.id_penugasan, penugasan.id_reviewer, penugasan.judul, hasilreview.filereview, hasilreview.biaya_review, penugasan.penugasan_status
                FROM penugasan,hasilreview
                WHERE  penugasan.penugasan_status=5
                AND penugasan.id_penugasan = hasilreview.id_penugasan
                AND penugasan.id_editor =" .$id_editor;
        $res = $this->db->query($query);
        return $res->result_array();
    }

    function getReviewerAcc($id_reviewer){
        $this->db->select('no_rekening');
        $this->db->from('reviewer');
        $this->db->where('reviewer.id_reviewer', $id_reviewer);
            $result8 = $this->db->get()->result_array();
            $no_rekening = $result8[0]['no_rekening'];

        return $no_rekening;
    }

    function insertNewTransaction($bukti){
        $this->db->set("bukti_transaksi", $bukti);
        $this->db->where('id_penugasan', $this->input->post('id_penugasan'));
        $this->db->update('penugasan');

        $this->db->set("penugasan_status", 4);
        $this->db->where('id_penugasan', $this->input->post('id_penugasan'));
        $this->db->update('penugasan');

    }

/*
########
Reviewerctl
########
*/
    function getListTask($id_user){
        $this->db->select('id_reviewer');
        $this->db->from('reviewer');
        $this->db->where('reviewer.id_user', $id_user);
            $result8 = $this->db->get()->result_array();
            $id_reviewer = $result8[0]['id_reviewer'];

        $query8 = "SELECT id_penugasan, judul, kata_kunci, file_penugasan, penugasan_status
                FROM penugasan
                WHERE id_reviewer =" .$id_reviewer;
        $res8 = $this->db->query($query8);
        return $res8->result_array();
    }

    function getListTaskRequested($id_user){
        $this->db->select('id_reviewer');
        $this->db->from('reviewer');
        $this->db->where('reviewer.id_user', $id_user);
            $result8 = $this->db->get()->result_array();
            $id_reviewer = $result8[0]['id_reviewer'];

        $query8 = "SELECT id_penugasan, judul, kata_kunci, file_penugasan, penugasan_status
                FROM penugasan
                WHERE penugasan_status=0
                AND id_reviewer =" .$id_reviewer;
        $res8 = $this->db->query($query8);
        return $res8->result_array();
    }

    function getListTaskAccepted($id_user){
        $this->db->select('id_reviewer');
        $this->db->from('reviewer');
        $this->db->where('reviewer.id_user', $id_user);
            $result8 = $this->db->get()->result_array();
            $id_reviewer = $result8[0]['id_reviewer'];

        $query8 = "SELECT id_penugasan, judul, kata_kunci, file_penugasan, id_editor
                FROM penugasan
                WHERE penugasan_status=1
                AND id_reviewer =" .$id_reviewer;
        $res8 = $this->db->query($query8);
        return $res8->result_array();
    }

    function getListTaskWaiting($id_user){
        $this->db->select('id_reviewer');
        $this->db->from('reviewer');
        $this->db->where('reviewer.id_user', $id_user);
            $result8 = $this->db->get()->result_array();
            $id_reviewer = $result8[0]['id_reviewer'];

        $query8 = "SELECT id_penugasan, judul, bukti_transaksi
                    FROM penugasan
                    WHERE penugasan_status=4
                    AND id_reviewer ='".$id_reviewer."'
                    OR penugasan_status=3
                    AND id_reviewer =".$id_reviewer;
        $res8 = $this->db->query($query8);
        return $res8->result_array();
    }

    function insertNewReview($filename, $id_user){
        $this->db->select('id_reviewer');
        $this->db->from('reviewer');
        $this->db->where('reviewer.id_user', $id_user);
            $result5 = $this->db->get()->result_array();
            $id_reviewer = $result5[0]['id_reviewer'];

        $thequery = "INSERT INTO hasilreview (id_penugasan, id_reviewer, filereview, biaya_review)
                    VALUES ('". $this->input->post('idtugas'). "', ". $id_reviewer .",
                    '$filename', '". $this->input->post('price'). "')";

        $this->db->query($thequery);

        $thequery2 = "UPDATE penugasan
                    SET penugasan_status = '3'
                    WHERE id_penugasan =".$this->input->post('idtugas');
        $this->db->query($thequery2);
    }

    function acceptingTask($id_penugasan){
        $thequery = "UPDATE penugasan
                    SET penugasan_status = '1'
                    WHERE id_penugasan=".$id_penugasan;
        $this->db->query($thequery);
    }

    function rejectingTask($id_penugasan){
        $thequery = "UPDATE penugasan
                    SET penugasan_status = '2'
                    WHERE id_penugasan=".$id_penugasan;
        $this->db->query($thequery);
    }

    function getEditorName($id_editor){
        
        $this->db->select('user.nama');
        $this->db->from('user,editor');
        $this->db->where('editor.id_editor', $id_editor);
        $this->db->where('user.id_user=editor.id_user');
            $result5 = $this->db->get()->result_array();
            $name = $result5[0]['nama'];
        
        return $name;
    }

    function confirmTask(){
        $thequery = "UPDATE penugasan
                    SET penugasan_status = '5'
                    WHERE id_penugasan=".$this->input->post('idpenugasan');
        $this->db->query($thequery);
    }
/*
########
Makelaarctl
########
*/
    function getAllUser(){
        $thequery = "SELECT id_user, nama, username, email
                FROM user";
        $result=$this->db->query($thequery);
        return $result->result_array();
    }

    function getAllTask(){
        $thequery = "SELECT id_penugasan, id_editor, id_reviewer, judul, kata_kunci, file_penugasan, bukti_transaksi,penugasan_status
                    FROM penugasan";
        $result=$this->db->query($thequery);
        return $result->result_array();
    }

    function getReviewed(){
        $thequery= "SELECT id_hasilreview, id_penugasan, filereview, biaya_review
                    FROM hasilreview";
        $result=$this->db->query($thequery);
        return $result->result_array();
    }

    function getAllReviewer(){
        $thequery = "SELECT reviewer.id_reviewer, user.id_user, user.username, user.nama, reviewer.reviewer_status
                    FROM reviewer,user
                    WHERE reviewer.id_user = user.id_user";
        $result=$this->db->query($thequery);
        return $result->result_array();
    }

    function getAllEditor(){
        $thequery = "SELECT editor.id_editor, user.id_user, user.username, user.nama, editor.editor_status
                    FROM editor,user
                    WHERE editor.id_user = user.id_user";
        $result=$this->db->query($thequery);
        return $result->result_array();
    }

    function getPendingTask(){
        $thequery = "SELECT id_penugasan, id_reviewer, id_editor, judul, kata_kunci, file_penugasan
                    FROM penugasan
                    WHERE penugasan_status=0";
        $result=$this->db->query($thequery);
        return $result->result_array();
    }

    function getAcceptedTask(){
        $thequery = "SELECT id_penugasan, id_reviewer, id_editor, judul, kata_kunci, file_penugasan
                    FROM penugasan
                    WHERE penugasan_status=1";
        $result=$this->db->query($thequery);
        return $result->result_array();
    }

    function getWaitingForPaymentTask(){
        $thequery = "SELECT id_penugasan, id_reviewer, id_editor, judul, kata_kunci, file_penugasan
                    FROM penugasan
                    WHERE penugasan_status=3";
        $result=$this->db->query($thequery);
        return $result->result_array();
    }

    function getHaventConfirmedTask(){
        $thequery = "SELECT id_penugasan, id_reviewer, id_editor, judul, kata_kunci, file_penugasan
                    FROM penugasan
                    WHERE penugasan_status=4";
        $result=$this->db->query($thequery);
        return $result->result_array();
    }

    function getFinishedTask(){
        $thequery = "SELECT id_penugasan, id_reviewer, id_editor, judul, kata_kunci, file_penugasan, bukti_transaksi
                    FROM penugasan
                    WHERE penugasan_status=5";
        $result=$this->db->query($thequery);
        return $result->result_array();
    }

    function getRejectedTask(){
        $thequery = "SELECT id_penugasan, id_reviewer, id_editor, judul, kata_kunci, file_penugasan
                    FROM penugasan
                    WHERE penugasan_status=2";
        $result=$this->db->query($thequery);
        return $result->result_array();
    }
}
?>