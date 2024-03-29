      <!-- Footer Section -->
      <footer data-aos="fade-up" data-aos-delay="100">
        <?php
        $footerInfo = getWebsiteDetails();
        ?>
        <div class="footer-content">
          <div class="content-section">
            <!-- <h4><?php echo $footerInfo['website_name'] ?></h4> -->
            <a href="index.php"><img src="./assets/uploads/<?php echo $footerInfo['logo'] ?>" alt="<?php echo $footerInfo['logo'] ?>"></a>
            <p><?php echo $footerInfo['footer_about'] ?></p>
            <p><?php echo $footerInfo['contact_phone'] ?></p>
            <a id="mailto" href="mailto:hello@jmstreetlifestudios.com"><?php echo $footerInfo['contact_email'] ?></a>
            <div class="social-icons">
              <ul>
                <?php getSocialIcons() ?>
              </ul>
            </div>
          </div>

          <div class="quick-links">
            <h4>Quick Links</h4>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="events.php">Events</a>
            <a href="gallery.php">Gallery</a>
            <a href="blog.php">Blog</a>
          </div>

          <div class="instagram-feed">
            <h4>Instagram Feed</h4>
            <div>
              <a href=""><img src="./images/intagram_feed/feed1.png" alt=""></a>
              <a href=""><img src="./images/intagram_feed/feed2.png" alt=""></a>
              <a href=""><img src="./images/intagram_feed/feed3.png" alt=""></a>
              <a href=""><img src="./images/intagram_feed/feed4.png" alt=""></a>
              <a href=""><img src="./images/intagram_feed/feed5.png" alt=""></a>
              <a href=""><img src="./images/intagram_feed/feed6.png" alt=""></a>
              <a href=""><img src="./images/intagram_feed/feed7.png" alt=""></a>
              <a href=""><img src="./images/intagram_feed/feed8.png" alt=""></a>
              <a href=""><img src="./images/intagram_feed/feed9.png" alt=""></a>
            </div>
          </div>
        </div>

        <!-- horizonal line -->
        <hr id="footer-hr">

        <div class="footer-bottom">
          &copy; <?php echo $footerInfo['website_name'] ?>
          <span id="current-year"></span>
        </div>
      </footer>
    </main>


    <!-- Vendor JS Files -->
    <script src="./assets/vendor/aos/aos.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Custom JS Files -->
    <script src="./assets/js/custom.js"></script>
    <script src="main.js"></script>

  </body>

  </html>