<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
 header("Location: index.php");
 exit;
}
// select logged-in user detail
$res=mysqli_query($conn, "SELECT * FROM user WHERE userId=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome - <?php echo $userRow['userName']; ?></title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="home.css"
</head>
<body>
<div class="container">

    Hello  <?php echo $userRow['userName']; ?>
    <br>
    <a href="logout.php?logout">Sign Out</a>

<div class="row">
    <div class="hero-unit">
  <div class="container">
          <div class="row-fluid">
            <div class="span12">
              <h1>Posh Ones Car Rental</h1>
              <h4>All The World's Greatest Marques In One place!</h4>
              <p><a href="#" class="btn btn-primary btn-large">Our Cars »</a></p>
            </div>
          </div>
      </div>
</div>
</div><br><br>

<div class="row">
<div id="carouselNice" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselNice" data-slide-to="0" class="active"></li>
    <li data-target="#carouselNice" data-slide-to="1"></li>
    <li data-target="#carouselNice" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://www.mercedes-benz.com/media/cache/aem_2by1/content/mbcom/en/mercedes-benz/vehicles/passenger-cars/g-class/the-new-g-class/jcr:content/par/videoyoutube/posterImage_20180108101041" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://ferrari-cdn.thron.com/delivery/public/image/ferrari/4a886902-e3b0-454a-ac12-82e11e87fbfc/2ozdfn/std/966x450/ferrari-488-pista-piloti-ferrari-2018-news" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="http://st.motortrend.com/uploads/sites/5/2018/04/2018-Range-Rover-Sport-SVR-front-three-quarter.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselNice" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselNice" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>










</div>

    

</body>
<script> 
    $('.carousel').carousel({
  interval: 2000
})
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>
<?php ob_end_flush(); ?>