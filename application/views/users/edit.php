<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Tema luar angkasa */
        body, html {
            height: 100%;
            margin: 0;
            background: linear-gradient(120deg, #000428, #004e92); /* Gradasi biru gelap */
            font-family: 'Arial', sans-serif;
            color: #fff;
        }

        .container {
            background: rgba(0, 0, 0, 0.85);
            border-radius: 15px;
            padding: 30px;
            margin-top: 80px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
            width: 45%;
        }

        h2 {
            text-align: center;
            color: #00d4ff;
            text-shadow: 0 0 15px #00d4ff;
        }

        .card {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            padding: 20px;
        }

        .form-label {
            color: #fff;
        }

        .form-control, .form-select {
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
            border: 1px solid #ddd;
        }

        .form-control:focus, .form-select:focus {
            border-color: #00d4ff;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .btn-primary {
            background: linear-gradient(45deg, #34e89e, #0f3443);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #0f3443, #34e89e);
        }

        .btn-secondary {
            background: linear-gradient(45deg, #555, #333);
            border: none;
        }

        .btn-secondary:hover {
            background: linear-gradient(45deg, #333, #555);
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        /* Mengatur tombol agar ada di kiri dan kanan dengan jarak */
        .button-group {
            display: flex;
            justify-content: space-between; /* Membuat tombol sejajar dengan jarak */
            gap: 20px; /* Memberi jarak antara tombol */
            margin-top: 20px;
        }

        .btn-group-custom {
            min-width: auto; /* Menyesuaikan lebar tombol dengan teks */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Data Users</h2>
        <div class="card">
            <div class="card-body">
                <!-- Form edit data jabatan -->
                <form action="<?= base_url('users/update/' . $users->id); ?>" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username :</label>
                        <input type="text" id="username" name="username" class="form-control" value="<?= $users->username; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password :</label>
                        <input type="password" id="password" name="password" class="form-control" value="<?= $users->password; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role :</label>
                        <input type="text" id="role" name="role" class="form-control" value="<?= $users->role; ?>" required>
                    </div>
                    
                    <!-- Tombol Simpan Perubahan di kanan dan Batal di kiri -->
                    <div class="button-group">
                        <a href="<?= base_url('userscontroller/index'); ?>" class="btn btn-secondary btn-group-custom">Batal</a>
                        <button type="submit" class="btn btn-primary btn-group-custom">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php $this->load->view('partials/footer'); ?>
