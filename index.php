<?php
require_once('./admin/auxiliaries.php');
include('./admin/database/config.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/responsive.css">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Oswald:wght@300;600;700&family=Raleway:wght@300;700&family=Source+Sans+Pro:wght@300;400;600;700&family=Source+Serif+Pro:wght@300;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  
  <!-- <link href="./assets/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="./assets/aos/aos.css" rel="stylesheet">
  <link href="./assets/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="./assets/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>JM Street-Life Africa</title>
</head>

<body>
  <header class="header">
    <nav class="header__navbar">
      <div class="header__navbar--logo"><a href="index.html"><?php $websiteName = getWebsiteDetails();
                                                              echo $websiteName['website_name']; ?></a></div>
      <div>
        <ul class="header__nav-list">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="events.html">Events</a>
          <li><a href="gallery.php">Gallery</a>
          <li><a href="blog.html">Blog</a>
          </li>
          <div class="contact__button">
            <a href="contact.html" class="contact__button__link">Contact Us</a>
          </div>
        </ul>
      </div>
      <svg class="bars" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <title>toggle Menu</title>
        <path class="open-btn" stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
        d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"></path>

        <path class="close-btn" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
        stroke-linejoin="round" class="close-btn hidden text-primary-600"></path>
      </svg>
    </nav>
  </header>

  <!-- Main Content -->
  <main>

    <!-- Hero Header -->
    <section class="hero-section">
      <div class="hero-header">
        <div class="hero-banner">
          <h4 class="hero-title">
            <?php
            $hero_title = getWebsiteDetails();
            echo $hero_title['meta_title_home'];
            ?>
          </h4>
          <div class="hero-b">
            <svg class="h-16" width="17" height="86" viewBox="0 0 17 86" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.5 70C4.08172 70 0.499997 73.5817 0.499997 78C0.499996 82.4183 4.08172 86 8.5 86C12.9183 86 16.5 82.4183 16.5 78C16.5 73.5817 12.9183 70 8.5 70ZM7 -6.55671e-08L7 78L10 78L10 6.55671e-08L7 -6.55671e-08Z" fill="#F6F6F6" />
            </svg>
            <p class="scroll-down">Scroll Down For More</p>
          </div>
        </div>

        <div class="dark-bg"></div>

        <div class="img-bg">
          <div class="hero-para">
            <p class="hero-text">
              <?php
              $hero_text = getWebsiteDetails();
              echo $hero_text['meta_description_home'];
              ?>
            </p>
          </div>
          <img class="bg-img" src="./images/hero-img.jpg" alt="">
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section>
      <?php
      $about_details = getWebsiteDetails();
      $about_title = $about_details['home_about_title'];
      $about_content = $about_details['home_about_content'];
      $about_img = $about_details['home_about_img'];
      ?>
      <div class="about-section">
        <div class="about-img">
          <img class="rounded-lg" src="./assets/uploads/<?php echo $about_img ?>" alt="<?php echo $about_title ?>">
        </div>
        <div class="about-text">
          <h3 class="about-header"><?php echo $about_title ?></h3>
          <p><?php echo $about_content ?></p>
        </div>
      </div>
    </section>

    <!-- Experience section-->

    <section>
      <?php
      $counter = getWebsiteDetails();
      $experience_count = $counter['counter_1_value'];
      $events_count = $counter['counter_2_value'];
      $members_count = $counter['counter_3_value'];
      ?>
      <div class="experience">
        <div>
          <p class="text-2xl">
            <span class="text-3xl" data-target="5"><?php echo $experience_count ?>+</span> Years of Experience
          </p>
        </div>
        <div>
          <p class="text-2xl">
            <span class="text-3xl count" data-target="25"><?php echo $events_count ?>+</span> Events Organized
          </p>
        </div>
        <div>
          <p class="text-2xl">
            <span class="text-3xl count" data-target="150"><?php echo $members_count ?>+</span> Team Members
          </p>
        </div>
      </div>
    </section>

    <!-- Specialization section -->
    <section>
      <div>
        <h4 class="section-title text-3xl">OUR SPECIALITY</h4>
        <div class="flex">
          <div class="bg-primary-clr">
            <h4 class="text-2xl">EVENT PRODUCTION</h4>
            <p>We specialize in producing various types of events such as music festivals, art shows, parties, corporate
              events, and weddings. We have produced a number of notable events ranging from intimate gatherings to
              massive crowds of over 52,000 people.</p>
          </div>
          <div class="bg-dark">
            <h4 class="text-2xl">STORYTELLING</h4>
            <p>We believe in the power of storytelling and dedicated to telling true African stories through our
              productions. We aim to dispel negative stereotypes that exist about Africa through content that reflects
              the
              real experiences of Africans, both past and present.</p>
          </div>
          <div class="bg-dark-800">
            <h4 class="text-2xl">TALENT MANAGEMENT</h4>
            <p>We are passionate about talent building and providing opportunities for actors, musicians, artisans,
              writers, animators, and designers, among others with a team dedicated to discovering and grooming new
              talents, with the support to succeed.</p>
          </div>
        </div>
      </div>

    </section>

    <!-- Events Section -->
    <section class="event-section">
      <h4 class="section-title text-3xl">Upcoming Events</h4>
      <?php getEvents() ?>

      <div class="flex-btn">
        <a href="" class="view-all">View
          All <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75">
            </path>
          </svg></a>
      </div>
    </section>

    <!-- More about Section -->
    <section class="more__about">
      <div class="more__about__text">
        <p>One of our primary objectives is to tell the true African stories through our productions. We recognize the
          power of storytelling and its ability to shape the way people view the world. We are dedicated to producing
          content that reflects the real experiences and struggles of Africans, both past and present.</p>
      </div>

      <div class="more__about__img-container">
        <div class="more__about__img"></div>
        <div class="more__about__overlap-container"></div>
      </div>
    </section>

    <!-- Past Performers -->
    <section>
      <div class="container">
        <div class="past-performance__header">
          <h4 class="text-3xl">MEET PAST PERFORMERS</h4>
          <div class="">
            <a href="" class="view-all">View
              All <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75">
                </path>
              </svg></a>
          </div>
        </div>

        <!-- Profile cards -->
        <?php
        $statement = $pdo->prepare("SELECT * FROM tbl_performer");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $performer) {
        ?>
          <div class="past-performer">
            <div class="past-performer__img-container">
              <div class="past-performer-overlay"></div>
              <div class="past-performer__profile-img" style="background: url(./assets/uploads/<?php echo $performer['photo'] ?>);"></div>
            </div>

            <div class="past-performer__profile-content">

              <h4 class="past-performer__name"><?php echo $performer['name'] ?></h4>
              <p class="past-performer__details"><?php echo $performer['detail'] ?></p>

              <div class="past-performer__socials">
                <ul>
										<?php if($performer['facebook']!=''): ?>
											<li><a href="<?php echo $performer['facebook']; ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
										<?php endif; ?>

										<?php if($performer['twitter']!=''): ?>
											<li><a href="<?php echo $performer['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
										<?php endif; ?>

										<?php if($performer['linkedin']!=''): ?>
											<li><a href="<?php echo $performer['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
										<?php endif; ?>

										<?php if($performer['youtube']!=''): ?>
											<li><a href="<?php echo $performer['youtube']; ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
										<?php endif; ?>

										<?php if($performer['instagram']!=''): ?>
											<li><a href="<?php echo $performer['instagram']; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
										<?php endif; ?>
									</ul>
              </div>

              <div class="past-performer__slider-btns">
                <button>
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                  </svg>
                </button>
                <button>
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75">
                    </path>
                  </svg>
                </button>
              </div>
            </div>

          </div> <?php
                }
                  ?>
      </div>
    </section>


    <!-- <div id="gallery">
      
      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a href="./images/gallery-img1.png" class="gallery-lightbox"><img src="./images/gallery-img1.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="./images/gallery-img2.png" class="gallery-lightbox"><img src="./images/gallery-img2.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="./images/gallery-img3.png" class="gallery-lightbox"><img src="./images/gallery-img3.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="./images/gallery-img4.png" class="gallery-lightbox"><img src="./images/gallery-img4.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="./images/gallery-img5.png" class="gallery-lightbox"><img src="./images/gallery-img5.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="./images/gallery-img1.png" class="gallery-lightbox"><img src="./images/gallery-img1.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="./images/gallery-img2.png" class="gallery-lightbox"><img src="./images/gallery-img2.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="./images/gallery-img3.png" class="gallery-lightbox"><img src="./images/gallery-img3.png" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div> -->


    <!-- Gallery Section -->
    <section>
      <div class="container">
        <h4 class="section-title text-3xl">GALLERY</h4>
        <div class="section__gallery">
          <div class="section__gallery__picture">
            <a href="./images/gallery-img1.png" class="gallery-lightbox"><img src="./images/gallery-img1.png" class="img-fluid" alt=""></a>
            <p class="text-sm uppercase">GHANA DRIVE-IN CONCERT, 2023</p>
          </div>
          <div class="section__gallery__picture">
            <a href="./images/gallery-img2.png" class="gallery-lightbox"><img src="./images/gallery-img2.png" class="img-fluid" alt=""></a>
            <p class="text-sm uppercase">GHANA DRIVE-IN CONCERT, 2023</p>
          </div>
          <div class="section__gallery__picture">
            <a href="./images/gallery-img3.png" class="gallery-lightbox"><img src="./images/gallery-img3.png" class="img-fluid" alt=""></a>
            <p class="text-sm uppercase">GHANA DRIVE-IN CONCERT, 2023</p>
          </div>
          <div class="section__gallery__picture row-span">
            <a href="./images/gallery-img4.png" class="gallery-lightbox"><img src="./images/gallery-img4.png" class="img-fluid" alt=""></a>
            <p class="text-sm uppercase">FRANCIS WEDS JANE, 2023</p>
          </div>
          <div class="section__gallery__picture">
            <a href="./images/gallery-img5.png" class="gallery-lightbox"><img src="./images/gallery-img5.png" class="img-fluid" alt=""></a>
            <p class="text-sm uppercase">FRANCIS WEDS JANE, 2023</p>
          </div>
        </div>

        <div class="flex-btn">
          <a href="" class="view-all">View
            All <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75">
              </path>
            </svg></a>
        </div>
      </div>
    </section>

    <!-- Animate text Section -->
    <section>
      <div id="scroll-text__container">
        <p id="scroll-text">Let's discuss your ideas Let's discuss your ideas Let's discuss your ideas</p>
      </div>
    </section>

    <!-- Blog Section -->
    <section>
      <?php
      ?>
      <h4 class="section-title text-3xl">Blog</h4>
      <div class="blog-section">
        <?php getBlogs() ?>
      </div>
    </section>


    <!-- Contact Section -->
    <section class="contact-section">
      <div class="contact-content">
        <div class="contact-text">
          <h4>LET'S CREATE LASTING EXPERIENCES TOGETHER</h4>
          <p>At JM STREET-LIFE STUDIOS, we believe in the power of collaboration. Whether you're looking to plan an event, tell a story, or develop your talent, we're here to help. So let's connect and see what amazing things we can create together!</p>
        </div>

        <div class="form">
          <div class="contact-form">
            <form action="" class="form">
              <div class="form-group">
                <label for="name" class="text-slate-100">Name</label>
                <input type="text" name="name" id="name">
              </div>
              <div class="form-group">
                <label for="email" class="text-slate-100">Email</label>
                <input type="email" name="email" id="email">
              </div>
              <div class="form-group">
                <label for="message" class="text-slate-100">Message</label>
                <textarea name="message" id="message" cols="30" rows="5"></textarea>
              </div>
              <div class="form-group">
                <button type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer Section -->
    <footer>
      <?php
      $footerInfo = getWebsiteDetails();
      ?>
      <div class="footer-content">
        <div class="content-section">
          <h4><?php echo $footerInfo['website_name'] ?></h4>
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
          <a href="index.html">Home</a>
          <a href="about.html">About Us</a>
          <a href="events.html">Events</a>
          <a href="gallery.html">Gallery</a>
          <a href="blog.html">Blog</a>
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
        &copy; JM Street-Life Studios
        <span id="current-year"></span>
      </div>
    </footer>
  </main>


  <!-- scripts -->
  <script src="./assets/aos/aos.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/glightbox/js/glightbox.min.js"></script>
  <script src="./assets/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="./assets/js/custom.js"></script>

</body>

</html>