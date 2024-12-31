<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login User | Sistem Penyimpanan Berkas Terdistribusi</title>
    <meta name="description" content="">
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

        .form-group {
            text-align: left;
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
        <p>Silahkan login untuk mengakses File.</p>

        <?php 
        if(isset($_GET['alert'])){
            if($_GET['alert'] == "gagal"){
                echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
            }else if($_GET['alert'] == "logout"){
                echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
            }else if($_GET['alert'] == "belum_login"){
                echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
            }
        }
        ?>

        <form action="periksa_user_login.php" method="POST" id="loginForm">
            <div class="form-group">
                <label class="control-label" for="username">Username</label>
                <input type="text" placeholder="username" title="Please enter your username" required="required" autocomplete="off" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" title="Please enter your password" placeholder="******" required="required" autocomplete="off" name="password" id="password" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Login">
        </form>

        <br><a href="index.php">Kembali</a>

        <div class="login-footer">
            <p>&copy; <?php echo date('Y') ?>. Sistem Penyimpanan Berkas Terdistribusi<br><span style="font-weight: bold;">Kelompok 4</span></p>
        </div>
    </div>

    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery-price-slider.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="assets/js/metisMenu/metisMenu-active.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/icheck/icheck.min.js"></script>
    <script src="assets/js/icheck/icheck-active.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
