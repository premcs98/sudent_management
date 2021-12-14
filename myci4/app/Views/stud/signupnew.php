<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('boot/css/style.css')?>">
    <script src="https://kit.fontawesome.com/a8018f10c4.js" crossorigin="anonymous"></script>
    <title>Document</title>
  </head>
  <body>
  <div class="container">
    <div class="row  justify-content-center g-3 mx-100 my-2">
      <div class="col-md-6">
        <a  href='<?php echo base_url('student/signup')?>' class=" box me-2 text-dark-50 text-decoration-none">
          <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded"> 
            <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
              <h3 class="fs-2 text-dark justify-content-center">STUDENT</h3>
          </div>
      </div></a>
    </div>
    <div class="row justify-content-center g-3 mx-100 my-2">
      <div class="col-md-6">
        <a  href='<?php echo base_url('staff/signup')?>' class=" box me-2 text-dark-50 text-decoration-none">
          <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <i class="fas  fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
              <h3 class="fs-2 text-dark">FACULTY</h3>
          </div>
      </div></a>
    </div>
  </div>
  </body>
</html>