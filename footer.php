<section id="footer">

<!--Footer-->
<footer class="container-fluid page-footer font-small color pt-4 mt-4">

    <!--Footer Links-->
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <!--First column-->
            <div class="col-md-6" id="address">
              <h5 class="text-uppercase" >Address</h5>
              <p>Tula Overseas Education Pvt. Ltd.,<br>OLD NO. 46, NEW NO. 95,<br>CANAL ROAD, KILPAUK GARDEN,<br>CHENNAI -600010.<br>Email: tulaoverseas@gmail.com </p>
            </div>
            <!--/.First column-->
            <!--Second column-->
            <div class="col-md-6">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright TUNA OVERSEAS
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

</section>







<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>

<script type="text/javascript">
// Input Lock
$('textarea').blur(function () {
$('#hire textarea').each(function () {
    $this = $(this);
    if ( this.value != '' ) {
      $this.addClass('focused');
      $('textarea + label + span').css({'opacity': 1});
    }
    else {
      $this.removeClass('focused');
      $('textarea + label + span').css({'opacity': 0});
    }
});
});

$('#hire .field:first-child input').blur(function () {
$('#hire .field:first-child input').each(function () {
    $this = $(this);
    if ( this.value != '' ) {
      $this.addClass('focused');
      $('.field:first-child input + label + span').css({'opacity': 1});
    }
    else {
      $this.removeClass('focused');
      $('.field:first-child input + label + span').css({'opacity': 0});
    }
});
});

$('#hire .field:nth-child(2) input').blur(function () {
$('#hire .field:nth-child(2) input').each(function () {
    $this = $(this);
    if ( this.value != '' ) {
      $this.addClass('focused');
      $('.field:nth-child(2) input + label + span').css({'opacity': 1});
    }
    else {
      $this.removeClass('focused');
      $('.field:nth-child(2) input + label + span').css({'opacity': 0});
    }
});
});
</script>
</body>

</html>
