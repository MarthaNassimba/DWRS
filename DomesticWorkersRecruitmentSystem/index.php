<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>

<title>TRAM RECRUITMENT COMPANY</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />

<link href="assets/images/favicon.png" rel="icon">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="banner_content">
            <h1 style="color: blue; font-size: 50px;">TRAM <span style="color: red;">RECRUITMENT</span> COMPANY</h1>

            <p style="color: black; font-size: 25px; font-style: italic; font-weight: bold;"> We are the number one supplier of faithfull, trusted, reliable, experienced and God fearing House maids in 
          Uganda. </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="./assets/images/chef.png" alt="Card image cap" style="width: 90px; position: relative; left: 25%; margin-top: 20px;">
        <div class="card-body">
          <h5 class="card-title text-center">Cooking</h5>
          <p class="card-text text-center">At TRAM, we get you housemaids with great cooking skills who can turn 
              your kitchen into a hotel.</p>
          
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="./assets/images/washing.png" alt="Card image cap" style="width: 90px; position: relative; left: 25%; margin-top: 20px;">
        <div class="card-body">
          <h5 class="card-title text-center">Laundry</h5>
          <p class="card-text text-center">Be smart wherever you are by putting on well washed clothes washed by our classic well
              trained maids.</p>
          
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="./assets/images/iron.png" alt="Card image cap" style="width: 90px; position: relative; left: 25%; margin-top: 20px;">
        <div class="card-body">
          <h5 class="card-title text-center">Ironing Clothes</h5>
          <p class="card-text text-center">It's no longer neccessary for you to take your clothes to be ironed by the Dobi, at TRAM we provide
              you with well trained maids who can simply do that service for you.</p>
          
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="./assets/images/clean1.png" alt="Card image cap" style="width: 90px; position: relative; left: 25%; margin-top: 20px;">
        <div class="card-body">
          <h5 class="card-title text-center">Home Cleaning</h5>
          <p class="card-text text-center">Cleanliness starts from home, thats why we provide experienced and well trained maids who can
              organise, clean and make your home look good.</p>
          
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>Domestic Worker For You</span></h2>
      <p>
      Tram Recruitment Company is Uganda's only platform through which home owners can hire a domestic worker online. 
      Our vision is to be the Uganda's largest aggregator for domestic maid bureaus; to build a place where anyone can 
      come to discover and hire any domestic worker they want.
      </p>
      <p>We are the number one supplier of faithfull, trusted, reliable, experienced and God fearing House maids in 
          Uganda.</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Domestic Workers</a></li>
        </ul>
      </div>
      <!-- Recently Listed New domestic workers -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

<?php $sql = "SELECT tblmaids.names,tblcategory.CategoryName,tblmaids.address,tblmaids.education,tblmaids.age,tblmaids.id,tblmaids.maidview,tblmaids.img from tblmaids join tblcategory on tblcategory.id=tblmaids.categoryname limit 3";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
?>  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="workers-details.php?vhid=<?php echo htmlentities($result->id);?>"><img src="admin/img/maidimages/<?php echo htmlentities($result->img);?>" class="img-responsive" alt="image" style="width:365px; height:250px;"></a>
<ul>
<li><i class="fa fa-book" aria-hidden="true"></i><?php echo htmlentities($result->education);?></li>
<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->age);?></li>
<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo htmlentities($result->address);?></li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="workers-details.php?vhid=<?php echo htmlentities($result->id);?>"> <?php echo htmlentities($result->names);?> </br> <?php echo htmlentities($result->CategoryName);?></a></h6>
<!-- <span class="price">$<?php echo htmlentities($result->pricepermonth);?> /Month</span>  -->
</div>
<div class="inventory_info_m">
<p><?php echo substr($result->maidview,0,70);?></p>
</div>
</div>
</div>
<?php }}?>
       
      </div>
    </div>
  </div>
  <div style="margin-top: 40px; position:relative; left: 40%; padding: 20px;">
        <a href="workers-listing.php"><button class="btn outline btn-xs btn-primary" >View More Domestic Workers....</button></a>
    </div>
</section>
<!-- /Resent Cat -->

<!-- ======= how does it work ======= -->
<section class="counts section-bg">
      <div class="container">
            <h2 class="text-center m-5 text-uppercase" style="color: blue; margin-top: 25px;"> How does it work </h2>
        <div class="row ">

          <div class="col-md-4 card " style="border: none;">

                <img src="assets/images/search.webp" class="card-img-top" alt="" style="width: 150px; left: 30%; position: relative;" >
            <div class="card-body">
              <h5 class="card-title text-center" style="color: blue; font-size: 20px; font-weight: bold;">Search<h5/>
              <p class="text-center" style="color:black;">Use our simple search and tell us what you require. See list of all the available maids in your area.</p>
            </div>
          </div>

           <div class="col-md-4 card" style="border: none;">

                <img src="assets/images/short.png" class="card-img-top" alt="" style="width: 150px; left: 30%; position: relative;" >
            <div class="card-body">
              <h5 class="card-title text-center" style="color: blue; font-size: 20px; font-weight: bold;">Shortlist<h5/>
              <p class="text-center" style="color:black;">View the complete profile of the hundreds of available maids and shortlist as per your preference.</p>
            </div>
          </div>

           <div class="col-md-4 card" style="border: none;">

                <img src="assets/images/handshake1.png" class="card-img-top" alt="" style="width: 150px; left: 30%; position: relative;" >
            <div class="card-body">
              <h5 class="card-title text-center" style="color: blue; font-size: 20px; font-weight: bold;">Meet, Select & Relax<h5/>
              <p class="text-center" style="color:black;">Talk to the us on the phone or meet with us personally. Select the Domestic Worker and pay only after the he/she joins.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- how does it work -->

<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>6+</h2>
            <p>Years In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-users" aria-hidden="true"></i>100+</h2>
            <p>New Domestic Workers Ready to Work</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-users" aria-hidden="true"></i>100</h2>
            <p>Experienced Domeatic Workers Ready to Work</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>200+</h2>
            <p>Satisfied Clients</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 


<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Our Satisfied <span>Clients</span></h2>
    </div>
    <div class="row">
      <div id="testimonial-slider">
<?php 
$tid=1;
$sql = "SELECT tbltestimonial.Testimonial,tblusers.FullName from tbltestimonial join tblusers on tbltestimonial.UserEmail=tblusers.EmailId where tbltestimonial.status=:tid limit 4";
$query = $dbh -> prepare($sql);
$query->bindParam(':tid',$tid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>


        <div class="testimonial-m">
 
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5><?php echo htmlentities($result->FullName);?></h5>
            <p><?php echo htmlentities($result->Testimonial);?></p>
          </div>
        </div>
        </div>
        <?php }} ?>
        
       
  
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Testimonial--> 


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>