<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Jay Webtech</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php 
include './Theme/menu.php';
include './Theme/logo.php';
?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/webim.jpg" width="920" height="300" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Contact</a></h2>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                    <div>
                                        <strong>Name</strong>
                                        <input type="text">
                                    </div>
                                    <div>
                                        <strong>Email</strong>
                                        <input type="email">
                                    </div>
                                    <br>
                                    <div>
                                        <strong>Want Hint?</strong><br><textarea placeholder="Describes your problem here...." name="Issue" rows="5" cols="50"></textarea>
                                    </div>
                                        <div><br>
                                        <input type="submit" name="submit">
                                    </div>
        </div>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
<?php 
include './Theme/sidebar.php';
?>
                <!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
include './Theme/footer.php';
?>
<!-- end #footer -->
</body>
</html>
