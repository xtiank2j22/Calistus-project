<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - UpConstruction Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <?php include_once 'includes/css-link.php' ?>
</head>

<body class="contact-page">
  <!-- the header section -->
  <?php include_once 'includes/header.php' ?>
  <!-- the header section end -->
  <main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>Suite 5, Nwafia Plaza KM 6 East/West Road Opposite Omega House, P/H River State.</p>
            </div>
          </div><!-- End Info Item -->
          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+ 234 9(0) 3274 6643</p>
            </div>
          </div><!-- End Info Item -->
          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>doncassatechnologyltd@gmail.com</p>
            </div>
          </div><!-- End Info Item -->
        </div>
        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2022.4666336313144!2d7.035280901318055!3d4.865324406335108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069d32f153c772b%3A0x1e76a64de0ee02a3!2sDONCASSA%20TECHNOLOGIES%20LTD!5e0!3m2!1sen!2sng!4v1725837633166!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->
          <div class="col-lg-6">
            <h1 class="p-3">Message Us Today!</h1>
            <!-- <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400"> -->
            <form action="send_email.php" method="post">
              <?php
              // Check if there is a message in the URL
              if (isset($_GET['message'])) {
                $message = $_GET['message'];
                echo "<p>$message</p>";
              }
              ?>
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>
                <div class="col-md-12 text-center">

                  <button type="submit" class="btn btn-com-color mt-3">Send Message</button>
                </div>
              </div>
            </form>
          </div><!-- End Contact Form -->
        </div>
      </div>
    </section><!-- /Contact Section -->
  </main>
  <?php include_once 'includes/footer.php' ?>
</body>

</html>