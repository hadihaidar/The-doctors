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
						<img class="logo-c active be_logo" src="img/Doctors.png" style="width:121px;height:37px"; alt=" logo">
						<img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo2">
						<img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo3">
						<img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo4">
					</a>
				</div>
				<div class="header-menu-block">
					<button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
					<ul class="header-menu" id="one">
						<li><a href="activity.php">Activity</a></li>
						<li><a href="search.php">Search</a></li>
						<li><a href="author.php">My Profile</a></li>
						<li id="ad-work-li"><a id="add-work-btn" class="btn color-1" href="work.php">Add Work </a></li>
					</ul>
				</div>
				<div class="be-drop-down login-user-down" style="width: max-content;float: right;padding-top: 25px;">
					<img class="login-user" src="img/login.jpg" alt="">
					<span class="be-dropdown-content">Hi, <span><?php echo ($_SESSION['name']) ?></span></span>
					<div class="drop-down-list a-list">
						<a href="author.php">My Profile</a>
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
					<form action="search.php" method="POST" class="input-search">
						<input type="text" required placeholder="Enter keyword" name='name'>
						<i class="fa fa-search"></i>
						<input type="submit" name="search" value="">
					</form>
				</div>
			</div>
		</div>
		<div class="container-fluid custom-container">
			<div class="row">
				<div class="col-md-12">
					<div id="container-mix" class="row _post-container_">
						<?php
						if (isset($_POST['search'])) {
							$db = new PDO("mysql:dbname=thedoctors", "root", "");
							$name = strtolower($_POST['name']) . " !@#$%^&&";
							$name = explode(" ", $name);
							$query = $db->query("SELECT * FROM user ");
							$COUNT = 0;
							foreach ($query as $row) {
								if ($row['verified'] == 1) {
									if (strtolower($row['FirstName']) == $name[0] || strtolower($row['LastName']) == $name[1] || strtolower($row['FirstName']) == $name[1] || strtolower($row['LastName']) == $name[0]) {
										$COUNT = 1;
										?>
										<div class="category-1 mix custom-column-5">
											<div class="be-post">
												<a href="page1.php?account=<?= $row['Email'] ?>" class="be-img-block">
													<img src="img/p1.jpg" alt="omg">
												</a>
												<div class="author-post" style="font-size: 16px;">
													<span><a href="page1.php?account=<?= $row['Email'] ?>"><b><?php echo ($row['FirstName'] . " " . $row['LastName']); ?></b></a></span>
												</div>

											</div>
										</div>
									<?php
								}
							}
						}
					}

					?>

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
