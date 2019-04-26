<?php
    session_start();


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
	<body data-spy="scroll" data-target="blog-detail-2.htmlscrollspy">

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
				<div class="header-menu-block">
					<button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
					<ul class="header-menu" id="one">
						<li><a href="activity.php">Activity</a></li>
						<li><a href="search.html">Discover</a>
							<ul>
								<li><a href="search.html">Explore</a></li>
								<li><a href="people.html">People</a></li>
								<li><a href="gallery.html">Galleries</a></li>
							</ul>
						</li>
						<li><a href="author-login.html">My Portfolio</a></li>
						<li><a href="site-map.html">Site Map</a></li>
						<li id="ad-work-li"><a id="add-work-btn" class="btn color-1" href="work.php" >Add Posts </a></li>
					</ul>
				</div>
				<div class="login-header-block">
					<div class="login_block">
						<a class="btn-login btn color-1 size-2 hover-2" href="blog-detail-2.html" <?php if(isset($_SESSION['name'])) echo 'style="display:none"';?>><i class="fa fa-user"></i>
						Log in</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- MAIN CONTENT -->
	<div id="content-block" class="work-box">
		<div class="editor-menu">
			<div class="container">
				<ul class="editor-nav">
					<li id="content-w" class="en-nav active">1. Content</li>
					<li id="setting-w" class="en-nav">2. Setting</li>
				</ul>

			</div>
		</div>
		<div class="work-area">
			<div class="setting-popup">
				<div class="cover-box s-cover-box">
					<div class="setting-form">
						<form>
							<div class="form-group">
								<label for="in1">Creative Fields</label>
								<input type="text" class="form-control" id="in1">
							</div>
							<div class="form-group">
								<label >Project Tags</label>
								<textarea ></textarea>
							</div>
							<div class="form-group">
								<label >Email address</label>
								<textarea ></textarea>
							</div>
						</form>
					</div>
					<div class="setting-block">
						<div class="settings-row cfix">
							<div class="left settings-label">Extra Info:</div>
							<div class="left settings-option">
								<div class="settings-sub-option cfix">
									<div class="left settings-note st-label">
										<span class="grey">For a Brand/Company</span>
									</div>
									<div class="right fake-link" id="add-brand">+ Add Brand</div>
								</div>

								<div class="settings-sub-option cfix">
									<div class="left settings-note st-label">
										<span class="grey">For an Agency</span>
									</div>
									<div class="right fake-link" id="add-agency">+ Add Agency</div>
								</div>

								<div class="settings-sub-option cfix">
									<div class="left settings-note st-label">
										<span class="grey">For a School</span>
									</div>
									<div class="right fake-link" id="add-school">+ Add School</div>
								</div>
							</div>
							<div class="left settings-label">Tools Used:</div>
							<div class="left settings-option">
								<div class="settings-sub-option cfix">
									<div class="left settings-note st-label">
										<span class="grey">Software, Hardware, Materials...</span>
									</div>
									<div class="right fake-link" id="tools">+ Add Tools</div>
								</div>
							</div>
							<div class="left settings-label">For a Team:</div>
							<div class="left settings-option">
								<div class="settings-sub-option cfix">
									<div class="left settings-note st-label">
										<span class="grey">This project isn't on any team.</span>
									</div>
									<div class="right fake-link" id="team">+ Add Team</div>
								</div>
							</div>
						</div>
					</div>
					<div class="popup-buttons right-buttons">
						<button type="button" class="btn btn-primary">Save Changes</button>
						<button type="button" class="btn btn-success">Publish</button>
					</div>
				</div>
			</div>
			<div class="container be-detail-container">
				<div class="row">
					<div class="col-xs-12 col-md-3 st-col left-feild">
						<div class="be-vidget behance-style" >
							<h3 class="letf-menu-article">
								ADD MEDIA
							</h3>
							<div class="creative_filds_block">
								<ul class="ul nav b-work-list">
									<li ><a href="#"><i class="fa fa-cloud-upload "></i>Upload Files</a><input class="file" type="file"/></li>
									<li id="media" ><a href="#"><i class="fa fa-pencil-square-o"></i>Embed media</a></li>
									<li ><a href="#"><i class="fa fa-text-width"></i>Add text</a></li>
									<li ><a href="#"><i class="fa fa-cloud"></i>Creative cloud</a></li>
								</ul>
							</div>
						</div>
						<div class="be-vidget  behance-style">

						</div>

					</div>
					<div class="col-xs-12 col-md-9 _editor-content_">
						<div class="sec"  data-sec="basic-information">
							<div class="be-large-post large-area">
								<div class="info-block style-2">

									<div class="be-large-post-align "><h3 class="info-block-label">Post Info</h3></div>
								</div>
								<div class="be-large-post-align">




										<form class="" action="work.php" method="post">
											<textarea id="special" name="post" rows="10" cols="80" placeholder="What's on your mind, <?=$_SESSION['name']?>"></textarea>


										</form>
								</div>
								<div class="buttons-navbar">
									<input type="submit" class="btn btn-primary" value="POST" />
								</div>

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
								<textarea class="main-textarea" ></textarea>
								<input type="submit" class="be-popup-sign-button" value="Embed"/>
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
	<script src="script/jquery-ui.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/idangerous.swiper.min.js"></script>
	<script src="script/isotope.pkgd.min.js"></script>
	<script src="script/jquery.viewportchecker.min.js"></script>
	<script src="script/colors.js"></script>
	<script src="script/jqColorPicker.js"></script>
	<script src="script/global.js"></script>
	</body>
</html>