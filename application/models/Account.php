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

    function getTheUser($id_user){
        $thequery = "SELECT * FROM users
                    WHERE user_id=" . $id_user;
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
        $newName = $this->input->post('username');
        $newPass = MD5($this->input->post('password'));
        $newMail = $this->input->post('email');
        $newLoc = $this->input->post('location');
        $newInsta = $this->input->post('instagram');
        $newWA = $this->input->post('whatsapp');
        $newTelegram = $this->input->post('telegram');
        $newLink = $this->input->post('link');
        $newDes = $this->input->post('des');
        
        $this->db->set("user_nama", $newName);
        $this->db->where('user_id', $id_user);
        $this->db->update('users');

        $this->db->set("user_password", $newPass);
        $this->db->where('user_id', $id_user);
        $this->db->update('users');
        
        $this->db->set("user_email", $newMail);
        $this->db->where('user_id', $id_user);
        $this->db->update('users');

        $this->db->set("user_loc", $newLoc);
        $this->db->where('user_id', $id_user);
        $this->db->update('users');

        $this->db->set("user_insta", $newInsta);
        $this->db->where('user_id', $id_user);
        $this->db->update('users');

        $this->db->set("user_wa", $newWA);
        $this->db->where('user_id', $id_user);
        $this->db->update('users');

        $this->db->set("user_telegram", $newTelegram);
        $this->db->where('user_id', $id_user);
        $this->db->update('users');

        $this->db->set("user_shop", $newLink);
        $this->db->where('user_id', $id_user);
        $this->db->update('users');

        $this->db->set("user_des", $newDes);
        $this->db->where('user_id', $id_user);
        $this->db->update('users');

        $this->db->set("user_pic", $newProf);
        $this->db->where('user_id', $id_user);
        $this->db->update('users');
    }
}
?>