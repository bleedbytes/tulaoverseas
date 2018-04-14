<?php
$title="Contact | TULA";
include "header.php";
 ?>
  <?php include "navbar.php"; ?>

  <main>
<div class="container-fluid row panel panel-default">
<div class="col-lg-6 col-md-6 panel-body" id="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.2247479890207!2d80.22836691399681!3d13.086783015883118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDA1JzEyLjQiTiA4MMKwMTMnNTAuMCJF!5e0!3m2!1sen!2sin!4v1523546009726"
    width="640" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="col-lg-1-12 col-md-6 blue" id="contact">

  <!-- Default form contact -->
  <form>
      <p class="animated tada infinite h4 text-center mb-4">Write to us</p>

      <!-- Default input name -->
      <label for="defaultFormContactNameEx" id="concol">Your name</label>
      <input type="text" id="defaultFormContactNameEx" class="form-control">

      <br>

      <!-- Default input email -->
      <label for="defaultFormContactEmailEx" id="concol">Your email</label>
      <input type="email" id="defaultFormContactEmailEx" class="form-control">

      <br>

      <!-- Default input subject -->
      <label for="defaultFormContactSubjectEx" id="concol">Subject</label>
      <input type="text" id="defaultFormContactSubjectEx" class="form-control">

      <br>

      <!-- Default textarea message -->
      <label for="defaultFormContactMessageEx" id="concol">Your message</label>
      <textarea type="text" id="defaultFormContactMessageEx" class="form-control" rows="3"></textarea>

      <div class="text-center mt-4">
          <button class="btn btn-outline-white" type="submit">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
      </div>
  </form>
  <!-- Default form contact -->

</div>

</div>

  </main>

<?php
include "footer.php";
 ?>
