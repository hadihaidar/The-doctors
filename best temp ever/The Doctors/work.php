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
	<link rel="stylesheet" href="style/jquery-ui.css">
	<link rel="stylesheet" href="style/stylesheet.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
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
							<div class="noto-label">Your Messages</div>
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
	<div id="content-block" class="work-box">
		<div class="editor-menu">
			<div class="container">
				<ul class="editor-nav">
					<li id="setting-w" name="setting-w" class="en-nav active">Upload Post</li>
				</ul>

			</div>
		</div>
	</div>
	<div class="container be-detail-container">
		<div class="row">
			<div class="col-xs-12 col-md-9 _editor-content_">
				<div class="sec" data-sec="basic-information">
					<div class="be-large-post large-area" id="main">
						<div class="info-block style-2">

							<div class="be-large-post-align ">
								<h3 class="info-block-label">Post Info</h3>
							</div>
						</div>
						<!-- <div class="be-large-post-align" id="firstdiv">




										<form  class="" action="work.php" method="post">
											<textarea id="special" name="post" rows="10" cols="80" placeholder="What's on your mind, <?= $_SESSION['name'] ?>?"></textarea>

												<input type="submit" name="submitMe" class="buttons-navbar btn btn-primary" value="POST" />
												<?php
												if (isset($_POST["submitMe"])) {
													$db = new PDO("mysql:dbname=thedoctors", "root", "");
													$Data = $_POST["post"];
													$postData = $db->quote($_POST["post"]);	//user's post
													$user = $db->quote($_SESSION["user"]);	//user's email
													$stmt = "INSERT INTO post (body,timee,likes,comments,status,userem) VALUES (:post, NOW(), :likess, :commentss, :state, :email);";
													$sth = $db->prepare($stmt, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

													//
													// //
													// // // set parameters and execute

													$first = ".$postData.";
													$like = 0;
													$comment = 0;
													$status = 1;  //public by default

													//$stmt->bind_param("siis", $first, $like, $comment, $user);
													// $result = $stmt->get_result();
													// header("location:activity.php");
													if (strlen($Data) > 3000 || strlen($Data) < 1) {
														echo ("<script>alert('Make sure your post has a valid length!');</script>");
													} else {
														$sth->execute(array(':post' => $Data, ':likess' => $like, ':commentss' => $comment, ':state' => $status, ':email' => $_SESSION['user']));
														echo ("<script>alert('Post uploaded! You can check it in your profile!');</script>");
													}
												}

												?>

										</form>



								</div> -->
						<div class="be-large-post-align" id="seconddiv">
							<form class="" action="work.php" method="post" enctype="multipart/form-data">

								<!-- <label class="btn btn-primary" for="my-file-selector">
                      <input id="my-file-selector" type="file" multiple="multiple" style="display:none"
                      onchange="$('#upload-file-info').html(this.files[0].name)">
                      Button Text Here
                      </label>
                      <span class='label label-info' id="upload-file-info"></span> -->
								<div style="text-align:right;">
									<button style="border:none; background:none;" type="button" name="button" onclick="showlist()"><img width="40px" height="40px" src="media/icon.jpg" alt=""></button>
									<div id="mobidrop" style="display:none;float:right;" onchange="hidelist()">
										<select class="" name="status">
											<option value="Public">Public</option>
											<option value="Private">Private</option>
										</select>
									</div>

								</div>
								<script>
									function showlist() {
										document.getElementById("mobidrop").style.display = "";
									}

									function hidelist() {
										document.getElementById("mobidrop").style.display = "none";
									}
								</script>
								Select Files to Upload:
								<input type="file" name="files[]" multiple>

								<textarea id="special" name="post2" rows="10" cols="80" placeholder="What's on your mind, <?= $_SESSION['name'] ?>?"></textarea>

								<input type="submit" name="submitIt" class="buttons-navbar btn btn-primary" value="Upload" />

							</form>


						</div>
						<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
						<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
						<script type="text/javascript">
							$("#setting-w").on("click", function() {
								$("#firstdiv").fadeOut(1, function() {
									$("#seconddiv").fadeIn(1, function() {});
									$("#thirddiv").fadeOut(1, function() {});
								});
							});

							$("#content-w").on("click", function() {
								$("#seconddiv").fadeOut(0.1, function() {
									$("#firstdiv").fadeIn(0.1, function() {});
									$("#thirddiv").fadeOut(0.1, function() {});
								});
							});

							$("#cover-w").on("click", function() {
								$("#seconddiv").fadeOut(0.1, function() {
									$("#firstdiv").fadeOut(0.1, function() {});
									$("#thirddiv").fadeIn(0.1, function() {});
								});
							});
						</script>
					</div>

				</div>

			</div>
		</div>
	</div>
	</div>
	</div>
	<div class="be-fixed-filter"></div>
	<div class="mini-popup-wrapper brand-popup">


		<div class="mini-popup ">
			<i class="fa close-mini fa-times"></i>
			<h3>Add Brand</h3>
			<form action="./">
				<input type="text"><br>
				<button type="button" class="btn btn-primary">DONE</button>
			</form>
		</div>
	</div>
	<div class="mini-popup-wrapper school-popup">
		<div class="mini-popup ">
			<i class="fa close-mini fa-times"></i>
			<h3>Add School</h3>
			<form action="./">
				<input type="text"><br>
				<button type="button" class="btn btn-primary">DONE</button>
			</form>
		</div>
	</div>
	<div class="mini-popup-wrapper tools-popup">
		<div class="mini-popup ">
			<i class="fa close-mini fa-times"></i>
			<h3>Add Tools</h3>
			<form action="./">
				<input type="text"><br>
				<button type="button" class="btn btn-primary">DONE</button>
			</form>
		</div>
	</div>
	<div class="mini-popup-wrapper team-popup">
		<div class="mini-popup ">
			<i class="fa close-mini fa-times"></i>
			<h3>Add Team</h3>
			<form action="./">
				<input type="text"><br>
				<button type="button" class="btn btn-primary">DONE</button>
			</form>
		</div>
	</div>
	<div class="mini-popup-wrapper agencies-popup">
		<div class="mini-popup ">
			<i class="fa close-mini fa-times"></i>
			<h3>Add Agencies</h3>
			<form action="./">
				<input type="text"><br>
				<button type="button" class="btn btn-primary">DONE</button>
			</form>
		</div>
	</div>
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
	<div class="large-popup embed">
		<div class="large-popup-fixed"></div>
		<div class="container large-popup-container">
			<div class="row">
				<div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 large-popup-content">
					<div class="row">
						<div class="col-md-12">
							<i class="fa fa-times close-button close-media"></i>
							<h5 class="large-popup-title">Embed Media</h5>
						</div>
						<div class="col-md-12">
							<form action="./">
								<textarea class="main-textarea"></textarea>
								<input type="submit" class="be-popup-sign-button" value="Embed" />
							</form>
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

	<!-- SCRIPT	-->
	<script src="script/jquery-2.1.4.min.js"></script>
	<script src="script/jquery-ui.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/idangerous.swiper.min.js"></script>
	<script src="script/isotope.pkgd.min.js"></script>
	<script src="script/jquery.viewportchecker.min.js"></script>
	<script src="script/colors.js"></script>
	<script src="script/jqColorPicker.js"></script>
	<script src="script/global.js"></script>
	<!---                            PHP SCRIPT FOR FILE UPLOAD                                  --->

	<?php
	$db2 = new PDO("mysql:dbname=thedoctors", "root", "");
	if (isset($_POST['submitIt'])) {
		if ((strlen($_POST['post2']) < 1) && empty(array_filter($_FILES['files']['name']))) {  //nothing to upload
			echo "<script>alert('Please Add Something to upload!');</script>";
		} else { //either post or file or both
			if (empty(array_filter($_FILES['files']['name']))) {  //post is only text
				if ((strlen($_POST['post2']) > 9999)) { //check restrictions
					die("Text too long!");
				} else {
					//insert procedure
					$user2 = $db2->quote($_SESSION["user"]);	//user's email
					$ID = $_SESSION["user"] . strtotime("now");
					$Data2 = $_POST["post2"];
					$state = $_POST['status'];
					$stmt2 = "INSERT INTO post1(ID,timee,UserEmail,status,likee,comments,body) VALUES (:id, NOW(), :email, :s, :likes, :comments, :body)";
					$sth2 = $db2->prepare($stmt2, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
					$like = 0;
					$comment = 0;

					$sth2->execute(array(':id' => $ID, ':email' =>  $_SESSION['user'], ':s' =>  $state, ':likes' => $like, ':comments' => $comment, ':body' => $Data2));
					$msg = "Your Post is uploaded successfuly!";
				}
			} else {
				if (!file_exists('media/' . $_SESSION['user'])) {
					mkdir('media/' . $_SESSION['user'], 0755, true);  //creates directory
				}
				$targetDir = 'media/' . $_SESSION['user'] . '/';
				$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'PNG', 'mp4', 'm4a', 'm4v'); //allowed file extentions
				foreach ($_FILES['files']['name'] as $key => $val) {
					$targetFilePath = ($_FILES['files']['name'][$key]);
					$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
					if (!(in_array($fileType, $allowTypes))) {
						die("<script>alert('Please Enter a valid file!')</script>;");
					}
				}
				//insert procedure
				$user2 = $db2->quote($_SESSION["user"]);	//user's email
				$ID = $_SESSION["user"] . strtotime("now");
				$Data2 = $_POST["post2"];
				$state = $_POST['status'];
				$stmt2 = "INSERT INTO post1(ID,timee,UserEmail,status,likee,comments,body) VALUES (:id, NOW(), :email, :s, :likes, :comments, :body)";
				$sth2 = $db2->prepare($stmt2, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
				$like = 0;
				$comment = 0;

				$sth2->execute(array(':id' => $ID, ':email' =>  $_SESSION['user'], ':s' =>  $state, ':likes' => $like, ':comments' => $comment, ':body' => $Data2));
				//add files to media table
				foreach ($_FILES['files']['name'] as $key => $val) {  //loops over files uploaded

					$fileName = strtotime("now") . '_' . ($_FILES['files']['name'][$key]);  //concatenates time with image name
					$targetFilePath = $targetDir . $fileName;

					// Check whether file type is valid
					$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
					if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
						$ID4 = $_SESSION["user"] . strtotime("now");
						$stmt4 = "INSERT INTO media VALUES (NULL,:id,:file)";
						$sth4 = $db2->prepare($stmt4, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
						$sth4->execute(array(':id' => $ID, ':file' => $fileName));
						$msg = "Your files are uploaded successfully";
					}
				}
			}
			echo ("<script>alert('$msg')</script>");
		}
	}
	?>
</body>

</html>