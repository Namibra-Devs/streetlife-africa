<?php
ob_start();
session_start();
include('./database/config.php');
$error_message = '';
$success_message = '';
$error_message1 = '';
$success_message1 = '';


// Check if the user is logged in or not
if(!isset($_SESSION['user'])) {
	header('location: login.php');
	exit;
}

$q = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=?");
$q->execute([1]);
$res = $q->fetchAll();
foreach ($res as $row) {
	$active_editor = $row['active_editor'];
	$website_name = $row['website_name'];
}

// Current Page Access Level check for all pages
$cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>JM Street-Life Studios - Admin Panel</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/datepicker3.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/AdminLTE.min.css">
	<link rel="stylesheet" href="css/_all-skins.min.css">
	<link rel="stylesheet" href="css/on-off-switch.css">
	<link rel="stylesheet" href="css/sb-admin.css">

	<?php if($active_editor == 'Summernote'): ?>
	<link rel="stylesheet" href="css/summernote.css">
	<?php endif; ?>

	<link rel="stylesheet" href="css/style.css">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


</head>

<body class="hold-transition fixed skin-blue sidebar-mini">

	<div class="wrapper">

		<header class="main-header">

			<a href="index.php" class="logo">
				<span class="logo-lg"><?php echo $website_name; ?></span>
			</a>

			<nav class="navbar navbar-static-top">
				
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Admin Panel</span>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="../assets/uploads/<?php echo $_SESSION['user']['photo']; ?>" class="user-image" alt="User Image">
								<span class="hidden-xs"><?php echo 'Admin'; ?></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-footer">
									<div>
										<a href="profile-edit.php" class="btn btn-default btn-flat">Edit Profile</a>
									</div>
									<div>
										<a href="logout.php" class="btn btn-default btn-flat">Log out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>

			</nav>
		</header>

  		<?php $cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>

  		<aside class="main-sidebar">
    		<section class="sidebar">
      
      			<ul class="sidebar-menu">

			        <li class="treeview <?php if($cur_page == 'index.php') {echo 'active';} ?>">
			          <a href="index.php">
			            <i class="fa fa-hand-o-right"></i> <span>Dashboard</span>
			          </a>
			        </li>

					

			        <li class="treeview <?php if( ($cur_page == 'settings.php') ) {echo 'active';} ?>">
			          <a href="settings.php">
			            <i class="fa fa-hand-o-right"></i> <span>Settings</span>
			          </a>
			        </li>




			        <li class="treeview <?php if( ($cur_page == 'language.php') ) {echo 'active';} ?>">
			          <a href="language.php">
			            <i class="fa fa-hand-o-right"></i> <span>Language</span>
			          </a>
			        </li>
			        

					<li class="treeview <?php if( ($cur_page == 'category-add.php')||($cur_page == 'category.php')||($cur_page == 'category-edit.php') || ($cur_page == 'blog-add.php')||($cur_page == 'blog.php')||($cur_page == 'blog-edit.php') || ($cur_page == 'comment.php') ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Blog</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="category.php"><i class="fa fa-circle-o"></i> Category</a></li>
							<li><a href="blogs.php"><i class="fa fa-circle-o"></i> Blog</a></li>
							<li><a href="comment.php"><i class="fa fa-circle-o"></i> Comment</a></li>
						</ul>
					</li>

					<!-- Performers -->
					<li class="treeview <?php if( ($cur_page == 'performer-category-add.php')||($cur_page == 'performer-category.php')||($cur_page == 'performer-category-edit.php') || ($cur_page == 'performer-add.php')||($cur_page == 'performer.php')||($cur_page == 'performer-edit.php') ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Perfomers</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="performer-category.php"><i class="fa fa-circle-o"></i>Category</a></li>
							<li><a href="performer.php"><i class="fa fa-circle-o"></i>Performer</a></li>
						</ul>
					</li>

										

					<li class="treeview <?php if( ($cur_page == 'designation-add.php')||($cur_page == 'designation.php')||($cur_page == 'designation-edit.php') || ($cur_page == 'team-member-add.php')||($cur_page == 'team-member.php')||($cur_page == 'team-member-edit.php') ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Team Member</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="designation.php"><i class="fa fa-circle-o"></i> Designation</a></li>
							<li><a href="team-member.php"><i class="fa fa-circle-o"></i> Team Member</a></li>
						</ul>
					</li>


					

			        <li class="treeview <?php if( ($cur_page == 'photo-category-add.php')||($cur_page == 'photo-category.php')||($cur_page == 'photo-category-edit.php') || ($cur_page == 'photo-add.php')||($cur_page == 'photo.php')||($cur_page == 'photo-edit.php') || ($cur_page == 'video-category-add.php')||($cur_page == 'video-category.php')||($cur_page == 'video-category-edit.php') || ($cur_page == 'video-add.php')||($cur_page == 'video.php')||($cur_page == 'video-edit.php') ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Photos</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="photo-category.php"><i class="fa fa-circle-o"></i> Photo Category</a></li>
							<li><a href="photo.php"><i class="fa fa-circle-o"></i> Photo Gallery</a></li>
						</ul>
					</li>

					
					


					<li class="treeview <?php if( ($cur_page == 'file-add.php')||($cur_page == 'file.php')||($cur_page == 'file-edit.php') ) {echo 'active';} ?>">
			          <a href="file.php">
			            <i class="fa fa-hand-o-right"></i> <span>File Upload (Media)</span>
			          </a>
			        </li>


					
			        <li class="treeview <?php if( ($cur_page == 'social-media.php') ) {echo 'active';} ?>">
			          <a href="social-media.php">
			            <i class="fa fa-hand-o-right"></i> <span>Social Media</span>
			          </a>
			        </li>



			        <li class="treeview <?php if( ($cur_page == 'subscriber.php')||($cur_page == 'subscriber-email.php') ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Subscriber</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="subscriber.php"><i class="fa fa-circle-o"></i> All Subscribers</a></li>
							<li><a href="subscriber-email.php"><i class="fa fa-circle-o"></i> Email to Subscribers</a></li>
						</ul>
					</li>

        
      			</ul>
    		</section>
  		</aside>

  		<div class="content-wrapper">