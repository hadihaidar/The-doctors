<?php session_start();
if (!isset($_SESSION['name'])) {
    header("location:index.php");
}
$user = $_SESSION['user'];
$db = new PDO("mysql:dbname=thedoctors", "root", "");
$sender = $db->quote($_REQUEST['from']);
$u = $db->query("SELECT FirstName,LastName,image FROM `user` WHERE (Email=$sender)");
$n = "";
$image = "media/";
foreach ($u as $name) {
    $n = $name[0] . " " . $name[1];
    if ($name[2] == 'default.png') {
        $image = $image . $name[2];
    } else {
        $image = $image . $_REQUEST['from'] . '/ProfilePictures/' . $name[2];
    }
}
$use = $db->quote($user);
$u = $db->query("SELECT image FROM `user` WHERE (Email=$use)");
$i = "media/";
foreach ($u as $name) {
    if ($name[0] == 'default.png') {
        $i = $i . $name[0];
    } else {
        $i = $i . $_SESSION['user'] . '/ProfilePictures/' . $name[0];
    }
}
if (isset($_POST['send'])) {
    //add a request to the table with enum pending
    $from = $db->quote($_SESSION['user']);
    $to = $db->quote($_REQUEST['from']);
    $body = $db->quote($_POST['message']);
    $query = $db->exec("INSERT INTO messages VALUES (NULL,$from,$to,NOW(),$body,'unread');");
}
?>

<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <header>
        <div class="container-fluid custom-container">
            <div class="row no_row row-header">
                <div class="brand-be">
                    <a href="index.php">
                        <img class="logo-c active be_logo" src="img/Doctors.png" style="width:121px;height:37px;" alt=" logo">
                    </a>
                </div>

                <div class="header-menu-block">
                    <button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
                    <ul class="header-menu" id="one">
                        <li><a href="activity.php">Activity</a></li>
                        <li><a href="search.php">Search</a></li>
                        <li><a href="author.php">My Portfolio</a></li>

                        <li id="ad-work-li"><a id="add-work-btn" class="btn color-1" href="work.php">Add Posts </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

</head>




<body style="width:100%">
    <div class="container" style="max-width:100%">
        <div class="row" style="height: 100%">
            <div style="width:100% ;height:100%">
                <div class="chatbody" style="height: 100%">
                    <div class="panel panel-primary">
                        <div class="panel-heading top-bar">
                            </div>
                            <div id='footer' class="panel-body msg_container_base" style="height: 80%;max-height:none;padding-top: 50px; ">
                                    <div class="col-md-8 col-xs-8">
                                        <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> <?= $n ?></h3>
                                    </div>
                            <?php
                            $not = $db->query("SELECT * FROM `messages` WHERE (t=$use AND f=$sender) OR (f=$use AND t=$sender) ORDER BY time ASC");
                            foreach ($not as $message) {
                                if ($message['f'] == $_SESSION['user']) {
                                    ?>

                                    <div class="row msg_container base_sent" style='margin-left: 60%;padding-right: 30;'>
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_sent">
                                                <p><?= $message['body'] ?></p>
                                                <time datetime="2009-11-13T20:00"><?= $message['time'] ?></time>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="<?= $i ?>" class=" img-responsive " style='width:50px;height:50px;margin-left: 60%'>
                                        </div>
                                    </div>
                                <?php
                            } else {
                                ?>
                                    <div class="row msg_container base_receive" style='margin-right: 60%;padding-left: 30;'>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="<?= $image ?>" class=" img-responsive " style='margin-left: 0px; width:50px;height:50px;margin-right: 60%'>
                                        </div>
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_receive">
                                                <p><?= $message['body'] ?></p>
                                                <time datetime="2009-11-13T20:00"><?= $message['time'] ?></time>
                                            </div>
                                        </div>
                                    </div>

                                <?php

                            }
                        }
                        ?>
                            <div ></div>
                        </div>
                        <div class="panel-footer">
                            <form action="message.php?from=<?= $_REQUEST['from'] ?>" method='post'>
                                <div class="input-group">
                                    <input name='message' id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary btn-sm" id="btn-chat" name='send'><i class="fa fa-send fa-1x" aria-hidden="true"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<style>
    .chatperson {
        display: block;
        border-bottom: 1px solid #eee;
        width: 100%;
        display: flex;
        align-items: center;
        white-space: nowrap;
        overflow: hidden;
        margin-bottom: 15px;
        padding: 4px;
    }

    .chatperson:hover {
        text-decoration: none;
        border-bottom: 1px solid orange;
    }

    .namechat {
        display: inline-block;
        vertical-align: middle;
    }

    .chatperson .chatimg img {
        width: 40px;
        height: 40px;
        background-image: url('http://i.imgur.com/JqEuJ6t.png');
    }

    .chatperson .pname {
        font-size: 18px;
        padding-left: 5px;
    }

    .chatperson .lastmsg {
        font-size: 12px;
        padding-left: 5px;
        color: #ccc;
    }

    body {
        height: 100%;
        position: fixed;
        bottom: 0;
    }

    .col-md-2,
    .col-md-10 {
        padding: 0;
    }

    .panel {
        margin-bottom: 0px;
    }

    .chat-window {
        bottom: 0;
        position: fixed;
        float: right;
        margin-left: 10px;
    }

    .chat-window>div>.panel {
        border-radius: 5px 5px 0 0;
    }

    .icon_minim {
        padding: 2px 10px;
    }

    .msg_container_base {
        background: #e5e5e5;
        margin: 0;
        padding: 0 10px 10px;
        max-height: 300px;
        overflow-x: hidden;
    }

    .top-bar {
        background: #666;
        color: white;
        padding: 10px;
        position: relative;
        overflow: hidden;
    }

    .msg_receive {
        padding-left: 0;
        margin-left: 0;
    }

    .msg_sent {
        padding-bottom: 20px !important;
        margin-right: 0;
    }

    .messages {
        background: white;
        padding: 10px;
        border-radius: 2px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        max-width: 100%;
    }

    .messages>p {
        font-size: 13px;
        margin: 0 0 0.2rem 0;
    }

    .messages>time {
        font-size: 11px;
        color: #ccc;
    }

    .msg_container {
        padding: 10px;
        overflow: hidden;
        display: flex;
    }

    img {
        display: block;
        width: 100%;
    }

    .avatar {
        position: relative;
    }

    .base_receive>.avatar:after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 0;
        border: 5px solid #FFF;
        border-left-color: rgba(0, 0, 0, 0);
        border-bottom-color: rgba(0, 0, 0, 0);
    }

    .base_sent {
        justify-content: flex-end;
        align-items: flex-end;
    }

    .base_sent>.avatar:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 0;
        border: 5px solid white;
        border-right-color: transparent;
        border-top-color: transparent;
        box-shadow: 1px 1px 2px rgba(black, 0.2); // not quite perfect but close
    }

    .msg_sent>time {
        float: right;
    }



    .msg_container_base::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #F5F5F5;
    }

    .msg_container_base::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    .msg_container_base::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #555;
    }

    .btn-group.dropup {
        position: fixed;
        left: 0px;
        bottom: 0;
    }
</style>

<script>
    var objDiv = document.getElementById("footer");
    objDiv.scrollTop = objDiv.scrollHeight;
</script>