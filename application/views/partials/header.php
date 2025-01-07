<!-- views/partials/header.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand fw-bold" href="<?= site_url('dashboard'); ?>">
            <i class="bi bi-speedometer2"></i> 🏠Home
        </a>
        
        <!-- Toggle Button for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <!-- User Information -->
                <li class="nav-item me-3">
                    <span class="nav-link text-light d-flex align-items-center">
                        <i class="bi bi-person-circle me-2"></i>
                        Welcome, <strong><?= $this->session->userdata('username'); ?></strong>
                    </span>
                </li>
                <!-- Role Information -->
                <li class="nav-item me-3">
                    <span class="nav-link text-light d-flex align-items-center">
                        <i class="bi bi-shield-lock me-2"></i>
                        Role: <strong><?= ucfirst($this->session->userdata('role')); ?></strong>
                    </span>
                </li>
                <!-- Logout Button -->
                <li class="nav-item">
                    <a class="btn btn-danger text-white px-3 py-1" href="<?= site_url('auth/logout'); ?>" style="border-radius: 20px; font-weight: bold;">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Tambahan CSS -->
<style>
    nav.navbar {
        margin-bottom: 40px; /* Tambahkan jarak antara navbar dan konten */
    }
    .navbar-brand {
        font-size: 1.25rem; /* Sesuaikan ukuran font untuk branding */
    }
    .nav-link {
        font-size: 0.95rem; /* Buat font sedikit lebih kecil */
    }
    .btn-danger {
        transition: background-color 0.3s ease;
    }
    .btn-danger:hover {
        background-color: #c82333; /* Hover effect untuk tombol logout */
    }
</style>