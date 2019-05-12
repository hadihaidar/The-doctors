<?php
session_start();
if (!isset($_SESSION['name'])) {
	header("location:index.php");
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
	<link rel="stylesheet" href="style/stylesheet.css">

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
												<a href="page1.php?account=<?=$r['f']?>">
													<img src="img/c1.png" alt="" class="be-ava-comment">
												</a>
											</div>
											<div class="noto-text">
												<div class="noto-text-top">
													<?php
														$fr = $db->quote($r['f']);
														$u = $db->query("SELECT FirstName,LastName FROM `user` WHERE (Email=$fr)");
														$n="";
														foreach($u as $name){
															$n=$name[0]." ".$name[1];
														}
													?>
													<span class="noto-name"><a href="page1.php?account=<?=$r['f']?>"><?=$n?></a></span>
													<span class="noto-date"><i class="fa fa-clock-o"></i> <?=$r['time']?></span>
												</div>
												<a  class="noto-message">
												<?php
													if($r['type']=='sent'){
														echo("Sent you a friend request");
													}
													if($r['type']=='accepted'){
														echo("Accepted your friend request");
													}
													if($r['type']=='Liked'){
														echo("Liked a post of yours");
													}
													if($r['type']=='commented'){
														echo("Commented on your post");
													}
													if($r['type']=='shared'){
														echo("Shared your post");
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
				<div class="col-xs-12 col-md-4 left-feild">
					<div class="be-user-block style-3">
						<div class="be-user-detail">
							<a class="be-ava-user style-2" href="page1.html">
								<img  height="115" width="115" src="<?=$_SESSION['img']?>" alt=""><!-- should be the profile picture of the user-->
							</a>
							<a class="be-ava-left btn color-1 size-2 hover-1" href="author-edit.php"><i class="fa fa-pencil"></i>Edit</a>
							<p class="be-use-name"><?php echo($_SESSION['name']." ".$_SESSION['last']);?></p>
							<div class="be-user-info">
								<?= $_SESSION['country'] ?>
							</div>


						</div>
						<div class="be-user-statistic">

							<div class="stat-row clearfix"><i class="stat-icon icon-followers-b"></i>Friends<span class="stat-counter">2208</span></div>
						</div>
					</div>
					<div class="be-desc-block">
						<div class="be-desc-author">
							<div class="be-desc-label">About Me</div>
							<div class="clearfix"></div>
							<div class="be-desc-text">
								Nam sit amet massa commodo, tristique metus at, consequat turpis. In vulputate justo at auctor mollis. Aliquam non sagittis tortor. Duis tristique suscipit risus, quis facilisis nisl congue vitae. Nunc varius pellentesque scelerisque. Etiam quis massa vitae lectus placerat ullamcorper pellentesque vel nisl.
							</div>
						</div>
						<div class="be-desc-author">
							<div class="be-desc-label">My Values</div>
							<div class="clearfix"></div>
							<div class="be-desc-text">
								Sed dignissim scelerisque pretium. Vestibulum vel lacus laoreet nunc fermentum maximus. Proin id sodales sem, at consectetur urna. Proin vestibulum, erat a hendrerit sodales, nulla libero ornare dolor.
							</div>
						</div>
						<div class="be-desc-author">
							<div class="be-desc-label">My Skills</div>
							<div class="clearfix"></div>
							<div class="be-desc-text">
								Praesent pharetra eget ante nec sodales. Sed et orci sit amet justo lobortis luctus. Curabitur sit amet congue purus. Sed arcu lectus, suscipit in finibus id, consequat sagittis arcu.
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-8">
					<div class="tab-wrapper style-1">
						<div class="tab-nav-wrapper">
							<div class="nav-tab  clearfix">
								<div class="nav-tab-item active">
									<span>Posts</span>
								</div>

							</div>
						</div>
						<div class="tabs-content clearfix">
							<div class="tab-info active">

									<?php
									$db = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");
									$user = $db->quote($_SESSION['user']);
									$user2=$_SESSION['user'];
									$posts = $db->query("SELECT * FROM post1 WHERE (UserEmail=$user);");	//all posts for this user
									$images = array('jpg','png','jpeg','gif', 'PNG');
									//$video = array('mp4', 'm4a', 'm4v', 'f4v', 'f4a', 'm4b', 'f4b', 'mov', 'avi', 'AVI', 'flv', 'FLV', 'MOV', 'mov');
									foreach ($posts as $rows) {

											$id =$db->quote($rows['ID']);
											$media=$db->prepare("SELECT * FROM media WHERE (PostId= $id);");
											$media->execute();
											$count=$media->rowCount();

											if ($count!=0){

													$row = $media->fetch();
												//	echo ("<script>alert('$row[2]')</script>");
													$file="media/".$user2."/".$row['file'];

												?><div class="row">
													<div class="col-ml-12 col-xs-6 col-sm-8">
														<div class="be-post">
															<a  href="page1.html"><?=$rows['body']?> </a>
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
																<span>By <a href="author.php"><?=$_SESSION['name']." ".$_SESSION['last']?></a></span><br>
																<span style=" margin-left : 27px; ">On <a href="author.php"><?=$rows['timee']?></a></span>
															</div>
															<div class="info-block">
																<span><i class="fa fa-thumbs-o-up"></i> <?=$rows['likee']?></span>
																<span><i class="fa fa-comment-o"></i> <?=$rows['comments']?></span>
																<div style="text-align:right;" >
																	<button style="border:none; background:none;" type="button" name="button" onclick="showlist()"><img width="40px" height="40px"src="media/icon.jpg"  alt=""></button>
																	<div id="mobidrop" style="display:none;float:right;" onchange="hidelist(this)">
																		<select class="" name="status">
																			<option value="Public">Public</option>
																			<option value="Private">Private</option>
																		</select>
																 </div>

																</div>


																<script>
					                        function showlist(){
					                          document.getElementById("mobidrop").style.display="";
					                        }
					                        function hidelist(element){
					                          document.getElementById("mobidrop").style.display="none";
					                        }
					                      </script>

																</div>
															</div>
														</div>
													</div>
<?php
											}
											else{	//no media for this post so it is just text
												?>
												<div class="row">
												<div class="col-ml-12 col-xs-6 col-sm-12">
														<div class="be-post">
															<a href="page1.html" style="color:black;">
																<?=$rows['body']?> <br> <br>
															</a>

															<div class="author-post">
																<img src="<?=$_SESSION['img']?>" alt="" class="ava-author">
																<span>By <a href="author.php"><?=$_SESSION['name']." ".$_SESSION['last']?></a></span><br>
																<span style=" margin-left : 27px; ">On <a href="author.php"><?=$rows['timee']?></a></span>
															</div>
															<div class="info-block">
																<span><i class="fa fa-thumbs-o-up"></i> <?=$rows['likee']?></span>
																<span><i class="fa fa-comment-o"></i> <?=$rows['comments']?></span>
																<div style="text-align:right;" >
																	<button style="border:none; background:none;" type="button" name="button" onclick="showlist()"><img width="40px" height="40px"src="media/icon.jpg"  alt=""></button>
																	<div id="mobidrop" style="display:none;float:right;" onchange="hidelist()">
																		<select class="" name="status">
																			<option value="Public">Public</option>
																			<option value="Private">Private</option>
																		</select>
																 </div>

																</div>
															</div>
														</div>
													</div>
												</div>
										<?php 	}
									} ?>

								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	<footer>
		<div class="footer_slider">
			<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="4" data-sm-slides="8" data-md-slides="14" data-lg-slides="19" data-add-slides="19">
				<div class="swiper-wrapper">
					<div class="swiper-slide active" data-val="0">

						<a href="gallery.html"> <img class="img-responsive img-full" src="img/f1.jpg" alt="">
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
							<p>Vestibulum tincidunt, augue fermentum accumsan viverra, eros dui rutrum libero, nec imperdiet felis sem in augue luctus <a href="page1.html">diam a porta</a> iaculis. Vivamus sit amet fermentum nisl. Duis id <a href="page1.html">massa id purus</a> tristique varius a sit amet est. Fusce dolor libero, efficitur et lobortis at, faucibus nec nunc.</p>
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
									</ul>
								</div>
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
							<a href="page1.html"><img src="img/g1.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g2.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g3.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g4.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g5.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g6.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g7.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g8.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g9.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g10.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g11.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g12.jpg" alt=""></a>
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
									<a href="page1.html" class="account">@faq</a> vestibulum accumsan est <a href="page1.html" class="heshtag">page1.htmlmalesuada</a> sem auctor, eu aliquet nisi ornare leo sit amet varius egestas.
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
						<span class="copy">© 2015. All rights reserved. <span class="white"><a href="page1.html"> NRGNetwork</a></span></span>
						<span class="created">Created with LOVE by <span class="white"><a href="page1.html"> NRGThemes</a></span></span>
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
										<input class="checkbox-input" type="checkbox" required="" /> <span class="check-box-sign"></span>
									</label>
									<span class="large-popup-text">
										I have read and agree to the <a class="be-popup-terms" href="page1.html">Terms of Use</a> and <a class="be-popup-terms" href="page1.html">Privacy Policy</a>.
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
