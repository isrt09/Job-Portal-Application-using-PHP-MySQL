<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required Meta Tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Page Title -->
      <title>Comport</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">
      <!-- CSS Files -->
      <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
      <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
      <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
      <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
      <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <!-- Preloader Starts -->
      <div class="preloader">
         <div class="spinner"></div>
      </div>
      <!-- Preloader End -->
      <!-- Header Area Starts -->
      <header class="header-area main-header">
         <div class="container">
            <div class="row">
               <div class="col-lg-2">
                  <div class="logo-area">
                     <a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
                  </div>
               </div>
               <div class="col-lg-10">
                  <div class="custom-navbar">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
                  <div class="main-menu">
                     <ul>
                        <li class="active"><a href="index.html">home</a></li>
                        <li><a href="about.html">about us</a></li>
                        <li><a href="category_list.php">category</a></li>
                        <?php if(isset($_SESSION['users_id'])) { ?>
                        <li>
                           <a href="#">blog</a>
                           <ul class="sub-menu">
                              <li><a href="blog-home.html">Blog Home</a></li>
                              <li><a href="blog-details.html">Blog Details</a></li>
                           </ul>
                        </li>
                        <?php } ?>
                        <li><a href="contact-us.html">contact</a></li>
                        <li>
                           <?php if(isset($_SESSION['users_id']) && $_SESSION['user_type_id']==1) { ?>
                           <a href="#">Setting</a>
                           <ul class="sub-menu">                             
                              <li><a href="category.php">Category Setting</a></li>
                              <li><a href="job-single.html">Job Single</a></li>
                              <li><a href="pricing-plan.html">Pricing Plan</a></li>
                              <li><a href="elements.html">Elements</a></li>              
                           </ul>
                           <?php } ?>
                        </li>
                        <li class="menu-btn">
                              <?php if(!isset($_SESSION['users_id'])) { ?>
                              <a href="login.php" class="login">log in</a>
                              <a href="registration.php" class="template-btn">sign up</a>
                          <?php }else{?>
                              <a href="profile.php">Profile</a>
                              <a href="logout.php" class="template-btn">Log Out</a>
                           <?php } ?>                       
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area End -->