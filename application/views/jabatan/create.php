<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jabatan - Space Theme</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            background: radial-gradient(circle,rgb(179, 180, 184),rgb(152, 153, 156),rgb(145, 147, 150));
            color: white;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        h1 {
            color:rgb(190, 187, 187);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .container {
            background: rgba(189, 185, 185, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            margin-top: 30px;
        }

        label {
            font-weight: bold;
        }

        input, select, button {
            background-color: rgba(165, 163, 163, 0.1);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        input:focus, select:focus, button:focus {
            background-color: rgba(6, 37, 241, 0.5);
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
        <h1 class="text-center">Tambah Jabatan</h1>
        <form action="<?= site_url('jabatancontroller/store'); ?>" method="post">
            <div class="mb-3">
                <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
                <input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" required>
            </div>
            
            <div class="mb-3">
                <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                <select id="nama_jabatan" name="nama_jabatan" class="form-select" required>
                    <?php foreach ($nama_jabatan_options as $option): ?>
                        <option value="<?= $option; ?>"><?= $option; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= site_url('jabatancontroller'); ?>" class="btn btn-secondary">Batal</a>
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