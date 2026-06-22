<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   $title = '|| 404';
   include('partials/title-meta.php');
   ?>

   <?php include('partials/head-css.php'); ?>
</head>

<body class="body1">

   <?php include('partials/loader.php'); ?>
   <?php include('partials/searchbox.php'); ?>
   <?php include('partials/header/navbar7.php'); ?>
   <?php include('partials/header/mobile-nav.php'); ?>

   <main>
      <!--===== HERO AREA START =====-->
      <div class="inner-hero" style="background-image: url(assets/img/bg/inner-hero-bg.jpg);">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 m-auto text-center">
                  <div class="inner-main-heading">
                     <h1>Error 404</h1>
                     <div class="breadcrumbs-pages">
                        <ul>
                           <li><a href="index.php">Home</a></li>
                           <li class="angle"><i class="fa-solid fa-angle-right"></i></li>
                           <li>Error 404</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--===== HERO AREA START =====-->

      <!--===== ERROR AREA START =====-->
      <div class="error sp">
         <div class="container">
            <div class="row">
               <div class="col-lg-7 m-auto text-center">
                  <div class="error-image">
                     <img src="assets/img/others/error.png" alt="">
                  </div>
                  <div class="error-content-area mt-50 heading2">
                     <h2> Sorry! Page Not Found!</h2>
                     <p class="mt-16">Sorry, the page you are looking for doesn’t exist or <br> has been moved. Here are some helpful links.</p>
                     <div class="button mt-30">
                        <a class="theme-btn3" href="index.php">Back To Home <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--===== ERROR AREA END =====-->
   </main>

   <?php include('partials/footer.php'); ?>
   <?php include('partials/footer-scripts.php'); ?>

</body>

</html>