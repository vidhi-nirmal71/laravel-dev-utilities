<?php
$post = isset($_GET['post']) ? basename($_GET['post']) : '';
$filePath = __DIR__ . '/posts/' . $post . '.html';

$docTitles = [
    'doc_10_11' => [
        'title' => 'Laravel 10 to 11 Upgrade Guide',
        'subtitle' => 'A step-by-step guide to safely upgrade your Laravel project to version 11'
    ],
    'doc_9_11' => [
        'title' => 'Laravel 9 to 11 Upgrade Guide',
        'subtitle' => 'Upgrade from Laravel 9.52 to 11 with best practices'
    ],
    'doc_8_11' => [
        'title' => 'Laravel 8 to 11 Upgrade Guide',
        'subtitle' => 'Learn how to upgrade from Laravel 8 to the latest version 11'
    ],
    'doc_7_11' => [
        'title' => 'Laravel 7 to 11 Upgrade Guide',
        'subtitle' => 'Comprehensive guide to migrate from Laravel 7 to 11'
    ],
    'doc_6_11' => [
        'title' => 'Laravel 6 to 11 Upgrade Guide',
        'subtitle' => 'Detailed instructions for upgrading from Laravel 6 to 11'
    ],
];

$documentTitle = $docTitles[$post]['title'] ?? 'Documentation';
$documentSubtitle = $docTitles[$post]['subtitle'] ?? 'Explore this documentation for detailed upgrade instructions';

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
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="https://www.itpathsolutions.com/wp-content/uploads/2020/01/cropped-favicon-32x32.png">
  <meta name="robots" content="noindex, nofollow">

  <meta name="description" content="<?php echo htmlspecialchars($documentTitle); ?>" />
  <meta name="keywords" content="Laravel, Packages, Documentation" />

  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
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
    color: #c7254e;
    background-color: #f9f2f4;
    padding: 2px 4px;
    border-radius: 4px;
    font-size: 15px;
  }

  .content-area h2, 
  .content-area h3, 
  .content-area h4 {
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

  <title><?php echo htmlspecialchars($documentTitle); ?> - IT Path Solutions</title>
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="site-wrap">
    <div class="site-blocks-cover inner-page-cover" style="background-image: url('images/document-bg.jpg'); padding: 100px 0;" data-aos="fade">
      <div class="container text-center">
        <!-- <span class="badge badge-primary mb-3" style="font-size: 1rem; padding: 0.5em 1em;">Documentation</span> -->
        <h1 class="mb-3 mt-5 font-weight-bold"><?php echo htmlspecialchars($documentTitle); ?></h1>
        <p class="lead"><?php echo htmlspecialchars($documentSubtitle); ?></p>
      </div>
    </div>

    <section class="site-section" id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="content-area">
              <?php echo $content; ?>
            </div>
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