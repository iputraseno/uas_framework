<?php
class UsersController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UsersModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $data['users'] = $this->UsersModel->get_all_users();
        $this->load->view('users/dashboard', $data);
    }

    public function create() {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $this->load->view('users/create');
    }

    public function store() {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'role' => $this->input->post('role'),
            ];
            $this->UsersModel->insert_users($data);
            redirect('userscontroller/index');
        }
    }

    public function edit($id) {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $data['users'] = $this->UsersModel->get_users_by_id($id);
        $this->load->view('users/edit', $data);
    }

    public function update($id) {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'role' => $this->input->post('role'),
            ];
            $this->UsersModel->update_users($id, $data);
            redirect('userscontroller/index');
        }
    }

    public function delete($id) {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $this->UsersModel->delete_users($id);
        redirect('userscontroller/index');
    }
}
?>