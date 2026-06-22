<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   $title = '|| Our Portfolio';
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
                     <h1>Our Portfolio</h1>
                     <div class="breadcrumbs-pages">
                        <ul>
                           <li><a href="index.php">Home</a></li>
                           <li class="angle"><i class="fa-solid fa-angle-right"></i></li>
                           <li>Our Portfolio </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--===== HERO AREA START =====-->

      <!--===== BLOG AREA START=======-->
      <div class="blog1 sp bg1 _relative">
         <div class="container">
            <div class="row">
               <div class="row">
                  <div class="col-lg-7 m-auto text-center">
                     <div class="categories-buttons">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="category-tab1-tab" data-bs-toggle="pill" data-bs-target="#category-tab1" type="button" role="tab" aria-controls="category-tab1" aria-selected="true">All</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="category-tab2-tab" data-bs-toggle="pill" data-bs-target="#category-tab2" type="button" role="tab" aria-controls="category-tab2" aria-selected="false">Branding</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="category-tab3-tab" data-bs-toggle="pill" data-bs-target="#category-tab3" type="button" role="tab" aria-controls="category-tab3" aria-selected="false">Design</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="category-tab4-tab" data-bs-toggle="pill" data-bs-target="#category-tab4" type="button" role="tab" aria-controls="category-tab4" aria-selected="false">Development</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="category-tab5-tab" data-bs-toggle="pill" data-bs-target="#category-tab5" type="button" role="tab" aria-controls="category-tab5" aria-selected="false">Marketing</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="category-tab6-tab" data-bs-toggle="pill" data-bs-target="#category-tab6" type="button" role="tab" aria-controls="category-tab6" aria-selected="false">Technology</button>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>


               <div class="col-lg-12">
                  <div class="tab-content categories-content-tab" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="category-tab1" role="tabpanel" aria-labelledby="category-tab1-tab">

                        <div class="portfolio-post-area">
                           <div class="row mt-30">
                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image1.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Development</span>
                                       <a href="portfolio-details.php">Off Line SEO Marketing</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image2.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>branding</span>
                                       <a href="portfolio-details.php">SEO Tracking Analysis</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image3.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Marketing</span>
                                       <a href="portfolio-details.php">Article Data Analysis</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image4.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Design</span>
                                       <a href="portfolio-details.php">Design System & UI/UX Kit</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image5.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Advertising </span>
                                       <a href="portfolio-details.php">PPC Campaign Optimization</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image6.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Technology </span>
                                       <a href="portfolio-details.php">Data Analytics Dashboard</a>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>

                     </div>
                     <div class="tab-pane fade" id="category-tab2" role="tabpanel" aria-labelledby="category-tab2-tab">

                        <div class="portfolio-post-area">
                           <div class="row mt-30">

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image2.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>branding</span>
                                       <a href="portfolio-details.php">SEO Tracking Analysis</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image3.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Marketing</span>
                                       <a href="portfolio-details.php">Article Data Analysis</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image4.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Design</span>
                                       <a href="portfolio-details.php">Design System & UI/UX Kit</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image5.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Advertising </span>
                                       <a href="portfolio-details.php">PPC Campaign Optimization</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image6.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Technology </span>
                                       <a href="portfolio-details.php">Data Analytics Dashboard</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image1.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Development</span>
                                       <a href="portfolio-details.php">Off Line SEO Marketing</a>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>

                     </div>
                     <div class="tab-pane fade" id="category-tab3" role="tabpanel" aria-labelledby="category-tab3-tab">

                        <div class="portfolio-post-area">
                           <div class="row mt-30">

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image3.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Marketing</span>
                                       <a href="portfolio-details.php">Article Data Analysis</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image4.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Design</span>
                                       <a href="portfolio-details.php">Design System & UI/UX Kit</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image5.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Advertising </span>
                                       <a href="portfolio-details.php">PPC Campaign Optimization</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image6.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Technology </span>
                                       <a href="portfolio-details.php">Data Analytics Dashboard</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image1.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Development</span>
                                       <a href="portfolio-details.php">Off Line SEO Marketing</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image2.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>branding</span>
                                       <a href="portfolio-details.php">SEO Tracking Analysis</a>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>

                     </div>
                     <div class="tab-pane fade" id="category-tab4" role="tabpanel" aria-labelledby="category-tab4-tab">

                        <div class="portfolio-post-area">
                           <div class="row mt-30">

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image1.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Development</span>
                                       <a href="portfolio-details.php">Off Line SEO Marketing</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image3.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Marketing</span>
                                       <a href="portfolio-details.php">Article Data Analysis</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image4.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Design</span>
                                       <a href="portfolio-details.php">Design System & UI/UX Kit</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image5.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Advertising </span>
                                       <a href="portfolio-details.php">PPC Campaign Optimization</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image6.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Technology </span>
                                       <a href="portfolio-details.php">Data Analytics Dashboard</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image2.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>branding</span>
                                       <a href="portfolio-details.php">SEO Tracking Analysis</a>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>

                     </div>
                     <div class="tab-pane fade" id="category-tab5" role="tabpanel" aria-labelledby="category-tab5-tab">

                        <div class="portfolio-post-area">
                           <div class="row mt-30">

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image3.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Marketing</span>
                                       <a href="portfolio-details.php">Article Data Analysis</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image1.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Development</span>
                                       <a href="portfolio-details.php">Off Line SEO Marketing</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image4.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Design</span>
                                       <a href="portfolio-details.php">Design System & UI/UX Kit</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image5.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Advertising </span>
                                       <a href="portfolio-details.php">PPC Campaign Optimization</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image6.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Technology </span>
                                       <a href="portfolio-details.php">Data Analytics Dashboard</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image2.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>branding</span>
                                       <a href="portfolio-details.php">SEO Tracking Analysis</a>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>

                     </div>
                     <div class="tab-pane fade" id="category-tab6" role="tabpanel" aria-labelledby="category-tab6-tab">

                        <div class="portfolio-post-area">
                           <div class="row mt-30">

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image6.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Technology </span>
                                       <a href="portfolio-details.php">Data Analytics Dashboard</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image3.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Marketing</span>
                                       <a href="portfolio-details.php">Article Data Analysis</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image1.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Development</span>
                                       <a href="portfolio-details.php">Off Line SEO Marketing</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image4.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Design</span>
                                       <a href="portfolio-details.php">Design System & UI/UX Kit</a>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image5.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>Advertising </span>
                                       <a href="portfolio-details.php">PPC Campaign Optimization</a>
                                    </div>
                                 </div>
                              </div>



                              <div class="col-lg-4 col-md-6">
                                 <div class="portfolio-box">
                                    <div class="image-area">
                                       <div class="image">
                                          <img src="assets/img/others/portfolio-image2.png" alt="">
                                       </div>
                                       <a href="portfolio-details.php" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content-area">
                                       <span>branding</span>
                                       <a href="portfolio-details.php">SEO Tracking Analysis</a>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>

                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <!--===== PORTFOLIO AREA END=======-->
   </main>

   <?php include('partials/footer.php'); ?>
   <?php include('partials/footer-scripts.php'); ?>

</body>

</html>