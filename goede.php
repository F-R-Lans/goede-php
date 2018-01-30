<?php
date_default_timezone_set('Europe/Amsterdam');
date_default_timezone_get();
$t = date("H");
if ($t < "6") {
  $welcome = "Good Night! <br>";
  $klootviool = '<body background= "img/night.png">';

} else if ($t < "12") {
  $welcome = "good Morning! <br>";
  $klootviool = '<body background= "img/morning.png">' ;

} else if ($t < "18") {
  $welcome = "good Afternoon! <br>";
  $klootviool = '<body background= "img/afternoon.png">';

} else {
  $welcome = "good Evening! <br>";
  $klootviool = '<body background= "img/evening.png">';;
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> goede </title>
    <link rel="stylesheet" type="text/css" href="noicecss.css">
  </head>
  <?php
  echo $klootviool;
  echo "<h1>". $welcome . date("h:i:sa d-m-Y")."</h1>";
   ?>

  </body>

</html>
