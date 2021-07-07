<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HTML Template</title>

    <!--=== Bootstrap CSS ===-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="<?php echo base_url();?>assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?php echo base_url();?>assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?php echo base_url();?>assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?php echo base_url();?>assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?php echo base_url();?>assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">

    <!--=== Customer style CSS ===-->
    <link href="<?php echo base_url();?>assets/css/CustomerStyle.css" rel="stylesheet">

    <script type="text/javascript">
        function confSubmit(form) {
            if (confirm("Are you sure you want to delete this?")) {
                form.submit();
            }
        }
    </script>
   
</head>

<body class="loader-active">

   

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        
        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index2.html" class="logo">
                            <img src="<?php echo base_url();?>assets/img/logo1.jpg" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="<?php echo base_url('index.php/CustomerMain');?>">Home</a></li>
                                <li><a href="<?php echo base_url('index.php/CustomerMain/updateprofile');?>">Update</a></li>
                                <li><a href="<?php echo base_url('index.php/CustomerMain/rrr');?>">View Users</a></li>
                                <li><a href="<?php echo base_url('index.php/CustomerMain/deactivate');?>">Delete Account</a></li>
                                <li><a href="<?php echo base_url();?>">Log Out</a></li>
                                    
                                
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>