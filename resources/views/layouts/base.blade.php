<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <title>Travel Blog</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta name="description" content="Travel Blog">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- swiper slider  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- end of swiper slider  -->

  <!-- tailwind -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="tailwind.css">
  <!-- end of tailwind -->

  <link rel="stylesheet" href="css/main.css">
  <!-- my styles -->

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  
  @yield('main')

  <!-- swiper slider  -->
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    const category = new Swiper('#slider-category', {
      loop: true,
      slidesPerView: 6,
      spaceBetween: 25,
      pagination: {
        el: '.swiper-pagination',
      },

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
          0: {
            slidesPerView: 2,
            // spaceBetween: 20,
          },
          480: {
            slidesPerView: 3,
            // spaceBetween: 20,
          },
          768: {
            slidesPerView: 5,
            // spaceBetween: 40,
          },
          992: {
            slidesPerView: 6,
            // spaceBetween: 50,
          },
        },
    });

    const instagram = new Swiper('#slider-insta', {
      effect: "coverflow",
      setWrapperSize: true,
      loop: true,
      slidesPerView: 3,
      spaceBetween: 25,
      centeredSlides: true,
    });
  </script> <!-- setting swiper slider -->
  <!-- end of swiper slider -->
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>