<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Minimalist Theme</title>
    <style>
        /* Reset dan Body */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', Arial, sans-serif;
            background-color:rgb(23, 126, 121); /* Abu-abu muda */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333; /* Abu tua */
        }

        /* Container Utama */
        .login-container {
            width: 100%;
            max-width: 350px;
            padding: 30px;
            background-color: #ffffff; /* Putih bersih */
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #444; /* Abu tua */
            font-weight: 600;
        }

        /* Input Fields */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc; /* Border abu terang */
            border-radius: 6px;
            font-size: 14px;
            color: #333;
            background: #fafafa; /* Abu sangat terang */
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #5E35B1; /* Ungu lembut */
            outline: none;
            box-shadow: 0 0 5px rgba(94, 53, 177, 0.3);
        }

        input::placeholder {
            color: #aaa; /* Placeholder abu terang */
        }

        /* Tombol */
        button {
            width: 100%;
            padding: 12px;
            background-color: #5E35B1; /* Ungu */
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4527A0; /* Ungu lebih tua */
        }

        /* Pesan Error */
        .error {
            color: #D32F2F; /* Merah */
            margin-top: 10px;
            font-size: 14px;
        }

        /* Footer */
        .footer {
            margin-top: 15px;
            font-size: 12px;
            color: #777;
        }

    </style>
</head>
<body>
    <!-- Container Login -->
    <div class="login-container">
        <h2>Login</h2>
        <form action="<?= base_url('auth/loginProcess'); ?>" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>

        <!-- Pesan Error -->
        <?php $CI = &get_instance(); ?>
        <?php if ($CI->session->flashdata('error')): ?>
            <p class="error"><?= $CI->session->flashdata('error'); ?></p>
        <?php endif; ?>

        <!-- Footer -->
        <div class="footer">
            © 2024 Your Company. All Rights Reserved.
        </div>
    </div>
</body>
</html>
