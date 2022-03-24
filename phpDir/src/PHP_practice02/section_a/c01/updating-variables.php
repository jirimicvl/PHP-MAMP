<?php

/* 
  Write you php code here

   */

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <?php
  $customerName = "Eric";
  $candyName = "Temberone";
  $candyCost = 5;

  echo $customerName, ' buys ' ,$candyName,' costs ',$candyCost, ' euros';

  $customerName = "Jeremy";
  $candyName = "Maltheser";
  $candyCost = 10;
  
  echo $customerName, ' buys ' ,$candyName,' costs ',$candyCost, ' euros';
  ;?>

</body>

</html>