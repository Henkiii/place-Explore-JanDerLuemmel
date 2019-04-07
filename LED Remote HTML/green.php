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
					<form action="green.php" method="post">
						<input type="submit" class="off" name="turnitoff" value=" ">	
				</div>
				
				<div id="backlink">
				    <a href="index.php" class="backlink" id="backlinktextfeld"></a>	
				</div>        
				<a id="mainmenubutton" class="buttons main" href="index.php"></a>
				     
				</div>
				<div id="inhalt"> 
				
				<div>
					<form action="green.php" method="post">
						<input type="submit" class="buttons animation green" name="green" value="green">	
				
				</div>
				<div>
					<form action="green.php" method="post">
						<input type="submit" class="buttons animation lightgreen" name="lightgreen" value="lightgreen">	
				
				</div>
				<div>
					<form action="green.php" method="post">
						<input type="submit" class="buttons animation tuerkis" name="tuerkis" value="tuerkis">	
				
				</div>
				<div>
					<form action="green.php" method="post">
						<input type="submit" class="buttons animation lightblue" name="lightblue" value="lightblue">	
				
				</div>
			</div>
		</div>
	</body>

</html>

<?php

$pfad = "python3 /home/pi/Desktop/Raspaberry_Pi_Server/Client.py ";
$GREEN = "0 0 255 0";
$LIGHTGREEN = "0 50 255 50";
$TUERKIS = "0 0 255 255";
$LIGHTBLUE = "0 100 100 180";
$OFF = "0 0 0 0";

if ($_POST[green]) { 
	   $a- exec($pfad.$GREEN);
		}
if ($_POST[lightgreen]) { 
	   $a- exec($pfad.$LIGHTGREEN);
		}
if ($_POST[tuerkis]) { 
	   $a- exec($pfad.$TUERKIS);
		}
if ($_POST[lightblue]) { 
	   $a- exec($pfad.$LIGHTBLUE); 
		}
if ($_POST[turnitoff]) { 
	   $a- exec($pfad.$OFF); 
		}
?>
