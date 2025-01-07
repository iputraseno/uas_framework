<?php
class JabatanController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('JabatanModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $data['jabatan'] = $this->JabatanModel->get_all();
        $this->load->view('jabatan/dashboard', $data);
    }

    public function create() {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $data['nama_jabatan_options'] = ['Manager', 'Staff', 'Supervisor', 'Intern'];
        $this->load->view('jabatan/create', $data);
    }

    public function store() {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $this->form_validation->set_rules('kode_jabatan', 'Kode Jabatan', 'required');
        $this->form_validation->set_rules('nama_jabatan', 'Nama Jabatan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = [
                'kode_jabatan' => $this->input->post('kode_jabatan'),
                'nama_jabatan' => $this->input->post('nama_jabatan')
            ];
            $this->JabatanModel->insert($data);
            redirect('jabatancontroller/index');
        }
    }

    public function edit($id) {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $data['jabatan'] = $this->JabatanModel->get_by_id($id);
        $data['nama_jabatan_options'] = ['Manager', 'Staff', 'Supervisor', 'Intern'];
        $this->load->view('jabatan/edit', $data);
    }

    public function update($id) {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $this->form_validation->set_rules('kode_jabatan', 'Kode Jabatan', 'required');
        $this->form_validation->set_rules('nama_jabatan', 'Nama Jabatan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = [
                'kode_jabatan' => $this->input->post('kode_jabatan'),
                'nama_jabatan' => $this->input->post('nama_jabatan')
            ];
            $this->JabatanModel->update($id, $data);
            redirect('jabatancontroller/index');
        }
    }

    public function delete($id) {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $this->JabatanModel->delete($id);
        redirect('jabatancontroller/index');
    }
}
?>