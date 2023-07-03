<?php

include("database.php");


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>University &mdash; Website By Salam Hammad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="ProjectPage.html">University</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#viewData-section" class="nav-link">View The Student Information</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="login.php" class="nav-link"><span>SIGN UP</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>

    

    <div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1 data-aos="fade-up" data-aos-delay="150">The Student Information</h1>
                  <h3 data-aos="fade-up" data-aos-delay="100">You Can View the student's personal Data With The Possibility Of Modification It .</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br>    

    <div class="card-header card-header-primary">
        <h5 class="card-title" style="font-weight: bold; text-align: center;">View Model Results .</h5>
    </div>
    
<div class="card-body" id="viewData-section">
    <div class="table-responsive ">
        <table class="table" border="1">
        <thead class=" text-primary"></thead>
        <tbody >
        <tr>
        <th class="ml-auto w-25"><?php echo "Student ID" ?></th>
        <th class="ml-auto w-25"><?php echo "First Name" ?></th>
	    <th class="ml-auto w-25"><?php echo "last Name" ?></th>
	    <th class="ml-auto w-25"><?php echo "Email Address" ?> 
	    <th class="ml-auto w-25"><?php echo "Phone" ?></th>
        <th class="ml-auto w-25"><?php echo "College" ?></th>
	    <?php
        
	extract($_POST);
	if(isset($_POST["studentID"])){
	$query="Select * From student_table Where st_id='$studentID'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($result)){
	echo "<tr><td>",$row['st_id'],"</td>";
	echo "<td>",$row['first_name'],"</td>";
	echo "<td>",$row['last_name'],"</td>";
	echo "<td>",$row['email'],"</td>";
	echo "<td>",$row['phone'],"</td>";
    echo "<td>",$row['s_id'],"</td>";
    echo"</tr>";

	    }
    }
    ?>
                                              
            </tbody>
          </table>
        </div>
    </div>
</div>

<br><br>
<form method="post" action="UpdateInformation.php">	
<div class="form-group" >
    <div class="card-header card-header-primary">
    <!-- <h2 for="InputId" class="card-title" style="font-weight: bold;  margin: auto; text-align: center;">Update Student's Pearsonal Data .</h2> -->
    <h5 class="card-title" style="font-weight: bold; text-align: center;">Update Student's Pearsonal Data .</h5>

</div>


    <br>
    <center><input type="submit" class="btn btn-primary" name="updateInformation" value="Update the student information"></center>
</div>
</form>  
<br>

    <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            This Project is made with <i class="icon-heart" aria-hidden="true"></i> by <a href=""
            arget="_blank">Salam Yaser Hammad .</a>
            </p>
                </div>
            </div>
        </div>
    </div>


    
</footer>








</div> <!-- .site-wrap -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>


<script src="js/main.js"></script>

</body>

</html>


