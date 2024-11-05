<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Welcome Page</title>
</head>

<body>

  <?php
  $size = "";
  if (isset($_POST['size'])) {
    $myVariable = $_POST['size'];
  } else;
  $number_toppings = -1;
  if (isset($_POST['number_toppings'])) {
    $myVariable = $_POST['number_toppings'];
  } else;
  $baseprice = [
    'large' => 6.00,
    'extra_large' => 10.00
  ];
  $topping_cost = [1, 1.75, 2.50, 3.35];
  $hst = 0.13;
  $topping_costs = $toppings_cost[$number_toppings - 1];
  $subtotal = $baseprice[$size] + $topping_costs;
  $tax = $subtotal * $hst;
  $final_cost = $subtotal + $tax;
  $baseprice = 0;
  echo "<h1> Topping Cost is: $topping_costs</h1>\n";
  echo "<h1>Subtotal is: $subtotal</h1>\n";
  echo "<h1>Tax is: $tax</h1>\n";
  echo "<h1>Final cost is:$final_cost</h1>\n";
  echo "<p>My Variable is =  " . $baseprice . "</p>\n";
  ?>

</body>

</html>