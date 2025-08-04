<!-- <header class="navbar navbar-expand-lg bg-white shadow-sm py-3 sticky-top">
    <div class="w-100 px-4 d-flex align-items-center justify-content-between">
    <a href="index.php" class="navbar-brand mb-0">
        <img src="https://www.itpathsolutions.com/wp-content/themes/itpathsolutions/img/logo-main.svg" alt="IT Path Solutions Logo" style="height: 48px;">
    </a>

    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#mainNavbar"
        aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
        <ul class="navbar-nav d-flex align-items-center">
        <li class="nav-item">
            <a class="nav-link text-dark fw-medium px-3" href="#packages">Packages</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark fw-medium px-3" href="#migrations">Migrations</a>
        </li>
        </ul>
    </div>
    </div>
</header> -->
<?php
    $isIndex = basename($_SERVER['PHP_SELF']) == 'index.php';
?>
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-11 col-xl-3">
                <h1 class="mb-0 site-logo"><a href="index.php" class="mb-0">IT Path Solutions</a></h1>
            </div>
            <div class="col-12 col-md-9 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-lg-block">
                    <li><a href="<?= $isIndex ? '#packages' : 'index.php#packages' ?>" class="nav-link">Packages</a></li>
                    <li><a href="<?= $isIndex ? '#migrations' : 'index.php#migrations' ?>" class="nav-link">Migrations</a></li>
                    <li><a href="https://www.itpathsolutions.com/contact-us" target="_blank">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;">
                <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
            </div>
        </div>
    </div>
</header>