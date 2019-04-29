<?php session_start();
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
	<link rel="stylesheet" href="style/jquery-ui.css">
	<link rel="stylesheet" href="style/stylesheet.css">
	<!--[if lt IE 10]>
			<link rel="stylesheet" type="text/css" href="style/ie-9.css" />
		<![endif]-->
	<!--[if lt IE 9]>
		    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

</head>

<body>

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
						<img class="logo-c active be_logo" src="img/Doctors.png" style="width:121px;height:37px; alt=" logo">
						<img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo2">
						<img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo3">
						<img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo4">
					</a>
				</div>
				<div class="header-menu-block">
					<button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
					<ul class="header-menu" id="one">
						<li><a href="activity.php">Activity</a></li>
						<li><a href="search.php">Discover</a></li>
						<li><a href="author-login.html">My Portfolio</a></li>
						<li><a href="site-map.html">Site Map</a></li>
						<li id="ad-work-li"><a id="add-work-btn" class="btn color-1" href="work.php">Add Work </a></li>
					</ul>
				</div>
				<div class="be-drop-down login-user-down" style="width: max-content;float: right;padding-top: 25px;">
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
	</header>

	<!-- MAIN CONTENT -->
	<div id="content-block">
		<div class="container-fluid custom-container">
			<div class="row">
				<div class="col-md-2 left-feild">
					<form action="search.php" class="input-search">
						<input type="text" required placeholder="Enter keyword">
						<i class="fa fa-search"></i>
						<input type="submit" value="">
					</form>
				</div>
				<div class="col-md-10 ">
					<div class="for-be-dropdowns">

						<div class="be-drop-down">
							<i class="icon-creative"></i>
							<span class="be-dropdown-content">Field
							</span>
							<ul class="drop-down-list">
								<li class="filter"><a>Eyes</a></li>
								<li class="filter"><a>E.N.T.</a></li>
								<li class="filter"><a>Heart</a></li>
							</ul>
						</div>

						<div class="col-md-2 left-feild">
							<form class="input-search">
								<input type="text" required placeholder="Country">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid custom-container">
			<div class="row">
				<div class="col-md-12">
					<div id="container-mix" class="row _post-container_">
						<div class="category-1 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
									<img src="img/p1.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">The kitsch destruction of our world</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-2 mix custom-column-5">
							<div class="be-post">
								<a href="page2.html" class="be-img-block">
									<img src="img/p2.jpg" alt="omg">
								</a>
								<a href="page2.html" class="be-post-title">Treebeard</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
								</span>
								<div class="author-post">
									<img src="img/a1.png" alt="" class="ava-author">
									<span>by <a href="page2.html">Hoang Nguyen</a></span>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
									<span><i class="fa fa-comment-o"></i> 20</span>
								</div>
							</div>
						</div>
						<div class="category-3 mix custom-column-5">
							<div class="be-post">
								<a href="page3.html" class="be-img-block">
									<img src="img/p3.jpg" alt="omg">
								</a>
								<a href="page3.html" class="be-post-title">Colors of Ramadan</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
								</span>
								<div class="author-post">
									<img src="img/a2.png" alt="" class="ava-author">
									<span>by <a href="page3.html">Hoang Nguyen</a></span>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
									<span><i class="fa fa-comment-o"></i> 20</span>
								</div>
							</div>
						</div>
						<div class="category-4 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
									<img src="img/p4.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">Leaving Home - L'Officiel Ukraine</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-5 mix custom-column-5">
							<div class="be-post">
								<a href="page2.html" class="be-img-block">
									<img src="img/p5.jpg" alt="omg">
								</a>
								<a href="page2.html" class="be-post-title">Drive Your World</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
								</span>
								<div class="author-post">
									<img src="img/a4.png" alt="" class="ava-author">
									<span>by <a href="page2.html">Hoang Nguyen</a></span>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
									<span><i class="fa fa-comment-o"></i> 20</span>
								</div>
							</div>
						</div>
						<div class="category-6 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
									<img src="img/p13.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">Fran Ewald for The Diaries Project</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-5 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
									<img src="img/p7.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">raindrops monochrome</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-3 mix custom-column-5">
							<div class="be-post">
								<a href="page3.html" class="be-img-block">
									<img src="img/p8.jpg" alt="omg">
								</a>
								<a href="page3.html" class="be-post-title">Racing Queensland</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
								</span>
								<div class="author-post">
									<img src="img/a7.png" alt="" class="ava-author">
									<span>by <a href="page3.html">Hoang Nguyen</a></span>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
									<span><i class="fa fa-comment-o"></i> 20</span>
								</div>
							</div>
						</div>
						<div class="category-2 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
									<img src="img/p9.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">NAHA Finalist Hairstylist of the Year Allen Ruiz</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-4 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
									<img src="img/p10.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">tomorrow</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
								</span>
								<div class="author-post">
									<img src="img/a8.png" alt="" class="ava-author">
									<span>by <a href="page1.html">Hoang Nguyen</a></span>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
									<span><i class="fa fa-comment-o"></i> 20</span>
								</div>
							</div>
						</div>
						<div class="category-6 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
									<img src="img/p11.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">Tropicalia</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-2 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
									<img src="img/p12.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">Face</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-1 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
									<img src="img/p13.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">Stay Ahead Series</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-3 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
									<img src="img/p14.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-1 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
									<img src="img/p15.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">Garry Simpson - Bridges - Intelligent Life Magazine</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
								</span>
								<div class="author-post">
									<img src="img/a9.png" alt="" class="ava-author">
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
	<script src="script/jquery-ui.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/idangerous.swiper.min.js"></script>
	<script src="script/jquery.mixitup.js"></script>
	<script src="script/jquery.viewportchecker.min.js"></script>
	<script src="script/filters.js"></script>
	<script src="script/global.js"></script>
</body>

</html>