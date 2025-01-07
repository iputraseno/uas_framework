<?php
class UsersModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_users() {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function insert_users($data) {
        return $this->db->insert('users', $data);
    }

    public function get_users_by_id($id) {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row();
    }

    public function update_users($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    public function delete_users($id) {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
}
?>