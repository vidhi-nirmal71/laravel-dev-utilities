<?php
$post = isset($_GET['post']) ? basename($_GET['post']) : '';
$filePath = __DIR__ . '/posts/' . $post . '.html';

$blogTitles = [
    'blog_10_11' => [
        'title' => 'Why Upgrading from Laravel 10 to 11 Is Critical in 2025',
        'subtitle' => 'Stay ahead with this Laravel 10 → 11 upgrade strategy'
    ],
    'blog_9_11' => [
        'title' => 'Laravel 9 to 11: The Upgrade That Pays Off',
        'subtitle' => 'Modernize your app by jumping from Laravel 9.52 to 11'
    ],
    'blog_8_11' => [
        'title' => 'Still on Laravel 8? Here’s Why Version 11 Is a Must',
        'subtitle' => 'Upgrade today for speed, security, and developer happiness'
    ],
    'blog_7_11' => [
        'title' => 'Laravel 7 to 11: What You’re Risking by Not Upgrading',
        'subtitle' => 'A blog guide on bridging 4 major versions in 2025'
    ],
    'blog_6_11' => [
        'title' => 'Laravel 6 to 11: Upgrade Guide + Real Risks You’re Ignoring',
        'subtitle' => 'You’re not just outdated—you’re exposed. Here’s what to do.'
    ],
];

$blogTitle = $blogTitles[$post]['title'] ?? 'Laravel Migration';
$blogSubtitle = $blogTitles[$post]['subtitle'] ?? 'Explore actionable Laravel upgrade insights';

if ($post && file_exists($filePath)) {
    $content = file_get_contents($filePath);
} else {
    $content = "<h2>Post not found.</h2>";
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="itpathsolutions.com">
  <link rel="shortcut icon" href="cropped-favicon-32x32.png">
  <meta name="robots" content="noindex, nofollow">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-81RELLJ2Y5"></script>
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

  <style>
    .content-area pre {
      background: #f1f3f5;
      padding: 1rem;
      border-radius: 5px;
      overflow-x: auto;
    }
    .content-area code {
      background-color: #f9f2f4;
      color: #c7254e;
      padding: 2px 4px;
      border-radius: 4px;
      font-size: 15px;
    }
    .content-area h2, .content-area h3, .content-area h4 {
      margin-top: 2rem;
      font-weight: 600;
    }
    .content-area ul {
      padding-left: 1.2rem;
    }
    .content-area p, .content-area li {
      line-height: 1.7;
      font-size: 15px;
      color: #000;
      font-weight: 500;
    }
  </style>

  <title><?php echo htmlspecialchars($blogTitle); ?> - IT Path Blog</title>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <!-- Google Tag Manager (noscript) -->
  <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7KH4R5L"
              height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <?php include 'header.php'; ?>

  <div class="site-wrap">

  <div class="particlehead"></div>
  <div class="site-blocks-cover">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
            <div class="row justify-content-center mb-4">
              <div class="text-center mt-5">
                <h1 class="mb-3 font-weight-bold"><?php echo htmlspecialchars($blogTitle); ?></h1>
                <p class="lead"><?php echo htmlspecialchars($blogSubtitle); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php $docVersion = $post; ?>
    <section class="site-section" id="blog-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <article class="content-area">
              <?php include 'email_form.php'; ?>
              <?php echo $content; ?>
            </article>
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
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
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
    <script src="js/main.js"></script>
    <!-- AOS Scripts -->
    <script>
      AOS.init({
        duration: 10000,
        easing: 'fade-left',
        once: true,
      });
    </script>
</body>
</html>
