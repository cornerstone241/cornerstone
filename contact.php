<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="description" content= "" />
<meta name="keywords" content= "" />
<title>Home</title>
<link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="styles/styles.css" />
<link rel="stylesheet" type="text/css" href="styles/responsive.css" />
</head>

<body class="inner">
<!-- header -->
	<?php include('includes/header.php'); ?>
    <!-- <?php //include('includes/banner.php'); ?> -->
    <!-- main -->
    <div id="main" class="clearfix">
    	<div id="content">
            <div class="row">
                <div class="inConBox">
                    <article>
                        <h1>Contact Us</h1>
                        <div class="inConLeft">
                          <?php include('includes/contactBox.php'); ?>
                        </div>
                        <div class="inConRight">
                            <?php include('includes/contactForm.php'); ?>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <?php //include('includes/content-bottom.php'); ?>
    <?php include('includes/footer.php'); ?>
</body>
</html>
