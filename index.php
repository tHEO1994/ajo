<?php
$page_title = "Home";
require_once("includes/header.php");
require_once('includes/menu.php');
require_once('includes/slider.php');
?>
<section id="fban">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h3> HELP SOMEONE </h3>
        <p>
          Every contribution count
        </p>
      </div>
      <div class="col-lg-2 pad-t">
        <a class="btn btn-default"> Read More</a>
      </div>
      <div class="col-lg-4 lbod">
        <h3> WHO NEED HELP </h3>
        <p>
          There are alot of people who need your help
        </p>
      </div>
      <div class="col-lg-2 pad-t">
        <a class="btn btn-default"> Read More</a>
      </div>
    </div>
  </div>
</section>

<section id="main-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <h3> Welcome Message </h3>
        <p>
          This website is a Non-Profit site that seeks to  apply commercial strategies to maximize improvements in human and environmental well-being.
          This may include maximizing social impact alongside profits for external shareholders.
          The initial name of the website was quite feminine, there must be equity and there is the need for a brand that everyone can relate to.
          The name “ajo” was extracted from the sound of my traditional name which is Maame Adwo.
        </p>
      </div>
    </div>
    <div class="row pad-t">
      <div class="col-lg-4 col-md-6 col-sm-6 hom-img">
        <img class="img-thumbnail" src="img/volunteer.png">
        <div class="pad-min">
          <h5><b> Volunteer </b></h5>
          <p>Lets come together to support the needy.</p>
          <a href="#" class="btn btn-info"> Read more </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 hom-img">
        <img class="img-thumbnail" src="img/soc_ent/jos.jpg" width="100%">
        <div class="pad-min">
          <h5><b> Social Entreprenuer</b></h5>
          <p>Social Entreprenuers providing social opportunities</p>
          <a href="#" class="btn btn-info"> Read more </a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <h4> Latest News </h4>
            <?php echo "<p>".date('D d M, Y')."</p>";?>
            <p>
              There is a new disease outbreak called Ebola and it got to the borders of Ghana but not inside.
            </p>
            <br>
            <?php echo "<p>".date('D d M, Y')."</p>";?>
            <p>
              WHO(World Heath Organization) has donated $5000 to the Gbalanga Charity Home.
            </p>
            <br>
            <?php echo "<p>".date('D d M, Y')."</p>";?>
            <p>
              WHO(World Heath Organization) has donated $5000 to the Gbalanga Charity Home.
            </p>
            <br>
            <a href="#" class="cus-link pull-right"> More News >> </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row pad-t">
      <div class="col-lg-8">
      </div>
      <div class="col-lg-4">
      </div>
    </div>
  </div>
</section>

<section id="bf-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 rbod">
        <img src="img/irene.jpg" class="img-thumbnail" width="100%">
        <div class="pad-min">
          <h4><b> Irene Afful </b> <small> Age: 16</small></h4>
          <p>
            Irene Afful, formally known as Irene Abakah Biney is a 16 year old girl who was born on the 8th of May 2000.
            Irene doesn’t know her but parents but she stays with her maternal...
          </p>
        </div>
        <a href="#" class="btn btn-info"> Read More </a>
      </div>

      <div class="col-lg-4 rbod">
        <h4> Popular Info </h4>
        <ul class="list-unstyled li-pad">
          <li><a href="#"> Volunteer Opportunities</a></li>
          <li><a href="#"> Upcoming Voluntary Programs</a></li>
          <li><a href="#"> Akwaaba </a></li>
        </ul>

        <h4 class="pad-min"> New Project </h4>
        <p>
          Expedition to Abeadze Dominase to impact on the less privileged and street orphans.
        </p>

        <h4 class="pad-min"> Join Us </h4>
        <p>
          Sign up as a volunteer on our network.
        </p>
        <a href="#" class="btn btn-info">Register</a>
      </div>

      <div class="col-lg-4">
        <h4 class="pad-t"> Subscribe here </h4>
        <p>Join over 100 other contributors and have new posts emailed to you.</p>
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-lg-12">
              <input class="form-control" type="text" placeholder="*Email Address">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-12">
              <button class="btn btn-info btn-block"> Send me new posts </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section id="low-pg">
  <div class="container">
    <div class="row pad-t">
      <div class="col-lg-3">
        <!-- <h3 class="text-center"><b> Partners </b></h3> -->
      </div>
      <div class="col-lg-3">
        <img class="bw" src="img/ispace_logo.png" width="100%">
      </div>
      <div class="col-lg-3">
        <img class="bw" src="img/uwat.png" width="100%">
      </div>
      <div class="col-lg-3">
      </div>
    </div>
  </div>
</section>

<?php
require_once("includes/footer.php");
?>
