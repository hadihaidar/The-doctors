		<a href="#"><i class="btn color-4 size-2 hover-7"></i>Replace Image </a><input class="file" type="file"/>
    <a class="btn color-4 size-2 hover-7" onclick="">replace image</a>
<?php
    session_start();
    if (!isset($_SESSION['name'])){
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
			<span class="be-dropdown-content">Hi, <span><?php echo ($_SESSION['name'])?></span></span>
			<div class="drop-down-list a-list">
				<a href="activity.php">My Portfolio</a>
				<a href="statictics.html">Statistics </a>
				<a href="about-us.html">Work Experience</a>
				<a href="author-edit.html">Account Settings</a>
				<a href="login.php?logout">Logout</a>
			</div>
		</div>
	</div>
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
					<li id="content-w" class="en-nav active">1. Add Status</li>
					<li id="setting-w" name="setting-w" class="en-nav">2. Upload Image</li>
					<li id="cover-w" class="en-nav">3. Upload Video</li>
				</ul>

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
							<div class="be-large-post large-area" id="main">
								<div class="info-block style-2">

									<div class="be-large-post-align "><h3 class="info-block-label">Post Info</h3></div>
								</div>
								<div class="be-large-post-align" id="firstdiv">




										<form  class="" action="work.php" method="post">
											<textarea id="special" name="post" rows="10" cols="80" placeholder="What's on your mind, <?=$_SESSION['name']?>?"></textarea>

												<input type="submit" name="submitMe" class="buttons-navbar btn btn-primary" value="POST" />
												<?php
												if (isset($_POST["submitMe"])) {
													$db = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");
                          $Data = $_POST["post"];
													$postData = $db->quote($_POST["post"]);	//user's post
                          $user = $db->quote($_SESSION["user"]);	//user's email
												  $stmt = "INSERT INTO post (body,timee,likes,comments,status,userem) VALUES (:post, NOW(), :likess, :commentss, :state, :email);";
                          $sth = $db->prepare($stmt, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

                          //
													// //
													// // // set parameters and execute

													$first = ".$postData.";
                          $like= 0;
                          $comment=0;
                          $status = 1;  //public by default

                           //$stmt->bind_param("siis", $first, $like, $comment, $user);
                          // $result = $stmt->get_result();
													// header("location:activity.php");
                          if (strlen($Data)>3000 || strlen($Data)<1) {
                            	echo("<script>alert('Make sure your post has a valid length!');</script>");

                          }
                          else{
                              $sth->execute(array(':post' => $Data, ':likess' => $like, ':commentss' => $comment, ':state' => $status, ':email' => $_SESSION['user']));
													    echo("<script>alert('Post uploaded! You can check it in your profile!');</script>");
												}
                      }

												 ?>

										</form>



								</div>
                	<div class="be-large-post-align" id="seconddiv"  style="display:none;">
                    <form class="" action="work.php" method="post" enctype ="multipart/form-data">

                      <!-- <label class="btn btn-primary" for="my-file-selector">
                      <input id="my-file-selector" type="file" multiple="multiple" style="display:none"
                      onchange="$('#upload-file-info').html(this.files[0].name)">
                      Button Text Here
                      </label>
                      <span class='label label-info' id="upload-file-info"></span> -->

                      Select Files to Upload:
                     <input type="file" name="files[]" multiple >
                     <textarea id="special" name="post2" rows="10" cols="80" placeholder="What's on your mind, <?=$_SESSION['name']?>?"></textarea>

                            <input type="submit" name="submitIt" class="buttons-navbar btn btn-primary" value="Upload" />

</form>


</div>






                  <div class="be-large-post-align" id="thirddiv" style="display:none;">this is working! </div>

                  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
                  <script type="text/javascript">

                  $("#setting-w").on("click", function(){
                  $("#firstdiv").fadeOut(1, function() {
                  $("#seconddiv").fadeIn(1, function() {
                    });
                  $("#thirddiv").fadeOut(1, function() {
                    });
                  });
                  });

                  $("#content-w").on("click", function(){
                  $("#seconddiv").fadeOut(0.1, function() {
                  $("#firstdiv").fadeIn(0.1, function() {
                    });
                  $("#thirddiv").fadeOut(0.1, function() {
                      });
                  });
                  });

                  $("#cover-w").on("click", function(){
                  $("#seconddiv").fadeOut(0.1, function() {
                  $("#firstdiv").fadeOut(0.1, function() {
                    });
                  $("#thirddiv").fadeIn(0.1, function() {
                    });
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
  <!---                            PHP SCRIPT FOR FILE UPLOAD                                  --->

                  <?php
                        if(isset($_POST['submitIt'])){
                          if((strlen($_POST['post2'])<1) && empty(array_filter($_FILES['files']['name'])) ){  //nothing to upload
                            echo "<script>alert('Please Add Something to upload!');</script>";

                          }

                          else{ //either post or file or both
                            if(empty(array_filter($_FILES['files']['name']))){  //post is only text
                            if((strlen($_POST['post2'])>9999) || (strlen($_POST['post2'])<1) ){ //check restrictions
                              die ("Make sure your post have a valid length!");
                            }
                          }
                            //creates a post
                            $db2 = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");    //insert procedure
                            $user2 = $db2->quote($_SESSION["user"]);	//user's email
                            $ID = $_SESSION["user"].strtotime("now");
                            $Data2 = $_POST["post2"];
                            $stmt2 ="INSERT INTO post1(ID,timee,UserEmail,likee,comments,body) VALUES (:id, NOW(), :email, :likes, :comments, :body)";
                            $sth2 = $db2->prepare($stmt2, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
                            $like= 0;
                            $comment=0;

                            $sth2->execute(array(':id' => $ID, ':email' =>  $_SESSION['user'], ':likes' => $like, ':comments' => $comment, ':body' =>$Data2));
                            $msg="Your Post is uploaded successfuly!";
                              if (!file_exists('media/'.$_SESSION['user'])) {
                                  mkdir('media/'.$_SESSION['user'], 0755, true);
                                    }

                          //    mkdir('img/'.$_SESSION['user'], 0755, true);
                              if(!empty(array_filter($_FILES['files']['name']))){
                              $targetDir = 'media/'.$_SESSION['user'].'/';    //creates directory
                              $allowTypes = array('jpg','png','jpeg','gif', 'PNG', 'mp4', 'm4a', 'm4v', 'f4v', 'f4a', 'm4b', 'f4b', 'mov', 'avi', 'AVI', 'flv', 'FLV', 'MOV', 'mov'); //allowed file extentions
                              $testing =false;  //check if a caption is added
                              if (strlen($_POST['post2'])>=1){$testing=true;} //post exists

                                foreach($_FILES['files']['name'] as $key=>$val){
                                  $targetFilePath =($_FILES['files']['name'][$key]);
                                  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                                  if(!(in_array($fileType, $allowTypes))){
                                    if($testing===false){   //deletes post already created if the file is not valid and text is empty
                                      $db3 = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");
                                      $ID2 = $_SESSION["user"].strtotime("now");
                                      $stmt3 ="DELETE FROM post1 WHERE ID= :id ";
                                      $sth3 = $db3->prepare($stmt3, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
                                      $sth3->execute(array(':id' => $ID2));
                                    }
                                    die("<script>alert('Please Enter a valid file!')</script>;");
                                  }
                                }

                                //add files to media table
                                  foreach($_FILES['files']['name'] as $key=>$val){  //loops over files uploaded

                                      $fileName = strtotime("now").'_'.($_FILES['files']['name'][$key]);  //concatenates time with image name
                                      $targetFilePath = $targetDir . $fileName;

                                      // Check whether file type is valid
                                      $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                                        if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                                            $db4 = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");    //insert procedure
                                            $ID4 = $_SESSION["user"].strtotime("now");
                                            $stmt4 ="INSERT INTO media VALUES (NULL,$ID4,':file')";
                                            $sth4 = $db4->prepare($stmt4, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
                                            $sth4->execute(array(':file'=>$fileName));
                                            $msg="Your files are uploaded successfully";

                                        }


                                  }


                              }
                                  echo("<script>alert('$msg')</script>;");
  }
}

     ?>
	</body>
</html>
