

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
                        <img class="logo-c active be_logo" src="img/Doctors.png" style="width:121px;height:37px" ; alt=" logo">
                        <img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo2">
                        <img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo3">
                        <img class="logo-c  be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt="logo4">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <div id="content-block">
        <div class="head-bg">
            <div class="head-bg-img"></div>
            <form action='forget.php' method="POST">
                <div class="head-bg-content">
                    <input class="input-signtype" name="email" type="email" required="" placeholder="Your email" style="width: 20%;line-height: 45px;border-radius: 2px;border: none;color: #b4b7c1;padding-left: 0px;margin-bottom: 20px;">
                    <br><br>
                    <div class="col-xs-7 for-signin">
                        <input name='forget' type="submit" class="be-popup-sign-button" value="Forget Password">
                    </div>
                </div>
            </form>
        </div>

        <?php
        echo(123);
        ///check if the email exists in the db
        if (isset($_POST['forget'])) {
            $db = new PDO("mysql:dbname=thedoctors", "root", "");
            $query = $db->query("SELECT * FROM user");
            $COUNT = 0;
            foreach ($query as $row) {
                if ($row['Email'] == $_POST['email']) {
                    $COUNT = 1;
                    echo("123");
                    ///reset to a new random password
                    ///send it to the email
                    ///alert the an email was sent
                }
            }
            if ($COUNT == 0) {
                echo ("<script>alert('This email doen't exist')</script>");
            }
        }
        ?>




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