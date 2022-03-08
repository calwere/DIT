<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DotCom Institute of Technology</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
    <link href="assets/img/logo.jpg" rel="icon">
    <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">DotCom Institute of Technology</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="course-details.php">Courses</a></li>
          <li><a href="trainers.php">Trainers</a></li>
<!--          <li><a href="events.html">Events</a></li>-->
<!--          <li><a href="pricing.html">Pricing</a></li>-->

<!--          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>-->
<!--            <ul>-->
<!--              <li><a href="#">Drop Down 1</a></li>-->
<!--              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>-->
<!--                <ul>-->
<!--                  <li><a href="#">Deep Drop Down 1</a></li>-->
<!--                  <li><a href="#">Deep Drop Down 2</a></li>-->
<!--                  <li><a href="#">Deep Drop Down 3</a></li>-->
<!--                  <li><a href="#">Deep Drop Down 4</a></li>-->
<!--                  <li><a href="#">Deep Drop Down 5</a></li>-->
<!--                </ul>-->
<!--              </li>-->
<!--              <li><a href="#">Drop Down 2</a></li>-->
<!--              <li><a href="#">Drop Down 3</a></li>-->
<!--              <li><a href="#">Drop Down 4</a></li>-->
<!--            </ul>-->
<!--          </li>-->
          <li><a class="active" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="courses.php" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
        <p>Email us with any questions or inquiries or call. We would be happy to answer your questions and set up a meeting with you. Have a question for us? Check the FAQ page first. If not answered there, fill out the the inquiry form.. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8173311640608!2d36.821373314613915!3d-1.2834673990638812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d6678064cf%3A0x956bb6f5e0ab2aac!2sMoi%20Ave%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1643491896246!5m2!1sen!2ske" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>3rd Floor Vision Plaza <br>Nairobi City <br>Kenya</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@ict.ac.ke</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+254 726 382865</p>
              </div>

            </div>

          </div>
            <?php

            //define variables and set to empty values
            $nameErr = $emailErr =$subjectErr= $messageErr = "";
            $name = $email = $subject = $message  ="";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])){
                    $name = "Name is required";
                } else {
                    $name = test_input($_POST["name"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                        $nameErr = "On;ly letters and white space allowed";
                    }
                }
            }
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                //check if e-mail address is well formed
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST["subject"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["subject"]);
            }

            if (empty($_POST["message"])) {
                $messageErr = "message is required";
            } else {
                $message = test_input($_POST["message"]);
            }


            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>

          <div class="col-lg-8 mt-5 mt-lg-0">
<!---->
            <form action="contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>DotCom Institute of Technology</h3>
            <p>
              3rd Floor Vision Plaza <br>Nairobi City <br>Kenya <br>
              <strong>Phone:</strong> +254 726 382865<br>
              <strong>Email:</strong> info@ict.ac.ke<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Data Science with Python</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Software Engineering</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Receive updates and notifications about us as they arise</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright 2022 <strong><span>DotCom Institute of Technology</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="#">Caleb Were</a>
        </div>
      </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="https://twitter.com/home?lang=en" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="https://web.facebook.com/?_rdc=1&_rdr" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="https://ke.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>