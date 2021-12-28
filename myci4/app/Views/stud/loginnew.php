<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('boot/css/style.css')?>">
       <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/a8018f10c4.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .custom-cener{
          margin-top:18%;
        }
    </style>
</head>
<body>  
  <div class="container">
    <div class="custom-cener">
      <div class="row align-items-center g-3 mx-100 my-2">
        <div class="col-md-4">
          <a  href='<?php echo base_url('student/login')?>' class=" box me-2 text-dark-50 text-decoration-none">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded"> 
              <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                <h3 class="fs-2 text-dark">STUDENT</h3>
            </div>
        </div></a>
        <div class="col-md-4">
          <a  href='<?php echo base_url('student/login')?>' class=" box me-2 text-dark-50 text-decoration-none">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
              <i class="fas  fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                <h3 class="fs-2 text-dark">ADMIN</h3>
            </div>
        </div></a>
        <div class="col-md-4">
          <a  href='<?php echo base_url('Staff/login')?>' class=" box me-2 text-dark-50 text-decoration-none">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
              <i class="fas  fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                <h3 class="fs-2 text-dark">FACULTY</h3>
            </div>
        </div></a>
      </div>
  </div>
  </div>
</body>
</html>