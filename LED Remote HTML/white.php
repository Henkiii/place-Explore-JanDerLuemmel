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
					<form action="white.php" method="post">
						<input class="off" type="submit" name="turnoff" value=" ">	
				</div>
				
				<div id="backlink">
				    <a href="index.php" class="backlink" id="backlinktextfeld"></a>	
				</div>        
				<a id="mainmenubutton" class="buttons main" href="index.php"></a>
				     
				</div>
				<div id="inhalt"> 
				
				<div>
					<form action="white.php" method="post">
						<input type="submit" class="buttons animation white" name="white" value="white">	
				
				</div>
				<div>
					<form action="white.php" method="post">
						<input type="submit" class="buttons animation rosa" name="rosa" value="rosa">	
				
				</div>
				<div>
					<form action="white.php" method="post">
						<input type="submit" class="buttons animation very-light-blue" name="verylightblue" value="very-light-blue">	
				
				</div>
				<div>
					<form action="white.php" method="post">
						<input type="submit" class="buttons animation white-blue" name="whiteblue" value="whiteblue">	
				
				</div>
			</div>
		</div>
	</body>

</html>



<?php

$pfad = "python3 /home/pi/Desktop/Raspaberry_Pi_Server/Client.py ";
$WHITE = "0 255 255 255";
$ROSA = "0 255 150 200";
$VERYLIGHTBLUE = "0 50 150 200";
$WHITEBLUE = "0 255 255 100";
$OFF = "0 0 0 0";

if ($_POST[white]) { 
	   $a- exec($pfad.$WHITE);
		}
if ($_POST[rosa]) { 
	   $a- exec($pfad.$ROSA);
		}
if ($_POST[verylightblue]) { 
	   $a- exec($pfad.$VERYLIGHTBLUE);
		}
if ($_POST[whiteblue]) { 
	   $a- exec($pfad.$WHITEBLUE);
		}
if ($_POST[turnoff]) { 
	   $a- exec($pfad.$OFF);
		}
?>
