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
                WHERE assign.assign_event=events.event_id 
                AND assign.assign_user = " .$id_user;
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
            FROM events";
    $res02 = $this->db->query($query02);
    return $res02->result_array();    
    }

    function getListOtherEvents($id_user){

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

    function getEvent2($id_event){
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

    function getEventImage($id_event){
        $this->db->select('event_pic');
        $this->db->from('events');
        $this->db->where('event_id', $id_event);
    $resss = $this->db->get()->result_array();

    $desc = $resss[0]['event_pic'];
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

    function getParticipants($id_event){
        $query ="SELECT *
            FROM users
            JOIN assign ON assign.assign_user = users.user_id
            JOIN events ON assign.assign_event = events.event_id
            WHERE events.event_id = " .$id_event;
        $res = $this->db->query($query);
        return $res->result_array();   
    }

    function getParty($id_user, $id_event){
        $query ="SELECT *
            FROM assign
            WHERE assign.assign_user = '" .$id_user ."'
            AND assign.assign_event = " . $id_event;
        $res = $this->db->query($query);
        return sizeof($res->result_array());   
    }

    function registerEvent($id_event, $id_user){
        $thequery = "INSERT INTO assign (assign_user, assign_event)
                    VALUES ('"      . $id_user . "','"
                                    . $id_event ."')";
        $this->db->query($thequery);
    }

    function unregisterEvent($id_event, $id_user){
        $thequery = "DELETE 
                    FROM assign 
                    WHERE assign_user = '" .$id_user . "'
                    AND assign_event = " .$id_event;
        $this->db->query($thequery);
    }

    function editTheEvent($newName, $id_event){
        $newNama = $this->input->post('nama');
        $newDate = $this->input->post('tanggal');
        $newType = $this->input->post('type');
        $newLoc = $this->input->post('lokasi');
        $newDes = $this->input->post('des');
        $newCont = $this->input->post('nomor');
        
        $this->db->set("event_name", $newNama);
        $this->db->where('event_id', $id_event);
        $this->db->update('events');

        $this->db->set("event_date", $newDate);
        $this->db->where('event_id', $id_event);
        $this->db->update('events');
        
        $this->db->set("event_type", $newType);
        $this->db->where('event_id', $id_event);
        $this->db->update('events');

        $this->db->set("event_loc", $newLoc);
        $this->db->where('event_id', $id_event);
        $this->db->update('events');

        $this->db->set("event_des", $newDes);
        $this->db->where('event_id', $id_event);
        $this->db->update('events');

        $this->db->set("event_pic", $newName);
        $this->db->where('event_id', $id_event);
        $this->db->update('events');

        $this->db->set("event_contact", $newCont);
        $this->db->where('event_id', $id_event);
        $this->db->update('events');
    }

    function deleteTheEvent($id_event){
        $thequery = "DELETE 
                    FROM assign 
                    WHERE assign_event = " .$id_event;
        $this->db->query($thequery);

        $thequery2 = "DELETE 
                    FROM events
                    WHERE event_id = " .$id_event;
        $this->db->query($thequery2);
    }

    function getCreator($id_event){
        $this->db->select('event_creator');
        $this->db->from('events');
        $this->db->where('event_id', $id_event);
    $resCre = $this->db->get()->result_array();

    $desc = $resCre[0]['event_creator'];
    return $desc;  
    }
}
?>