<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan - Space Theme</title>
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
            color: #f1f1f1;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            margin-top: 30px;
        }

        label {
            font-weight: bold;
        }

        input, select, button {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        input:focus, select:focus, button:focus {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            outline: none;
        }

        button {
            transition: transform 0.2s, background-color 0.3s;
        }

        button:hover {
            transform: scale(1.05);
            background-color: #4ca1af !important;
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

    <div class="container">
        <h3 class="text-center">Tambah Karyawan</h3>
        <form action="<?= site_url('karyawancontroller/store'); ?>" method="POST">
            <div class="form-group">
                <label>Kode Karyawan</label>
                <input type="text" class="form-control" name="kode_karyawan" required>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Jabatan</label>
                <select class="form-control" name="jabatan" required>
                    <?php foreach ($jabatan as $j): ?>
                        <option value="<?= $j->id; ?>"><?= $j->nama_jabatan; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label>Tanggal Masuk</label>
                <input type="date" class="form-control" name="tanggal_masuk" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>

    <?php $this->load->view('partials/footer'); ?>

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