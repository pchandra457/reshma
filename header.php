<header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Reshma</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a <?php if (basename($_SERVER['PHP_SELF']) == "index.php") { echo 'class="active"'; }?> href="index.php">Home </a></li>
          <li><a <?php if (basename($_SERVER['PHP_SELF']) == "about.php") { echo 'class="active"'; }?> href="about.php">About</a></li>
          <li><a <?php if (basename($_SERVER['PHP_SELF']) == "resume.php") { echo 'class="active"'; }?> href="resume.php">Resume</a></li>
          <li><a <?php if (basename($_SERVER['PHP_SELF']) == "services.php") { echo 'class="active"'; }?> href="services.php">Services</a></li>
          <li><a <?php if (basename($_SERVER['PHP_SELF']) == "portfolio.php") { echo 'class="active"'; }?> href="portfolio.php">Portfolio</a></li>
          <li><a <?php if (basename($_SERVER['PHP_SELF']) == "contact.php") { echo 'class="active"'; }?> href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

</header>