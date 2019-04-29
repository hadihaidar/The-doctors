
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
						<li><a href="search.php">Discover</a>
							<ul>
								<li><a href="search.php">Explore</a></li>
								<li><a href="people.php">People</a></li>
								<li><a href="gallery.html">Galleries</a></li>
							</ul>
						</li>
						<li><a href="author-login.html">My Portfolio</a></li>
						<li><a href="site-map.html">Site Map</a></li>
						<li id="ad-work-li"><a id="add-work-btn" class="btn color-1" href="work.html">Add Work </a></li>
					</ul>
				</div>
				<div class="login-header-block">
					<div class="login_block">
						<a class="btn-login btn color-1 size-2 hover-2" href="blog-detail-2.html"><i class="fa fa-user"></i>
						Log in</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- MAIN CONTENT -->
	<div id="content-block">
		<div class="head-bg">
			<div class="head-bg-img"></div>
			<div class="head-bg-content">
				<h1>Your Best Social Network Template</h1>
				<p>Donec in rhoncus tortor. Sed tristique auctor ligula vel viverra</p>
				<a class="btn color-1 size-1 hover-1" href="blog-detail-2.html"><i class="fa fa-facebook"></i>sign up via facebook</a>
				<a class="be-register btn color-3 size-1 hover-6"><i class="fa fa-lock"></i>sign up now</a>
			</div>
		</div>
		<div class="container-fluid custom-container">
			<div class="row">
				<div class="col-md-2 left-feild">
					<form action="./" class="input-search">
						<input type="text" required placeholder="Enter keyword">
							<i class="fa fa-search"></i>
							<input type="submit" value="">
					</form>
				</div>
				<div class="col-md-10 ">
					<div class="for-be-dropdowns">
						<div class="be-drop-down">
							<i class="icon-projects"></i>
							<span class="be-dropdown-content"> Projects	</span>
							<ul class="drop-down-list">
								<li class="filter" data-filter=".category-1"><a data-type="category-1">Projects</a></li>
								<li class="filter" data-filter=".category-2"><a data-type="category-2">Work in Progress</a></li>
								<li class="filter" data-filter=".category-3"><a data-type="category-3">People</a></li>
							</ul>
						</div>
						<div class="be-drop-down">
							<i class="icon-creative"></i>
							<span class="be-dropdown-content">All Creative Filds
							</span>
							<ul class="drop-down-list">
								<li class="filter" data-filter=".category-4"><a>Item - 1</a></li>
								<li class="filter" data-filter=".category-5"><a>Item - 2</a></li>
								<li class="filter" data-filter=".category-1"><a>Item - 3</a></li>
							</ul>
						</div>
						<div class="be-drop-down">
							<i class="icon-features"></i>
							<span class="be-dropdown-content">Features
							</span>
							<ul class="drop-down-list">
								<li class="filter" data-filter=".category-2"><a>Featured</a></li>
								<li class="filter" data-filter=".category-3"><a>Most Appreciated</a></li>
								<li class="filter" data-filter=".category-4"><a>Most Viewed</a></li>
								<li class="filter" data-filter=".category-5"><a>Most Discussed</a></li>
								<li class="filter" data-filter=".category-1"><a>Most Recent</a></li>
							</ul>
						</div>
						<div class="be-drop-down">
							<i class="icon-worldwide"></i>
							<span class="be-dropdown-content">Worldwide
							</span>
							<ul class="drop-down-list">
								<li class="filter" data-filter=".category-2"><a>WorldWide</a></li>
								<li class="filter" data-filter=".category-3"><a>United States</a></li>
								<li class="filter" data-filter=".category-4"><a>Germany</a></li>
								<li class="filter" data-filter=".category-5"><a>United Kingdom</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid custom-container">
			<div class="row">

				<div class="col-md-10 col-md-push-2">
					<div id="container-mix" class="be-user-wrapper row">
						<div  class="mix category-4 custom-column-5">
							<div class="be-user-block style-2">
								<a class="be-ava-user style-2" href="blog-detail-2.html">
									<img src="img/ava_2.jpg" alt="">
								</a>
								<div class="be-user-counter">
									<div class="c_number">17</div>
									<div class="c_text">projects</div>
								</div>
								<a href="blog-detail-2.html" class="be-use-name">Daniel Ng</a>
								<p class="be-user-info">Singapore, Singapore</p>
								<div class="be-text-tags">
									<a href="blog-detail-2.html">Graphic Design</a>,
									<a href="blog-detail-2.html">Branding,</a>
									<a href="blog-detail-2.html">Typography</a>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
								</div>
								<a class="btn color-1 size-2 hover-1">Follow</a>
								<a class="portfolio-link type-1 clearfix" href="blog-detail-2.html">
									<img src="img/g1.jpg" alt="">
									<img src="img/g2.jpg" alt="">
									<img src="img/g3.jpg" alt="">
									<div class="color_bg">
										<span>view portfolio</span>
										<span class="child"></span>
									</div>
								</a>
							</div>
						</div>
						<div class="mix category-3 custom-column-5">
							<div class="be-user-block style-2">
								<a class="be-ava-user style-2" href="blog-detail-2.html">
									<img src="img/ava_3.jpg" alt="">
								</a>
								<div class="be-user-counter">
									<div class="c_number">34</div>
									<div class="c_text">projects</div>
								</div>
								<a href="blog-detail-2.html" class="be-use-name">Louis Paquet</a>
								<p class="be-user-info">Singapore, Singapore</p>
								<div class="be-text-tags">
									<a href="blog-detail-2.html">Web Design</a>,
									<a href="blog-detail-2.html">Graphic Design</a>,
									<a href="blog-detail-2.html">Art Director</a>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
								</div>
								<a class="btn color-1 size-2 hover-1">Follow</a>
								<a class="portfolio-link type-1 clearfix" href="blog-detail-2.html">
									<img src="img/g4.jpg" alt="">
									<img src="img/g5.jpg" alt="">
									<img src="img/g6.jpg" alt="">
									<div class="color_bg">
										<span>view portfolio</span>
										<span class="child"></span>
									</div>
								</a>
							</div>
						</div>
						<div class="mix category-2 custom-column-5">
							<div class="be-user-block style-2">
								<a class="be-ava-user style-2" href="blog-detail-2.html">
									<img src="img/ava_4.jpg" alt="">
								</a>
								<div class="be-user-counter">
									<div class="c_number">42</div>
									<div class="c_text">projects</div>
								</div>
								<a href="blog-detail-2.html" class="be-use-name">Phoenix, the Creative Studio</a>
								<p class="be-user-info">Montreal, Quebec, Canada</p>
								<div class="be-text-tags">
										<a href="blog-detail-2.html">Web Design</a>,
										<a href="blog-detail-2.html">Brandingn</a>,
										<a href="blog-detail-2.html">Graphic Designr</a>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
								</div>
								<a class="btn color-1 size-2 hover-1">Follow</a>
								<a class="portfolio-link type-1 clearfix" href="blog-detail-2.html">
									<img src="img/g10.jpg" alt="">
									<img src="img/g8.jpg" alt="">
									<img src="img/g1.jpg" alt="">
									<div class="color_bg">
										<span>view portfolio</span>
										<span class="child"></span>
									</div>
								</a>
							</div>
						</div>
						<div class="mix category-1 custom-column-5">
							<div class="be-user-block style-2">
								<a class="be-ava-user style-2" href="blog-detail-2.html">
									<img src="img/ava_5.jpg" alt="">
								</a>
								<div class="be-user-counter">
									<div class="c_number">21</div>
									<div class="c_text">projects</div>
								</div>
								<a href="blog-detail-2.html" class="be-use-name">Cüneyt ŞEN</a>
								<p class="be-user-info">Istanbul, Turkey</p>
								<div class="be-text-tags">
										<a href="blog-detail-2.html">Web Design</a>,
										<a href="blog-detail-2.html">UI/UX</a>,
										<a href="blog-detail-2.html">Graphic Designr</a>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
								</div>
								<a class="btn color-1 size-2 hover-1">Follow</a>
								<a class="portfolio-link type-1 clearfix" href="blog-detail-2.html">
									<img src="img/g7.jpg" alt="">
									<img src="img/g8.jpg" alt="">
									<img src="img/g9.jpg" alt="">
									<div class="color_bg">
										<span>view portfolio</span>
										<span class="child"></span>
									</div>
								</a>
							</div>
						</div>
						<div class="mix category-6 custom-column-5">
							<div class="be-user-block style-2">
								<a class="be-ava-user style-2" href="blog-detail-2.html">
									<img src="img/ava_6.jpg" alt="">
								</a>
								<div class="be-user-counter">
									<div class="c_number">19</div>
									<div class="c_text">projects</div>
								</div>
								<a href="blog-detail-2.html" class="be-use-name">Christopher Nicola</a>
								<p class="be-user-info">Montreal, Quebec, Canada</p>
								<div class="be-text-tags">
										<a href="blog-detail-2.html">Web Design</a>,
										<a href="blog-detail-2.html">Brandingn</a>,
										<a href="blog-detail-2.html">Graphic Designr</a>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
								</div>
								<a class="btn color-1 size-2 hover-1">Follow</a>
								<a class="portfolio-link type-1 clearfix" href="blog-detail-2.html">
									<img src="img/g1.jpg" alt="">
									<img src="img/g3.jpg" alt="">
									<img src="img/g4.jpg" alt="">
									<div class="color_bg">
										<span>view portfolio</span>
										<span class="child"></span>
									</div>
								</a>
							</div>
						</div>
						<div class="mix category-5 custom-column-5">
							<div class="be-user-block style-2">
								<a class="be-ava-user style-2" href="blog-detail-2.html">
									<img src="img/ava_7.jpg" alt="">
								</a>
								<div class="be-user-counter">
									<div class="c_number">9</div>
									<div class="c_text">projects</div>
								</div>
								<a href="blog-detail-2.html" class="be-use-name">Maciej Mizer</a>
								<p class="be-user-info">Łódź, Poland</p>
								<div class="be-text-tags">
										<a href="blog-detail-2.html">Digital Art</a>,
										<a href="blog-detail-2.html">Illustration</a>,
										<a href="blog-detail-2.html">Web Design</a>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
								</div>
								<a class="btn color-1 size-2 hover-1">Follow</a>
								<a class="portfolio-link type-1 clearfix" href="blog-detail-2.html">
									<img src="img/g7.jpg" alt="">
									<img src="img/g8.jpg" alt="">
									<img src="img/g9.jpg" alt="">
									<div class="color_bg">
										<span>view portfolio</span>
										<span class="child"></span>
									</div>
								</a>
							</div>
						</div>
						<div class="mix category-4 custom-column-5">
							<div class="be-user-block style-2">
								<a class="be-ava-user style-2" href="blog-detail-2.html">
									<img src="img/ava_8.jpg" alt="">
								</a>
								<div class="be-user-counter">
									<div class="c_number">4</div>
									<div class="c_text">projects</div>
								</div>
								<a href="blog-detail-2.html" class="be-use-name">Tomasz Mazurczak</a>
								<p class="be-user-info">Opole, Poland</p>
								<div class="be-text-tags">
									<a href="blog-detail-2.html">Web Design</a>,
									<a href="blog-detail-2.html">UI/UX</a>,
									<a href="blog-detail-2.html">Graphic Design</a>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
								</div>
								<a class="btn color-1 size-2 hover-1">Follow</a>
								<a class="portfolio-link type-1 clearfix" href="blog-detail-2.html">
									<img src="img/g1.jpg" alt="">
									<img src="img/g4.jpg" alt="">
									<img src="img/g9.jpg" alt="">
									<div class="color_bg">
										<span>view portfolio</span>
										<span class="child"></span>
									</div>
								</a>
							</div>
						</div>
						<div class="mix category-3 custom-column-5">
							<div class="be-user-block style-2">
								<a class="be-ava-user style-2" href="blog-detail-2.html">
									<img src="img/ava_9.jpg" alt="">
								</a>
								<div class="be-user-counter">
									<div class="c_number">2</div>
									<div class="c_text">projects</div>
								</div>
								<a href="blog-detail-2.html" class="be-use-name">v-a studio</a>
								<p class="be-user-info">Lisbon, Portugal</p>
								<div class="be-text-tags">
									<a href="blog-detail-2.html">Graphic Design</a>,
									<a href="blog-detail-2.html">Editorial Design</a>,
									<a href="blog-detail-2.html">Web Design</a>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
								</div>
								<a class="btn color-1 size-2 hover-1">Follow</a>
								<a class="portfolio-link type-1 clearfix" href="blog-detail-2.html">
									<img src="img/g7.jpg" alt="">
									<img src="img/g8.jpg" alt="">
									<img src="img/g9.jpg" alt="">
									<div class="color_bg">
										<span>view portfolio</span>
										<span class="child"></span>
									</div>
								</a>
							</div>
						</div>
						<div class="mix category-1 custom-column-5">
							<div class="be-user-block style-2">
								<a class="be-ava-user style-2" href="blog-detail-2.html">
									<img src="img/ava_10.jpg" alt="">
								</a>
								<div class="be-user-counter">
									<div class="c_number">20</div>
									<div class="c_text">projects</div>
								</div>
								<a href="blog-detail-2.html" class="be-use-name">Leigh Taylor</a>
								<p class="be-user-info">Barnsley, United Kingdom</p>
								<div class="be-text-tags">
									<a href="blog-detail-2.html">UI/UX</a>,
									<a href="blog-detail-2.html">Web Design</a>,
									<a href="blog-detail-2.html">Art Direction</a>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
								</div>
								<a class="btn color-1 size-2 hover-1">Follow</a>
								<a class="portfolio-link type-1 clearfix" href="blog-detail-2.html">
									<img src="img/g1.jpg" alt="">
									<img src="img/g4.jpg" alt="">
									<img src="img/g5.jpg" alt="">
									<div class="color_bg">
										<span>view portfolio</span>
										<span class="child"></span>
									</div>
								</a>
							</div>
						</div>
						<div class="mix category-2 custom-column-5">
							<div class="be-user-block style-2">
								<a class="be-ava-user style-2" href="blog-detail-2.html">
									<img src="img/ava_11.jpg" alt="">
								</a>
								<div class="be-user-counter">
									<div class="c_number">22</div>
									<div class="c_text">projects</div>
								</div>
								<a href="blog-detail-2.html" class="be-use-name">Hoang Nguyen</a>
								<p class="be-user-info">Ho Chi Minh City, Vietnam</p>
								<div class="be-text-tags">
									<a href="blog-detail-2.html">Interaction Design</a>,
									<a href="blog-detail-2.html">UI/UX</a>,
									<a href="blog-detail-2.html">Web Designn</a>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
								</div>
								<a class="btn color-1 size-2 hover-1">Follow</a>
								<a class="portfolio-link type-1 clearfix" href="blog-detail-2.html">
									<img src="img/g1.jpg" alt="">
									<img src="img/g4.jpg" alt="">
									<img src="img/g5.jpg" alt="">
									<div class="color_bg">
										<span>view portfolio</span>
										<span class="child"></span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-md-pull-10 left-feild">
					<div class="be-vidget">
						<h3 class="letf-menu-article">
							Popular Creative Filds
						</h3>
						<div class="creative_filds_block">
							<div class="ul">
								<a  data-filter=".category-1" class="filter">Graphic Design		</a>
								<a data-filter=".category-2" class="filter">Photography			</a>
								<a data-filter=".category-3" class="filter">Interaction Design	</a>
								<a data-filter=".category-4" class="filter">Art Direction		</a>
								<a data-filter=".category-5" class="filter">Illustration		</a>
							</div>
						</div>
					</div>
					<div class="be-vidget">
						<h3 class="letf-menu-article">
							Popular Tags
						</h3>
						<div class="tags_block clearfix">
							<ul>
								<li><a data-filter=".category-6" class="filter">photoshop</a></li>
								<li><a data-filter=".category-1" class="filter">graphic</a></li>
								<li><a data-filter=".category-2" class="filter">art</a></li>
								<li><a data-filter=".category-3" class="filter">website</a></li>
								<li><a data-filter=".category-4" class="filter">logo</a></li>
								<li><a data-filter=".category-5" class="filter">identity</a></li>
								<li><a data-filter=".category-6" class="filter">logo design</a></li>
								<li><a data-filter=".category-1" class="filter">interactive</a></li>
								<li><a data-filter=".category-2" class="filter">blue</a></li>
								<li><a data-filter=".category-3" class="filter">branding</a></li>
							</ul>
						</div>
					</div>
					<div class="be-vidget">
						<h3 class="letf-menu-article">
							Filter By
						</h3>
						<div class="filter-block">
							<ul>
								<li><a><i class="fa fa-graduation-cap"></i>Schools</a>
									<div class="be-popup">
										<h3 class="letf-menu-article">
											Enter School
										</h3>
										<form action="./" class="input-search">
											<input class="filters-input" type="text" required placeholder="Start typing to see list">
										</form>
										<i class="fa fa-times"></i>
									</div>
								</li>
								<li><a><i class="fa fa-wrench"></i>Tools Used</a>
									<div class="be-popup">
										<h3 class="letf-menu-article">
											Tools
										</h3>
										<form action="./" class="input-search">
											<input class="filters-input" type="text" required placeholder="Start typing to see list">
										</form>
										<i class="fa fa-times"></i>
									</div>
								</li>
								<li><a><i class="fa fa-paint-brush"></i>Color</a>
									<div class="be-popup be-color-picker">
										<h3 class="letf-menu-article">
											Choose color
										</h3>
										<div class="for-colors">
											<ul class="colors  cfix">
												<li data-filter=".category-1" class="color filter color-0-0"></li>
												<li data-filter=".category-2" class="color filter color-0-1"></li>
												<li data-filter=".category-3" class="color filter color-0-2"></li>
												<li data-filter=".category-4" class="color filter color-0-3"></li>
												<li data-filter=".category-5" class="color filter color-0-4"></li>
												<li data-filter=".category-1" class="color filter color-0-5"></li>
												<li data-filter=".category-2" class="color filter color-0-6"></li>
												<li data-filter=".category-3" class="color filter color-0-7"></li>
												<li data-filter=".category-4" class="color filter color-0-8"></li>
												<li data-filter=".category-5" class="color filter color-0-9"></li>
												<li data-filter=".category-1" class="color filter color-0-10"></li>
												<li data-filter=".category-5" class="color filter color-0-11"></li>
												<li data-filter=".category-1" class="color filter color-1-0"></li>
												<li data-filter=".category-2" class="color filter color-1-1"></li>
												<li data-filter=".category-1" class="color filter color-1-2"></li>
												<li data-filter=".category-1" class="color filter color-1-3"></li>
												<li data-filter=".category-1" class="color filter color-1-4"></li>
												<li data-filter=".category-4" class="color filter color-1-5"></li>
												<li data-filter=".category-1" class="color filter color-1-6"></li>
												<li data-filter=".category-1" class="color filter color-1-7"></li>
												<li data-filter=".category-6" class="color filter color-1-8"></li>
												<li data-filter=".category-1" class="color filter color-1-9"></li>
												<li data-filter=".category-1" class="color filter color-1-10"></li>
												<li data-filter=".category-1" class="color filter color-1-11"></li>
												<li data-filter=".category-1" class="color filter color-2-0"></li>
												<li data-filter=".category-1" class="color filter color-2-1"></li>
												<li data-filter=".category-1" class="color filter color-2-2"></li>
												<li data-filter=".category-1" class="color filter color-2-3"></li>
												<li data-filter=".category-1" class="color filter color-2-4"></li>
												<li data-filter=".category-1" class="color filter color-2-5"></li>
												<li data-filter=".category-1" class="color filter color-2-6"></li>
												<li data-filter=".category-1" class="color filter color-2-7"></li>
												<li data-filter=".category-1" class="color filter color-2-8"></li>
												<li data-filter=".category-1" class="color filter color-2-9"></li>
												<li data-filter=".category-1" class="color filter color-2-10"></li>
												<li data-filter=".category-1" class="color filter color-2-11"></li>
												<li data-filter=".category-1" class="color filter color-3-0"></li>
												<li data-filter=".category-1" class="color filter color-3-1"></li>
												<li data-filter=".category-1" class="color filter color-3-2"></li>
												<li data-filter=".category-1" class="color filter color-3-3"></li>
												<li data-filter=".category-1" class="color filter color-3-4"></li>
												<li data-filter=".category-1" class="color filter color-3-5"></li>
												<li data-filter=".category-1" class="color filter color-3-6"></li>
												<li data-filter=".category-1" class="color filter color-3-7"></li>
												<li data-filter=".category-1" class="color filter color-3-8"></li>
												<li data-filter=".category-1" class="color filter color-3-9"></li>
												<li data-filter=".category-1" class="color filter color-3-10"></li>
												<li data-filter=".category-1" class="color filter color-3-11"></li>
												<li data-filter=".category-1" class="color filter color-4-0"></li>
												<li data-filter=".category-1" class="color filter color-4-1"></li>
												<li data-filter=".category-1" class="color filter color-4-2"></li>
												<li data-filter=".category-1" class="color filter color-4-3"></li>
												<li data-filter=".category-1" class="color filter color-4-4"></li>
												<li data-filter=".category-1" class="color filter color-4-5"></li>
												<li data-filter=".category-1" class="color filter color-4-6"></li>
												<li data-filter=".category-1" class="color filter color-4-7"></li>
												<li data-filter=".category-1" class="color filter color-4-8"></li>
												<li data-filter=".category-1" class="color filter color-4-9"></li>
												<li data-filter=".category-1" class="color filter color-4-10"></li>
												<li data-filter=".category-1" class="color filter color-4-11"></li>
												<li data-filter=".category-1" class="color filter color-5-0"></li>
												<li data-filter=".category-1" class="color filter color-5-1"></li>
												<li data-filter=".category-1" class="color filter color-5-2"></li>
												<li data-filter=".category-1" class="color filter color-5-3"></li>
												<li data-filter=".category-1" class="color filter color-5-4"></li>
												<li data-filter=".category-1" class="color filter color-5-5"></li>
												<li data-filter=".category-1" class="color filter color-5-6"></li>
												<li data-filter=".category-1" class="color filter color-5-7"></li>
												<li data-filter=".category-1" class="color filter color-5-8"></li>
												<li data-filter=".category-1" class="color filter color-5-9"></li>
												<li data-filter=".category-1" class="color filter color-5-10"></li>
												<li data-filter=".category-1" class="color filter color-5-11"></li>
												<li data-filter=".category-1" class="color filter color-6-0"></li>
												<li data-filter=".category-1" class="color filter color-6-1"></li>
												<li data-filter=".category-6" class="color filter color-6-2"></li>
												<li data-filter=".category-1" class="color filter color-6-3"></li>
												<li data-filter=".category-1" class="color filter color-6-4"></li>
												<li data-filter=".category-1" class="color filter color-6-5"></li>
												<li data-filter=".category-1" class="color filter color-6-6"></li>
												<li data-filter=".category-1" class="color filter color-6-7"></li>
												<li data-filter=".category-1" class="color filter color-6-8"></li>
												<li data-filter=".category-1" class="color filter color-6-9"></li>
												<li data-filter=".category-1" class="color filter color-6-10"></li>
												<li data-filter=".category-1" class="color filter color-6-11"></li>
												<li data-filter=".category-1" class="color filter color-7-0"></li>
												<li data-filter=".category-1" class="color filter color-7-1"></li>
												<li data-filter=".category-1" class="color filter color-7-2"></li>
												<li data-filter=".category-1" class="color filter color-7-3"></li>
												<li data-filter=".category-1" class="color filter color-7-4"></li>
												<li data-filter=".category-1" class="color filter color-7-5"></li>
												<li data-filter=".category-1" class="color filter color-7-6"></li>
												<li data-filter=".category-1" class="color filter color-7-7"></li>
												<li data-filter=".category-1" class="color filter color-7-8"></li>
												<li data-filter=".category-1" class="color filter color-7-9"></li>
												<li data-filter=".category-1" class="color filter color-7-10"></li>
												<li data-filter=".category-1" class="color filter color-7-11"></li>
												<li data-filter=".category-1" class="color filter color-8-0"></li>
												<li data-filter=".category-1" class="color filter color-8-1"></li>
												<li data-filter=".category-1" class="color filter color-8-2"></li>
												<li data-filter=".category-1" class="color filter color-8-3"></li>
												<li data-filter=".category-1" class="color filter color-8-4"></li>
												<li data-filter=".category-1" class="color filter color-8-5"></li>
												<li data-filter=".category-1" class="color filter color-8-6"></li>
												<li data-filter=".category-6" class="color filter color-8-7"></li>
												<li data-filter=".category-1" class="color filter color-8-8"></li>
												<li data-filter=".category-1" class="color filter color-8-9"></li>
												<li data-filter=".category-1" class="color filter color-8-10"></li>
												<li data-filter=".category-1" class="color filter color-8-11"></li>
												<li data-filter=".category-1" class="color filter color-9-0"></li>
												<li data-filter=".category-1" class="color filter color-9-1"></li>
												<li data-filter=".category-1" class="color filter color-9-2"></li>
												<li data-filter=".category-1" class="color filter color-9-3"></li>
												<li data-filter=".category-6" class="color filter color-9-4"></li>
												<li data-filter=".category-1" class="color filter color-9-5"></li>
												<li data-filter=".category-1" class="color filter color-9-6"></li>
												<li data-filter=".category-1" class="color filter color-9-7"></li>
												<li data-filter=".category-1" class="color filter color-9-8"></li>
												<li data-filter=".category-1" class="color filter color-9-9"></li>
												<li data-filter=".category-1" class="color filter color-9-10"></li>
												<li data-filter=".category-1" class="color filter color-9-11"></li>
											</ul>
										</div>
										<i class="fa fa-times"></i>

									</div>
								</li>
								<li><a><i class="fa fa-camera-retro"></i>Visit Gallery</a>
									<div class="be-popup">
										<h3 class="letf-menu-article">
											Galerry
										</h3>
										<form action="./" class="input-search">
											<input  class="filters-input" type="text" required placeholder="Start typing to see list">
										</form>
										<i class="fa fa-times"></i>
									</div>
								</li>
							</ul>
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
							<a href="blog-detail-2.html"><img src="img/g1.jpg" alt=""></a>
							<a href="blog-detail-2.html"><img src="img/g2.jpg" alt=""></a>
							<a href="blog-detail-2.html"><img src="img/g3.jpg" alt=""></a>
							<a href="blog-detail-2.html"><img src="img/g4.jpg" alt=""></a>
							<a href="blog-detail-2.html"><img src="img/g5.jpg" alt=""></a>
							<a href="blog-detail-2.html"><img src="img/g6.jpg" alt=""></a>
							<a href="blog-detail-2.html"><img src="img/g7.jpg" alt=""></a>
							<a href="blog-detail-2.html"><img src="img/g8.jpg" alt=""></a>
							<a href="blog-detail-2.html"><img src="img/g9.jpg" alt=""></a>
							<a href="blog-detail-2.html"><img src="img/g10.jpg" alt=""></a>
							<a href="blog-detail-2.html"><img src="img/g11.jpg" alt=""></a>
							<a href="blog-detail-2.html"><img src="img/g12.jpg" alt=""></a>
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
								    <input class="checkbox-input" type="checkbox" value="" /> <span class="check-box-sign"></span>
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
								    <input class="checkbox-input" type="checkbox" required="" value=""/> <span class="check-box-sign"></span>
								</label>
								<span class="large-popup-text">
									I have read and agree to the <a class="be-popup-terms" href="blog-detail-2.html">Terms of Use</a> and <a class="be-popup-terms" href="blog-detail-2.html">Privacy Policy</a>.
								</span>
							</div>
							<div class="be-checkbox">
								<label class="check-box">
								    <input class="checkbox-input" type="checkbox" value="" /> <span class="check-box-sign"></span>
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
	<script src="script/jquery-ui.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/idangerous.swiper.min.js"></script>
	<script src="script/jquery.mixitup.js"></script>
	<script src="script/filters.js"></script>
	<script src="script/jquery.viewportchecker.min.js"></script>
	<script src="script/global.js"></script>
	</body>
</html>