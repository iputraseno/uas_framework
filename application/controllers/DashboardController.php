<?php
class DashboardController extends CI_Controller {

    public function index() {
        // Cek apakah user sudah login
        if ($this->session->userdata('logged_in')) {
            $this->load->view('dashboard');
        } else {
            redirect('auth/login');
        }
    }

}
