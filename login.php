<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Administrator | Sistem Informasi Arsip Digital</title>
    <meta name="description" content="Login ke Sistem Penyimpanan Berkas Terdistribusi">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(45deg, #1d3557, #457b9d);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .login-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container h3,
        .login-container h4 {
            margin: 10px 0;
            color: #333;
        }

        .login-container p {
            font-size: 14px;
            color: #777;
        }

        .form-control {
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .btn {
            border-radius: 5px;
            font-weight: bold;
        }

        .alert {
            font-size: 14px;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        .login-footer {
            margin-top: 20px;
            font-size: 12px;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h3>Sistem Penyimpanan</h3>
        <h4>Berkas Terdistribusi</h4>
        <p>Silahkan login untuk mengakses arsip.</p>

        <?php 
        if (isset($_GET['alert'])) {
            $alerts = [
                "gagal" => "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>",
                "logout" => "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>",
                "belum_login" => "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>",
            ];
            echo $alerts[$_GET['alert']] ?? '';
        }
        ?>

        <form action="periksa_login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="akses">Hak Akses</label>
                <select name="akses" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>

        <a href="index.php">Kembali</a>

        <div class="login-footer">
            <p>&copy; <?php echo date('Y'); ?>. All rights reserved. Sistem Penyimpanan Berkas Terdistribusi</p>
        </div>
    </div>
</body>

</html>
