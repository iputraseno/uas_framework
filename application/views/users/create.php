<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Users</title>
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
            width: 30%;
        }

        h3 {
            text-align: center;
            color: #00d4ff;
            text-shadow: 0 0 15px #00d4ff;
        }

        .form-group label {
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
    </style>
</head>
<body>
    <div class="container mt-5">
        <h3>Tambah Users</h3>
        <form action="<?= site_url('userscontroller/store'); ?>" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label>Role</label>
                <input type="text" class="form-control" name="role" required>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php $this->load->view('partials/footer'); ?>