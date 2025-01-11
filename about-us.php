<!DOCTYPE html>
<html data-n-head-ssr translate="no" lang="en"
  data-n-head="%7B%22translate%22:%7B%22ssr%22:%22no%22%7D,%22lang%22:%7B%22ssr%22:%22en%22%7D%7D">

<head>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="stylesheet" href="css/owl.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/custom-css.css">
  <title>PickPadi</title>
</head>

<body class="modal-overlay--above-all">

  <div id="__nuxt">
    <div id="__layout">
      <?php include('partials/header.php'); ?>
      <main class="relative z-0 flex-1" style="--navigation-bar-height: 0;">
        <div>
          <section id="curved_hero_1">
            <div class="relative flex h-[712px] w-full flex-col justify-center overflow-hidden">
              <div class="relative z-0 flex h-full w-full items-center justify-center bg-opacity-70 px-10 md:px-20" style="background: linear-gradient(93deg, #ffbe0b -0.03%, #fb5607 48.87%) !important;">
                <div class="opacity-0 transition-opacity delay-300 duration-500 ease-in-out opacity-100">
                  <div class="mx-auto flex max-w-6xl flex-col items-center text-center">
                    <h1 class="text-3xl font-bold md:text-4xl lg:text-5xl text-white">
                      <div class="relative">
                        <!---->
                        <div>
                          <p>We are building the largest marketplace in your city to give you access to anything in
                            minutes</p>
                        </div>
                      </div>
                    </h1>
                    <!---->
                    <!---->
                  </div>
                </div>
              </div>
            </div>
          </section>
          <?php 
            include('partials/about-section.php'); 
            include('partials/why-pickpadi-section.php');
          ?>
          <section id="horizontal_card_2"
            class="opacity-0 transition-opacity delay-300 duration-500 ease-in-out opacity-100">
            <div class="w-full mx-auto flex max-w-5xl flex-col items-center justify-center space-y-4 md:flex-row md:space-x-4 py-12 md:py-16 lg:py-20 px-4 md:px-6 lg:px-8">
              <img src="img/business-decisions.svg" alt="PickPadi for Impact" width="320" height="320" loading="eager" class="w-56 sm:w-64 lg:w-80">
              <div class="flex max-w-md flex-1 flex-col items-center md:items-start md:pl-6">
                <h2 class="text-center md:text-left text-2xl font-bold md:text-3xl lg:text-4xl text-gray-800">
                  <div class="relative">
                    <!---->
                    <div>
                      <p>PickPadi for Impact</p>
                    </div>
                  </div>
                </h2>
                <div class="mt-4 w-full space-y-3 text-center text-gray-700 transition md:text-left line-clamp-6">
                  <p><strong>We want to have a positive impact on cities, our communities, and the environment.</strong>
                  </p>
                  <p>We strive for a socially-responsible and eco-friendly growth model. For us, change comes from
                    within. Our internal culture drives impact from the core of our business. We enable of small
                    business to grow and give couriers an opportunity to generate income in a fast and accessible way.
                    Our technology is free for non-profit causes and is put to good use, helping us to reduce our carbon
                    footprint and make an impact in the communities we serve.</p>
                </div>
                <div
                  class="-mt-12 flex h-20 w-full items-end justify-center md:justify-start bg-gradient-to-b from-transparent to-white">
                  <button class="text-sm font-bold text-green-700">
                    Read More
                  </button></div>
                <!---->
              </div>
            </div>
          </section>
          <section class="opacity-0 transition-opacity delay-300 duration-500 ease-in-out bg-yellow-100 opacity-100"
            id="jobs_carousel_1">
            <div class="w-full mx-auto flex max-w-7xl flex-col py-12 md:py-16 lg:py-20 px-0">
              <h2 class="mx-auto px-4 text-center text-2xl font-bold md:text-3xl lg:text-4xl text-gray-800">
                <div class="relative">
                  <!---->
                  <div>Your next job is on the way</div>
                </div>
              </h2>
              
              <div class="container">
                <div class="testimonial-carousel owl-carousel" style="margin-top: 80px !important;">
                
                  <div class="testimonial-item text-center rounded">
                    <div rel="noopener noreferrer" class="flex flex-col items-center justify-center space-y-1 rounded-xl bg-yellow-200 p-6 text-center transition hover:opacity-90 basis-1/3" style="min-height: 160px;">
                      <div class="font-bold text-gray-800">
                        <strong>Content Quality Analyst - Partner Operations</strong>
                      </div> 
                      <div class="text-sm text-gray-700">
                        <span>Barcelona, Spain (Hybrid)</span>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial-item text-center rounded">
                    <div rel="noopener noreferrer" class="flex flex-col items-center justify-center space-y-1 rounded-xl bg-yellow-200 p-6 text-center transition hover:opacity-90 basis-1/3" style="min-height: 160px;">
                      <div class="font-bold text-gray-800">
                        <strong>Content Quality Analyst - Partner Operations</strong>
                      </div> 
                      <div class="text-sm text-gray-700">
                        <span>Barcelona, Spain (Hybrid)</span>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial-item text-center rounded">
                    <div rel="noopener noreferrer" class="flex flex-col items-center justify-center space-y-1 rounded-xl bg-yellow-200 p-6 text-center transition hover:opacity-90 basis-1/3" style="min-height: 160px;">
                      <div class="font-bold text-gray-800">
                        <strong>Content Quality Analyst - Partner Operations</strong>
                      </div> 
                      <div class="text-sm text-gray-700">
                        <span>Barcelona, Spain (Hybrid)</span>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="mt-20 flex items-center justify-center">
                <a type="button" href="" class="helio-button corporate-element__button primary" data-v-1e30e945="">
                  <span class="helio-button__content" data-v-1e30e945="">
                    Contact Us
                  </span>
                </a>
              </div>
            </div>
          </section>
        </div>
      </main>
      <?php include('partials/footer.php'); ?>
    </div>
  </div>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/owl.js"></script>
  <script src="fontawesome/js/all.js"></script>
  <script src="js/script.js"></script>

  <script>
    // testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<button data-v-e0bb6e12="" aria-label="previous item" class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-gray-300 bg-opacity-50 transition hover:bg-opacity-60 absolute top-1/2 -translate-y-1/2 left-2"><svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="rotate-180"><path d="M1.56957 2L7.5 7.96501L1.5 14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-gray-700"></path></svg></button>',
            '<button data-v-e0bb6e12="" aria-label="next item" class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-gray-300 bg-opacity-50 transition hover:bg-opacity-60 absolute top-1/2 -translate-y-1/2 right-2"><svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg" class=""><path d="M1.56957 2L7.5 7.96501L1.5 14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-gray-700"></path></svg></button>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:2
            },
            1200:{
                items:2
            }
        }
    });

  </script>

</body>

</html>