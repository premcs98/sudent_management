<?php 
    include('myview.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?php  echo base_url('boot\parsley_n\src\parsley.css')?>"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="http://parsleyjs.org/dist/parsley.min.js" type="text/javascript"></script>
    <title>Login</title>
</head>
<body>
<div class="container-fluid bg-white text-nowrap text-center p-3 pt-3 mb-1 ">
  <h2>LOGIN</h2>
    <form  id="form" data-parsley-validate="">
        <div class=" d-flex justify-content-center form-group mt-5 ">
            <label for="username" class="text-secondary col-sm-2 col-form-label">USER NAME:</label>
            <div class="col-sm-5 max-auto">
                <input type="text" class="form-control" id="username" placeholder="username" required='' data-parsley-username="">
                <div class="valid-feedback">Valid.</div>    
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
        </div>
        <div class="d-flex justify-content-center form-group mt-5">
            <label for="inputPassword" class="text-secondary col-sm-2 col-form-label">PASSWORD:</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
        </div>
        <div class="justify-contetnt-center form-group form-check mt-5 mb-5">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" required>I am Student.
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
        </div>
        <button type="submit" class="justify-contetnt-center btn btn-primary">LOGIN</button>
    </form>
</div>
</body>
<script>
    $('#form').parsley();
</script>
</html>