<?php
class AuthController extends CI_Controller {

    public function login() {
        $this->load->view('auth/login');
    }

    public function loginProcess() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Load model
        $this->load->model('UserModel');
        $user = $this->UserModel->getUserByUsername($username);

        // Verifikasi password
        if ($user && password_verify($password, $user['password'])) {
            // Set session
            $session_data = [
                'user_id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role'],
                'logged_in' => TRUE
            ];
            $this->session->set_userdata($session_data);
            redirect('dashboard');
        } else {
            // Jika login gagal
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('auth/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
?>