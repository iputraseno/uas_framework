<?php
class KaryawanModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_karyawan() {
        $query = $this->db->get('karyawan');
        return $query->result();
    }

    public function get_all_jabatan() {
        $query = $this->db->get('jabatan');
        return $query->result();
    }

    public function insert_karyawan($data) {
        return $this->db->insert('karyawan', $data);
    }

    public function get_karyawan_by_id($id) {
        $query = $this->db->get_where('karyawan', ['id' => $id]);
        return $query->row();
    }

    public function update_karyawan($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('karyawan', $data);
    }

    public function delete_karyawan($id) {
        $this->db->where('id', $id);
        return $this->db->delete('karyawan');
    }
}
?>