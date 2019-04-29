<?php
session_start();
if (!isset($_SESSION['name'])) {
	header("location:index.php");
}
?>
<html>

<head>
	<title>NGRNetwork</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="img/favicon.png">
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

<body data-spy="scroll" data-target="blog-detail-2.htmlscrollspy">

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
				<div class="header-menu-block">
					<button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
					<ul class="header-menu" id="one">
						<li><a href="activity.php">Activity</a></li>
						<li><a href="search.php">search</a>

						</li>
						<li><a href="author-login.php">My Portfolio</a></li>
						<li><a href="site-map.php">Site Map</a></li>
						<li id="ad-work-li"><a id="add-work-btn" class="btn color-1" href="work.php">Add Work </a></li>
					</ul>
				</div>
				<div class="login-header-block">
					<div class="login_block">
						<a class="btn-login btn color-1 size-2 hover-2" href="blog-detail-2.php"><i class="fa fa-user"></i>
							Log in</a>
					</div>
				</div>
			</div>
		</div>
	</header>


	<!-- MAIN CONTENT -->
	<div id="content-block">
		<div class="container be-detail-container">
			<div class="row">
				<div class="col-xs-12 col-md-3 left-feild">
					<div class="be-vidget back-block">
						<a class="btn full color-1 size-1 hover-1" href="author.php"><i class="fa fa-chevron-left"></i>back to profile</a>
					</div>
					<div class="be-vidget hidden-xs hidden-sm" id="scrollspy">
						<h3 class="letf-menu-article">
							Choose Category
						</h3>
						<div class="creative_filds_block">
							<ul class="ul nav">
								<li class="edit-ln"><a href="#basic-information">Basic Information</a></li>
								<li class="edit-ln"><a href="#edit-password">Edit Password</a></li>
								<li class="edit-ln"><a href="#on-the-web">On The Web</a></li>
								<li class="edit-ln"><a href="#about-me">About Me</a></li>
								<li class="edit-ln"><a href="#web-references">Web References</a></li>
							</ul>
						</div>
						<a class="btn full color-1 size-1 hover-1 add_section"><i class="fa fa-plus"></i>add sections</a>
					</div>

				</div>
				<div class="col-xs-12 col-md-9 _editor-content_">
					<div class="sec" data-sec="basic-information">
						<div class="be-large-post">
							<div class="info-block style-2">
								<div class="be-large-post-align ">
									<h3 class="info-block-label">Basic Information</h3>
								</div>
							</div>
							<div class="be-large-post-align">
								<div class="be-change-ava">
									<a class="be-ava-user style-2" href="blog-detail-2.php">
										<img src="img/ava_10.jpg" alt="">
									</a>
									<a class="btn color-4 size-2 hover-7">replace image</a>
								</div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<div class="input-col col-xs-12 col-sm-6">
										<div class="form-group fg_icon focus-2">
											<div class="form-label">First Name</div>
											<input class="form-input" type="text" value="Taylor">
										</div>
									</div>
									<div class="input-col col-xs-12 col-sm-6">
										<div class="form-group focus-2">
											<div class="form-label">Last Name</div>
											<input class="form-input" type="text" value="Leight">
										</div>
									</div>
									<div class="input-col col-xs-12">
										<div class="form-group focus-2">
											<div class="form-label">Occupation</div>
											<input class="form-input" type="text" value="UI/UX, Web Design, Art Direction">
										</div>
									</div>
									<div class="input-col col-xs-12">
										<div class="form-group focus-2">
											<div class="form-label">Company</div>
											<input class="form-input" type="text" placeholder="">
										</div>
									</div>
									<div class="input-col col-xs-12 col-sm-6">
										<div class="form-label">Country</div>
										<div class="be-drop-down icon-none">
											<span class="be-dropdown-content"> United Kingdom </span>
											<ul class="drop-down-list">
												<li><a>USA</a></li>
												<li><a>India</a></li>
												<li><a>Mexica</a></li>
												<li><a>Russia</a></li>
												<li><a>Italy</a></li>
											</ul>
										</div>
									</div>
									<div class="input-col col-xs-12 col-sm-6">
										<div class="form-group focus-2">
											<div class="form-label">City</div>
											<input class="form-input" type="text" value="Barnsley">
										</div>
									</div>
									<div class="input-col col-xs-12">
										<div class="form-group focus-2">
											<div class="form-label">Website URL</div>
											<input class="form-input" type="text" value="http:// www.phoenix.cool">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<form action="author-edit.php" method='post'>
						<div class="sec" data-sec="edit-password">
							<div class="be-large-post">
								<div class="info-block style-2">
									<div class="be-large-post-align">
										<h3 class="info-block-label">Password</h3>
									</div>
								</div>
								<div class="be-large-post-align">
									<div class="row">
										<div class="input-col col-xs-12 col-sm-4">
											<div class="form-group focus-2">
												<div class="form-label">Old Password</div>
												<input class="form-input" type="password" name='old' placeholder="">
											</div>
										</div>
										<div class="input-col col-xs-12 col-sm-4">
											<div class="form-group focus-2">
												<div class="form-label">New Password</div>
												<input class="form-input" type="password" name='new' placeholder="">
											</div>
										</div>
										<div class="input-col col-xs-12 col-sm-4">
											<div class="form-group focus-2">
												<div class="form-label">Repeat Password</div>
												<input class="form-input" name="repeat" type="password" placeholder="">
											</div>
										</div>
										<div class="col-xs-12">
											<input class="btn color-1 size-2 hover-1 btn-right" name="change" type="submit" value="change password">
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
						if (isset($_POST['change'])) {
							$db = new PDO("mysql:dbname=thedoctors", "root", "");
							$query = $db->query("SELECT * FROM user");
							$COUNT = 0;
							foreach ($query as $row) {
								if ($row['Email'] == $_SESSION['user'] && $row['Password'] == md5($db->quote($_POST['old']))) {
									if ($_POST['new'] == $_POST['repeat']) {
										$pass = $db->quote(md5($db->quote($_POST['new']))); // to be added to db
										$e = $db->quote($row['Email']);
										$query = $db->exec("UPDATE user SET Password= ($pass) where  Email =($e)");
										if ($query) {
											echo ('<script>alert("Your password has been changed")</script>');
										} else {
											echo ('<script>alert("Something went wrong please try again")</script>');
										}
									} else {
										echo ('<script>alert("Passwords does not match")</script>');
									}
								} else {
									if ($row['Email'] == $_SESSION['user']) {
										echo ('<script>alert("The old password is not correct")</script>');
									}
								}
							}
						}
						?>
					</form>
					<div class="sec" data-sec="on-the-web">
						<div class="be-large-post m-social">
							<div class="info-block style-2">
								<div class="be-large-post-align">
									<h3 class="info-block-label">On The Web</h3>
								</div>
							</div>
							<div class="be-large-post-align">
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-1" href="blog-detail-2.html"><i class="fa fa-facebook"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// facebook.com/taylor">
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-2" href="blog-detail-2.html"><i class="fa fa-twitter"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// twitter.com/taylor">
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-3" href="blog-detail-2.html"><i class="fa fa-google-plus"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// googleplus.com/taylor">
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-4" href="blog-detail-2.html"><i class="fa fa-pinterest-p"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// pinterest.com/taylor">
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-5" href="blog-detail-2.html"><i class="fa fa-instagram"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// instagram.com/taylor">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="sec" data-sec="about-me">
						<div class="be-large-post">
							<div class="info-block style-2">
								<div class="be-large-post-align">
									<h3 class="info-block-label">About Me</h3>
								</div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<div class="input-col col-xs-12">
										<div class="form-group focus-2">
											<div class="form-label">Section Title</div>
											<input class="form-input" type="text" placeholder="About Me">
										</div>
									</div>
									<div class="input-col col-xs-12">
										<div class="form-group focus-2">
											<div class="form-label">Description</div>
											<textarea class="form-input" required="" placeholder="Something about you"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class=" sec" data-sec="web-references">
						<div class="be-large-post">
							<div class="info-block style-2">
								<div class="be-large-post-align">
									<h3 class="info-block-label">Web References</h3>
								</div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<div class="input-col col-xs-12 col-sm-5">
										<div class="form-group focus-2">
											<div class="form-label">Link Title</div>
											<input class="form-input" type="text" placeholder="Enter title">
										</div>
									</div>
									<div class="input-col col-xs-12 col-sm-5">
										<div class="form-group focus-2">
											<div class="form-label">Link descriprion</div>
											<input class="form-input" type="text" placeholder="Enter descriprion">
										</div>
									</div>
									<div class="col-xs-12 col-sm-2">
										<a href="blog-detail-2.html" class="btn full btn-input color-1 size-4 hover-1">add</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a class="btn full color-1 size-1 hover-1 add_section"><i class="fa fa-plus"></i>add sections</a>
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
										<input class="checkbox-input" type="checkbox" required /> <span class="check-box-sign"></span>
									</label>
									<span class="large-popup-text">
										I have read and agree to the <a class="be-popup-terms" href="blog-detail-2.html">Terms of Use</a> and <a class="be-popup-terms" href="blog-detail-2.html">Privacy Policy</a>.
									</span>
								</div>
								<div class="be-checkbox">
									<label class="check-box">
										<input class="checkbox-input" type="checkbox" /> <span class="check-box-sign"></span>
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
	<!-- SCRIPT	-->
	<script src="script/jquery-2.1.4.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/idangerous.swiper.min.js"></script>
	<script src="script/isotope.pkgd.min.js"></script>
	<script src="script/jquery.viewportchecker.min.js"></script>
	<script src="script/global.js"></script>
</body>

</html>