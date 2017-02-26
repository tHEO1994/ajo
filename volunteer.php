<?php
$page_title = "Volunteer";
require_once("includes/header.php");
require_once('includes/menu.php');
?>
<section id="volun-ban">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h3> Volunteer Sign up</h3>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row pad-t">
    <div class="col-lg-7 cus-img hidden-sm hidden-xs hidden-md">
      <img src="img/volunteer_wall.jpg">
    </div>
    <div class="col-lg-5">
      <h4><span style="color:#35AB25">Become a</span> Volunteer</h4>
      <p>Join the ajo team to embark on the journey to saving lives and extending a helping hand.</p>

      <form class="form-horizontal pad-t" role="form">
        <div class="form-group">
          <div class="col-lg-6">
            <label>First Name</label>
            <input class="form-control" type="text" placeholder="">
          </div>
          <div class="col-lg-6">
            <label>Last Name</label>
            <input class="form-control" type="text" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-6">
            <label>Email</label>
            <input class="form-control" type="email" placeholder="Enter email address(eg. someone@example.com)">
          </div>
          <div class="col-lg-6">
            <label>Phone Number</label>
            <input class="form-control" type="text" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-12">
            <label>Volunteer Option</label>
            <select class="form-control">
              <option>--None--</option>
              <option>Children &amp Youth</option>
              <option>Health &amp Sanitation</option>
              <option>Homeless &amp Housing</option>
              <option>Education &amp Literacy</option>
              <option>Community Development</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-12">
            <label>Why you want to join us</label>
            <textarea class="form-control" rows="6" placeholder="Type a message"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-12">
            <button class="btn btn-info btn-block">Sign up</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
<?php
require_once("includes/footer.php");
?>
