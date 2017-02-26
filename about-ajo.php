<?php
$page_title = "Volunteer";
require_once("includes/header.php");
require_once('includes/menu.php');
?>

<section id="about-ban">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3> About Ajo </h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <hr>
      </div>
    </div>
    <div class="row pad-t">
      <div class="col-lg-3">
        <h4 class="page-header">The Team</h4>
        <ul class="list-unstyled cus-li-pad">
          <li class="active"><a href="#mar" data-toggle="tab">Marian Clara Adeaba <i class="fa fa-arrow-right pull-right"></i></a></li>
          <li><a href="#anth" data-toggle="tab">Anthony Benjamin Adeaba <i class="fa fa-arrow-right pull-right"></i></a></li>
          <li><a href="#theo" data-toggle="tab">Theophilus Paintsil <i class="fa fa-arrow-right pull-right"></i></a></li>
          <li><a href="#gifty" data-toggle="tab">Gifty Adomako Ansah <i class="fa fa-arrow-right pull-right"></i></a></li>
        </ul>
        <hr>
      </div>
      <div class="col-lg-9">
        <div class="tab-content">
          <div class="tab-pane fade in active" id="mar">
            <?php require_once('team/mar.php');?>
          </div>
          <div class="tab-pane fade" id="anth">
            <?php require_once('team/anth.php');?>
          </div>
          <div class="tab-pane fade" id="theo">
            <?php require_once('team/theo.php');?>
          </div>
          <div class="tab-pane fade" id="gifty">
            <?php require_once('team/gifty.php');?>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row pad-t">
      <div class="col-lg-5">
        <h4> Suggestions </h4>
        <p><em>Have an idea, suggestion or wish to report a problem?</em></p>
        <p>Feel free to contact us individually or to our mail: <a href="mailto:contact@ajo.com">contact@ajo.com</a></p>
      </div>
      <div class="col-lg-7">
        <h4> Special Thanks </h4>
        <ul class="list-inline">
          <li>Florence Tofa <a href="#">(Mobile Web Ghana)</a> |</li>
          <li>Josiah Eyison <a href="#">(iSpace)</a> |</li>
          <li>Ato Ulzen Appiah <a href="#">(Ghana Think Foundation)</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php
require_once("includes/footer.php");
?>
