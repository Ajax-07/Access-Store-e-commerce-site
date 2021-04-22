<?php  
  require('database/DBControl.php');

  require('database/product.php');

  $db = new DBControl();

  $mobile = new mobile($db);

  $computer = new computer($db);
  
  $headphone = new headphone($db);
  
  $camera = new camera($db);

  $other = new other($db);

 