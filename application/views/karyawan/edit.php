<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Karyawan - Space Theme</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            background: radial-gradient(circle, #0d1b2a, #1b263b, #415a77);
            color: white;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        h3 {
            margin-top: 20px;
            color: #f1f1f1;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
        }

        label {
            color: #f1f1f1;
        }

        input, select, button, a {
            border-radius: 5px;
        }

        button.btn-primary {
            background: #415a77;
            border: none;
            transition: background-color 0.3s, transform 0.2s;
        }

        button.btn-primary:hover {
            background-color: #4ca1af;
            transform: scale(1.05);
        }

        a.btn-secondary {
            background-color: #1b263b;
            border: none;
        }

        a.btn-secondary:hover {
            background-color: #4ca1af;
        }

        footer {
            margin-top: auto;
            text-align: center;
            padding: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 14px;
        }

        /* Star background animation */
        .stars {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            opacity: 0.8;
            animation: twinkle 2s infinite ease-in-out;
        }

        @keyframes twinkle {
            0%, 100% {
                opacity: 0.8;
            }
            50% {
                opacity: 0.3;
            }
        }
    </style>
</head>
<body>
    <div class="stars"></div>

    <?php $this->load->view('partials/header'); ?>
    <div class="container mt-5">
        <h3>Edit Data Karyawan</h3>
        <form action="<?= site_url('karyawancontroller/update/' . $karyawan->id); ?>" method="POST">
            <div class="form-group">
                <label>Kode Karyawan</label>
                <input type="text" class="form-control" name="kode_karyawan" value="<?= $karyawan->kode_karyawan; ?>" required>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $karyawan->nama; ?>" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" required>
                    <option value="Laki-laki" <?= $karyawan->jenis_kelamin == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
                    <option value="Perempuan" <?= $karyawan->jenis_kelamin == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Jabatan</label>
                <select class="form-control" name="jabatan" required>
                    <?php foreach ($jabatan as $j): ?>
                        <option value="<?= $j->id; ?>" <?= $karyawan->jabatan == $j->id ? 'selected' : ''; ?>><?= $j->nama_jabatan; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?= $karyawan->tanggal_lahir; ?>" required>
            </div>
            <div class="form-group">
                <label>Tanggal Masuk</label>
                <input type="date" class="form-control" name="tanggal_masuk" value="<?= $karyawan->tanggal_masuk; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            <a href="<?= site_url('karyawancontroller/index'); ?>" class="btn btn-secondary mt-3">Batal</a>
        </form>
    </div>
    <?php $this->load->view('partials/footer'); ?>
    <footer>
        &copy; <?= date('Y'); ?> Edit Data Karyawan. All Rights Reserved.
    </footer>

    <script>
        const starsContainer = document.createElement('div');
        starsContainer.classList.add('stars');
        document.body.appendChild(starsContainer);

        for (let i = 0; i < 100; i++) {
            const star = document.createElement('div');
            star.classList.add('star');
            star.style.top = `${Math.random() * 100}%`;
            star.style.left = `${Math.random() * 100}%`;
            starsContainer.appendChild(star);
        }
    </script>
</body>
</html>