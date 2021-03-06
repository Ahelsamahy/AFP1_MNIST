<?php session_start(); ?>
<?php require_once 'protected/config.php'; ?>

<?php require_once USER_MANAGER ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>MNIST</title>
    <link rel="shortcut icon" href="./Used images/sml.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
  <!-- Custom styles for this template -->
  <link href="<?=PUBLIC_DIR.'index.css'?>" rel="stylesheet">

   <!--- Bootrstrap javascript --->
  <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="public/submitmethod.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
<div id="container">
<?php require_once PROTECTED_DIR.'navbar.php'; ?>
<content><?php require_once PROTECTED_DIR.'routing.php'; ?></content>
<footer id="footer"><?php include_once PROTECTED_DIR.'footer.php'; ?></footer>
</div>
</body>
</html>
