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
                        <img class="logo-c active be_logo" src="img/Doctors.png" style="width:121px;height:37px; alt=" logo">
                        <img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo2">
                        <img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo3">
                        <img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo4">
                    </a>
                </div>
                <div class="header-menu-block">
                    <button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
                    <ul class="header-menu" id="one">
                        <li><a href="activity.html" class="blackitt">Activity</a></li>
                        <li><a href="search.html" class="blackitt">Discover</a>
                            <ul>
                                <li><a href="search.html" class="blackitt">Explore</a></li>
                                <li><a href="people.html" class="blackitt">People</a></li>
                                <li><a href="gallery.html" class="blackitt">Galleries</a></li>
                            </ul>
                        </li>
                        <li><a href="author-login.html" class="blackitt">My Portfolio</a></li>
                        <li><a href="site-map.html" class="blackitt">Site Map</a></li>
                        <li><a href="organization.html" class="blackitt">Organization</a></li>
                        <li id="ad-work-li"><a id="add-work-btn" class="btn color-1" href="work.html">Add Work </a></li>
                    </ul>
                </div>
                <div class="login-header-block">
                    <div class="login_block">
                        <a id="blackit" class="btn-login btn color-1 size-2 hover-2" href=""><i class="fa fa-user"></i>
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
                <h1>Welcome to the Medical Community!</h1>
                <p>Connect..Share..And Engage</p>
                <a class="be-register btn color-1 size-1 hover-1"><i class="fa fa-lock"></i>sign up now</a>
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
                                        <input class="checkbox-input" type="checkbox" value=""> <span class="check-box-sign"></span>
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
                        <form action="./" class="popup-input-search" method="POST">
                            <div class="col-md-6">
                                <input class="input-signtype" type="text" name='first' required="" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <input class="input-signtype" type="text" required="" name='last' placeholder="Last Name">
                            </div>

                            <div class="col-md-6">
                                <input class="input-signtype" type="text" required="" name='country' placeholder="Country">
                            </div>

                            <div class="col-md-6">
                                <input class="input-signtype" type="text" required="" name='email' placeholder="Email">
                            </div>
                            <div class="col-md-6">
                                <input class="input-signtype" type="password" required="" name='password' placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <input class="input-signtype" type="password" required="" placeholder="Repeat Password">
                            </div>
                            <div class="col-md-12 be-date-block">
                                <span class="large-popup-text">
                                    Date of birth
                                </span>
                                <div>
                                    <input class="input-signtype" type="date" name='date' required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="be-checkbox">
                                    <label class="check-box">
                                        <input class="checkbox-input" type="checkbox" required="" value=""> <span class="check-box-sign"></span>
                                    </label>
                                    <span class="large-popup-text">
                                        I have read and agree to the <a class="be-popup-terms" href="blog-detail-2.html">Terms of Use</a> and <a class="be-popup-terms" href="blog-detail-2.html">Privacy Policy</a>.
                                    </span>
                                </div>

                            </div>
                            <div class="col-md-6 for-signin">
                                <input type="submit" name='submit' class="be-popup-sign-button" value="SIGN UP">
                                <?php
                                ///////////////////////////////////////
                                /*should do some regex here*/
                                /////////////////////////////////////
                                if (isset($_POST["submit"])) {
                                    $db = new PDO("mysql:dbname=thedoctors", "root", "");
                                    $first = $db->quote($_POST["first"]);
                                    $last =  $db->quote($_POST["last"]);
                                    $email = $db->quote($_POST["email"]);
                                    $country = $db->quote($_POST["country"]);
                                    $password = $db->quote($_POST["password"]);
                                    $date = $db->quote($_POST["date"]);
                                    $v = md5(time() . $first);
                                    $vkey = $db->quote($v);
                                    $password = $db->quote(md5($password));
                                    $query = $db->exec("INSERT INTO user VALUES ($first, $last,$email,$country,$password,$date,$vkey,0);");
                                    if ($query) {
                                        $to = $_POST["email"];
                                        $subject = "Email Verification";
                                        $message = "<a href = 'http://localhost/the%20doctors/The-doctors/best%20temp%20ever/verify.php?vkey=$v'>Verify Account</a>";
                                        $headers = "From: hadihaidar75@yahoo.com\r\n";
                                        $headers .= "MTME-Version: 1.0" . "\r\n";
                                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                        mail($to, $subject, $message, $headers);
                                        echo ('<script>alert("Please verify your email")</script>');
                                    } else {
                                        echo ('<script>alert("Something went wrong please try again")</script>');
                                    }
                                }
                                ?>
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
                <div class="entry s-color  active color10 " data-colour="style/style-oranges.css"></div>
                <div class="entry s-color  color11" data-colour="style/stylesheet.css"></div>
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
