<?php
include("myview.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="http://parsleyjs.org/dist/parsley.min.js" type="text/javascript"></script>
    <title>Signup</title>
</head>
<body>
    <div class="container-fluid bg-white text-nowrap text-center p-3 pt-3 mb-1 ">
        <h2>SIGN UP</h2>
        <form action="<?= base_url('welcome/save')?>" method="post">
        <?= csrf_field(); ?>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="user_name" class="text-secondary col-sm-2 col-form-label">USER NAME *</label>
                <div class="col-sm-5">
                    <input id="user_name" class="form-control" name="user_name" type="text" placeholder="User_Name"/> 
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="email" class="text-secondary col-sm-2 col-form-label">EMAIL *</label>
                <div class="col-sm-5">
                    <input id="email" class="form-control" name="email" type="text" class="email" placeholder="Email"/>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="new_password" class="text-secondary col-sm-2 col-form-label">New Password *</label>
                <div class="col-sm-5">
                    <input id="new_password" class="form-control" name="new_password" placeholder="New-Password" type="password"/> 
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 mb-5 ">
                <label for="confirm_password" class="text-secondary col-sm-2 col-form-label">Confirm Password *</label>
                <div class="col-sm-5">
                    <input name="confirm_password" class="form-control" id="confirm_password" type="password" placeholder="Confirm-Password"/>
                </div>
            </div>
            <input type="submit" name="submitinfo" id="submitsignup" src="<?= base_url('Welcome\save')?>"alt="Sign Up Now" value="Submit" class="justify-contetnt-center btn btn-primary" />
        </form>
    </div>
</body>
   
</html>