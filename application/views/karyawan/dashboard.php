<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Karyawan - Sun Theme</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            color: white;
            background: linear-gradient(to bottom, #ff8c00, #ff4500, #b22222);
            position: relative;
            overflow: hidden;
        }

        /* Efek Matahari di pojok kiri atas */
        .sun {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 150px;
            height: 150px;
            background: radial-gradient(circle, #ffd700, #ff8c00);
            border-radius: 50%;
            box-shadow: 0 0 100px 50px rgba(255, 215, 0, 0.5);
            animation: glow 5s infinite alternate;
        }

        @keyframes glow {
            0% {
                box-shadow: 0 0 100px 50px rgba(255, 215, 0, 0.5);
            }
            100% {
                box-shadow: 0 0 150px 80px rgba(255, 165, 0, 0.7);
            }
        }

        .table-container {
            margin: 50px auto;
            padding: 20px;
            max-width: 1200px;
            background: rgba(255, 69, 0, 0.5);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(255, 140, 0, 0.5);
        }

        h2 {
            text-align: center;
            color: #ffd700;
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.8);
        }

        table {
            background: rgba(255, 69, 0, 0.8);
            color: white;
        }

        th {
            background: rgba(255, 69, 0, 0.8);
            color: white;
        }

        tbody tr:hover {
            background: rgba(255, 140, 0, 0.6);
        }

        .btn {
            border: none;
            border-radius: 5px;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.6);
        }

        .btn-success {
            background: linear-gradient(to right, #43cea2, #185a9d);
        }

        .btn-warning {
            background: linear-gradient(to right, #f7971e, #ffd200);
        }

        .btn-danger {
            background: linear-gradient(to right, #f85032, #e73827);
        }

        .btn:hover {
            filter: brightness(1.2);
        }
    </style>
</head>
<body>
    <!-- Efek Matahari di pojok kiri atas -->
    <div class="sun"></div>

    <?php $this->load->view('partials/header'); ?>

    <div class="table-container">
        <h2>MANAJEMEN KARYAWAN</h2>
        <div class="mb-3 text-end">
            <a href="<?= site_url('karyawancontroller/create'); ?>" class="btn btn-success">Tambah Karyawan</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Karyawan</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Jabatan</th>
                    <th>Tanggal Lahir</th>
                    <th>Tanggal Masuk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($karyawan as $k) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $k->kode_karyawan; ?></td>
                    <td><?= $k->nama; ?></td>
                    <td><?= $k->jenis_kelamin; ?></td>
                    <td><?= $k->nama_jabatan; ?></td>
                    <td><?= $k->tanggal_lahir; ?></td>
                    <td><?= $k->tanggal_masuk; ?></td>
                    <td>
                        <a href="<?= site_url('karyawancontroller/edit/'.$k->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= site_url('karyawancontroller/delete/'.$k->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php $this->load->view('partials/footer'); ?>
</body>
</html>