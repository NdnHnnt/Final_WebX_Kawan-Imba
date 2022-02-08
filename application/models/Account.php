<?php
Class account extends CI_Model
{
    function InsertNewUser($newProf){    
        $thequery = "INSERT INTO users (user_nama, user_password, user_pic, user_email)
                    VALUES ('"      . $this->input->post('username') . "',MD5('"
                                    . $this->input->post('password') . "'),'"
                                    . $newProf ."','"
                                    . $this->input->post('email') . "')";
        $this->db->query($thequery);
        $id_user = $this->db->insert_id();
    }

    function getIDuser(){
        $thequery = "SELECT * FROM users
                    WHERE user_email='" . $this->input->post('email') . "'
                    AND user_password=MD5('" . $this->input->post('password') . "')";
                    //INNER JOIN group t3 ON t2.id_group=t3.id_group AND t3.group_status=1"
        $res = $this->db->query($thequery);
        $user = $res->result_array();
        //cek jika user berjumlah satu atau lebih
        if (count($user)>0){
            //mengembalikan user
            return $user;
        }
        //jika tidak, kembalikan nilai -1
        return [];
    }

    function updateProfile($id_user,$newProf){
        $newName = $this->input->post('nama');
        $newAcc = $this->input->post('rekening');
        $newBid = $this->input->post('bidang');
        
        $this->db->set("nama", $newName);
        $this->db->where('id_user', $id_user);
        $this->db->update('user');
        
        $this->db->set("bidang_ilmu", $newBid);
        $this->db->where('id_user', $id_user);
        $this->db->update('reviewer');
        
        $this->db->set("no_rekening", $newAcc);
        $this->db->where('id_user', $id_user);
        $this->db->update('reviewer');

        $this->db->set("photo", $newProf);
        $this->db->where('id_user', $id_user);
        $this->db->update('user');


        // $this->db->select('email');
        // $this->db->form('users');
        // $this->db->where('users.id_user', $id_user);
        // $result = $this->db->->get()->result_array();
        // $email  = $result[0]['email'];
    }
}
?>