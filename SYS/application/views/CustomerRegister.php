
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Register</h2>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Signup Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <?php echo validation_errors('<div>','</div>');?>
                            <?php if(isset($_SESSION['userError'])){echo $_SESSION['userError'];}?>
                            <h3>Sign Up</h3>
                            <form action="registerValidation" method='post' onsubmit="signUpValidate()">
                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="First Name" id="fName" name="fName" onfocus="this.value=''" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Last Name" id="lName" name="lName" onfocus="this.value=''" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="NIC">
                                    <input type="text" placeholder="NIC" id="nic" name="custNIC" onfocus="this.value=''" required>
                                </div>
                    
                                <div class="telephone">
                                    <input type="text" placeholder="Telephone" id="telephone" name="custTelephone" onfocus="this.value=''" required>
                                </div>

                                <div class="email">
                                    <input type="email" placeholder="Email" id="eMail" name="custEmail" onfocus="this.value=''">
                                </div>

                                <div class="password">
                                    <input type="password" placeholder="Password" id="pwd" name="pwd" onfocus="this.value=''" required>
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Confirm Password" id="pwdConfirm" name="custPassword" onfocus="this.value=''" required>
                                </div>

                                <div class="log-btn">
                                    <button type="submit" name="signUp"><i class="fa fa-check-square"></i> Sign Up</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Login Page Content End ==-->

    
 

     <script src="<?php echo base_url();?>assets/js/Registration.js"></script>
    