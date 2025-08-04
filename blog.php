<?php
$post = isset($_GET['post']) ? basename($_GET['post']) : '';
$filePath = __DIR__ . '/posts/' . $post . '.html';

$blogTitles = [
    'doc_10_11' => [
        'title' => 'Why Upgrading from Laravel 10 to 11 Is Critical in 2025',
        'subtitle' => 'Stay ahead with this Laravel 10 → 11 upgrade strategy'
    ],
    'doc_9_11' => [
        'title' => 'Laravel 9 to 11: The Upgrade That Pays Off',
        'subtitle' => 'Modernize your app by jumping from Laravel 9.52 to 11'
    ],
    'doc_8_11' => [
        'title' => 'Still on Laravel 8? Here’s Why Version 11 Is a Must',
        'subtitle' => 'Upgrade today for speed, security, and developer happiness'
    ],
    'doc_7_11' => [
        'title' => 'Laravel 7 to 11: What You’re Risking by Not Upgrading',
        'subtitle' => 'A blog guide on bridging 4 major versions in 2025'
    ],
    'doc_6_11' => [
        'title' => 'Laravel 6 to 11: Upgrade Guide + Real Risks You’re Ignoring',
        'subtitle' => 'You’re not just outdated—you’re exposed. Here’s what to do.'
    ],
];

$blogTitle = $blogTitles[$post]['title'] ?? 'Laravel Blog';
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="IT Path Solutions">
  <meta name="description" content="<?php echo htmlspecialchars($blogSubtitle); ?>" />
  <meta name="keywords" content="Laravel Upgrade, PHP, Web Development, Framework Migration" />
  <meta name="robots" content="index, follow">

  <link rel="icon" href="https://www.itpathsolutions.com/wp-content/uploads/2020/01/cropped-favicon-32x32.png">
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,600,700,900" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styles.css">

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
<body>
  <?php include 'header.php'; ?>

  <div class="site-wrap">
    <div class="site-blocks-cover inner-page-cover" style="background-image: url('images/blog-cover.jpg'); padding: 120px 0;" data-aos="fade">
      <div class="container text-center">
        <!-- <span class="badge badge-dark mb-3" style="font-size: 1rem; padding: 0.5em 1em;">Laravel Blog</span> -->
        <h1 class="mb-3 font-weight-bold"><?php echo htmlspecialchars($blogTitle); ?></h1>
        <p class="lead"><?php echo htmlspecialchars($blogSubtitle); ?></p>
      </div>
    </div>

    <section class="site-section" id="blog-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <article class="content-area">
              <?php echo $content; ?>
            </article>
          </div>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
