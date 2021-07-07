


    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Login</h2>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 m-auto">
                	<div class="login-page-content">
                		<div class="login-form">
                			<h3>Welcome Back!</h3>
							<form action="loginvalidate" onsubmit="signInValidate()" method='post'>
                                <?php echo validation_errors('<div>','</div>');?>
                                <font color="red">
                                    <?php if(isset($_SESSION['userError'])){echo $_SESSION['userError'];}?>
                                </font>
								<div class="username">
									<input type="text" placeholder="NIC" id="nic" name="custNIC" onfocus="this.value=''" required>
								</div>
								<div class="password">
									<input type="password" placeholder="Password" id="pwd" name="custPassword" onfocus="this.value=''" required>
								</div>
								<div class="log-btn">
									<button type="submit"><i class="fa fa-sign-in"></i> Log In</button>
								</div>
							</form>
                		</div>

                        <!--create an account-->
                		<div class="create-ac">
                			<p>Don't have an account? <a href="<?php echo base_url('index.php/CustomerMain/register');?>">Sign Up</a></p>
                		</div>
                		
                	</div>
                </div>
        	</div>
        </div>
    </section>
    <!--== Login Page Content End ==-->

    


