<?php

include("database.php");



?>




<?php
                                        $query = $_POST['search'];
                                        $query = htmlspecialchars($query);
                                        if(empty($query)) {
                                            echo '<script type ="text/JavaScript">';  
                                            echo 'alert("Please, Enter The Name Of The Course That You Want TO Search It .")';  
                                            echo '</script>';  
                                            include("ProjectPage.html");
                                            exit();
                                        }else{
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
                <li><a href="#SearchData-section" class="nav-link">Search Results</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="login.php" class="nav-link"><span>LOG IN</span></a></li>
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
                  <h1 data-aos="fade-up" data-aos-delay="150">The Search Results</h1>
                  <p class="mb-4" data-aos="fade-up" data-aos-delay="100">You Can See The Search Results Data From This Page .</p>

                  <!-- <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary py-3 px-5 btn-pill">Admission Now</a></p> -->

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>





    <br><br>    

    <div class="card-header card-header-primary" id="SearchData-section">
        <h5 class="card-title" style="font-weight: bold; text-align: center;">The Search Results .</h5>
    </div>
    <br><br>    


        <!--Table-->
                              
        <div class="row mb-5 justify-content-center">
        <table class="table table-striped w-auto">

          <!--Table head-->
          <thead>
                                        </thead>
                                        <tbody>


                                      <?php 
                                        $row_results = mysqli_query($con, "SELECT * FROM course_table WHERE (name LIKE '%" . $query . "%')");
                                        if (mysqli_num_rows($row_results) > 0) {

                                            while ($row = mysqli_fetch_array($row_results)) {
                                                ?>
                                            <tr class="table-info">
                                                <th ><?php echo "Course ID ." ?></th>
                                                <th ><?php echo "Course Name ." ?></th>
                                            </tr>

                                            <?php echo "<br><br>" ?>                                        

                                            <tr >
                                                <td><?php echo $row['c_id']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                            </tr>
                                             <?php
                                            }
                                        } else { // if there is no matching rows do following
                                            echo "<tr>No results</tr>";
                                        }
                                    } 
                                     ?>
          </tbody>
          <!--Table body-->


        </table>
        <!--Table-->
      </div>




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