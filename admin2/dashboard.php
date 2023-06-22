<?php require_once('../admin/include/header.php'); ?>

<?php
$statement = $con->prepare("SELECT * FROM tbl_user");
$statement->execute();
$total_user = $statement->rowCount();

$statement = $con->prepare("SELECT * FROM tbl_category");
$statement->execute();
$total_category = $statement->rowCount();

$statement = $con->prepare("SELECT * FROM tbl_news");
$statement->execute();
$total_news = $statement->rowCount();

$statement = $con->prepare("SELECT * FROM tbl_photo");
$statement->execute();
$total_photo = $statement->rowCount();

$statement = $con->prepare("SELECT * FROM tbl_team_member");
$statement->execute();
$total_team_member = $statement->rowCount();

$statement = $con->prepare("SELECT * FROM tbl_partner");
$statement->execute();
$total_partner = $statement->rowCount();

$statement = $con->prepare("SELECT * FROM tbl_testimonial");
$statement->execute();
$total_testimonial = $statement->rowCount();
?>

<section class="content">
<div class="row">
  <div class="col-lg-3">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-6">
            <i class="fa fa-rss fa-5x"></i>
          </div>
          <div class="col-xs-6 text-right">
            <p class="announcement-heading"><?php echo $total_news; ?></p>
            <p class="announcement-text"><strong>Blogs</strong></p>
          </div>
        </div>
      </div>
      <a href="blogs_view.php">
        <div class="panel-footer announcement-bottom">
          <div class="row">
            <div class="col-xs-6">
              View
            </div>
            <div class="col-xs-6 text-right">
              <i class="fa fa-arrow-circle-right"></i>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-6">
            <i class="fa fa-tags fa-5x"></i>
          </div>
          <div class="col-xs-6 text-right">
            <p class="announcement-heading"><?php echo $total_category; ?></p>
            <p class="announcement-text"><strong>Categories</strong></p>
          </div>
        </div>
      </div>
      <a href="blog_categories_view.php">
        <div class="panel-footer announcement-bottom">
          <div class="row">
            <div class="col-xs-6">
              View
            </div>
            <div class="col-xs-6 text-right">
              <i class="fa fa-arrow-circle-right"></i>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-6">
            <i class="fa fa-tags fa-5x"></i>
          </div>
          <div class="col-xs-6 text-right">
            <p class="announcement-heading"><?php echo $total_team_member; ?></p>
            <p class="announcement-text"><strong>Team members</strong></p>
          </div>
        </div>
      </div>
      <a href="blog_categories_view.php">
        <div class="panel-footer announcement-bottom">
          <div class="row">
            <div class="col-xs-6">
              View
            </div>
            <div class="col-xs-6 text-right">
              <i class="fa fa-arrow-circle-right"></i>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div><!-- /.row -->
</section>
<?php require_once('../admin/include/footer.php'); ?>