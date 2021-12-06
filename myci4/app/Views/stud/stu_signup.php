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
        <?php if(isset($validation)):?>
        <?php endif;?>
        <form action="<?= base_url('Student/signin')?>" method="post">
            <?= csrf_field(); ?>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="fname" class="text-secondary col-sm-2 col-form-label">FIRST NAME *</label>
                <div class="col-sm-5">
                    <input id="fname" class="form-control" name="fname" type="text" placeholder="First Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="mname" class="text-secondary col-sm-2 col-form-label">MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="mname" class="form-control" name="mname" type="text" placeholder="Middle Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="lname" class="text-secondary col-sm-2 col-form-label">LAST NAME *</label>
                <div class="col-sm-5">
                    <input id="lname" class="form-control" name="lname" type="text" placeholder="Last Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="f_name" class="text-secondary col-sm-2 col-form-label">FATHER FRIST NAME *</label>
                <div class="col-sm-5">
                    <input id="f_name" class="form-control" name="f_name" type="text" placeholder="Father-First-Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="f_mname" class="text-secondary col-sm-2 col-form-label">FATHER MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="f_mname" class="form-control" name="f_mname" type="text" placeholder="Father-Middle-Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="f_lname" class="text-secondary col-sm-2 col-form-label">FATHER LAST NAME *</label>
                <div class="col-sm-5">
                    <input id="f_lname" class="form-control" name="f_lname" type="text" placeholder="Father-Last-Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="m_fname" class="text-secondary col-sm-2 col-form-label">MOTHER FIRST NAME *</label>
                <div class="col-sm-5">
                    <input id="m_fname" class="form-control" name="m_fname" type="text" placeholder="Mother-First-Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="m_mname" class="text-secondary col-sm-2 col-form-label">MOTHER MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="m_mname" class="form-control" name="m_mname" type="text" placeholder="Mother-Middle-Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="m_lname" class="text-secondary col-sm-2 col-form-label">MOTHER LAST NAME *</label>
                <div class="col-sm-5">
                    <input id="m_lname" class="form-control" name="m_lname" type="text" placeholder="Mother-Last-Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="dob"class="text-secondary col-sm-2 col-form-label">DATE OF BIRTH *</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="start" name="dob" placeholder="dd/mm/yyyy" min="1947-01-01" max="2050-12-31">
                </div>
           </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="relegion" class="text-secondary col-sm-2 col-form-label">RELEGION *</label>
                <div class="col-sm-5">
                    <select class="form-select" id="relegion" name="relegion">
                        <option value="Hindu">Hindu</option>
                        <option value="Muslim">Muslim</option>
                        <option value="Christian">Christian</option>
                        <option value="Buddhism">Buddhism</option>
                    </select>
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="mname" class="text-secondary col-sm-2 col-form-label">CASTE *</label>
                <div class="col-sm-5">
                    <input id="caste" class="form-control" name="caste" type="text" placeholder="Caste" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="mname" class="text-secondary col-sm-2 col-form-label">MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="mname" class="form-control" name="mname" type="text" placeholder="Middle Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="mname" class="text-secondary col-sm-2 col-form-label">MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="mname" class="form-control" name="mname" type="text" placeholder="Middle Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="mname" class="text-secondary col-sm-2 col-form-label">MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="mname" class="form-control" name="mname" type="text" placeholder="Middle Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="mname" class="text-secondary col-sm-2 col-form-label">MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="mname" class="form-control" name="mname" type="text" placeholder="Middle Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="mname" class="text-secondary col-sm-2 col-form-label">MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="mname" class="form-control" name="mname" type="text" placeholder="Middle Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="mname" class="text-secondary col-sm-2 col-form-label">MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="mname" class="form-control" name="mname" type="text" placeholder="Middle Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="mname" class="text-secondary col-sm-2 col-form-label">MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="mname" class="form-control" name="mname" type="text" placeholder="Middle Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="mname" class="text-secondary col-sm-2 col-form-label">MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="mname" class="form-control" name="mname" type="text" placeholder="Middle Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="mname" class="text-secondary col-sm-2 col-form-label">MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="mname" class="form-control" name="mname" type="text" placeholder="Middle Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="first_name" class="text-secondary col-sm-2 col-form-label">FIRST NAME *</label>
                <div class="col-sm-5">
                    <input id="first_name" class="form-control" name="first_name" type="text" placeholder="First Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="user_name" class="text-secondary col-sm-2 col-form-label">USER NAME *</label>
                <div class="col-sm-5">
                    <input id="user_name" class="form-control" name="user_name" type="text" placeholder="User_Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="email" class="text-secondary col-sm-2 col-form-label">EMAIL *</label>
                <div class="col-sm-5">
                    <input id="email" class="form-control" name="email" type="text" class="email" placeholder="Email" />
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="new_password" class="text-secondary col-sm-2 col-form-label">New Password *</label>
                <div class="col-sm-5">
                    <input id="new_password" class="form-control" name="new_password" placeholder="New-Password" type="password"/>
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 mb-5 ">
                <label for="confirm_password" class="text-secondary col-sm-2 col-form-label">Confirm Password *</label>
                <div class="col-sm-5">
                    <input name="confirm_password" class="form-control" id="confirm_password" type="password" placeholder="Confirm-Password"/>
                    <?php if(isset($validation)):?>
                    <div class='alert-alert-danger'>
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <input type="submit" name="submitinfo" id="submitsignup" src="<?= base_url('Welcome/save')?>"alt="Sign Up Now" value="Submit" class="justify-contetnt-center btn btn-primary" />
        </form>
    </div>
</body>
</html>