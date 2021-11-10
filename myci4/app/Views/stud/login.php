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
    <form action="<?= base_url('Welcome/check')?>" method="post" >
    <?= csrf_field(); ?>
    <?php if(!empty(session()->getFlashdata('fail')))?>
    <div class="alert alert-danger"><?=session()->getFlashdata('fail'); ?></div>

        <div class=" d-flex justify-content-center form-group mt-5 ">
            <label for="user_name" class="text-secondary col-sm-2 col-form-label">USER NAME:</label>
            <div class="col-sm-5 max-auto">
                <input type="text" class="form-control" id="user_name" name='user_name' placeholder="user_name">
                <span class="text_danger"><?= isset($validation) ? display_error($validation,'user_name') : ''?></span>
            </div>
        </div>
        <div class="d-flex justify-content-center form-group mt-5">
            <label for="new_password" class="text-secondary col-sm-2 col-form-label">PASSWORD:</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" id="new_password" name='new_password'placeholder="Password" >
                <span class="text_danger"><?= isset($validation) ? display_error($validation,'password') : ''?></span>
            </div>
        </div>
        <div class="justify-contetnt-center form-group form-check mt-5 mb-5">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" required>ADMIN USER.
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
        </div>
        <button type="submit" class="justify-contetnt-center btn btn-primary" src="<?= base_url('Welcome\check')?>">LOGIN</button>
    </form>
</div>
</body>
</html>