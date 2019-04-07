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
						<form action="blue.php" method="post">
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
						<input type="submit" class="buttons animation fade1" name="blue" value="FADE1">	<!-- change "value" for name-tag -->
					</div>
					<div>
						<form action="red.php" method="post">
						<input type="submit" class="buttons animation fade2" name="smoothblue" value="FADE2"> <!-- change "value" for name-tag -->
					</div>
					<div>
						<form action="red.php" method="post">
						<input type="submit" class="buttons animation fade3" name="lila" value="FADE3"> <!-- change "value" for name-tag -->
					</div>
					<div>
						<form action="red.php" method="post">
						<input type="submit" class="buttons animation fade4" name="pink" value="FADE4">	<!-- change "value" for name-tag -->
					</div>
				</div>
			</div>
		</div>
	</body>
</html>



<?php

$pfad = "python3 /home/pi/Desktop/Raspaberry_Pi_Server/Client.py ";
$BLUE = "0 0 0 255";
$SMOOTHBLUE = "0 0 100 255";
$LILA = "0 120 0 255";
$PINK = "0 255 0 255";
$OFF = "0 0 0 0";

if ($_POST[blue]) { 
	   $a- exec($pfad.$BLUE);
		}
if ($_POST[smoothblue]) { 
	   $a- exec($pfad.$SMOOTHBLUE);
		}
if ($_POST[lila]) { 
	   $a- exec($pfad.$LILA);
		}
if ($_POST[pink]) { 
	   $a- exec($pfad.$PINK);
		}
if ($_POST[turnoff]) { 
	   $a- exec($pfad.$OFF);
		}
?>
