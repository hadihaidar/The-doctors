<?php
session_start();
if (!isset($_SESSION['name'])) {
	header("location:index.php");
}

	if (isset($_POST['profile'])) {
		$db = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");
		$query = $db->query("SELECT * FROM user");

		foreach ($query as $row) {
				$msg="";
			if ($row['Email'] == $_SESSION['user']) {
				$first = $db->quote($_POST['first']);
				$last = $db->quote($_POST['last']);
				$occupation = $db->quote($_POST['occupation']);
				$country = $db->quote($_POST['country']);
				$e = $db->quote($row['Email']);
				$query = $db->exec("UPDATE user SET FirstName= ($first), LastName= ($last), County= ($country), Field= ($occupation) where  Email =($e)");
				if ($query) {
					$msg.="1";	//success

					$_SESSION['name'] = $_POST['first'];
					$_SESSION['last'] = $_POST['last'];
					$_SESSION['field'] = $_POST['occupation'];
					$_SESSION['country'] = $_POST['country'];
				}

				if ((empty($msg)) && empty($_FILES['img']['name'])) {	//no update
					 	echo ('<script>alert("No changes have been made!")</script>');
					}
				if ((!empty($msg)) && empty($_FILES['img']['name'])) {	// Data update only
						echo '<script>alert("Your Data has been saved!")</script>';
						}
				if(!empty($_FILES['img']['name'])){
						$e = $db->quote($row['Email']);
						if (!file_exists('media/'.$_SESSION['user'].'/ProfilePictures'.'/')) {
								mkdir('media/'.$_SESSION['user'].'/ProfilePictures'.'/', 0755, true);	  //creates directory
							}
					if(true){

							$targetFilePath =$_FILES['img']['name'];
							$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
							$targetDir = 'media/'.$_SESSION['user'].'/ProfilePictures'.'/';
					  	$allowTypes = array('jpg','png','jpeg', 'PNG','JPG');
							if ($_FILES['img']['size'] <=(1024*1) || $_FILES['img']['size'] > (125*1048576))  {	//image size restrictions
									if(empty($msg)){
												 	echo ('<script>alert("Your image is too large or too short!")</script>');
									}
									else{
												echo ('<script>alert("Data successfuly updated but the image is too large or too short!")</script>');
									}
	}
							elseif(!(in_array($fileType, $allowTypes))){		//image format restrictions
										if(empty($msg)){
											echo ('<script>alert("Please Enter a valid image format!")</script>');
										}
										else{
											echo ('<script>alert("Data successfuly updated but the image is of invalid format!")</script>');
										}

									}
							else{	//no restrictions
							$fileName = strtotime("now").'_'.($_FILES['img']['name']);  //concatenates time with image name
							$targetFilePath = $targetDir . $fileName;
								if(move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)){
									$e = ($row['Email']);
									$sqlstmt="UPDATE user SET image = :img where  Email =(:email)";
									$res = $db->prepare($sqlstmt, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
									$res->execute(array(':img' => $fileName, ':email'=>$e));
									$_SESSION['img']=$targetFilePath;
									if(empty($msg)){
											echo ('<script>alert("Profile Picture successfuly updated")</script>');
									}
									else{
											echo ('<script>alert("Your data and profile picture are successfuly updated")</script>');
									}

								}


						}

				}
			}
		}
	}
};
if (isset($_POST['about'])) {
	$db = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");
	$query = $db->query("SELECT * FROM user");

	foreach ($query as $row) {
		if ($row['Email'] == $_SESSION['user']) {
			$about = $db->quote($_POST['aboutMe']);

			$e = $db->quote($row['Email']);
			$query = $db->exec("UPDATE user SET about= ($about) where  Email =($e)");
			if ($query) {
				echo ('<script>alert("Your data has been changed")</script>');
				$_SESSION['about'] = $_POST['aboutMe'];
			} else {
				echo ('<script>alert("Something went wrong please try again")</script>');
			}
		}
	}
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
				<div class="login-header-block">
					<div class="login_block">
						<a class="notofications-popup" href="blog-detail-2.html">
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
											<a href="blog-detail-2.html">
												<img src="img/c1.png" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Ravi Sah</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<a href="blog-detail-2.html" class="noto-message">Start following your work</a>
										</div>
									</div>
								</div>
								<div class="noto-entry">
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
												Saved “<a href="blog-detail-2.html">Omni-onepage app template</a>” to Inspiration
												<a class="portfolio-link type-2 clearfix" href="blog-detail-2.html">
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
											<a href="blog-detail-2.html">
												<img src="img/c7.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">v-a studio</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												<a class="noto-left" href="blog-detail-2.html">
													<img src="img/n_pop_1.jpg" alt="">
												</a>
												Saved “<a href="blog-detail-2.html">Omni-onepage app template</a>” to Inspiration
											</div>
										</div>
									</div>
								</div>
								<div class="noto-entry">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="blog-detail-2.html">
												<img src="img/c8.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Hoang Nguyen</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												<a class="noto-left" href="blog-detail-2.html">
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
											<a href="blog-detail-2.html">
												<img src="img/c9.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Cüneyt ŞEN</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<a href="blog-detail-2.html" class="noto-message">
												Start following your work
											</a>
										</div>
									</div>
								</div>
							</div>
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
							<img class="login-user" height="20" width="24" src="<?=$_SESSION['img']?>" alt="">
							<span class="be-dropdown-content">Hi, <span><?php echo ($_SESSION['name']) ?></span></span>
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
								<li class="edit-ln"><a href="#about-me">About Me</a></li>
							</ul>
						</div>

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

							</div>
							<div class="be-large-post-align">

								<form action="author-edit.php" method="POST"  enctype ="multipart/form-data">
									<div class="be-change-ava">
										<a class="be-ava-user style-2">
											<img src="<?=$_SESSION['img']?>" alt="">
										</a>
										<a>Replace Image </a><input class="file"  type="file" name="img" id="img" style="height:18;width:94;padding-top: 0px;margin-top: 18%;margin-left: 25%;"/>
									</div>
									<div class="row">
										<div class="input-col col-xs-12 col-sm-6">
											<div class="form-group fg_icon focus-2">
												<div class="form-label">First Name</div>
												<input class="form-input" name="first" type="text" value="<?php echo ($_SESSION['name']); ?>">
											</div>
										</div>
										<div class="input-col col-xs-12 col-sm-6">
											<div class="form-group focus-2">
												<div class="form-label">Last Name</div>
												<input class="form-input" type="text" name="last" value="<?php echo ($_SESSION['last']); ?>">
											</div>
										</div>
										<div class="input-col col-xs-12">
											<div class="form-group focus-2">
												<div class="form-label">Occupation</div>
												<input class="form-input" type="text" name="occupation" value="<?php echo ($_SESSION['field']); ?>">
											</div>
										</div>

										<div class="input-col col-xs-12 ">
											<div class="form-group focus-2">
												<div class="form-label">Country</div>
												<input class="form-input" type="text" name="country" value="<?php echo ($_SESSION['country']); ?>">
											</div>
										</div>
										<div class="col-xs-12">
											<input class="btn color-1 size-2 hover-1 btn-right" name="profile" type="submit" value="Submit changes">
										</div>
									</div>
								</form>
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
							$db = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");
							$query = $db->query("SELECT * FROM user");

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


					<div class="sec" data-sec="about-me">
						<div class="be-large-post">
							<div class="info-block style-2">
								<div class="be-large-post-align">
									<h3 class="info-block-label">About Me</h3>
								</div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<form action="author-edit.php" method="POST">
										<div class="input-col col-xs-12">
											<div class="form-group focus-2">
												<div class="form-label">Description</div>
												<textarea class="form-input" name="aboutMe" required="" placeholder="Something about you"><?=$_SESSION['about']?></textarea>
											</div>
										</div>
										<div class="col-xs-12">
											<input class="btn color-1 size-2 hover-1 btn-right" name="about" type="submit" value="Add about me">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<a  href="delete.php?acc=<?=$_SESSION['user']?>" class="btn full color-1 size-1 hover-1 "><i class="fa fa-plus"></i>DELETE ACCOUNT</a>
				</div>
			</div>
		</div>
	</div>
	<div class="be-fixed-filter"></div>


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
