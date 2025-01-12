<?php
class KaryawanController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('KaryawanModel');
        $this->load->model('JabatanModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $karyawan = $this->KaryawanModel->get_all_karyawan();
        foreach ($karyawan as $k) {
            $jabatan = $this->JabatanModel->get_by_id($k->jabatan);
            if ($jabatan) {
                $k->nama_jabatan = $jabatan->nama_jabatan;
            } else {
                $k->nama_jabatan = 'N/A';
            }
        }
        
        $data['karyawan'] = $karyawan;
        $this->load->view('karyawan/dashboard', $data);
    }

    public function create() {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $data['jabatan'] = $this->JabatanModel->get_all();
        $this->load->view('karyawan/create', $data);
    }

    public function store() {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $this->form_validation->set_rules('kode_karyawan', 'Kode Karyawan', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = [
                'kode_karyawan' => $this->input->post('kode_karyawan'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'jabatan' => $this->input->post('jabatan'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk')
            ];
            $this->KaryawanModel->insert_karyawan($data);
            redirect('karyawancontroller/index');
        }
    }

    public function edit($id) {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $data['karyawan'] = $this->KaryawanModel->get_karyawan_by_id($id);
        $data['jabatan'] = $this->JabatanModel->get_all();
        $this->load->view('karyawan/edit', $data);
    }

    public function update($id) {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $this->form_validation->set_rules('kode_karyawan', 'Kode Karyawan', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = [
                'kode_karyawan' => $this->input->post('kode_karyawan'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'jabatan' => $this->input->post('jabatan'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk')
            ];
            $this->KaryawanModel->update_karyawan($id, $data);
            redirect('karyawancontroller/index');
        }
    }

    public function delete($id) {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $this->KaryawanModel->delete_karyawan($id);
        redirect('karyawancontroller/index');
    }
}
?>