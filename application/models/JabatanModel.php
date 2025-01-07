<?php
class JabatanModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all() {
        $query = $this->db->get('jabatan');
        return $query->result();
    }

    public function insert($data) {
        $this->db->insert('jabatan', $data);
    }

    public function get_by_id($id) {
        $query = $this->db->get_where('jabatan', ['id' => $id]);
        return $query->row();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('jabatan', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('jabatan');
    }
}
?>