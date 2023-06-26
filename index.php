<?php require "includes/header.php"; ?>

      <section class="hero-section" id="section_1">
        <div class="section-overlay"></div>

        <div class="container d-flex justify-content-center align-items-center">
          <div class="row">
            <div class="col-12 mt-auto mb-5 text-center animate__animated animate__bounce">
              <small class="">LuckyMe Presents</small>

              <h1 class="text-white mb-5 animate__animated animate__bounceIn">
                Daily And Weekly Draws
              </h1>

              <a class="btn custom-btn smoothscroll" href="ticket.php"
                >Let's begin</a
              >
            </div>

            <div
              class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center"
            >
              <div class="date-wrap">
                <h5 class="text-white">
                  <i class="custom-icon bi-clock me-2"></i>
                  10 - 12<sup>th</sup>, Dec 2023
                </h5>
              </div>

              <div class="location-wrap mx-auto py-3 py-lg-0">
                <h5 class="text-white">
                  <i class="custom-icon bi-geo-alt me-2"></i>
                  Daily And Weekly Draws.
                </h5>
              </div>

              <div class="social-share">
                <ul
                  class="social-icon d-flex align-items-center justify-content-center"
                >
                  <span class="text-white me-3">Share:</span>

                  <li class="social-icon-item">
                    <a href="#" class="social-icon-link">
                      <span class="bi-facebook"></span>
                    </a>
                  </li>

                  <li class="social-icon-item">
                    <a href="#" class="social-icon-link">
                      <span class="bi-twitter"></span>
                    </a>
                  </li>

                  <li class="social-icon-item">
                    <a href="#" class="social-icon-link">
                      <span class="bi-instagram"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="video-wrap">
          <video autoplay="" loop="" muted="" class="custom-video" poster="">
            <source src="video/pexels-2022395.mp4" type="video/mp4" />

            Your browser does not support the video tag.
          </video>
        </div>
      </section>
    </main>

 <?php require "includes/footer.php"; ?>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>