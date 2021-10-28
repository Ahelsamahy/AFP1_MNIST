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

    <div class="px-4 py-5 my-5 text-center" id="Top">
      <img class="d-block mx-auto mb-4" src="./Used images/Full.jpg" alt="" width="360" height="285">
      <!-- <h1 class="display-5 fw-bold">Pied Piper</h1> -->
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">The only place where you can connect with your favorite artists from around the globe and
          be updated with every new highlight of their life</p>
        <!-- <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-primary btn-lg gap-3"><a href="#Features"> Learn
              more</a></button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Price</button>
        </div> -->
        <!-- will work on it later, but it is not used for now -->
      </div>
    </div>

    <div class="b-example-divider"></div>
  </main>
    
</body>
<footer><?php include_once PROTECTED_DIR.'footer.php'; ?></footer>
</html>
