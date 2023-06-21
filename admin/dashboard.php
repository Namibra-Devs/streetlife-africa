<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Blog Posts</title>

    <!-- CSS links -->
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
    <!-- include header -->
    <?php
        include('./include/header.php')
    ?>
<section>
      <h4 class="section-title text-3xl blog-section__title">Blogs</h4>
      <div class="blog-section">
        <div class="blog-post">
          <img src="../images/blog-img1.png" alt="Blog Image" class="blog-post__image">
          <div class="blog-post__content">
            <p class="blog-post__meta">June 15, 2023</p>
            <div class="blog-post__edit">
              <h4 class="blog-post__title">Talk it out with radio</h4>
              <a href="#"><i class="bi bi-three-dots-vertical"></i></a>
            </div>
            <p>
              Use audio to have live conversations with other collaborators directly in your
              Figma
              and FigJam files.
            </p>
            <!-- <a href="#" class="blog-post__read-more">Read More</a> -->
          </div>
        </div>

        <!-- Blog 2 -->
        <div class="blog-post">
          <img src="../images/blog-img2.png" alt="Blog Image" class="blog-post__image">
          <div class="blog-post__content">
            <p class="blog-post__meta">June 15, 2023</p>
            <div class="blog-post__edit">
              <h4 class="blog-post__title">Talk it out with radio</h4>
              <a href="#"><i class="bi bi-three-dots-vertical"></i></a>
            </div>
            <p>
              Use audio to have live conversations with other collaborators directly in your
              Figma
              and FigJam files.
            </p>
            <!-- <a href="#" class="blog-post__read-more">Read More</a> -->
          </div>
        </div>

        <!-- Blog 3 -->
        <div class="blog-post">
          <img src="../images/blog-img3.png" alt="Blog Image" class="blog-post__image">
          <div class="blog-post__content">
            <p class="blog-post__meta">June 15, 2023</p>
            <div class="blog-post__edit">
              <h4 class="blog-post__title">Talk it out with radio</h4>
              <a href="#"><i class="bi bi-three-dots-vertical"></i></a>
            </div>
            <p>
              Use audio to have live conversations with other collaborators directly in your
              Figma
              and FigJam files.
            </p>
            <!-- <a href="#" class="blog-post__read-more">Read More</a> -->
          </div>
        </div>
      </div>
    </section>

</body>
</html>