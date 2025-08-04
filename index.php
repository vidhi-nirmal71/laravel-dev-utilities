
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="https://www.itpathsolutions.com/wp-content/uploads/2020/01/cropped-favicon-32x32.png">
  <meta name="robots" content="noindex, nofollow">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>IT Path Solutions - Laravel Packages</title>

   <!-- Google Analytics (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-81RELLJ2Y5"></script>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-81RELLJ2Y5');
  </script>

  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T7KH4R5L');
  </script>
  <!-- End Google Tag Manager -->
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <!-- Google Tag Manager (noscript) -->
  <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7KH4R5L"
              height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php
    // URL to redirect to
    $package = isset($_GET['package']) ? $_GET['package'] : '';

    if ($package != '') {
        $redirects = 'https://packagist.org/packages/itpathsolutions/' . $package;
        header("Location: $redirects");
        exit;
    }    
  ?>


  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <?php include 'header.php'; ?>

    <div class="particlehead"></div>
    <div class="site-blocks-cover">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1>We Love To Build</h1>
                <h1><span class="typed-words"></span></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="site-section" id="packages">
      <div class="container">
        <h2 class="text-4xl font-bold text-center mb-12 p-5" data-aos="fade-down">Our Laravel Packages</h2>
        <div class="row">
          <div class="col-lg-12 mb-5" data-aos="fade-right">
          <div class="d-flex flex-lg-row flex-column align-items-center box-with-humber bg-white p-5 shadow rounded-2">
            <img src="images/phpinfo.jpg" alt="PHP Info" class="package-img me-lg-5 mb-4 mb-lg-0" style="max-width: 200px;" data-aos="fade-right" data-aos-delay="100"/>
              <div class="project-content text-lg-start w-100" data-aos="fade-left" data-aos-delay="300">
                <div class="project-type text-muted mb-2">System</div>
                <h2 class="text-3xl text-primary mb-3">Phpinfo</h2>
                <p class="text-gray-600 mb-3">Offers a clear overview of the PHP runtime environment, including configuration settings, installed extensions, and module information.</p>
                <ul class="list-unstyled ul-check primary mb-4">
                  <li>Provides detailed insights into your PHP environment in a developer-friendly format.</li>
                  <li>Displays core PHP information, extensions, directives, and modules.</li>
                  <li>Powerful tool for debugging and performance optimization.</li>
                </ul>
                <div class="btn-wrapper d-flex justify-content-lg-end">
                  <a href="https://packagist.org/packages/itpathsolutions/phpinfo" class="btn btn-primary" target="_blank">View Package</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 mb-5" data-aos="fade-left">
            <div class="d-flex flex-lg-row-reverse flex-column align-items-center box-with-humber bg-white p-5 shadow rounded-2">
              <img src="images/mysqlinfo.jpg" alt="MySQL Info" class="package-img ms-lg-5 mb-4 mb-lg-0" style="max-width: 200px;" data-aos="fade-right" data-aos-delay="100"/>
              <div class="project-content text-lg-start w-100" data-aos="fade-left" data-aos-delay="300">
                <div class="project-type text-muted mb-2">Database</div>
                <h2 class="text-3xl text-primary mb-3">Mysqlinfo</h2>
                <p class="text-gray-600 mb-3">Monitor MySQL database performance and structure in real-time with this robust Laravel package.</p>
                <ul class="list-unstyled ul-check primary mb-4">
                  <li>Get connection details, table sizes, indexes, and query performance.</li>
                  <li>Monitor and troubleshoot queries and server status effectively.</li>
                  <li>Track schema info, collations, and character sets.</li>
                </ul>
                <div class="btn-wrapper">
                  <a href="https://packagist.org/packages/itpathsolutions/mysqlinfo" class="btn btn-primary" target="_blank">View Package</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 mb-5" data-aos="fade-right">
            <div class="d-flex flex-lg-row flex-column align-items-center box-with-humber bg-white p-5 shadow rounded-2">
              <img src="images/authinfo.jpg" alt="Auth Info" class="package-img me-lg-5 mb-4 mb-lg-0" style="max-width: 200px;" data-aos="fade-right" data-aos-delay="100"/>
              <div class="project-content text-lg-start w-100" data-aos="fade-left" data-aos-delay="300">
                <div class="project-type text-muted mb-2">Authentication</div>
                <h2 class="text-3xl text-primary mb-3">AuthInfo</h2>
                <p class="text-gray-600 mb-3">Log and audit Laravel authentication events like user ID, IP, device, location, and timestamps.</p>
                <ul class="list-unstyled ul-check primary mb-4">
                  <li>Track login/logout events with metadata.</li>
                  <li>Ideal for audits and compliance.</li>
                  <li>Lightweight and easy to integrate.</li>
                </ul>
                <div class="btn-wrapper d-flex justify-content-lg-end">
                  <a href="https://packagist.org/packages/itpathsolutions/authinfo" class="btn btn-primary" target="_blank">View Package</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 mb-5" data-aos="fade-left">
            <div class="d-flex flex-lg-row-reverse flex-column align-items-center box-with-humber bg-white p-5 shadow rounded-2">
              <img src="images/chatbot.jpg" alt="Chatbot" class="package-img ms-lg-5 mb-4 mb-lg-0" style="max-width: 200px;" data-aos="fade-right" data-aos-delay="100"/>
              <div class="project-content text-lg-start w-100" data-aos="fade-left" data-aos-delay="300">
                <div class="project-type text-muted mb-2">AI / Chat</div>
                <h2 class="text-3xl text-primary mb-3">Chatbot</h2>
                <p class="text-gray-600 mb-3">A flexible, AI-powered chatbot solution for Laravel applications.</p>
                <ul class="list-unstyled ul-check primary mb-4">
                  <li>Dynamic conversation flows for FAQs and support.</li>
                  <li>Boosts engagement and reduces manual work.</li>
                  <li>Easy to extend and integrate.</li>
                </ul>
                <div class="btn-wrapper">
                  <a href="https://packagist.org/packages/itpathsolutions/chatbot" class="btn btn-primary" target="_blank">View Package</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 mb-5" data-aos="fade-right">
            <div class="d-flex flex-lg-row flex-column align-items-center box-with-humber bg-white p-5 shadow rounded-2">
              <img src="images/redisinfo.jpg" alt="RedisInfo" class="package-img me-lg-5 mb-4 mb-lg-0" style="max-width: 200px;" data-aos="fade-right" data-aos-delay="100"/>
              <div class="project-content text-lg-start w-100" data-aos="fade-left" data-aos-delay="300">
                <div class="project-type text-muted mb-2">Caching</div>
                <h2 class="text-3xl text-primary mb-3">Redis Info</h2>
                <p class="text-gray-600 mb-3">A Laravel-integrated Redis monitoring package that provides real-time visibility into cache performance, key statistics, and memory usage. Useful for debugging, performance optimization, and key management.</p>
                <ul class="list-unstyled ul-check primary mb-4">
                  <li>Real-time cache statistics and memory tracking.</li>
                  <li>Identify slow keys or memory hogs quickly.</li>
                  <li>Perfect tool for performance tuning Laravel caching.</li>
                </ul>
                <div class="btn-wrapper d-flex justify-content-lg-end">
                  <a href="https://packagist.org/packages/itpathsolutions/redisinfo" class="btn btn-primary" target="_blank">View Package</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 mb-5" data-aos="fade-left">
            <div class="d-flex flex-lg-row-reverse flex-column align-items-center box-with-humber bg-white p-5 shadow rounded-2">
              <img src="images/rolewise.jpg" alt="Role-wise Session Manager" class="package-img ms-lg-5 mb-4 mb-lg-0" style="max-width: 200px;" data-aos="fade-right" data-aos-delay="100"/>
              <div class="project-content text-lg-start w-100" data-aos="fade-left" data-aos-delay="300">
                <div class="project-type text-muted mb-2">Security</div>
                <h2 class="text-3xl text-primary mb-3">Role-wise Session Manager</h2>
                <p class="text-gray-600 mb-3">Manage session durations based on user roles in Laravel with this useful package.</p>
                <ul class="list-unstyled ul-check primary mb-4">
                  <li>Configure custom session expiration per user role (e.g., admin vs. customer).</li>
                  <li>Enhances session security and control across your application.</li>
                  <li>Helps prevent long-lived sessions for sensitive user roles.</li>
                </ul>
                <div class="btn-wrapper">
                  <a href="https://packagist.org/packages/itpathsolutions/role-wise-session-manager" class="btn btn-primary" target="_blank">View Package</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section blog-section mb-3" id="migrations">
      <div class="container">
        <h2 class="text-4xl font-bold text-center mb-12 p-5" data-aos="fade-down">Latest Blog Posts</h2>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="blog-card h-100 shadow rounded overflow-hidden">
              <img src="images/upgrade_6_to_11.png" alt="Laravel Upgrade 6.x to 11" class="img-fluid">
              <div class="p-4">
                <h3 class="h5">Laravel 6.x to 11 Upgrade</h3>
                <p class="text-muted small">Stuck on Laravel 6.x? It’s time to embrace the future. This step-by-step guide helps you migrate through multiple major versions—tackling deprecated features, config changes, authentication upgrades, and Blade optimizations. Learn how to go from legacy to modern Laravel without breaking your app.</p>
                <a href="blog.php?post=blog_6_11" class="btn btn-sm btn-outline-primary mt-2">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="blog-card h-100 shadow rounded overflow-hidden">
              <img src="images/upgrade_6_to_11.png" alt="Laravel Upgrade 6.x to 11" class="img-fluid">
              <div class="p-4">
                <h3 class="h5">Laravel 7.x to 11 Upgrade</h3>
                <p class="text-muted small">Laravel 7.x introduced powerful features—but Laravel 11 takes productivity to another level. Discover how to upgrade seamlessly with guidance on handling route closures, exception handlers, validation changes, and introducing native types to modernize your codebase.</p>
                <a href="blog.php?post=blog_7_11" class="btn btn-sm btn-outline-primary mt-2">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="blog-card h-100 shadow rounded overflow-hidden">
              <img src="images/upgrade_6_to_11.png" alt="Laravel Upgrade 6.x to 11" class="img-fluid">
              <div class="p-4">
                <h3 class="h5">Laravel 8.x to 11 Upgrade</h3>
                <p class="text-muted small">Laravel 8 is great—but Laravel 11 is faster, leaner, and cleaner. This article walks through the major differences in routing, factories, job queues, and improved testing tools. Ideal for developers who want to modernize without completely refactoring their projects.</p>
                <a href="blog.php?post=blog_8_11" class="btn btn-sm btn-outline-primary mt-2">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="blog-card h-100 shadow rounded overflow-hidden">
              <img src="images/upgrade_6_to_11.png" alt="Laravel Upgrade 6.x to 11" class="img-fluid">
              <div class="p-4">
                <h3 class="h5">Laravel 9.x to 11 Upgrade</h3>
                <p class="text-muted small">Laravel 11 removes the need for boilerplate. If you're on 9.xx, this guide shows you how to transition to a lighter, faster, more expressive Laravel. Includes tips for converting custom service providers, refactoring middleware, and updating your composer.json cleanly.</p>
                <a href="blog.php?post=blog_9_11" class="btn btn-sm btn-outline-primary mt-2">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="blog-card h-100 shadow rounded overflow-hidden">
              <img src="images/upgrade_6_to_11.png" alt="Laravel Upgrade 6.x to 11" class="img-fluid">
              <div class="p-4">
                <h3 class="h5">Laravel 10.x to 11 Upgrade</h3>
                <p class="text-muted small">Laravel 11 refines what Laravel 10 started—minimal app structure, better performance, and Laravel Reverb integration. This article shows how to upgrade with zero friction, improve test coverage, and take advantage of simplified service containers.</p>
                <a href="blog.php?post=blog_10_11" class="btn btn-sm btn-outline-primary mt-2">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>

  </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/jarallax-element.min.js"></script>
    <script src="js/lozad.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/three.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/OBJLoader.js"></script>
    <script src="js/ParticleHead.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/typed.js"></script>
    <!-- Swiper JS -->
    <script>
      var typed = new Typed('.typed-words', {
        strings: ["Laravel Web Applications","Laravel Packages","Laravel APIs","Laravel Services","Laravel Migrations"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    <!-- AOS Scripts -->
    <script>
      AOS.init({
        duration: 10000,
        easing: 'fade-left',
        once: true,
      });

      // Initialize Swiper for blog posts
      var swiper = new Swiper(".mySwiper", {
          loop: true,
          speed: 1000,
          autoplay: {
            delay: 2000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          slidesPerView: "auto",
          centeredSlides: false,
          spaceBetween: 30,
          breakpoints: {
            0: {
              spaceBetween: 15,
            },
            768: {
              spaceBetween: 20,
            },
            1024: {
              spaceBetween: 20,
            },
            1200: {
              spaceBetween: 30,
            }
          }
      });
    </script>
  </body>
  </html>