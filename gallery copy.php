<?php
  include('./admin/database/config.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Oswald:wght@300;600;700&family=Raleway:wght@300;700&family=Source+Sans+Pro:wght@300;400;600;700&family=Source+Serif+Pro:wght@300;600;700&display=swap"
    rel="stylesheet">

  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


  <!-- <link rel="stylesheet" href="./assets/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="./assets/css/slicknav.css">
	<link rel="stylesheet" href="./assets/css/superfish.css">
	<link rel="stylesheet" href="./assets/css/animate.css">
	
	<link rel="stylesheet" href="./assets/css/jquery.bxslider.css">
	<link rel="stylesheet" href="./assets/css/hover.css">
	<link rel="stylesheet" href="./assets/css/magnific-popup.css">
	<link rel="stylesheet" href="./assets/css/style.css">
	<link rel="stylesheet" href="./assets/css/responsive.css">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>JM Street-Life Africa</title>
</head>

<body>
  <header class="header">
    <nav class="header__navbar">
      <div class="header__navbar--logo"><a href="index.html">JM Street-Life <br> Studio</a></div>
      <div>
        <ul class="header__nav-list">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="events.html">Events</a>
          <li><a href="gallery.html">Gallery</a>
          <li><a href="blog.html">Blog</a>
          </li>
          <div class="contact__button">
            <a href="contact.html" class="contact__button__link">Contact Us</a>
          </div>
        </ul>
      </div>
      <svg class="bars" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <title>toggle Menu</title>
        <path class="open-btn" stroke-linecap="round" stroke-linejoin="round"
          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
        d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"></path>

        <path class="close-btn" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
        stroke-linejoin="round" class="close-btn hidden text-primary-600"></path>
      </svg>
    </nav>
  </header>

  <!-- Main Content -->
  <main>
    <!-- Gallery Section -->
    
    <section class="gallery">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
    
            <ul class="gallery-menu">
              <li class="filter" data-filter="all" data-role="button">All</li>
              <?php
              $statement = $pdo->prepare("SELECT * FROM tbl_category_photo WHERE status=?");
              $statement->execute(array('Active'));
              $result = $statement->fetchAll(PDO::FETCH_ASSOC);							
              foreach ($result as $row) {
                $temp_string = strtolower($row['p_category_name']);
                  $temp_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
                  ?>
                  <li class="filter" data-filter=".<?php echo $temp_slug; ?>" data-role="button"><?php echo $row['p_category_name']; ?></li>
                <?php
              }
              ?>
            </ul>
    
            <div id="mix-container">
              <?php
              $i=0;
              $statement = $pdo->prepare("SELECT
                                           t1.photo_id,
                            t1.photo_caption,
                            t1.photo_name,
                            t1.p_category_id,
                            t2.p_category_id,
                            t2.p_category_name,
                            t2.status
                                          FROM tbl_photo t1
                                          JOIN tbl_category_photo t2
                                          ON t1.p_category_id = t2.p_category_id 
                                          ");
              $statement->execute();
              $result = $statement->fetchAll(PDO::FETCH_ASSOC);							
              foreach ($result as $row) {
                $i++;
                $temp_string = strtolower($row['p_category_name']);
                  $temp_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $temp_string);
                ?>
                <div class="col-md-4 mix <?php echo $temp_slug; ?> all" data-my-order="<?php echo $i; ?>">
                  <div class="inner">
                    <div class="photo" style="background-image:url(./assets/uploads/<?php echo $row['photo_name']; ?>);"></div>
                    <div class="overlay"></div>
                    <div class="icons">
                      <div class="icons-inner">
                        <a class="gallery-photo" href="./assets/uploads/<?php echo $row['photo_name']; ?>"><i class="fa fa-search-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
              ?>
    
            </div>
    
          </div>
        </div>
      </div>
    </section>
    

    <!-- Footer Section -->
    <footer>
      <div class="footer-content">
        <div class="content-section">
          <h4>JM Street-Life Studio</h4>
          <p>Creating unforgettable experiences that celebrate African culture and bring people together.</p>
          <p>+2338096542356</p>
          <a id="mailto" href="mailto:hello@jmstreetlifestudios.com">hello@jmstreetlifestudios.com</a>
          <div class="social-icons">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-linkedin-in"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
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
        &copy; JM Street-Life Studio
        <span id="current-year"></span>
      </div>
    </footer>    
  </main>

  <script src="./assets/js/main.js"></script>

  <script src="./assets/js/jquery-2.2.4.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/jquery.slicknav.min.js"></script>	
	<script src="./assets/js/hoverIntent.js"></script>
	<script src="./assets/js/superfish.js"></script>
	<script src="./assets/js/owl.carousel.min.js"></script>
	<script src="./assets/js/owl.animate.js"></script>
	<script src="./assets/js/wow.min.js"></script>
	<script src="./assets/js/jquery.bxslider.min.js"></script>
	<script src="./assets/js/jquery.mixitup.min.js"></script>
	<script src="./assets/js/jquery.magnific-popup.min.js"></script>
	<script src="./assets/js/waypoints.min.js"></script>
	<script src="./assets/js/jquery.counterup.min.js"></script>
	<script src="./assets/js/custom.js"></script>

</body>

</html>