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
</head>

<body>
<main>
<div class="container">
  

    <div class="px-4 py-5 text-center" id="Top">
    <div class="col-lg-6 mx-auto">
    
    <p class="lead">click on any number to choose it then click on enter to submit your answer</p>
    <p class="lead mb-4">you can use your keypad to enter the answer</p>
  </div>
<!-- insert some text here for what the user should do -->
    <div class="row">
      <div id="numButtons" class="col">
      <div class="col-lg-auto mx-auto">
        <button id="numButtons" type="button" class="btn">0</button>
        <button id="numButtons" type="button" class="btn">1</button>
        <button id="numButtons" type="button" class="btn">2</button>
        <button id="numButtons" type="button" class="btn">3</button>
        <button id="numButtons" type="button" class="btn">4</button>
  
        </div>
        <br>
        <div class="col-lg-auto mx-auto">
        <button id="numButtons" type="button" class="btn">5</button>
        <button id="numButtons" type="button" class="btn">6</button>
        <button id="numButtons" type="button" class="btn">7</button>
        <button id="numButtons" type="button" class="btn">8</button>
        <button id="numButtons" type="button" class="btn">9</button>
  
        </div>
      </div>
    <div class="col">
    <img class="d-block mx-auto mb-4" src="./Used images/Full.jpg" alt="" width="400" height="500">
    </div>
    <div class="col-sm">
      <!-- will have input text here -->
    </div>
  </div>
    </div>

    <!-- <div class="b-example-divider"></div> -->
  </div>
</main>
    
</body>
<footer><?php include_once PROTECTED_DIR.'footer.php'; ?></footer>
</html>
