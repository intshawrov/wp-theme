<!DOCTYPE html>
<html lang="en">

<?php wp_head(); ?>
<head>
<meta charset="utf-8">
<title>Contra - Interior Creator HTML Template | Home Page 01</title>
<!-- Stylesheets -->


<link rel="<?php echo get_template_directory_uri(); ?>/shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
<link rel="<?php echo get_template_directory_uri(); ?>/icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header header-style-one">
        <div class="auto-container">
            <div class="header-lower">
                <div class="main-box clearfix">

                    <?php 
                        $header_logo_id = get_field("header_logo", "option");
                        $header_logo_url = wp_get_attachment_url($header_logo_id);
                        ?>

                        <?php if($header_logo_url) { ?>
                        <div class="logo-box">
                            <div class="logo">
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo esc_url($header_logo_url); ?>" alt="Header Logo">
                            </a>
                            </div>
                        </div>
                        <?php } ?>



                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md ">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                

                                    <?php 
                                        wp_nav_menu(array(
                                            'theme_location'        => 'menu-1',
                                            'menu_class'            => 'navigation',
                                        ));
                                    ?>

                                 
                            </div>
                        </nav><!-- Main Menu End-->                        

                        <!-- Outer Box-->
                        <div class="outer-box">
                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="#">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->