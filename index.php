<!DOCTYPE html>
<html data-n-head-ssr translate="no" lang="en"
  data-n-head="%7B%22translate%22:%7B%22ssr%22:%22no%22%7D,%22lang%22:%7B%22ssr%22:%22en%22%7D%7D">

<head>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/owl.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/custom-css.css">
  <title>PickPadi</title>
</head>

<body class="modal-overlay--above-all">

  <div id="__nuxt">
    <div id="__layout">
      <div id="default-wrapper" class="app-wrapper" data-v-a8b274d2>
        <div data-test-id="landing-container" class="landing-container global-page-landing" data-v-a8b274d2>

          <?php include('partials/header.php'); ?>

        <div data-test-id="address-container-section" id="home"
            class="global-jumbotron landing-container__jumbotron global-jumbotron--without-wave" data-v-e5745f4e>
            <div data-test-id="address-animation" class="animation" data-v-1cf24364 data-v-e5745f4e>
              <picture data-v-1cf24364>
                <source srcset="img/video-burger-opt.avif" type="image/avif" data-v-1cf24364>
                <source srcset="img/video-burger-opt.webp" type="image/webp" data-v-1cf24364> <img
                  src="img/burger-full-landing.png" width="281" height="252" data-test-id="animation-images"
                  class="animation__element" style="display: none;" data-v-1cf24364>
              </picture>
              <video data-test-id="animation-video" autoplay="autoplay" loop="loop" muted="muted" width="281"
                height="252" class="animation__element" data-v-1cf24364>
                <source src="img/address-container-animation.webm" preload="auto" type="video/webm" data-v-1cf24364>
              </video>
            </div>
            <div class="global-jumbotron__text-container" data-v-e5745f4e>
              <h1 class="heading-h1 global-jumbotron__text-container__title" data-v-55071b9b data-v-e5745f4e>
                All in One Platform to Shop, deliver, ride & hire
              </h1>
              <p class="global-jumbotron__text-container__subtitle" data-v-e5745f4e>
                Seamlessly Connecting Vendors, Service Providers, Logistics,
                and Taxi Services in One Powerful App.
              </p>
              <div data-test-id="address-input-container" class="address-container">
                <!---->
              </div>
            </div>
          </div>

          <?php
            include('partials/about-section.php');
            include('partials/services-section.php');
            include('partials/delievery-section.php');
            include('partials/why-pickpadi-section.php');
            include('partials/pickpadi-can-do-section.php');
            include('partials/download-app-section.php');
            include('partials/lets-do-it-pickpadi-section.php');
          ?>

        </div>

        <?php include('partials/footer.php'); ?>
      </div>
      <!---->
      <div data-test-id="modal-overlay" class="modal-overlay" style="display: none" data-v-4f468ea1 data-v-4f468ea1
        data-v-a8b274d2></div>
      <!---->
      <!---->
    </div>
  </div>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/owl.js"></script>
  <script src="fontawesome/js/all.js"></script>
  <script src="js/script.js"></script>

</body>

</html>