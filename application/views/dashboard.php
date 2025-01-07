<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jabatan - Sun Theme</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #FFEB3B, #FF9800); /* Gradasi matahari, dari kuning terang ke oranye */
            color: #fff; /* Warna teks putih agar kontras dengan latar belakang cerah */
            font-family: 'Lora', serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        h2 {
            /* Gradasi warna oranye pada teks */
            background: linear-gradient(to right, #FF5722, #FF9800); /* Gradasi oranye terang ke oranye gelap */
            -webkit-background-clip: text; /* Mengaplikasikan gradasi pada teks */
            color: transparent; /* Membuat warna teks transparan agar gradasi terlihat */
            font-family: 'Roboto', sans-serif;
            font-size: 2.5rem; /* Ukuran font lebih kecil */
            font-weight: bold; /* Menebalkan teks */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6); /* Efek bayangan untuk membuat teks lebih menonjol */
        }

        .dashboard-container {
            margin-top: 50px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.9); /* Latar belakang putih cerah dengan transparansi */
            border: 1px solid #f1c40f;
        }

        .btn {
            background-color: #FFA500; /* Warna oranye cerah untuk tombol */
            color: #fff;
            border: none;
            font-family: 'Roboto', sans-serif;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn:hover {
            background-color: #FF7043; /* Oranye lebih gelap saat hover */
            transform: scale(1.05);
        }

        /* Footer styling */
        footer {
            background-color: #FF7043; /* Warna oranye lebih gelap untuk footer */
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php $this->load->view('partials/header'); ?>

    <!-- Dashboard -->
    <div class="dashboard-container text-center py-5">
        <h2 class="mb-4">APLIKASI MANAJEMEN</h2>
        <div class="button-container mb-3">
            <a href="<?= site_url('karyawancontroller/index'); ?>" class="btn px-4 py-2">Manajemen Karyawan</a>
        </div>
        <div class="button-container mb-3">
            <a href="<?= site_url('jabatancontroller/index'); ?>" class="btn px-4 py-2">Manajemen Jabatan</a>
        </div>
        <div class="button-container mb-3">
            <a href="<?= site_url('userscontroller/index'); ?>" class="btn px-4 py-2">Manajemen User</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; <?= date('Y'); ?> Aplikasi Manajemen - Sun Theme</p>
    </footer>
</body>
</html>
