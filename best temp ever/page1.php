<?php session_start();
if (!isset($_SESSION['name'])) {
	header("location:index.php");
}
if ($_REQUEST['account'] == $_SESSION['user']) {
	header("location:author-login.php");
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
	<link rel="stylesheet" href="style/magnific.css">
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
												<a href="page1.php?account=<?= $r['f'] ?>">
													<img src="img/c1.png" alt="" class="be-ava-comment">
												</a>
											</div>
											<div class="noto-text">
												<div class="noto-text-top">
													<?php
													$fr = $db->quote($r['f']);
													$u = $db->query("SELECT FirstName,LastName FROM `user` WHERE (Email=$fr)");
													$n = "";
													foreach ($u as $name) {
														$n = $name[0] . " " . $name[1];
													}
													?>
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
							$db = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");
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
													<img src="img/c10.jpg" alt="" class="be-ava-comment">
												</a>
											</div>
											<div class="noto-text">
												<div class="noto-text-top">
													<?php
													$u = $db->quote($r['f']);
													$u = $db->query("SELECT FirstName,LastName FROM `user` WHERE (Email=$u)");
													$n = "";
													foreach ($u as $name) {
														$n = $name[0] . " " . $name[1];
													}
													?>
													<span class="noto-name"><a href="page1.php?account=<?= $r['f'] ?>"><?= $n ?></a></span>
													<span class="noto-date"><i class="fa fa-clock-o"></i> <?= $r['time'] ?></span>
												</div>
												<div class="noto-message">
													<?= $r['body'] ?>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
						<div class="be-drop-down login-user-down" style="padding-top: 10px;">
							<img class="login-user" height="20" width="24" src="<?= $_SESSION['img'] ?>" alt="">
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
		<div class="container custom-container be-detail-container">
			<div class="row">
				<div class="col-md-9 col-md-push-3">

					<div class="row">



								<?php
										$email = $db->quote($_REQUEST['account']);
										$images = array('jpg','png','jpeg','gif', 'PNG');
										$thiss=$_REQUEST['account'];
										$posts = $db->query("SELECT * FROM post1 WHERE(status='Public' and UserEmail=$email)  Order BY timee DESC;");	//all posts for this user and set public
										if ($posts->rowCount()==0){	//all posts are private
											echo"<h2 style='text-align:center;'>No posts to show</h2>";
										}
										else{
											foreach ($posts as $rows) {

													$id =$db->quote($rows['ID']);
													$media=$db->prepare("SELECT * FROM media WHERE (PostId= $id);");
													$media->execute();
													$count=$media->rowCount();

													if ($count!=0){

															$row = $media->fetch();
														//	echo ("<script>alert('$row[2]')</script>");
															$file="media/".$thiss."/".$row['file'];

														?><div class="row">
															<div class="col-ml-12 col-xs-6 col-sm-8">
																<div class="be-post">
																	<a style="color:black;"><?=$rows['body']?> </a>
																	<a href="page1.html" class="be-img-block">
																	<br>
																	<?php
																		$ext = pathinfo($row['file'], PATHINFO_EXTENSION);
																		if (in_array($ext,$images)){ ?>
																				<img style="width:489.98px;height:600px;" src="<?=$file?>" >
																			<?php }
																	else{	//It is a video ?>
																			<video style="object-fit:fill;" width="489.98px" height="600px" controls>
																			<source src="<?=$file?>" type="video/mp4">

																			</video>
																												<?php } ?>
																	</a>

																	<div class="author-post">
																			<img src="<?=$_SESSION['img']?>" alt="" class="ava-author">
																		<span>By <a href="author.php"><?=$n?></a></span><br>
																		<span style=" margin-left : 27px; ">On <a href="author.php"><?=$rows['timee']?></a></span>
																	</div>

																	<div class="info-block">
																		<span><i class="fa fa-thumbs-o-up"></i> <?=$rows['likee']?></span>
																		<span><i class="fa fa-comment-o"></i> <?=$rows['comments']?></span>
																	</div></div></div></div>

					<?php 					}
					else{?>
						<div class="row">
						<div class="col-ml-12 col-xs-6 col-sm-12">
								<div class="be-post">
									<a style="color:black;">
										<?=$rows['body']?> <br> <br>
									</a>

									<div class="author-post">
										<img src="<?=$_SESSION['img']?>" alt="" class="ava-author">
										<span>By <a href="page1.php?account=<?= $rows['UserEmail'] ?>"><?=$FullName?></a></span><br>
										<span style=" margin-left : 27px; ">On <a><?=$rows['timee']?></a></span>
									</div>
									<div class="info-block">
										<span><i class="fa fa-thumbs-o-up"></i> <?=$rows['likee']?></span>
										<span><i class="fa fa-comment-o"></i> <?=$rows['comments']?></span>
									</div>
								</div>
							</div>
						</div>

			<?php 	}
		}}

										?>



					</div>
					<div class="be-comment-block" style="border-color:white">



					</div>
				</div>
				<div class="col-md-3 col-md-pull-9 left-feild">
					<?php
					$email = $db->quote($_REQUEST['account']);
					$query = $db->query("SELECT * FROM user WHERE (Email=$email);");
					foreach ($query as $row) {
						?>
						<div class="be-user-block">
							<div class="be-user-detail">
								<a class="be-ava-user" href="blog-detail-2.html">
									<img src="img/ava.png" alt="">
								</a>
								<p class="be-use-name"><?= $row['FirstName'] . " " . $row['LastName'] ?></p>
								<span class="be-user-info">
									<?= $row['County'] ?>
								</span>
							</div>
							<div class="be-user-activity-block">
								<div class="row">
									<div class="col-lg-6">
										<?php
										$fr = $db->query("SELECT * FROM friends;");
										$count = 0;
										foreach ($fr as $r) {
											if ($r['f'] == $_REQUEST['account'] && $r['t'] == $_SESSION['user'] && $r['s'] == 'pending') {
												$count = 1;
												?>
												<form action="Add.php?to=<?= $_REQUEST['account'] ?>" method="post">
													<input type="submit" value="Accept" name="accept" class="be-user-activity-button">
													<input type="submit" value="Reject" name="reject" class="be-user-activity-button">
												</form>
											<?php
										} elseif ($r['f'] == $_REQUEST['account'] && $r['t'] == $_SESSION['user'] && $r['s'] == 'accepted') {
											$count = 1
											?>
												<form action="Add.php?to=<?= $_REQUEST['account'] ?>" method="post">
													<input type="submit" value="Unfriend" name="unfriend" class="be-user-activity-button">
												</form>
											<?php
										} elseif ($r['t'] == $_REQUEST['account'] && $r['f'] == $_SESSION['user'] && $r['s'] == 'accepted') {
											$count = 1
											?>
												<form action="Add.php?to=<?= $_REQUEST['account'] ?>" method="post">
													<input type="submit" value="Unfriend" name="delete" class="be-user-activity-button">
												</form>
											<?php
										} elseif ($r['t'] == $_REQUEST['account'] && $r['f'] == $_SESSION['user'] && $r['s'] == 'pending') {
											$count = 1;
											?>
												<form action="Add.php?to=<?= $_REQUEST['account'] ?>" method="post">
													<input type="submit" value="Cancel" name="cancel" class="be-user-activity-button">
												</form>
											<?php
										}
									}
									if ($count == 0) {
										?>

											<form action="Add.php?to=<?= $_REQUEST['account'] ?>" method="post">
												<input type="submit" value="Add" name="add" class="be-user-activity-button">
											</form>
										<?php
									}
									?>
									</div>
									<div class="col-lg-6">
										<a href="message.php?from=<?=$_REQUEST['account']?>" class="col-lg-6 be-user-activity-button  be-message-type"><!--send-btn add it to the class before --><i class="fa fa-envelope-o"></i>MESSAGE</a>
									</div>
								</div>
							</div>
							<h5 class="be-title">
								About
							</h5>
							<p class="be-text-userblock">
								<?= $row['about'] ?>
							</p>
						</div>

					</div>
					<div class="pagination">

					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
	<?php } ?>

	<div class="be-fixed-filter"></div>


	<div class="large-popup send-m">
		<div class="large-popup-fixed"></div>
		<div class="container large-popup-container">
			<div class="row">
				<div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 large-popup-content">
					<div class="row">
						<div class="col-md-12">
							<i class="fa fa-times close-m close-button"></i>
							<h5 class="large-popup-title">Send message</h5>
						</div>
						<form action="send.php?to=<?= $_REQUEST['account'] ?>" method="post" class="popup-input-search">
							<div class="col-md-12">
								<textarea class="message-area" placeholder="Message" name='message'></textarea>
							</div>
							<div class="col-md-12 for-signin">
								<input type="submit" value="SEND" name='send'>
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
	<!-- SCRIPTS	 -->
	<script src="script/jquery-2.1.4.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/idangerous.swiper.min.js"></script>
	<script src="script/isotope.pkgd.min.js"></script>
	<script src="script/jquery.viewportchecker.min.js"></script>
	<script src="script/magnific.js"></script>
	<script src="script/global.js"></script>
</body>

</html>
