<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- boootstrap -->
    <link href="vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/css/bootstrap/bootstrap.css" rel="stylesheet">

    <!-- icon dan fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- tema css -->
    <link href="css/tampilan.css" rel="stylesheet">
    <title>Inventory Barang</title>
</head>
<body>

<!-- Menu -->
<nav class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand">CV. PUTRASABU MANDIRI</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="page-scroll dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="admin/login.php">Admin</a></li>
                        <li><a href="petugas/login_petugas.php">Petugas</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Pilih Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center"> <!-- Tambahkan class text-center -->
                <button type="button" class="btn btn-primary" onclick="window.location.href='admin/login.php'">Admin</button>
                <button type="button" class="btn btn-warning" onclick="window.location.href='petugas/login_petugas.php'">Petugas</button>
            </div>
        </div>
    </div>
</div>

<!-- Header atau gambar-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="images/logistic1.jpg" alt="First slide">
        </div>
        <div class="item">
            <img class="second-slide" src="images/logistic2.jpg" alt="Second slide">
        </div>
        <div class="item">
            <img class="third-slide" src="images/logistic3.jpg" alt="Third slide">
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- footer -->
<footer class="footer container">
    <section class="col-sm-12" style="margin-top: 50px;">
        <div class="col-lg-10 col-lg-offset-1 text-center">
            <hr class="medium">
            <p class="text-muted" style="font-size: 16px;">Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved</p>
        </div>
    </section>
</footer>

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!--include-->
<script src="vendor/css/js/bootstrap.min.js"></script>

</body>
</html>
