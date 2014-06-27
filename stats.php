<!DOCTYPE HTML>
<html>
<head>

<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.theme.min.css">
<link href="css/sb-admin.css" rel="stylesheet">
    <script type='text/javascript' src='https://www.google.com/jsapi'></script>
 
</head>
<body>
<div class="container">

    
    <span>Meilleurs clients du mois</span>
	<div id='meilleur_client'></div>
  <br>

  <span>Meilleurs produits</span>
  <div id='meilleurs_produits'></div>


<div id='left_zone'>
  
  <div id='types_produits'></div>
</div>


<div id='right_zone'>
  
  <div id='marques_vendues'></div>
</div>

</div>



<?php include('data/meilleurs_clients.php'); ?>
<?php include('data/meilleurs_produits.php'); ?>
<?php include('data/types_produits.php'); ?>
<?php include('data/marques_vendues.php'); ?>

<?php include('header.inc.php'); ?>
</body>
</html>