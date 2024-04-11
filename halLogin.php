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
    <title>Login Admin dan Petugas</title>
</head>
<body>

<!-- Login Feature Section Start -->
<section id="login" class="section-margin" style="margin-bottom: 100pt;">
    <div class="container">
        <div class="row content">
            <div class="col-lg-12 text-center">
                <div class="jumbotron">
                    <h1> Masuk Sebagai </h1>
                </div>
                <button class="btn btn-info" data-toggle="modal" data-target="#loginModal">Login</button>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Pilih Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button type="button" class="btn btn-primary" onclick="window.location.href='admin/login.php'">Admin</button>
        <button type="button" class="btn btn-warning" onclick="window.location.href='petugas/login_petugas.php'">Petugas</button>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="vendor/css/js/bootstrap.min.js"></script>

</body>
</html>
