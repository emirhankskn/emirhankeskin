<?php $projTitle = $title; ?>
<div data-proj-id="<?php echo $id; ?>"
  class="col-12 text-white d-flex m-0 p-0 rounded-3 position-relative portfolio-card">
  <div class="d-flex flex-column flex-fill gap-3 px-4 py-3 portfolio-information">
    <div class="text-center pb-2" style="border-bottom: 1px solid #18d26e;">
      <a class="m-0 portfolio-details-lightbox" href="#<?php echo $id; ?>" data-gallery="portfolioGalleryTitle">
        <h2 class="m-0"><?php echo $title; ?></h2>
      </a>
      <span><i class="bi bi-calendar-fill"></i> <?php echo $date; ?></span>
    </div>
    <p class="flex-fill m-0 overflow-auto">
      <?php echo $description; ?>
    </p>
    <div class="d-flex gap-3">
      <?php $title = $category;
      $className = "bi bi-tag-fill";
      include("components/tag.php") ?>
      <a class="m-0 portfolio-details-lightbox" href="#<?php echo $id; ?>" data-gallery="portfolioGalleryAnchor">
        <?php $title = "Overview";
        $className = "bi bi-play-fill";
        include("components/tag.php") ?>
      </a>
    </div>
  </div>
  <!-- <div class="portfolio-inclined-border"></div> -->
  <img class="portfolio-img" src="<?php echo $img; ?>">

  <iframe id="<?php echo $id; ?>" class="p-0" style="display: none"></iframe>

  <!-- ======= Portfolio Details ======= -->
  <script>
    var iframeContent = `
    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title"><?php echo $projTitle; ?></h2>

            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
              <?php
              for ($x = 0; $x < count($imgs); $x++) {
                echo '
                <div class="swiper-slide">
                  <img src="' . $imgs[$x] . '" class="object-fit-cover w-100" alt="">
                </div>';
              }
              ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Project information</h3>
            <ul>
            <li><strong>Category</strong>: <?php echo $category; ?></li>
            <li><strong>Project date</strong>: <?php echo $date; ?></li>
            <li><strong>Project URL</strong>: <a href="<?php echo $url; ?>"><?php echo $url; ?></a></li>
          </ul>

          <p>
            <?php echo $description; ?>
          </p>
          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>`+ `
    <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></`+ `script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></`+ `script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></`+ `script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></`+ `script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></`+ `script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></`+ `script>
  <script src="assets/vendor/php-email-form/validate.js"></`+ `script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></`+ `script>
  `

    var iframe = document.getElementById("<?php echo $id; ?>");
    iframe.srcdoc = iframeContent;
  </script>
</div>