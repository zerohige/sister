<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sistem Penyimpanan Berkas Terdistribusi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="font-family: 'Poppins', sans-serif; background: #f4f4f9; color: #333;">

    <style type="text/css">
        .navbar-custom {
            background: linear-gradient(45deg, #1d3557, #457b9d);
            border-radius: 0;
            padding: 15px 0;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .navbar-brand {
            color: #fff;
            font-size: 24px;
            font-weight: 600;
        }

        .navbar-custom .navbar-nav > li > a {
            color: #fff;
            font-weight: 500;
        }

        .banner {
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('banner-bg.jpg') no-repeat center center/cover;
            height: 100vh;
            text-align: center;
            color: black;
            padding: 20px;
        }

        .banner h1 {
            font-size: 48px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .banner p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .banner a {
            display: inline-block;
            padding: 15px 30px;
            color: #fff;
            background: #e63946;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
            margin: 10px;
            transition: all 0.3s ease;
        }

        .banner a:hover {
            background: #1d3557;
            text-decoration: none;
        }

        .banner img {
            max-width: 60%;
        }

        .features {
            background: #fff;
            padding: 50px 20px;
            text-align: center;
        }

        .features h2 {
            font-size: 36px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .features p {
            font-size: 16px;
            color: #777;
        }
    </style>

    <nav class="navbar navbar-custom">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Kelompok 9</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Sistem Penyimpanan Berkas Terdistribusi</h1>
                    <p>Manajemen file dengan mudah dan cepat.</p>

                    <a href="user_login.php">Login User</a>
                    <a href="login.php">Login Admin / Petugas</a>
                </div>
                <div class="col-lg-6">
                    <img src="umrah.png" alt="Illustration">
                </div>
            </div>
        </div>
    </div>

    <section class="features" id="features">
        <div class="container">
            <h2>Why Choose Us?</h2>
            <p>Kami memberikan solusi manajemen file yang modern, aman, dan terdistribusi untuk kebutuhan Anda.</p>
        </div>
    </section>

    <footer style="background: #1d3557; color: #fff; padding: 20px 0; text-align: center;">
        <p>&copy; 2024 Kelompok 9. All rights reserved.</p>
    </footer>

    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
