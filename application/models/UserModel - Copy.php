<?php
class UserModel extends CI_Model {

    public function getUserByUsername($username) {
        $query = $this->db->get_where('users', ['username' => $username]);
        return $query->row();
    }

}
