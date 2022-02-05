<?php
Class account extends CI_Model
{
    function InsertNewUser($newProf){
        $roles = $this->input->post('roles');

        $thequery = "INSERT INTO user (nama, username, password, photo, email)
                    VALUES ('"  . $this->input->post('nama') . "','"
                                . $this->input->post('username') . "',MD5('"
                                . $this->input->post('password') . "'),'"
                                . $newProf ."','"
                                . $this->input->post('email') . "')";
        $this->db->query($thequery);
        $id_user = $this->db->insert_id();

        foreach ($roles as $item){
            $peran = $item;
            if ($peran == '1'){ //editor
                $thequery2 = "INSERT INTO editor (id_user, date_updated)
                            VALUES (". $id_user . ", now())";
                            $this->db->query($thequery2);

                $thequery3 = "INSERT INTO member (id_user, id_group, date_updated)
                            VALUES (". $id_user . "," . $peran . ", now())";
                            $this->db->query($thequery3);
            }
            elseif ($peran == '2'){//reviewer
                $thequery2 = "INSERT INTO reviewer (id_user, date_updated)
                            VALUES (". $id_user . ", now())";
                            $this->db->query($thequery2);

                $thequery3 = "INSERT INTO member (id_user, id_group, date_updated)
                            VALUES (". $id_user . "," . $peran . ", now())";
                            $this->db->query($thequery3);
            }
            else {
                $thequery2 = "INSERT INTO makelaar (id_user, date_updated)
                            VALUES (". $id_user . ", now())";
                            $this->db->query($thequery2);

                $thequery3 = "INSERT INTO member (id_user, id_group, date_updated)
                            VALUES (". $id_user . "," . $peran . ", now())";
                            $this->db->query($thequery3);
            }
        }
        return $id_user;
}

    function getIDuser(){
        $thequery = "SELECT * FROM user t1
                    INNER JOIN member t2 on t1.id_user = t2.id_user
                    WHERE t1.username='" . $this->input->post('username') . "'
                    AND t1.password=MD5('" . $this->input->post('password') . "')
                    AND t1.user_status=1";
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

    function updateProfile($id_user,$newProf)
    {
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