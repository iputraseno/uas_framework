<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jabatan - Sun Theme</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            background: radial-gradient(circle, rgba(255, 223, 0, 1), rgba(255, 95, 0, 1), rgba(255, 69, 0, 1));
            color: white;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            animation: sunAnimation 10s infinite alternate;
        }

        h1 {
            margin-top: 20px;
            color: #f1f1f1;
            text-shadow: 2px 2px 4px rgba(255, 215, 0, 0.7);
        }

        .container {
            background: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(255, 165, 0, 0.7);
            margin-bottom: 20px;
        }

        table {
            background-color: rgba(255, 140, 0, 0.7);
            border-collapse: collapse;
            color: white;
        }

        th, td {
            text-align: center;
            vertical-align: middle;
        }

        th {
            background-color: rgba(255, 140, 0, 0.8);
            color: #f1f1f1;
        }

        tr:nth-child(even) {
            background-color: rgba(255, 115, 0, 0.8);
        }

        a.btn {
            transition: transform 0.2s, background-color 0.3s;
        }

        a.btn:hover {
            transform: scale(1.05);
            background-color: #ffa500 !important;
        }

        footer {
            margin-top: auto;
            text-align: center;
            padding: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 14px;
        }

        /* Sun animation */
        @keyframes sunAnimation {
            0% {
                background: radial-gradient(circle, rgba(255, 223, 0, 1), rgba(255, 95, 0, 1), rgba(255, 69, 0, 1));
            }
            100% {
                background: radial-gradient(circle, rgba(255, 255, 0, 1), rgba(255, 140, 0, 1), rgba(255, 69, 0, 1));
            }
        }

        /* Sun flare effect */
        .sun-flare {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255, 255, 0, 0.7), rgba(255, 140, 0, 0));
            border-radius: 50%;
            animation: flareAnimation 6s infinite ease-in-out;
        }

        @keyframes flareAnimation {
            0%, 100% {
                opacity: 0.7;
                transform: scale(1);
            }
            50% {
                opacity: 1;
                transform: scale(1.2);
            }
        }
    </style>
</head>
<body>
    <!-- Sun flare effect -->
    <div class="sun-flare"></div>

    <?php $this->load->view('partials/header'); ?>
    <div class="container mt-5">
        <h1 class="text-center">MANAJEMEN JABATAN</h1>
        <a href="<?= site_url('jabatancontroller/create'); ?>" class="btn btn-primary mb-3">Tambah Jabatan</a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Jabatan</th>
                    <th>Nama Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($jabatan as $j): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $j->kode_jabatan; ?></td>
                    <td><?= $j->nama_jabatan; ?></td>
                    <td>
                        <a href="<?= site_url('jabatancontroller/edit/'.$j->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= site_url('jabatancontroller/delete/'.$j->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php $this->load->view('partials/footer'); ?>
</body>
<footer>
    &copy; <?= date('Y'); ?> Dashboard Jabatan. All Rights Reserved.
</footer>
</html>