<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Starter Page </title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- the css links are here -->
  <?php include_once 'includes/css-link.php' ?>
</head>
<body class="starter-page-page">
   <!-- the navigation bar -->
<?php include_once 'includes/header.php' ?>
  <main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>Starter Page</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Starter Page</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">
      <div class="container" data-aos="fade-up">
        <p>Use this page as a starter for your own custom pages.</p>
      </div>
    </section><!-- /Starter Section Section -->
  </main>
  <!-- the footer is here -->
  <?php include_once 'includes/footer.php' ?>
</body>
</html>