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
  <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
    <form action="<?= base_url('student/check')?>" method="post" >
    <?= csrf_field(); ?>
        <div class=" d-flex justify-content-center form-group mt-5 ">
            <label for="user_name" class="text-secondary col-sm-2 col-form-label">USER NAME:</label>
            <div class="col-sm-5 max-auto">
                <input type="text" class="form-control" id="user_name" name='user_name' placeholder="user_name">
                <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
            </div>
        </div>
        <div class="d-flex justify-content-center form-group mt-5">
            <label for="password" class="text-secondary col-sm-2 col-form-label">PASSWORD:</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" id="password" name='password'placeholder="Password" >
                <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
            </div>
        </div>

        <button type="submit" class="justify-contetnt-center btn btn-primary mt-3" src="<?= base_url('Student\check')?>">LOGIN</button>
    </form>
</div>
</body>
</html>