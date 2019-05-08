<?php session_start();
	if (!isset($_SESSION['name'])){
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
			<img src="img/text.png"  alt="">
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
						$db = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");
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
												<a href="page1.php?account=<?=$r['f']?>">
													<img src="img/c1.png" alt="" class="be-ava-comment">
												</a>
											</div>
											<div class="noto-text">
												<div class="noto-text-top">
													<?php
														$fr = $db->quote($r['f']);
														$u = $db->query("SELECT FirstName,LastName FROM `user` WHERE (Email=$fr)");
														$n="";
														foreach($u as $name){
															$n=$name[0]." ".$name[1];
														}
													?>
													<span class="noto-name"><a href="page1.php?account=<?=$r['f']?>"><?=$n?></a></span>
													<span class="noto-date"><i class="fa fa-clock-o"></i> <?=$r['time']?></span>
												</div>
												<a  class="noto-message">
												<?php
													if($r['type']=='sent'){
														echo("Sent you a friend request");
													}
													if($r['type']=='accepted'){
														echo("Accepted your friend request");
													}
													if($r['type']=='Liked'){
														echo("Liked a post of yours");
													}
													if($r['type']=='commented'){
														echo("Commented on your post");
													}
													if($r['type']=='shared'){
														echo("Shared your post");
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
							<span class="noto-count">4</span>
						</a>
						<div class="noto-popup messages-block">
							<div class="m-close"><i class="fa fa-times"></i></div>
							<div class="noto-label">Your Messages <span class="noto-label-links"><a href="messages-2.html">compose</a><a href="messages.html">View all messages</a></span></div>
							<div class="noto-body">
								<div class="noto-entry style-2">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="blog-detail-2.html">
												<img src="img/c1.png" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Ravi Sah</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">Sed velit mauris, pulvinar sit amet accumsan vitae, egestas, pulvinar sit amet accumsan vitae, egestas</div>
										</div>
									</div>
								</div>
								<div class="noto-entry style-2">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="blog-detail-2.html">
												<img src="img/c6.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Louis Paquet</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												Pellentesque habitant morbi tristique senectus et netus tristique senectus
											</div>
										</div>
									</div>
								</div>
								<div class="noto-entry style-2">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="blog-detail-2.html">
												<img src="img/c9.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Cüneyt ŞEN</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												Sed id erat vitae libero malesuada dictum vel sit amet eros
											</div>
										</div>
									</div>
								</div>
								<div class="noto-entry style-2">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="blog-detail-2.html">
												<img src="img/c10.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Tomasz Mazurczak</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												In molestie libero quis cursus ullamcorper eu rhoncus magna
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="be-drop-down login-user-down" style="padding-top: 10px;">
							<img class="login-user" src="img/login.jpg" alt="">
							<span class="be-dropdown-content">Hi, <span><?php echo ($_SESSION['name']) ?></span></span>
							<div class="drop-down-list a-list">
								<a href="activity.php">My Portfolio</a>
								<a href="statictics.php">Statistics </a>
								<a href="about-us.php">Work Experience</a>
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
						<li><a href="author-login.html">My Portfolio</a></li>
						<li><a href="site-map.html">Site Map</a></li>
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
	<!-- THE FOOTER -->
	<footer>
		<div class="footer_slider">
			<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="4" data-sm-slides="8" data-md-slides="14" data-lg-slides="19" data-add-slides="19">
	            <div class="swiper-wrapper">
	            	<div class="swiper-slide active" data-val="0">

						<a href="gallery.html">				<img class="img-responsive img-full" src="img/f1.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="1">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f2.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="2">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f3.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="3">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f4.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="4">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f5.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="5">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f6.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="6">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f7.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="7">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f8.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="8">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f9.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="9">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f10.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="10">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f11.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="11">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f12.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="12">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f13.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="13">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f14.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="14">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f15.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="15">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f16.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="16">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f17.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="17">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f18.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="18">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f19.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="19">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f1.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="20">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f2.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="21">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f3.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="22">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f4.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="23">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f5.jpg" alt="">
	            	 </a></div>
	            </div>
	            <div class="pagination hidden"></div>
	        </div>
        </div>
		<div class="footer-main">
			<div class="container-fluid custom-container">
				<div class="row">
					<div class="col-md-3 col-xl-4">
						<div class="footer-block">
							<h1 class="footer-title">About Us</h1>
							<p>Vestibulum tincidunt, augue fermentum accumsan viverra, eros dui rutrum libero, nec imperdiet felis sem in augue luctus <a href="blog-detail-2.html">diam a porta</a> iaculis. Vivamus sit amet fermentum nisl. Duis id <a href="blog-detail-2.html">massa id purus</a> tristique varius a sit amet est. Fusce dolor libero, efficitur et lobortis at, faucibus nec nunc.</p>
							<ul class="soc_buttons">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
								<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
								<li><a href=""><i class="fa fa-instagram"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-xl-2">
						<div class="footer-block">
							<h1 class="footer-title">Some Links</h1>
							<div class="row footer-list-footer">
						<div class="col-md-6">
						<ul class="link-list">
							<li><a href="about-us.html">About Us</a></li>
							<li><a href="contact-us.html">Help</a></li>
							<li><a href="contact-us.html">Contacts</a></li>
							<li><a href="activity.html">Job</a></li>
							<li><a href="activity.html">Projets</a></li>
						</ul></div>
						<div class="col-md-6">
						<ul class="link-list">
							<li><a href="activity.html">New Works</a></li>
							<li><a href="author.html">Popular Authors</a></li>
							<li><a href="author.html">New Authors</a></li>
							<li><a href="people.html">Career</a></li>
							<li><a href="faq">FAQ</a></li>
						</ul>
						</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 galerry">
						<div class="footer-block">
							<h1 class="footer-title">Recent Works</h1>
							<a href="page2.html"><img src="img/g1.jpg" alt=""></a>
							<a href="page2.html"><img src="img/g2.jpg" alt=""></a>
							<a href="page2.html"><img src="img/g3.jpg" alt=""></a>
							<a href="page2.html"><img src="img/g4.jpg" alt=""></a>
							<a href="page2.html"><img src="img/g5.jpg" alt=""></a>
							<a href="page2.html"><img src="img/g6.jpg" alt=""></a>
							<a href="page2.html"><img src="img/g7.jpg" alt=""></a>
							<a href="page2.html"><img src="img/g8.jpg" alt=""></a>
							<a href="page2.html"><img src="img/g9.jpg" alt=""></a>
							<a href="page2.html"><img src="img/g10.jpg" alt=""></a>
							<a href="page2.html"><img src="img/g11.jpg" alt=""></a>
							<a href="page2.html"><img src="img/g12.jpg" alt=""></a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-block">
							<h1 class="footer-title">Subscribe On Our News</h1>
							<form action="./" class="subscribe-form">
								<input type="text" placeholder="Yout Name" required>
								<div class="submit-block">
									<i class="fa fa-envelope-o"></i>
									<input type="submit" value="">
								</div>
							</form>
							<div class="soc-activity">
								<div class="soc_ico_triangle">
									<i class="fa fa-twitter"></i>
								</div>
								<div class="message-soc">
									<div class="date">16h ago</div>
									<a href="blog-detail-2.html" class="account">@faq</a> vestibulum accumsan est <a href="blog-detail-2.html" class="heshtag">blog-detail-2.htmlmalesuada</a> sem auctor, eu aliquet nisi ornare leo sit amet varius egestas.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container-fluid custom-container">
				<div class="col-md-12 footer-end clearfix">
					<div class="left">
						<span class="copy">© 2015. All rights reserved. <span class="white"><a href="blog-detail-2.html"> NRGNetwork</a></span></span>
						<span class="created">Created with LOVE by <span class="white"><a href="blog-detail-2.html"> NRGThemes</a></span></span>
					</div>
					<div class="right">
						<a class="btn color-7 size-2 hover-9">About Us</a>
						<a class="btn color-7 size-2 hover-9">Help</a>
						<a class="btn color-7 size-2 hover-9">Privacy Policy</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<div class="be-fixed-filter"></div>

	<div class="large-popup login">
		<div class="large-popup-fixed"></div>
		<div class="container large-popup-container">
			<div class="row">
				<div class="col-md-8 col-md-push-2 col-lg-6 col-lg-push-3  large-popup-content">
					<div class="row">
						<div class="col-md-12">
							<i class="fa fa-times close-button"></i>
							<h5 class="large-popup-title">Log in</h5>
						</div>
						<form action="./" class="popup-input-search">
						<div class="col-md-6">
							<input class="input-signtype" type="email" required="" placeholder="Your email">
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="password" required="" placeholder="Password">
						</div>
						<div class="col-xs-6">
							<div class="be-checkbox">
							<label class="check-box">
								    <input class="checkbox-input" type="checkbox" /> <span class="check-box-sign"></span>
								</label>
								<span class="large-popup-text">
									Stay signed in
								</span>
							</div>

							<a href="blog-detail-2.html" class="link-large-popup">Forgot password?</a>
						</div>
						<div class="col-xs-6 for-signin">
							<input type="submit" class="be-popup-sign-button" value="SIGN IN">
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="large-popup register">
		<div class="large-popup-fixed"></div>
		<div class="container large-popup-container">
			<div class="row">
				<div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 large-popup-content">
					<div class="row">
						<div class="col-md-12">
							<i class="fa fa-times close-button"></i>
							<h5 class="large-popup-title">Register</h5>
						</div>
						<form action="./" class="popup-input-search">
						<div class="col-md-6">
							<input class="input-signtype" type="text" required="" placeholder="First Name">
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="text" required="" placeholder="Last Name">
						</div>
						<div class="col-md-6">
							<div class="be-custom-select-block">
							<select class="be-custom-select">
								<option value="" disabled selected>
									Country
								</option>
								<option value="">USA</option>
								<option value="">Canada</option>
								<option value="">England</option>
							</select>
							</div>
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="text" required="" placeholder="Email">
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="text" required="" placeholder="Password">
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="text" required="" placeholder="Repeat Password">
						</div>
						<div class="col-md-12 be-date-block">
							<span class="large-popup-text">
								Date of birth
							</span>
							<div class="be-custom-select-block mounth">
								<select class="be-custom-select">
									<option value="" disabled selected>
										Mounth
									</option>
									<option value="">January</option>
									<option value="">February</option>
									<option value="">March</option>
									<option value="">April</option>
									<option value="">May</option>
									<option value="">June</option>
									<option value="">July</option>
									<option value="">August</option>
									<option value="">September</option>
									<option value="">October</option>
									<option value="">November</option>
									<option value="">December</option>
								</select>
							</div>
							<div class="be-custom-select-block">
								<select class="be-custom-select">
									<option value="" disabled selected>
										Day
									</option>
									<option value="">1</option>
									<option value="">2</option>
									<option value="">3</option>
									<option value="">4</option>
									<option value="">5</option>
									<option value="">6</option>
									<option value="">7</option>
									<option value="">8</option>
									<option value="">9</option>
									<option value="">10</option>
									<option value="">11</option>
									<option value="">12</option>
									<option value="">13</option>
									<option value="">14</option>
									<option value="">15</option>
									<option value="">16</option>
									<option value="">17</option>
									<option value="">18</option>
									<option value="">19</option>
									<option value="">20</option>
									<option value="">21</option>
									<option value="">22</option>
									<option value="">23</option>
									<option value="">24</option>
									<option value="">25</option>
									<option value="">26</option>
									<option value="">27</option>
									<option value="">28</option>
									<option value="">29</option>
									<option value="">30</option>
								</select>
							</div>
							<div class="be-custom-select-block">
								<select class="be-custom-select">
									<option value="" disabled selected>
										Year
									</option>
									<option value="">1996</option>
									<option value="">1997</option>
									<option value="">1998</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="be-checkbox">
								<label class="check-box">
								    <input class="checkbox-input" type="checkbox" required/> <span class="check-box-sign"></span>
								</label>
								<span class="large-popup-text">
									I have read and agree to the <a class="be-popup-terms" href="blog-detail-2.html">Terms of Use</a> and <a class="be-popup-terms" href="blog-detail-2.html">Privacy Policy</a>.
								</span>
							</div>
							<div class="be-checkbox">
								<label class="check-box">
								    <input class="checkbox-input" type="checkbox"/> <span class="check-box-sign"></span>
								</label>
								<span class="large-popup-text">
									Send me notifications
								</span>
							</div>
						</div>
						<div class="col-md-6 for-signin">
							<input type="submit" class="be-popup-sign-button" value="SIGN IN">
						</div>
						</form>
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
	            <div class="entry color3 m-color"  data-colour="style/style-green.css"></div>
	            <div class="entry color6 m-color"  data-colour="style/style-orange.css"></div>
	            <div class="entry color8 m-color"  data-colour="style/style-red.css"></div>
	            <div class="title">Second Color:</div>
	            <div class="entry s-color  active color10"  data-colour="style/stylesheet.css"></div>
	            <div class="entry s-color color11"  data-colour="style/style-oranges.css"></div>
	            <div class="entry s-color color12"  data-colour="style/style-greens.css"></div>
	            <div class="entry s-color color13"  data-colour="style/style-reds.css"></div>

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
