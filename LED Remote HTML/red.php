<html>
 <head>

<!--meta-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
<!--stylesheets-->
     <link rel="stylesheet" type="text/css" href="css/main.css">
     <link rel="stylesheet" type="text/css" href="css/stylesheet_red.css">
     <link rel="stylesheet" type="text/css" href="css/helpers.css">
     <link rel="stylesheet" type="text/css" href="css/animation.css">
     <link rel="stylesheet" type="text/css" href="css/color.css">

<!--icons etc-->
     <link rel="apple-touch-icon-precomposed" sizes="57x57" href="appleicon57x57.png" />
     <link rel="icon" type="image/x-icon" href="Raspberry.ico">
<!--title -->
     <title>LED Steuerung</title>
     
 </head>
	<body>
		<div class="row">
			<div class="col">
				<div id="menu">
				<div id="offlink">
					<form action="red.php" method="post">
						<input class="off" type="submit" name="turnoff" value=" ">	
				</div>
				
				<div id="backlink">
				    <a href="index.php" class="backlink" id="backlinktextfeld"></a>	
				</div>        
				<a id="mainmenubutton" class="buttons main" href="index.php"></a>
				     
				</div>
				<div id="inhalt"> 
				
				<div>
					<form action="red.php" method="post">
						<input type="submit" class="buttons animation Red" name="Red" value="Red">	
				
				</div>
				<div>
					<form action="red.php" method="post">
						<input type="submit" class="buttons animation Orange" name="Orange" value="Orange">	
				
				</div>
				<div>
					<form action="red.php" method="post">
						<input type="submit" class="buttons animation Light-Orange" name="LightOrange" value="Light-Orange">	
				
				</div>
				<div>
					<form action="red.php" method="post">
						<input type="submit" class="buttons animation Yellow" name="Yellow" value="Yellow">	
				
				</div>
			</div>
		</div>
	</body>

</html>



<?php

$pfad = "python3 /home/pi/Desktop/Raspaberry_Pi_Server/Client.py ";
$RED = "0 255 0 0";
$ORANGE = "0 255 50 0";
$LIGHTORANGE = "0 255 120 0";
$YELLOW = "0 200 150 0";
$OFF = "0 0 0 0";

if ($_POST[Red]) { 
	   $a- exec($pfad.$RED);
		}
if ($_POST[Orange]) { 
	   $a- exec($pfad.$ORANGE);
		}
if ($_POST[LightOrange]) { 
	   $a- exec($pfad.$LIGHTORANGE);
		}
if ($_POST[Yellow]) { 
	  $a- exec($pfad.$YELLOW);
		}
if ($_POST[turnoff]) { 
	  $a- exec($pfad.$OFF);
		}
?>
