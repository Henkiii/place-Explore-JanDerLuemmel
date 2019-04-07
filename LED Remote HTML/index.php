<html>
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width">
          
          <link rel="stylesheet" type="text/css" href="css/main.css">
          <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
          <link rel="stylesheet" type="text/css" href="css/helpers.css">
          <link rel="stylesheet" type="text/css" href="css/animation.css">
          <link rel="stylesheet" type="text/css" href="css/color.css">
          <link rel="apple-touch-icon-precomposed" sizes="57x57" href="appleicon57x57.png" />
          <link rel="icon" type="image/x-icon" href="Raspberry.ico">

          <title>LED Steuerung</title>
     </head>
     <body>
          <div class="col">
               <div id="menu">
                    <div id="offlink">
                         <form action="index.php" method="post">
                         <input class="off" type="submit" name="turnoff" value=" ">     
                    </div>
                    <?php if(!array('page' => array('index.html'))) {?>
                    <a id="mainmenubutton" class="buttons main" href="index.html"></a>
                    <?php } ?>
               </div>
               <div class="buttons animation red"><a href="red.php">Red</a></div>
               <div class="buttons animation green"><a href="green.php">Green</a></div>
               <div class="buttons animation blue"><a href="blue.php">Blue</a></div>
               <div class="buttons animation white"><a href="white.php">White</a></div>
               <div class="buttons animation fade"><a href="fade.php">Colorfade</a></div>
          </div>
     </body>
</html>

    
    
<?php

$pfad = "python3 /home/pi/Desktop/Raspaberry_Pi_Server/Client.py ";
$OFF = "0 0 0 0";

if ($_POST[turnoff]) { 
        $a- exec($pfad.$OFF);
          }

?>
