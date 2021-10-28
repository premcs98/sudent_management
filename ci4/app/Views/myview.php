<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('boot/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('boot/css/bootstrap.css')?>">
    <script type="text/javascript" src="<?php  echo base_url('boot/js/bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?php  echo base_url('boot/js/bootstrap.bundle.min.js')?>"></script>
    <script type="text/javascript" src="<?php  echo base_url('boot/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php  echo base_url('boot/js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php  echo base_url('boot/parsley_n/src/parsley.js')?>"></script>
    <title>Home</title>
</head>
  <body class="bg-light">
    <div class="container-fluid bg-primary text-white text-center p-3 pt-3 mb-1">
        <h1>STUDENT MANAGEMENT</h1>          
    </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 pt-3 mt-1">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Brand</a>
        
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('welcome') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('aboutus')?>">About us</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('signup') ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='<?php echo base_url('login')?>'><span class="glyphicon glyphicon-log-in"></span> Login</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
  
  </body>
</html>