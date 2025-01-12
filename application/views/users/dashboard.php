<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Users</title>
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
            margin-top: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
            width: 90%;
            max-width: 900px;
        }

        h2 {
            text-align: center;
            color: #00d4ff;
            text-shadow: 0 0 15px #00d4ff;
            margin-bottom: 20px;
        }

        table {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        th, td {
            color: #fff;
            text-align: center;
        }

        .btn-primary {
            background: linear-gradient(45deg, #34e89e, #0f3443);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #0f3443, #34e89e);
        }

        .btn-danger {
            background: linear-gradient(45deg, #ff5f6d, #ffc371);
            border: none;
        }

        .btn-danger:hover {
            background: linear-gradient(45deg, #ffc371, #ff5f6d);
        }

        .btn-success {
            background: linear-gradient(45deg, #00c9ff, #92fe9d);
            border: none;
        }

        .btn-success:hover {
            background: linear-gradient(45deg, #92fe9d, #00c9ff);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Manajemen Users</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user->id; ?></td>
                        <td><?php echo $user->username; ?></td>
                        <td><?php echo $user->role; ?></td>
                        <td>
                            <a href="<?php echo site_url('userscontroller/edit/' . $user->id); ?>" class="btn btn-primary">Edit</a>
                            <a href="<?php echo site_url('userscontroller/delete/' . $user->id); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="<?php echo site_url('userscontroller/create'); ?>" class="btn btn-success">Tambah User</a>
    </div>
    <?php $this->load->view('partials/footer'); ?>
</body>
</html>