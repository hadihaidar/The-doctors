<?php
session_start();
if (!isset($_SESSION['name'])) {
	header("location:index.php");
}
?>
<html>

<head>
	<title>TheDoctors</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="img/fav.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style/icon.css">
	<link rel="stylesheet" href="style/loader.css">
	<link rel="stylesheet" href="style/idangerous.swiper.css">
	<link rel="stylesheet" href="style/stylesheet.css">
	<!--[if lt IE 10]>
			<link rel="stylesheet" type="text/css" href="style/ie-9.css" />
		<![endif]-->
	<!--[if lt IE 9]>
		    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

</head>

<body class="page-login">

	<!-- THE LOADER -->

	<div class="be-loader">
		<div class="spinner">
			<img src="img/text.png" alt="">
			<p class="circle">
				<span class="ouro">
					<span class="left"><span class="anim"></span></span>
					<span class="right"><span class="anim"></span></span>
				</span>
			</p>
		</div>
	</div>
	<!-- THE HEADER -->
	<header>
		<div class="container-fluid custom-container">
			<div class="row no_row row-header">
				<div class="brand-be">
					<a href="index.php">
						<img class="logo-c active be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt=" logo">
						<img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo2">
						<img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo3">
						<img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo4">
					</a>
				</div>
				<div class="login-header-block">
					<div class="login_block">
						<?php
						$db = new PDO("mysql:dbname=thedoctors", "root", "");
						$user = $db->quote($_SESSION['user']);
						$not = $db->query("SELECT * FROM `notifications` WHERE (t=$user)");
						$c = 0;
						foreach ($not as $r) {
							$c = $c + 1;
						}
						?>
						<a class="notofications-popup" href="">
							<i class="fa fa-bell-o"></i>
							<span class="noto-count"><?= $c ?></span>
						</a>
						<div class="noto-popup notofications-block">
							<div class="m-close"><i class="fa fa-times"></i></div>
							<div class="noto-label">Your Notification</div>
							<?php
							$not = $db->query("SELECT * FROM `notifications` WHERE (t=$user) ORDER BY time DESC;");
							foreach ($not as $r) {
								?>
								<div class="noto-body">
									<div class="noto-entry">
										<div class="noto-content clearfix">
											<div class="noto-img">
												<?php
												$fr = $db->quote($r['f']);
												$u = $db->query("SELECT FirstName,LastName,image FROM `user` WHERE (Email=$fr)");
												$n = "";
												$image = "media/";
												foreach ($u as $name) {
													$n = $name[0] . " " . $name[1];
													if ($name[2] == 'default.png') {
														$image = $image . $name[2];
													} else {
														$image = $image .$r['f'].'/ProfilePictures/'. $name[2];
													}
												}
												?>
												<a href="page1.php?account=<?= $r['f'] ?>">
													<img class="be-ava-comment" height="20" width="24" src="<?= $image ?>" alt="">
												</a>
											</div>
											<div class="noto-text">
												<div class="noto-text-top">
													<span class="noto-name"><a href="page1.php?account=<?= $r['f'] ?>"><?= $n ?></a></span>
													<span class="noto-date"><i class="fa fa-clock-o"></i> <?= $r['time'] ?></span>
												</div>
												<a class="noto-message">
													<?php
													if ($r['type'] == 'sent') {
														echo ("Sent you a friend request");
													}
													if ($r['type'] == 'accepted') {
														echo ("Accepted your friend request");
													}
													if ($r['type'] == 'Liked') {
														echo ("Liked a post of yours");
													}
													if ($r['type'] == 'commented') {
														echo ("Commented on your post");
													}
													if ($r['type'] == 'shared') {
														echo ("Shared your post");
													}
													?>
												</a>
											</div>
										</div>
									</div>
								</div>
							<?php
						}
						?>
						</div>


						<a class="messages-popup" href="blog-detail-2.html">
							<i class="fa fa-envelope-o"></i>
							<!-- Go to the db get the number of unread messages-->
							<?php
							$db = new PDO("mysql:dbname=thedoctors", "root", "");
							$user = $db->quote($_SESSION['user']);
							$not = $db->query("SELECT * FROM `messages` WHERE (t=$user AND r='unread')");
							$c = 0;
							foreach ($not as $r) {
								$c = $c + 1;
							}
							?>
							<span class="noto-count"><?= $c ?></span>
						</a>
						<div class="noto-popup messages-block">
							<div class="m-close"><i class="fa fa-times"></i></div>
							<div class="noto-label">Your Messages <span class="noto-label-links"><a href="messages.php">View all messages</a></span></div>
							<div class="noto-body">
								<!-- on click take him to the messages page and change it to read-->
								<?php
								$not = $db->query("SELECT * FROM `messages` WHERE (t=$user AND r='unread')");
								foreach ($not as $r) {
									?>
									<div class="noto-entry style-2">
										<div class="noto-content clearfix">
											<div class="noto-img">
												<a href="blog-detail-2.html">
													<?php
													$u = $db->quote($r['f']);
													$u = $db->query("SELECT FirstName,LastName,image FROM `user` WHERE (Email=$u)");
													$n = "";
													$image = "media/";
													foreach ($u as $name) {
														$n = $name[0] . " " . $name[1];
														if ($name[2] == 'default.png') {
															$image = $image . $name[2];
														} else {
															$image = $image .$r['f'].'/ProfilePictures/'. $name[2];
														}
													}
													?>
													<img class="be-ava-comment" height="20" width="24" src="<?= $image ?>" alt="">

												</a>
											</div>
											<div class="noto-text">
												<div class="noto-text-top">
													<span class="noto-name"><a href="page1.php?account=<?= $r['f'] ?>"><?= $n ?></a></span>
													<span class="noto-date"><i class="fa fa-clock-o"></i> <?= $r['time'] ?></span>
												</div>
												<div class="noto-message">
													<a href="message.php?from=<?= $r['f'] ?>">
														<?= $r['body'] ?>
														<a>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
						<div class="be-drop-down login-user-down" style="padding-top: 10px;">
							<img class="login-user" height="20" width="24" src="<?= $_SESSION['img'] ?>" alt="">
							<span class="be-dropdown-content">Hi, <?php echo ($_SESSION['name']) ?></span>
							<div class="drop-down-list a-list">
								<a href="author.php">My Profile</a>
								<a href="author-edit.php">Account Settings</a>
								<a href="login.php?logout">Logout</a>
							</div>
						</div>
					</div>
				</div>
				<div class="header-menu-block">
					<button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
					<ul class="header-menu" id="one">
						<li><a href="activity.php">Activity</a></li>
						<li><a href="search.php">Search</a></li>
						<li><a href="author.php">My Profile</a></li>

						<li id="ad-work-li"><a id="add-work-btn" class="btn color-1" href="work.php">Add Posts </a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>



	<!-- MAIN CONTENT -->
	<div id="content-block">
		<div class="container-fluid custom-container be-detail-container">
			<div class="isotope-grid row">
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p16.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/line_2.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/line_3.jpg" alt="">
							<div class="rowline-text">Phoenix, the Creative Studio <span class="rowline-icon"><i class="fa fa-pencil"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a10.jpg" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p17.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava.png" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/line_3.jpg" alt="">
							<div class="rowline-text">Phoenix, the Creative Studio <span class="rowline-icon"><i class="fa fa-pencil"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a6.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p18.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_6.jpg" alt="">
							<div class="rowline-text">Louis Paquet <span class="rowline-icon"><i class="fa fa-thumbs-o-up"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_5.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a8.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p15.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_5.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_7.jpg" alt="">
							<div class="rowline-text">Louis Paquet <span class="rowline-icon"><i class="fa fa-thumbs-o-up"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a1.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p14.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_11.jpg" alt="">
							<div class="rowline-text">Louis Paquet <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_5.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a5.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p12.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_8.jpg" alt="">
							<div class="rowline-text">Phoenix, the Creative Studio <span class="rowline-icon"><i class="fa fa-pencil"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_5.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a4.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">

					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p8.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/line_2.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/line_3.jpg" alt="">
							<div class="rowline-text">Phoenix, the Creative Studio <span class="rowline-icon"><i class="fa fa-pencil"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a10.jpg" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">

					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p7.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava.png" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_4.jpg" alt="">
							<div class="rowline-text">Phoenix, the Creative Studio <span class="rowline-icon"><i class="fa fa-pencil"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a6.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Watson</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">

					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p2.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/line_1.jpg" alt="">
							<div class="rowline-text">Louis Paquet <span class="rowline-icon"><i class="fa fa-thumbs-o-up"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/line_3.jpg" alt="">
							<div class="rowline-text">Phoenix, the Creative Studio <span class="rowline-icon"><i class="fa fa-pencil"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a10.jpg" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p10.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_5.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_7.jpg" alt="">
							<div class="rowline-text">Louis Paquet <span class="rowline-icon"><i class="fa fa-thumbs-o-up"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a1.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p9.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_5.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_11.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a5.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p11.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_5.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_8.jpg" alt="">
							<div class="rowline-text">Phoenix, the Creative Studio <span class="rowline-icon"><i class="fa fa-pencil"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a4.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p19.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_5.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_8.jpg" alt="">
							<div class="rowline-text">Phoenix, the Creative Studio <span class="rowline-icon"><i class="fa fa-pencil"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a4.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p4.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_5.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_11.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a5.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p2.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_6.jpg" alt="">
							<div class="rowline-text">Louis Paquet <span class="rowline-icon"><i class="fa fa-thumbs-o-up"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_5.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a8.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p5.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_5.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_7.jpg" alt="">
							<div class="rowline-text">Louis Paquet <span class="rowline-icon"><i class="fa fa-thumbs-o-up"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a1.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p3.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_5.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_7.jpg" alt="">
							<div class="rowline-text">Louis Paquet <span class="rowline-icon"><i class="fa fa-thumbs-o-up"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a1.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
				<div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
					<div class="be-post style-5">
						<a href="page1.html" class="be-img-block">
							<img src="img/p1.jpg" alt="omg">
						</a>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_5.jpg" alt="">
							<div class="rowline-text">Leigh Taylor <span class="rowline-icon"><i class="fa fa-comment-o"></i></span></div>
						</div>
						<div class="be-rowline">
							<img class="rowline-img" src="img/ava_8.jpg" alt="">
							<div class="rowline-text">Phoenix, the Creative Studio <span class="rowline-icon"><i class="fa fa-pencil"></i></span></div>
						</div>
						<div class="author-post">
							<img src="img/a4.png" alt="" class="ava-author">
							<span>by <a href="page1.html">Paweł Skupień</a></span>
							<span class="pull-right"><i class="fa fa-thumbs-o-up"></i> 225</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="theme-config">
		<div class="main-color">
			<div class="title">Main Color:</div>
			<div class="colours-wrapper">
				<div class="entry color1 m-color active" data-colour="style/stylesheet.css"></div>
				<div class="entry color3 m-color" data-colour="style/style-green.css"></div>
				<div class="entry color6 m-color" data-colour="style/style-orange.css"></div>
				<div class="entry color8 m-color" data-colour="style/style-red.css"></div>
				<div class="title">Second Color:</div>
				<div class="entry s-color  active color10" data-colour="style/stylesheet.css"></div>
				<div class="entry s-color color11" data-colour="style/style-oranges.css"></div>
				<div class="entry s-color color12" data-colour="style/style-greens.css"></div>
				<div class="entry s-color color13" data-colour="style/style-reds.css"></div>

			</div>
		</div>
		<div class="open"><img src="img/icon-134.png" alt=""></div>
	</div>
	<!-- SCRIPTS	 -->
	<script src="script/jquery-2.1.4.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/idangerous.swiper.min.js"></script>
	<script src="script/isotope.pkgd.min.js"></script>
	<script src="script/jquery.viewportchecker.min.js"></script>
	<script src="script/global.js"></script>
</body>

</html>
