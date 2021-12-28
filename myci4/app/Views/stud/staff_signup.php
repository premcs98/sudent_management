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
        <form action="<?= base_url('Staff/signin')?>" method="post">
            <?= csrf_field(); ?>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="fname" class="text-secondary col-sm-2 col-form-label">FIRST NAME *</label>
                <div class="col-sm-5">
                    <input id="fname" class="form-control" name="fname" type="text" placeholder="First Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('fname') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="mname" class="text-secondary col-sm-2 col-form-label">MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="mname" class="form-control" name="mname" type="text" placeholder="Middle Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('mname') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="lname" class="text-secondary col-sm-2 col-form-label">LAST NAME *</label>
                <div class="col-sm-5">
                    <input id="lname" class="form-control" name="lname" type="text" placeholder="Last Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('lname') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="f_fname" class="text-secondary col-sm-2 col-form-label">FATHER FRIST NAME *</label>
                <div class="col-sm-5">
                    <input id="f_fname" class="form-control" name="f_fname" type="text" placeholder="Father-First-Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('f_fname') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="f_mname" class="text-secondary col-sm-2 col-form-label">FATHER MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="f_mname" class="form-control" name="f_mname" type="text" placeholder="Father-Middle-Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('f_mname') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="f_lname" class="text-secondary col-sm-2 col-form-label">FATHER LAST NAME *</label>
                <div class="col-sm-5">
                    <input id="f_lname" class="form-control" name="f_lname" type="text" placeholder="Father-Last-Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('f_lname') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="m_fname" class="text-secondary col-sm-2 col-form-label">MOTHER FIRST NAME *</label>
                <div class="col-sm-5">
                    <input id="m_fname" class="form-control" name="m_fname" type="text" placeholder="Mother-First-Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('m_fname') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="m_mname" class="text-secondary col-sm-2 col-form-label">MOTHER MIDDLE NAME *</label>
                <div class="col-sm-5">
                    <input id="m_mname" class="form-control" name="m_mname" type="text" placeholder="Mother-Middle-Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('m_mname') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="m_lname" class="text-secondary col-sm-2 col-form-label">MOTHER LAST NAME *</label>
                <div class="col-sm-5">
                    <input id="m_lname" class="form-control" name="m_lname" type="text" placeholder="Mother-Last-Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('m_lname') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="dob"class="text-secondary col-sm-2 col-form-label">DATE OF BIRTH *</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="start" name="dob" placeholder="dd/mm/yyyy" min="1947-01-01" max="2021-12-31">
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('dob') ?>
                    </div>
                    <?php endif;?>
                </div>
           </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="relegion" class="text-secondary col-sm-2 col-form-label">RELEGION *</label>
                <div class="col-sm-5">
                    <select class="form-select" id="religion" name="relegion">
                        <option value="">-- select one --</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Muslim">Muslim</option>
                        <option value="Christian">Christian</option>
                        <option value="Buddhism">Buddhism</option>
                    </select>
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('relegion') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="caste" class="text-secondary col-sm-2 col-form-label">CASTE *</label>
                <div class="col-sm-5">
                    <input id="caste" class="form-control" name="caste" type="text" placeholder="Caste" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('caste') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="nationaliy" class="text-secondary col-sm-2 col-form-label">NATIONALITY  *</label>
                <div class="col-sm-5">
                    <select class="form-select" name="nationaliy">
                        <option value="">-- select one --</option>
                        <option value="afghan">Afghan</option>
                        <option value="albanian">Albanian</option>
                        <option value="algerian">Algerian</option>
                        <option value="american">American</option>
                        <option value="andorran">Andorran</option>
                        <option value="angolan">Angolan</option>
                        <option value="antiguans">Antiguans</option>
                        <option value="argentinean">Argentinean</option>
                        <option value="armenian">Armenian</option>
                        <option value="australian">Australian</option>
                        <option value="austrian">Austrian</option>
                        <option value="azerbaijani">Azerbaijani</option>
                        <option value="bahamian">Bahamian</option>
                        <option value="bahraini">Bahraini</option>
                        <option value="bangladeshi">Bangladeshi</option>
                        <option value="barbadian">Barbadian</option>
                        <option value="barbudans">Barbudans</option>
                        <option value="batswana">Batswana</option>
                        <option value="belarusian">Belarusian</option>
                        <option value="belgian">Belgian</option>
                        <option value="belizean">Belizean</option>
                        <option value="beninese">Beninese</option>
                        <option value="bhutanese">Bhutanese</option>
                        <option value="bolivian">Bolivian</option>
                        <option value="bosnian">Bosnian</option>
                        <option value="brazilian">Brazilian</option>
                        <option value="british">British</option>
                        <option value="bruneian">Bruneian</option>
                        <option value="bulgarian">Bulgarian</option>
                        <option value="burkinabe">Burkinabe</option>
                        <option value="burmese">Burmese</option>
                        <option value="burundian">Burundian</option>
                        <option value="cambodian">Cambodian</option>
                        <option value="cameroonian">Cameroonian</option>
                        <option value="canadian">Canadian</option>
                        <option value="cape verdean">Cape Verdean</option>
                        <option value="central african">Central African</option>
                        <option value="chadian">Chadian</option>
                        <option value="chilean">Chilean</option>
                        <option value="chinese">Chinese</option>
                        <option value="colombian">Colombian</option>
                        <option value="comoran">Comoran</option>
                        <option value="congolese">Congolese</option>
                        <option value="costa rican">Costa Rican</option>
                        <option value="croatian">Croatian</option>
                        <option value="cuban">Cuban</option>
                        <option value="cypriot">Cypriot</option>
                        <option value="czech">Czech</option>
                        <option value="danish">Danish</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="dominican">Dominican</option>
                        <option value="dutch">Dutch</option>
                        <option value="east timorese">East Timorese</option>
                        <option value="ecuadorean">Ecuadorean</option>
                        <option value="egyptian">Egyptian</option>
                        <option value="emirian">Emirian</option>
                        <option value="equatorial guinean">Equatorial Guinean</option>
                        <option value="eritrean">Eritrean</option>
                        <option value="estonian">Estonian</option>
                        <option value="ethiopian">Ethiopian</option>
                        <option value="fijian">Fijian</option>
                        <option value="filipino">Filipino</option>
                        <option value="finnish">Finnish</option>
                        <option value="french">French</option>
                        <option value="gabonese">Gabonese</option>
                        <option value="gambian">Gambian</option>
                        <option value="georgian">Georgian</option>
                        <option value="german">German</option>
                        <option value="ghanaian">Ghanaian</option>
                        <option value="greek">Greek</option>
                        <option value="grenadian">Grenadian</option>
                        <option value="guatemalan">Guatemalan</option>
                        <option value="guinea-bissauan">Guinea-Bissauan</option>
                        <option value="guinean">Guinean</option>
                        <option value="guyanese">Guyanese</option>
                        <option value="haitian">Haitian</option>
                        <option value="herzegovinian">Herzegovinian</option>
                        <option value="honduran">Honduran</option>
                        <option value="hungarian">Hungarian</option>
                        <option value="icelander">Icelander</option>
                        <option value="indian">Indian</option>
                        <option value="indonesian">Indonesian</option>
                        <option value="iranian">Iranian</option>
                        <option value="iraqi">Iraqi</option>
                        <option value="irish">Irish</option>
                        <option value="israeli">Israeli</option>
                        <option value="italian">Italian</option>
                        <option value="ivorian">Ivorian</option>
                        <option value="jamaican">Jamaican</option>
                        <option value="japanese">Japanese</option>
                        <option value="jordanian">Jordanian</option>
                        <option value="kazakhstani">Kazakhstani</option>
                        <option value="kenyan">Kenyan</option>
                        <option value="kittian and nevisian">Kittian and Nevisian</option>
                        <option value="kuwaiti">Kuwaiti</option>
                        <option value="kyrgyz">Kyrgyz</option>
                        <option value="laotian">Laotian</option>
                        <option value="latvian">Latvian</option>
                        <option value="lebanese">Lebanese</option>
                        <option value="liberian">Liberian</option>
                        <option value="libyan">Libyan</option>
                        <option value="liechtensteiner">Liechtensteiner</option>
                        <option value="lithuanian">Lithuanian</option>
                        <option value="luxembourger">Luxembourger</option>
                        <option value="macedonian">Macedonian</option>
                        <option value="malagasy">Malagasy</option>
                        <option value="malawian">Malawian</option>
                        <option value="malaysian">Malaysian</option>
                        <option value="maldivan">Maldivan</option>
                        <option value="malian">Malian</option>
                        <option value="maltese">Maltese</option>
                        <option value="marshallese">Marshallese</option>
                        <option value="mauritanian">Mauritanian</option>
                        <option value="mauritian">Mauritian</option>
                        <option value="mexican">Mexican</option>
                        <option value="micronesian">Micronesian</option>
                        <option value="moldovan">Moldovan</option>
                        <option value="monacan">Monacan</option>
                        <option value="mongolian">Mongolian</option>
                        <option value="moroccan">Moroccan</option>
                        <option value="mosotho">Mosotho</option>
                        <option value="motswana">Motswana</option>
                        <option value="mozambican">Mozambican</option>
                        <option value="namibian">Namibian</option>
                        <option value="nauruan">Nauruan</option>
                        <option value="nepalese">Nepalese</option>
                        <option value="new zealander">New Zealander</option>
                        <option value="ni-vanuatu">Ni-Vanuatu</option>
                        <option value="nicaraguan">Nicaraguan</option>
                        <option value="nigerien">Nigerien</option>
                        <option value="north korean">North Korean</option>
                        <option value="northern irish">Northern Irish</option>
                        <option value="norwegian">Norwegian</option>
                        <option value="omani">Omani</option>
                        <option value="pakistani">Pakistani</option>
                        <option value="palauan">Palauan</option>
                        <option value="panamanian">Panamanian</option>
                        <option value="papua new guinean">Papua New Guinean</option>
                        <option value="paraguayan">Paraguayan</option>
                        <option value="peruvian">Peruvian</option>
                        <option value="polish">Polish</option>
                        <option value="portuguese">Portuguese</option>
                        <option value="qatari">Qatari</option>
                        <option value="romanian">Romanian</option>
                        <option value="russian">Russian</option>
                        <option value="rwandan">Rwandan</option>
                        <option value="saint lucian">Saint Lucian</option>
                        <option value="salvadoran">Salvadoran</option>
                        <option value="samoan">Samoan</option>
                        <option value="san marinese">San Marinese</option>
                        <option value="sao tomean">Sao Tomean</option>
                        <option value="saudi">Saudi</option>
                        <option value="scottish">Scottish</option>
                        <option value="senegalese">Senegalese</option>
                        <option value="serbian">Serbian</option>
                        <option value="seychellois">Seychellois</option>
                        <option value="sierra leonean">Sierra Leonean</option>
                        <option value="singaporean">Singaporean</option>
                        <option value="slovakian">Slovakian</option>
                        <option value="slovenian">Slovenian</option>
                        <option value="solomon islander">Solomon Islander</option>
                        <option value="somali">Somali</option>
                        <option value="south african">South African</option>
                        <option value="south korean">South Korean</option>
                        <option value="spanish">Spanish</option>
                        <option value="sri lankan">Sri Lankan</option>
                        <option value="sudanese">Sudanese</option>
                        <option value="surinamer">Surinamer</option>
                        <option value="swazi">Swazi</option>
                        <option value="swedish">Swedish</option>
                        <option value="swiss">Swiss</option>
                        <option value="syrian">Syrian</option>
                        <option value="taiwanese">Taiwanese</option>
                        <option value="tajik">Tajik</option>
                        <option value="tanzanian">Tanzanian</option>
                        <option value="thai">Thai</option>
                        <option value="togolese">Togolese</option>
                        <option value="tongan">Tongan</option>
                        <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                        <option value="tunisian">Tunisian</option>
                        <option value="turkish">Turkish</option>
                        <option value="tuvaluan">Tuvaluan</option>
                        <option value="ugandan">Ugandan</option>
                        <option value="ukrainian">Ukrainian</option>
                        <option value="uruguayan">Uruguayan</option>
                        <option value="uzbekistani">Uzbekistani</option>
                        <option value="venezuelan">Venezuelan</option>
                        <option value="vietnamese">Vietnamese</option>
                        <option value="welsh">Welsh</option>
                        <option value="yemenite">Yemenite</option>
                        <option value="zambian">Zambian</option>
                        <option value="zimbabwean">Zimbabwean</option>
                    </select>
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('nationaliy') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="address" class="text-secondary col-sm-2 col-form-label">ADDRESS *</label>
                <div class="col-sm-5">
                    <input id="address" class="form-control" name="address" type="text" placeholder="Address" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('address') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="r_address" class="text-secondary col-sm-2 col-form-label">RESEDENTIAL ADDRESS *</label>
                <div class="col-sm-5">
                    <input id="r_address" class="form-control" name="r_address" type="text" placeholder="Resedential Address" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('r_address') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="emp_email" class="text-secondary col-sm-2 col-form-label">EMAIL *</label>
                <div class="col-sm-5">
                    <input id="emp_email" class="form-control" name="emp_email" type="email" placeholder="Email" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('emp_email') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="pincode" class="text-secondary col-sm-2 col-form-label">ZIP CODE *</label>
                <div class="col-sm-5">
                    <input id="pincode" class="form-control" name="pincode" type="text" placeholder="ZIP CODE" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('pincode') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="emp_degree" class="text-secondary col-sm-2 col-form-label">DEGREE COMPLETED*</label>
                <div class="col-sm-5">
                    <input id="emp_degree" class="form-control" name="emp_degree" type="text" placeholder="DEGREE " /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('emp_degree') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="emp_area_of_specalization" class="text-secondary col-sm-2 col-form-label">AREA OF SPECIALIZATION*</label>
                <div class="col-sm-5">
                    <input id="emp_area_of_specalization" class="form-control" name="emp_area_of_specalization" type="text" placeholder="AREA OF SPECELIZATION " /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('emp_area_of_specalization') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="emp_sslc_percent" class="text-secondary col-sm-2 col-form-label">10'th PRERCENTAGE %*</label>
                <div class="col-sm-5">
                    <input id="emp_sslc_percent" class="form-control" name="emp_sslc_percent" type="text" placeholder="10'th PRERCENTAGE %" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('emp_sslc_percent') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="emp_hslc_percent" class="text-secondary col-sm-2 col-form-label">12'th PRERCENTAGE %*</label>
                <div class="col-sm-5">
                    <input id="emp_hslc_percent" class="form-control" name="emp_hslc_percent" type="text" placeholder="12'th PRERCENTAGE %" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error= $validation->getError('emp_hslc_percent') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="emp_degree_percent" class="text-secondary col-sm-2 col-form-label">CGPA %*</label>
                <div class="col-sm-5">
                    <input id="emp_degree_percent" class="form-control" name="emp_degree_percent" type="text" placeholder="CGPA %" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('emp_degree_percent') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="emp_department" class="text-secondary col-sm-2 col-form-label">DEPARTMENT *</label>
                <div class="col-sm-5">
                <select class="form-select" id="emp_department" name="emp_department">
                        <option value="">-- select one --</option>
                        <option value="CSE">CSE</option>
                        <option value="ECE">ECE</option>
                        <option value="EEE">EEE</option>
                        <option value="MECH">MECH</option>
                    </select>
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('emp_department') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="emp_user_name" class="text-secondary col-sm-2 col-form-label">USER NAME *</label>
                <div class="col-sm-5">
                    <input id="emp_user_name" class="form-control" name="emp_user_name" type="text" placeholder="User_Name" /> 
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('emp_user_name') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 ">
                <label for="new_password" class="text-secondary col-sm-2 col-form-label">Password *</label>
                <div class="col-sm-5">
                    <input id="password" class="form-control" name="password" placeholder="New-Password" type="password"/>
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('password') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class=" d-flex justify-content-center form-group mt-5 mb-5 ">
                <label for="confirm_password" class="text-secondary col-sm-2 col-form-label">Confirm Password *</label>
                <div class="col-sm-5">
                    <input name="confirm_password" class="form-control" id="confirm_password" type="password" placeholder="Confirm-Password"/>
                    <?php if(isset($validation)):?>
                    <div class='alert alert-danger mt-2'>
                    <?=$error=$validation->getError('confirm_password') ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <input type="submit" name="submitinfo" id="submitsignup" src="<?= base_url('Staff/signin')?>"alt="Sign Up Now" value="Submit" class="justify-contetnt-center btn btn-primary" />
        </form>
    </div>
</body>
</html>