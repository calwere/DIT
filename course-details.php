<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        form{
            background-color: chartreuse;
        }
    </style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Course Details - DotCom Institute of Technology</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
<!--  <link href="assets/img/favicon.png" rel="icon">-->
<!--  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->
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
          <li><a class="active" href="courses.php">Courses</a></li>
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
          <li><a href="contact.php">Contact</a></li>
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
        <h2>Course Details</h2>
        <p>The courses here will help you polish your HTML and CSS skills while learning about color design, navigation design, and more. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img src="Students/st3.jpg" class="img-fluid" height="900" width="900" alt="">
            <h3>Website Development</h3>
            <p>
              This course trains students on various coding languages to understand how to create content and software in the form of

              Websites and mobile Applications that run on a Database. At the end of the training, students create a final project, which is presented to a panel of industry leaders. Technologies you will learn include JAVA & Android, PHP & MySQL, HTML5  and Bootstrap framework.
            </p>
          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Trainer</h5>
              <p><a href="#">Walter Mukanzi</a></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Course Fee</h5>
              <p>Ksh. 52,000</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Available Seats</h5>
              <p>30</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center ">
              <h5>Schedule</h5>
              <p>5.00 pm - 7.00 pm</p>
            </div>
              <form action="contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <input type="text" name="Name" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                          <input type="email" class="form-control" name="Email" id="email" placeholder="Your Email" required>
                      </div>
                  </div>
                  <div class="form-group mt-3">
                      <input type="text" class="form-control" name="course" id="course" placeholder="Course" required>
                      <select name="course" id="courses" size="3" multiple>
                          <option value="Software developemt">Software development</option>
                          <option value="cYB">Python</option>
                          <option value="Laravel">Laravel</option>
                          <option value="React">React</option>
                          <option value="Data Science">Data Science</option>
                      </select><br>
                  </div>
                  <div class="form-group mt-3">
                      <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                      <input type="date" class="form-control" name="date" id="dob" placeholder="Enter Date of enrollment">
                  </div>
                  <div class="text-center"><button type="submit">Enroll Now</button></div>
              </form>

          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

    <!-- ======= Course Details Tabs Section ======= -->
    <section id="course-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Data Science with Python</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Software Development</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Graphic Design</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Web Design</a>
              </li>
<!--              <li class="nav-item">-->
<!--                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>-->
<!--              </li>-->
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>About Data Analystics</h3>
<!--                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>-->
                    <p>Unlock your potential in data analytics. Build job-ready skills for a data analyst career. Gain job-ready skills for an entry-level data analyst role with this Data Analyst course.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="Students/data%20science.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>About the course</h3>
<!--                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>-->
                    <p>This programme offers knowledge and skills in a range of computer skills to ensure learners can provide solutions to a dynamic world. The course deals with the processes, methodologies, techniques, and tools of developing high-quality software systems in a cost-effective manner. The course is tailored to meet the high demand for software engineers among the fastest growing ICT profession in Kenya and beyond.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
<!--                    <h3>About the course</h3>-->
<!--                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>-->
                    <p>Graphic Design is all around us! Words and pictures—the building blocks of graphic design—are the elements that carry the majority of the content in both the digital world and the printed world. As graphic design becomes more visible and prevalent in our lives, graphic design as a practice becomes more important in our culture.

                      Through visual examples, this course will teach you the fundamental principles of graphic design: imagemaking, typography, composition</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="Students/graphic-Designing.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
<!--                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>-->
<!--                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>-->
                    <p>By the end of our web design course, you will be comfortable designing, creating, coding and posting websites to the Internet. Equipped with new design trends to ensure strong online presentation, you will have an advanced knowledge of website creation for immediate entry into the job market.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="Students/web%20design.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->

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
              <input type="email" name="email"><input type="submit" value="Subscribe">
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