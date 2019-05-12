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
														$image = $image . $r['f'] . '/ProfilePictures/' . $name[2];
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
															$image = $image . $r['f'] . '/ProfilePictures/' . $name[2];
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
													</a>
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
			<div class="isotope-grid row" style="text-align:center">
				<div class="tab-info active">

					<?php
					$db = new PDO("mysql:dbname=thedoctors", "root", "");
					$user = $db->quote($_SESSION['user']);
					$user2 = $_SESSION['user'];
					$friends = $db->query("SELECT * FROM friends WHERE ((f=$user or t=$user) and s='accepted');");	//all posts for this user
					$array = [];		//filles with friends
					foreach ($friends as $p) {
						if ($p['f'] === $user2) {
							$array[] = $p['t'];
						} else {
							$array[] = $p['f'];
						}
					}
					$posts = $db->query("SELECT * FROM post1 WHERE(status='Public')  Order BY timee DESC;");	//all posts for all users

					$images = array('jpg', 'png', 'jpeg', 'gif', 'PNG');
					//$video = array('mp4', 'm4a', 'm4v', 'f4v', 'f4a', 'm4b', 'f4b', 'mov', 'avi', 'AVI', 'flv', 'FLV', 'MOV', 'mov');
					$x = 0;
					foreach ($posts as $rows) {
						if (in_array($rows['UserEmail'], $array)) {

							$em = $db->quote($rows['UserEmail']);
							$Q = $db->prepare("Select * FROM user WHERE (Email=$em);");
							$Q->execute();
							$res = $Q->fetch();
							$FullName = $res['FirstName'] . " " . $res['LastName'];
							$id = $db->quote($rows['ID']);

							$media = $db->prepare("SELECT * FROM media WHERE (PostId= $id);");
							$media->execute();
							$count = $media->rowCount();

							if ($count != 0) {

								$row = $media->fetch();
								//	echo ("<script>alert('$row[2]')</script>");
								$file = "media/" . $rows['UserEmail'] . "/" . $row['file'];

								?><div class="row">
									<div class="col-ml-12 col-xs-6 col-sm-12">
										<div class="be-post">
											<a href="page1.html" style="color:black;"><?= $rows['body'] ?> </a>
											<a href="page1.html" class="be-img-block">
												<br>
												<?php
												$ext = pathinfo($row['file'], PATHINFO_EXTENSION);
												if (in_array($ext, $images)) { ?>
													<img style="width:489.98px;height:600px;" src="<?= $file ?>">
												<?php } else {
												?>
													<video style="object-fit:fill;" width="489.98px" height="600px" controls>
														<source src="<?= $file ?>" type="video/mp4">

													</video>
												<?php } ?>
											</a>

											<div class="author-post">
												<img src="<?= $_SESSION['img'] ?>" alt="" class="ava-author">
												<span>By <a href="page1.php?account=<?= $rows['UserEmail'] ?>"><?= $FullName ?></a></span><br>
												<span style=" margin-left : 27px; ">On <a><?= $rows['timee'] ?></a></span>
											</div>

											<div class="info-block">
												<?php
												$pos = $db->quote($rows['ID']);
												$query = $db->prepare("SELECT COUNT(Post_ID) FROM likes WHERE Post_ID=$pos");
												$query->execute();
												$count = $query->fetch();
												?>
												<span><i class="fa fa-thumbs-o-up" id="like<?= $x ?>_<?= $rows['ID'] ?>" style="color:#b4b7c1" onclick="like(this.id)"></i> <?= $count[0] ?></span>
												<?php

												$query = $db->query("SELECT * FROM likes");
												foreach ($query as $row) {
													if ($row['User'] == $_SESSION['user'] && $row['Post_ID'] == $rows['ID']) {
														echo ('<script>document.getElementById("like' . $x . "_" . $rows['ID'] . '").style.color="blue"</script>');
													}
												}
												?>
												<span><i class="fa fa-comment-o"></i> <?= $rows['comments'] ?></span>

											</div>
										</div>
									</div>
								</div>
							<?php
						} else {	//no media for this post so it is just text
							?>
								<div class="row">
									<div class="col-ml-12 col-xs-6 col-sm-12">
										<div class="be-post">
											<a href="page1.html" style="color:black;">
												<?= $rows['body'] ?> <br> <br>
											</a>

											<div class="author-post">
												<img src="<?= $_SESSION['img'] ?>" alt="" class="ava-author">
												<span>By <a href="page1.php?account=<?= $rows['UserEmail'] ?>"><?= $FullName ?></a></span><br>
												<span style=" margin-left : 27px; ">On <a><?= $rows['timee'] ?></a></span>
											</div>
											<div class="info-block">
												<?php
												$pos = $db->quote($rows['ID']);
												$query = $db->prepare("SELECT COUNT(Post_ID) FROM likes WHERE Post_ID=$pos");
												$query->execute();
												$count = $query->fetch();
												?>
												<span><i class="fa fa-thumbs-o-up" id="like<?= $x ?>_<?= $rows['ID'] ?>" style="color:#b4b7c1" onclick="like(this.id)"></i> <?= $count[0] ?></span>
												<?php

												$query = $db->query("SELECT * FROM likes");
												foreach ($query as $row) {
													if ($row['User'] == $_SESSION['user'] && $row['Post_ID'] == $rows['ID']) {
														echo ('<script>document.getElementById("like' . $x . "_" . $rows['ID'] . '").style.color="blue"</script>');
													}
												}
												?>
												<span><i class="fa fa-comment-o"></i> <?= $rows['comments'] ?></span>
											</div>
										</div>
									</div>
								</div>
							<?php }
					}
				} ?>
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
	<script>
		function like(id) {
			post = id.split("_")[1];
			if (document.getElementById(id).style.color != 'blue') {
				document.getElementById(id).style.color = 'blue';
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {}
				};
				xhttp.open("GET", 'like.php?post=' + post, false);
				xhttp.send();
				//send ajax request to like.php
			} else {
				document.getElementById(id).style.color = '#b4b7c1';
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {}
				};
				xhttp.open("GET", 'like.php?unlike=true&post=' + post, false);
				xhttp.send();
				//send ajax request to like.php?unlike=true
			}
		}
	</script>

</body>

</html>