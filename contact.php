<?php require_once "layouts/header.php"; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title -contact" data-aos="fade">
      <div class="heading">
        <img src="assets/img/banners/28695263_site_support_12.png" alt=""/>
        <!-- <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Contact</h1>
              <p class="mb-0">
              Connect with us today to start your journey toward the right educational path and unlock your future success.
              </p>
            </div>
          </div>
        </div> -->
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="./">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.5996474474005!2d77.31000108885493!3d28.581782400000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce45eb03405c5%3A0x49f346b1155bae2e!2sRed%20FM%2093.5%20Delhi!5e0!3m2!1sen!2sus!4v1733327792110!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div> -->
      <!-- End Google Maps -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row pt-5">

          <div class="col-lg-4">
            <!-- <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Global Smart Education,<br/>Noida Sector 02</p>
              </div>
            </div> -->
            <!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p><a href="tel:+91 870 056 3654">+91 870 056 3654</a>,<br/><a href="tel:+91 782 702 3399">+91 782 702 3399</a></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p><a href="mailto:info@gseducation.org.in">info@gseducation.org.in</a>, <a href="mailto:info.globalsmartedu@gmail.com">info.globalsmartedu@gmail.com</a></p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
          <form action="forms/contact.php" method="post" class="php-email-form aos-init aos-animate row" data-aos="fade-up" data-aos-delay="200">
          <!-- First Name -->
          <!-- First Name -->
        <div class="col-md-6 my-3">
            <input type="text" name="first_name" class="form-control" placeholder="First Name" required="">
        </div>

        <!-- Last Name -->
        <div class="col-md-6 my-3">
            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required="">
        </div>

        <!-- Contact Number -->
        <div class="col-md-6 my-3">
            <input type="text" name="contact" class="form-control" placeholder="Contact Number" required="">
        </div>

        <!-- Email -->
        <div class="col-md-6 my-3">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
        </div>

        <!-- Subject -->
        <div class="col-md-12 my-3">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
        </div>

        <!-- Message -->
        <div class="col-md-12 my-3">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
        </div>

        <div class="col-md-12 my-3 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type="submit" class="my-3">Send Message</button>
        </div>
        </form>

          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

<?php require_once "layouts/footer.php"; ?>
