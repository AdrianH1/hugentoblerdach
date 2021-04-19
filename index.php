<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">

	<head>
		<title>Hugentobler</title>
		
		<?php header('Content-type: text/html; charset=utf-8'); ?>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css" title="standard" />

		<link href="bilder/icon.ico" rel="icon" type="image/x-icon" />
	
	</head>
	
	
	<body>
	<?php include_once("analyticstracking.php") ?>
	
	<div id="box">
	
	<!--   HEAD  -->	
	
		<div id="head">
		

		
			<?php
				include('templates/head.php');
			?>
			
			<div id="navioben">	
				<?php	
					include('templates/navioben.php');
				?>	
			</div> 
		</div>
		
	<!-- NAVILINKS -->
		
		<div id="navilinks">		
				<div id="menu">
					<?php	
						include('templates/navilinks.php');
					?>
				</div>
				<div id="seitentitel">
					<?php	
						include('templates/seitentitel.php');
					?>
				</div>
		</div>
		
	
	<!-- CONTENT -->	
		
		<div id="content">
			<?php	
				include('templates/content.php');
			?>
		</div>
		
	<!--  COPYRIGHT -->	
		
	<!--	<div id="copyright">
		Copyright &copy; 2013 by Adrian Hugentobler. All rights reserved
		</div>		-->
	
	</div>
	
	</body>
	
</html>