<?php
require_once ('protected_access_check.php');
require_once ('application/models/User.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>::Profile::</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="/mywebapp/css/main.css" type="text/css">
    <link rel="shortcut icon" href="/mywebapp/images/favicon.ico?v=2" type="image/x-icon"/>
</head>
<body>
<div id="wrapper">
    <div id="maincontent">

        <div id="header">
            <div id="logo" class="left">
                <a href="/mywebapp">ICD0007</a>
            </div>
            <div class="right marT10">
                <b>
                    <a href="/mywebapp/logout.php">Logout</a>
                </b>
            </div>
            <br><br>
            <ul class="topmenu">
                <li><a href="/mywebapp">Home</a></li>
                <li><a href="/mywebapp">Student Lists</a></li>
                <li><a href="/mywebapp">Contact Us</a></li>
            </ul>
            <br>
            <div class="banner"><p></p></div>
            <br class="clear"/>
        </div>

        <div class="content">
            <br/>
            <div class="content-area">

                <h2>Profile</h2>
                <?php
                    echo 'Now I can access the profile page<br>';

                    echo 'User ID stored in session is - ' . $_SESSION['userID'];
                ?>
            </div>
        </div>

    </div><!-- maincontent -->
    <br>
    <div id="footer">
        <div class="footer">
            Copyright &copy; 2018 ICD0007. <br/>
            <a href="/mywebapp">Home</a> | <a href="about">About Us</a> | <a href="contact">Contact Us</a> <br/>
            <span class="contact">Tel: +372-1111111&nbsp;
			Email:icd007@icd0007.com</span>
        </div>
    </div><!-- footer -->

</div><!-- wrapper -->

</body>
</html>

