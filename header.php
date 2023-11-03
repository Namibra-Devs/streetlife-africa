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
  
  <link rel="stylesheet" href="./css/responsive.css">

  <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Oswald:wght@300;600;700&family=Raleway:wght@300;700&family=Source+Sans+Pro:wght@300;400;600;700&family=Source+Serif+Pro:wght@300;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Vendor CSS Filess -->
  <link href="./assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="./assets/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Pages CSS Files -->
  <link rel="stylesheet" href="./css/about.css">
  <link rel="stylesheet" href="./css/events.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/responsive.css">

  <link rel="stylesheet" href="./assets/css/slicknav.css">
  <!-- <link rel="stylesheet" href="./assets/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="./assets/css/superfish.css">
  <link rel="stylesheet" href="./assets/css/animate.css">
  
  <link rel="stylesheet" href="./assets/css/jquery.bxslider.css">
  <link rel="stylesheet" href="./assets/css/hover.css">
  <link rel="stylesheet" href="./assets/css/magnific-popup.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/responsive.css">
 

  <title>JM Street-Life Africa</title>

	<script src="./assets/js/modernizr.min.js"></script>
</head>

<body>
  <header class="header">
    <nav id="navbar" class="header__navbar">
      <div class="header__navbar--logo"><a href="index.html"><img src="./assets/uploads/<?php $websiteName = getWebsiteDetails();
                                                              echo $websiteName['logo']; ?>" alt=""></a></div>
      <div>
        <ul class="header__nav-list">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="events.php">Events</a>
          <li><a href="gallery.php">Gallery</a>
          <li><a href="blog.php">Blog</a>
          </li>
          <div class="contact__button">
            <a href="contact.php" class="contact__button__link">Contact Us</a>
          </div>
        </ul>
      </div>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
  </header>