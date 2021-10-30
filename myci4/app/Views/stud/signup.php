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
        <form name="Form" id="signupform"data-parsley-excluded="input[type=button], 
            input[type=submit], input[type=reset], input[type=hidden], [disabled], :hidden"
            data-parsley-trigger="keyup" data-parsley-validate>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="user_name" class="text-secondary col-sm-2 col-form-label">USER NAME *</label>
                <div class="col-sm-5">
                    <input id="user_name" class="form-control" name="user_name" type="text"
                        data-parsley-minlength="3"
                        data-parsley-maxlength="25"
                        data-parsley-errors-container=".errorspanuser_name"
                        data-parsley-required-message="Please enter the username."
                        data-parsley-required />
                    <span class="errorspanuser_name"></span> 
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="password1" class="text-secondary col-sm-2 col-form-label">EMAIL *</label>
                <div class="col-sm-5">
                    <input id="email" class="form-control" name="email" type="email" class="email" data-parsley-trigger="change"
                    data-parsley-required-message="Please Enter a valid Mail."
                    data-parsley-errors-container=".errorspanemail"
                    data-parsley-required/>
                    <span class="errorspanemail"></span> 
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="new_password" class="text-secondary col-sm-2 col-form-label">New Password *</label>
                <div class="col-sm-5">
                    <input id="new_password1" class="form-control" name="new_password" type="password" class="new_password"
                        data-parsley-minlength="8"
                        data-parsley-errors-container=".errorspannewpassinput"
                        data-parsley-required-message="Please enter your new password."
                        data-parsley-uppercase="1"
                        data-parsley-lowercase="1"
                        data-parsley-number="1"
                        data-parsley-special="1"
                        data-parsley-required />
                    <span class="errorspannewpassinput"></span> 
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 mb-5 ">
                <label for="confirm_password" class="text-secondary col-sm-2 col-form-label">Confirm Password *</label>
                <div class="col-sm-5">
                    <input name="confirm_Password" class="form-control" id="confirm_password" type="password" class="new_password"
                        data-parsley-minlength="8"
                        data-parsley-errors-container=".errorspanconfirmnewpassinput"
                        data-parsley-required-message="Please re-enter your new password."
                        data-parsley-required />
                    <span class="errorspanconfirmnewpassinput"></span>
                </div>
            </div>
            <input type="submit" name="submitinfo" id="submitsignup" src="<?php echo base_url('Welcome\save')?>"alt="Sign Up Now" value="Submit" class="justify-contetnt-center btn btn-primary" />
        </form>
    </div>
</body>
   
</html>