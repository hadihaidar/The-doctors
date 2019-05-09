<?php
session_start();
if (!isset($_SESSION['name'])) {
	header("location:index.php");
}
 ?>
<!DOCTYPE html>
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
		<img class="logo-c active be_logo" src="img/Doctors.png" style="width:121px;height:37px"; alt=" logo">
		<img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo2">
		<img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo3">
		<img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo4">
	</a>
</div>
				<div class="login-header-block">
					<div class="login_block">
						<a class="notofications-popup" href="page1.html">
							<i class="fa fa-bell-o"></i>
							<span class="noto-count">23</span>
						</a>
						<div class="noto-popup notofications-block">
						<div class="m-close"><i class="fa fa-times"></i></div>
							<div class="noto-label">Your Notification</div>
							<div class="noto-body">
								<div class="noto-entry">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="page1.html">
												<img src="img/c1.png" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="page1.html">Ravi Sah</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<a href="page1.html" class="noto-message">Start following your work</a>
										</div>
									</div>
								</div>
								<div class="noto-entry">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="page1.html">
												<img src="img/c6.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="page1.html">Louis Paquet</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												Saved “<a href="page1.html">Omni-onepage app template</a>” to Inspiration
												<a class="portfolio-link type-2 clearfix" href="page1.html">
													<img src="img/p_link_23.jpg" alt="">
													<img src="img/p_link_31.jpg" alt="">
													<img src="img/p_link_32.jpg" alt="">
													<img src="img/p_link_33.jpg" alt="">
													<img src="img/p_link_34.jpg" alt="">
													<div class="color_bg">
														<span>view portfolio</span>
														<span class="child"></span>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="noto-entry">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="page1.html">
												<img src="img/c7.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="page1.html">v-a studio</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												<a class="noto-left" href="page1.html">
													<img src="img/n_pop_1.jpg" alt="">
												</a>
												Saved “<a href="page1.html">Omni-onepage app template</a>” to Inspiration
											</div>
										</div>
									</div>
								</div>
								<div class="noto-entry">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="page1.html">
												<img src="img/c8.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="page1.html">Hoang Nguyen</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												<a class="noto-left" href="page1.html">
													<img src="img/n_pop_2.jpg" alt="">
												</a>
												Awesome, love the big whitespace and also everything between :)
											</div>
										</div>
									</div>
								</div>
								<div class="noto-entry">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="page1.html">
												<img src="img/c9.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="page1.html">Cüneyt ŞEN</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<a href="page1.html" class="noto-message">
												Start following your work
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="messages-popup" href="page1.html">
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
											<a href="page1.html">
												<img src="img/c1.png" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="page1.html">Ravi Sah</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">Sed velit mauris, pulvinar sit amet accumsan vitae, egestas, pulvinar sit amet accumsan vitae, egestas</div>
										</div>
									</div>
								</div>
								<div class="noto-entry style-2">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="page1.html">
												<img src="img/c6.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="page1.html">Louis Paquet</a></span>
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
											<a href="page1.html">
												<img src="img/c9.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="page1.html">Cüneyt ŞEN</a></span>
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
											<a href="page1.html">
												<img src="img/c10.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="page1.html">Tomasz Mazurczak</a></span>
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
						<div class="be-drop-down login-user-down">
							<img class="login-user" src="img/login.jpg" alt="">
							<span class="be-dropdown-content">Hi, <span>Taylor</span></span>
							<div class="drop-down-list a-list">
								<a href="activity.html">My Portfolio</a>
								<a href="statictics.html">Statistics </a>
								<a href="about-us.html">Work Experience</a>
								<a href="author-edit.html">Account Settings</a>
								<a href="login.html">Logout</a>
							</div>
						</div>
					</div>
				</div>
				<div class="header-menu-block">
					<button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
					<ul class="header-menu" id="one">
						<li><a href="activity.html">Activity</a></li>
						<li><a href="search.html">Discover</a>
							<ul>
								<li><a href="search.html">Explore</a></li>
								<li><a href="people.html">People</a></li>
								<li><a href="gallery.html">Galleries</a></li>
							</ul>
						</li>
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
		<div class="container be-detail-container">
			<div class="row">
				<div class="col-xs-12 col-md-4 left-feild">
					<div class="be-user-block style-3">
						<div class="be-user-detail">
							<a class="be-ava-user style-2" href="page1.html">
								<img src="img/ava_10.jpg" alt="">
							</a>
							<a class="be-ava-left btn color-1 size-2 hover-1" href="author-edit.html"><i class="fa fa-pencil"></i>Edit</a>
							<div class="be-ava-right btn btn-share color-4 size-2 hover-7">
								<i class="fa fa-share-alt"></i>share
								<div class="share-buttons">
									<a class="color-1" href="page1.html"><i class="fa fa-facebook"></i> 278</a>
									<a class="color-2" href="page1.html"><i class="fa fa-twitter"></i> 180</a>
									<a class="color-3" href="page1.html"><i class="fa fa-pinterest-p"></i> 78</a>
									<a class="color-4" href="page1.html"><i class="fa fa-linkedin"></i> 53</a>
								</div>
							</div>
							<p class="be-use-name">Leigh Taylor</p>
							<div class="be-user-info">
								Barnsley, United Kingdom
							</div>
							<div class="be-text-tags style-2">
								<a href="page1.html">UI/UX</a>,
								<a href="page1.html">Web Design</a>,
								<a href="page1.html">Art Direction</a>
							</div>
							<div class="be-user-social">
								<a class="social-btn color-1" href="page1.html"><i class="fa fa-facebook"></i></a>
								<a class="social-btn color-2" href="page1.html"><i class="fa fa-twitter"></i></a>
								<a class="social-btn color-3" href="page1.html"><i class="fa fa-google-plus"></i></a>
								<a class="social-btn color-4" href="page1.html"><i class="fa fa-pinterest-p"></i></a>
								<a class="social-btn color-5" href="page1.html"><i class="fa fa-instagram"></i></a>
								<a class="social-btn color-6" href="page1.html"><i class="fa fa-linkedin"></i></a>
							</div>
							<a class="be-user-site" href="http://www.phoenix.cool"><i class="fa fa-link"></i> www.phoenix.cool</a>
						</div>
						<div class="be-user-statistic">
							<div class="stat-row clearfix"><i class="stat-icon icon-views-b"></i> Projects views<span class="stat-counter">218098</span></div>
							<div class="stat-row clearfix"><i class="stat-icon icon-like-b"></i>Appreciations<span class="stat-counter">14335</span></div>
							<div class="stat-row clearfix"><i class="stat-icon icon-followers-b"></i>Followers<span class="stat-counter">2208</span></div>
							<div class="stat-row clearfix"><i class="stat-icon icon-following-b"></i>Following<span class="stat-counter">0</span></div>
						</div>
					</div>
					<div class="be-desc-block">
						<div class="be-desc-author">
							<div class="be-desc-label">About Me</div>
							<div class="clearfix"></div>
							<div class="be-desc-text">
								Nam sit amet massa commodo, tristique metus at, consequat turpis. In vulputate justo at auctor mollis. Aliquam non sagittis tortor. Duis tristique suscipit risus, quis facilisis nisl congue vitae. Nunc varius pellentesque scelerisque. Etiam quis massa vitae lectus placerat ullamcorper pellentesque vel nisl.
							</div>
						</div>
						<div class="be-desc-author">
							<div class="be-desc-label">My Values</div>
							<div class="clearfix"></div>
							<div class="be-desc-text">
								Sed dignissim scelerisque pretium. Vestibulum vel lacus laoreet nunc fermentum maximus. Proin id sodales sem, at consectetur urna. Proin vestibulum, erat a hendrerit sodales, nulla libero ornare dolor.
							</div>
						</div>
					</div>
					<a class="btn full color-1 size-1 hover-1"><i class="fa fa-plus"></i>add sections</a>
				</div>
				<div class="col-xs-12 col-md-8">
                    <div class="tab-wrapper style-1">
                        <div class="tab-nav-wrapper">
                            <div  class="nav-tab  clearfix">
                                <div class="nav-tab-item active">
                                    <span>Posts</span>
                                </div>

                            </div>
                        </div>
                        <div class="tabs-content clearfix">
                            <div class="tab-info active">
								<div class="row">
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p1.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">The kitsch destruction of our world</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p2.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Treebeard</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a2.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p3.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Colors of Ramadan</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a3.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p6.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Fran Ewald for The Diaries Project</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a6.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p7.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">raindrops monochrome</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a7.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p8.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Racing Queensland</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a7.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p13.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Stay Ahead Series</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a6.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p14.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a5.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p15.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Garry Simpson - Bridges - Intelligent Life Magazinen</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
								</div>
                            </div>
                            <div class="tab-info">
								<div class="row">
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p8.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Racing Queensland</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a7.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p12.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Face</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a6.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p2.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Treebeard</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p3.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Colors of Ramadan</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a2.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p4.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Leaving Home - L'Officiel Ukraine</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a3.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p7.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">raindrops monochrome</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a6.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p9.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">NAHA Finalist Hairstylist of the Year Allen Ruiz</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a7.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p13.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Stay Ahead Series</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a5.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p14.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>
									</div>
								</div>
                            </div>
                            <div class="tab-info">
								<div class="row">
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p16.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Wisdom For My Children, Life Lessons Through</a>

											<div class="author-post clearfix">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p17.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Créations Namale</a>
											<div class="author-post clearfix">
												<img src="img/a2.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p18.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Crossfit : 15.4 Open Workout</a>
											<div class="author-post clearfix">
												<img src="img/a3.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p15.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Garry Simpson - Bridges - Intelligent Life Magazine</a>
											<div class="author-post clearfix">
												<img src="img/a6.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p14.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
											<div class="author-post clearfix">
												<img src="img/a7.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p13.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Stay Ahead Series</a>
											<div class="author-post clearfix">
												<img src="img/a7.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p12.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Face</a>
											<div class="author-post clearfix">
												<img src="img/a6.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p19.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Promoção Facas Extra</a>
											<div class="author-post clearfix">
												<img src="img/a5.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p11.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Tropicalia</a>
											<div class="author-post clearfix">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p10.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">tomorrow</a>
											<div class="author-post clearfix">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p9.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">NAHA Finalist Hairstylist of the Year Allen Ruiz</a>
											<div class="author-post clearfix">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p8.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Racing Queensland</a>
											<div class="author-post clearfix">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
								</div>
                            </div>
                            <div class="tab-info">
                            	<div class="collection">
                            		<h3 class="menu-article">Creative Ideas</h3>
                            		<div class="collection-header">
                            			<span><i class="fa fa-user"></i>by <a href="page1.html">Leigh Taylor</a> </span>
                            			<span><i class="fa fa-thumbs-o-up"></i> 360</span>
                            			<span><i class="fa fa-eye"></i> 789</span>
                            			<div class="edit-collection">
                            				<i class="fa fa-pencil"></i>
                            				<div class="c_edit">
                            					<div class="btn-rename">
                            						rename
													<div class="message-popup">
														<div class="message-popup-inner container">
															<div class="row">
																<div class="col-xs-12 col-sm-8 col-sm-offset-2">
																	<i class="fa fa-times close-button"></i>
																	<h5 class="large-popup-title">Rename</h5>
																	<div class="form-group">
																		<input class="form-input" required="" placeholder="Your text">
																	</div>
																	<button class="btn btn-right color-1 size-1 hover-1">OK</button>
																</div>
															</div>
														</div>
													</div>
                            					</div>
                            					<a href="page1.html">delete</a>

                            				</div>
                            			</div>
                            		</div>
                            		<div class="collection-entry">
	                            		<a href="page1.html" class="portfolio-link type-2 clearfix">
	                            			<img src="img/collection_1.jpg" alt="">
	                            			<img src="img/collection_2.jpg" alt="">
	                            			<img src="img/collection_3.jpg" alt="">
	                            			<img src="img/collection_4.jpg" alt="">
	                            			<img src="img/collection_5.jpg" alt="">
	                            			<div class="color_bg">
												<span>view gallery</span>
												<span class="child"></span>
											</div>
	                            		</a>
                            		</div>
                            	</div>
                            	<div class="collection">
                            		<h3 class="menu-article">Creative Agency</h3>
                            		<div class="collection-header">
                            			<span><i class="fa fa-user"></i>by <a href="page1.html">Leigh Taylor</a> </span>
                            			<span><i class="fa fa-thumbs-o-up"></i> 360</span>
                            			<span><i class="fa fa-eye"></i> 789</span>
                            			<div class="edit-collection">
                            				<i class="fa fa-pencil"></i>
                            				<div class="c_edit">
                            					<div class="btn-rename">
                            						rename
													<div class="message-popup">
														<div class="message-popup-inner container">
															<div class="row">
																<div class="col-xs-12 col-sm-8 col-sm-offset-2">
																	<i class="fa fa-times close-button"></i>
																	<h5 class="large-popup-title">Rename</h5>
																	<div class="form-group">
																		<input class="form-input" required="" placeholder="Your text">
																	</div>
																	<button class="btn btn-right color-1 size-1 hover-1">OK</button>
																</div>
															</div>
														</div>
													</div>
                            					</div>
                            					<a href="page1.html">delete</a>

                            				</div>
                            			</div>
                            		</div>
                            		<div class="collection-entry">
	                            		<a href="page1.html" class="portfolio-link type-2 clearfix">
	                            			<img src="img/collection_6.jpg" alt="">
	                            			<img src="img/collection_7.jpg" alt="">
	                            			<img src="img/collection_8.jpg" alt="">
	                            			<img src="img/collection_9.jpg" alt="">
	                            			<img src="img/collection_10.jpg" alt="">
	                            			<div class="color_bg">
												<span>view gallery</span>
												<span class="child"></span>
											</div>
	                            		</a>
                            		</div>
                            	</div>
                            	<div class="collection">
                            		<h3 class="menu-article">Creative Agency</h3>
                            		<div class="collection-header">
                            			<span><i class="fa fa-user"></i>by <a href="page1.html">Inspiration Art</a> </span>
                            			<span><i class="fa fa-thumbs-o-up"></i> 360</span>
                            			<span><i class="fa fa-eye"></i> 789</span>
                            			<div class="edit-collection">
                            				<i class="fa fa-pencil"></i>
                            				<div class="c_edit">
                            					<div class="btn-rename">
                            						rename
													<div class="message-popup">
														<div class="message-popup-inner container">
															<div class="row">
																<div class="col-xs-12 col-sm-8 col-sm-offset-2">
																	<i class="fa fa-times close-button"></i>
																	<h5 class="large-popup-title">Rename</h5>
																	<div class="form-group">
																		<input class="form-input" required="" placeholder="Your text">
																	</div>
																	<button class="btn btn-right color-1 size-1 hover-1">OK</button>
																</div>
															</div>
														</div>
													</div>
                            					</div>
                            					<a href="page1.html">delete</a>

                            				</div>
                            			</div>
                            		</div>
                            		<div class="collection-entry">
	                            		<a href="page1.html" class="portfolio-link type-2 clearfix">
	                            			<img src="img/collection_11.jpg" alt="">
	                            			<img src="img/collection_12.jpg" alt="">
	                            			<img src="img/collection_13.jpg" alt="">
	                            			<img src="img/collection_14.jpg" alt="">
	                            			<img src="img/collection_15.jpg" alt="">
	                            			<div class="color_bg">
												<span>view gallery</span>
												<span class="child"></span>
											</div>
	                            		</a>
                            		</div>
                            	</div>
                            	<div class="collection">
                            		<h3 class="menu-article">Ideas For Personal Site</h3>
                            		<div class="collection-header">
                            			<span><i class="fa fa-user"></i>by <a href="page1.html">Inspiration Art</a> </span>
                            			<span><i class="fa fa-thumbs-o-up"></i> 360</span>
                            			<span><i class="fa fa-eye"></i> 789</span>
                            			<div class="edit-collection">
                            				<i class="fa fa-pencil"></i>
                            				<div class="c_edit">
                            					<div class="btn-rename">
                            						rename
													<div class="message-popup">
														<div class="message-popup-inner container">
															<div class="row">
																<div class="col-xs-12 col-sm-8 col-sm-offset-2">
																	<i class="fa fa-times close-button"></i>
																	<h5 class="large-popup-title">Rename</h5>
																	<div class="form-group">
																		<input class="form-input" required="" placeholder="Your text">
																	</div>
																	<button class="btn btn-right color-1 size-1 hover-1">OK</button>
																</div>
															</div>
														</div>
													</div>
                            					</div>
                            					<a href="page1.html">delete</a>

                            				</div>
                            			</div>
                            		</div>
                            		<div class="collection-entry">
	                            		<a href="page1.html" class="portfolio-link type-2 clearfix">
	                            			<img src="img/collection_16.jpg" alt="">
	                            			<img src="img/collection_17.jpg" alt="">
	                            			<img src="img/collection_18.jpg" alt="">
	                            			<img src="img/collection_19.jpg" alt="">
	                            			<img src="img/collection_20.jpg" alt="">
	                            			<div class="color_bg">
												<span>view gallery</span>
												<span class="child"></span>
											</div>
	                            		</a>
                            		</div>
                            	</div>
                            	<div class="collection">
                            		<h3 class="menu-article">Inspiration Photos</h3>
                            		<div class="collection-header">
                            			<span><i class="fa fa-user"></i>by <a href="page1.html">Inspiration Art</a> </span>
                            			<span><i class="fa fa-thumbs-o-up"></i> 360</span>
                            			<span><i class="fa fa-eye"></i> 789</span>
                            			<div class="edit-collection">
                            				<i class="fa fa-pencil"></i>
                            				<div class="c_edit">
                            					<div class="btn-rename">
                            						rename
													<div class="message-popup">
														<div class="message-popup-inner container">
															<div class="row">
																<div class="col-xs-12 col-sm-8 col-sm-offset-2">
																	<i class="fa fa-times close-button"></i>
																	<h5 class="large-popup-title">Rename</h5>
																	<div class="form-group">
																		<input class="form-input" required="" placeholder="Your text">
																	</div>
																	<button class="btn btn-right color-1 size-1 hover-1">OK</button>
																</div>
															</div>
														</div>
													</div>
                            					</div>
                            					<a href="page1.html">delete</a>

                            				</div>
                            			</div>
                            		</div>
                            		<div class="collection-entry">
	                            		<a href="page1.html" class="portfolio-link type-2 clearfix">
	                            			<img src="img/collection_6.jpg" alt="">
	                            			<img src="img/collection_10.jpg" alt="">
	                            			<img src="img/collection_8.jpg" alt="">
	                            			<img src="img/collection_11.jpg" alt="">
	                            			<img src="img/collection_3.jpg" alt="">
	                            			<div class="color_bg">
												<span>view gallery</span>
												<span class="child"></span>
											</div>
	                            		</a>
                            		</div>
                            	</div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
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
								    <input class="checkbox-input" type="checkbox"/> <span class="check-box-sign"></span>
								</label>
								<span class="large-popup-text">
									Stay signed in
								</span>
							</div>

							<a href="page1.html" class="link-large-popup">Forgot password?</a>
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
								    <input class="checkbox-input" type="checkbox" required="" value=""/> <span class="check-box-sign"></span>
								</label>
								<span class="large-popup-text">
									I have read and agree to the <a class="be-popup-terms" href="page1.html">Terms of Use</a> and <a class="be-popup-terms" href="page1.html">Privacy Policy</a>.
								</span>
							</div>
							<div class="be-checkbox">
								<label class="check-box">
								    <input class="checkbox-input" type="checkbox" value=""/> <span class="check-box-sign"></span>
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

	<!-- SCRIPT	-->
	<script src="script/jquery-2.1.4.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/idangerous.swiper.min.js"></script>
	<script src="script/isotope.pkgd.min.js"></script>
	<script src="script/jquery.viewportchecker.min.js"></script>
	<script src="script/global.js"></script>
	</body>
</html>