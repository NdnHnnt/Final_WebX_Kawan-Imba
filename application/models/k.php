<?php
$thequery = "INSERT INTO user (nama, username, password, photo, email)
                    VALUES ('"  . $this->input->post('nama') . "','"
                                . $this->input->post('username') . "',MD5('"
                                . $this->input->post('password') . "'),'"
                                . $newProf ."','"
                                . $this->input->post('email') . "')";
?>