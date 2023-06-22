<?php

    // get company name function
    function getWebsiteDetails()
    {
        include('config.php');
        $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            return $row;
        }
    }

    // get blogs function 
    function getBlogs() {
        include('config.php');
        $statement = $pdo->prepare("SELECT blog_title, blog_content_short, blog_id, blog_date, photo FROM tbl_blogs");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $blog) {
            $blog_title = $blog['blog_title'];
        $blog_content_short = $blog['blog_content_short'];
        $blog_image = $blog['photo'];
        $blog_id = $blog['blog_id'];
        $blog_date = $blog['blog_date'];
           echo  '
            <div class="blog-post">
            <img src="./assets/uploads/'.$blog_image.'" alt="'.$blog_title.'" class="blog-post__image">
            <div class="blog-post__content">
              <p class="blog-post__meta">'.$blog_date.'</p>
              <h4 class="blog-post__title">'.$blog_title.'</h4>
              <p>'.$blog_content_short.'</p>
              <a href="single-blog.php?id='.$blog_id.'" class="blog-post__read-more">Read More</a>
            </div>
          </div>
            ';
        }
    }

    // Social icons function
    function getSocialIcons() {
        include('config.php');
        $statement = $pdo->prepare("SELECT * FROM tbl_social");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);							
        foreach ($result as $social) 
        {
            if($social['social_url']!='')
            {
                echo '<li><a href="'.$social['social_url'].'"><i class="'.$social['social_icon'].'"></i></a></li>';
            }
        }
    }


?>
