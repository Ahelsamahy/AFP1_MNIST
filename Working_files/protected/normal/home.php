<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['image_id'])  && isset($_POST['value'])) {
  require_once SUBMISSION_MANAGER;

  addSubmission($_POST['image_id'], $_POST['value']);
}


require_once IMAGE_MANAGER;
$image = getRandomImage();

?>
<main>

  <div class="container">


    <div class="px-4 pb-5 text-center" id="Top">
      <div class="col-lg-6 mx-auto">

        <p class="lead">click on any number to choose it then click on enter to submit your answer</p>
        <p class="lead mb-4">you can use your keypad to enter the answer</p>
      </div>
      <!-- insert some text here for what the user should do -->
      <div class="row">
        <div id="numButtons" class="col">
          <div class="col-lg-auto mx-auto">
            <button id="numButtons" type="button" class="btn" onclick="setValues(<?= $image['id'] ?>, '0')">0</button>
            <button id="numButtons" type="button" class="btn" onclick="setValues(<?= $image['id'] ?>, '1')">1</button>
            <button id="numButtons" type="button" class="btn" onclick="setValues(<?= $image['id'] ?>, '2')">2</button>
            <button id="numButtons" type="button" class="btn" onclick="setValues(<?= $image['id'] ?>, '3')">3</button>
            <button id="numButtons" type="button" class="btn" onclick="setValues(<?= $image['id'] ?>, '4')">4</button>

          </div>
          <br>
          <div class="col-lg-auto mx-auto">
            <button id="numButtons" type="button" class="btn" onclick="setValues(<?= $image['id'] ?>, '5')">5</button>
            <button id="numButtons" type="button" class="btn" onclick="setValues(<?= $image['id'] ?>, '6')">6</button>
            <button id="numButtons" type="button" class="btn" onclick="setValues(<?= $image['id'] ?>, '7')">7</button>
            <button id="numButtons" type="button" class="btn" onclick="setValues(<?= $image['id'] ?>, '8')">8</button>
            <button id="numButtons" type="button" class="btn" onclick="setValues(<?= $image['id'] ?>, '9')">9</button>

          </div>
        </div>
        <div class="col">
          <img class="d-block mx-auto" src="<?= ($image <> false) ? $image['location'] : './Used images/Error/Image_Not_Found.png' ?>" alt="" width="350" height="350" id="image-show">
        </div>
        <div class="col-sm">
          <!-- will have input text here -->
        </div>
      </div>
      <div class="row">
      <form method="POST">
            <input type="hidden" id="image_id" name="image_id" value="">
           <center> <button type="submit" id="img_value" name="value" value="" class="btn">submit</button></center>
          </form>
      </div>
    </div>
    <!-- <div class="b-example-divider"></div> -->
  </div>
</main>