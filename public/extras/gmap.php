<!DOCTYPE html>
<html lang="en">

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
<!-- <link href='http://fonts.googleapis.com/css?family=Schoolbell' rel='stylesheet' type='text/css'> -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>
      <?php wp_title(' | ',true,'right'); ?>
    </title>
      <?php wp_head(); ?>
</head>
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><i class="fa fa-leaf "></i>&nbsp;ProjectNgo</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" class="LoginSignUp" data-target="#login" style="font-size:16px;">Login / Sign Up</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
        <!--modal-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header login_modal_header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h2 class="modal-title" id="myModalLabel">Login to Your Account</h2>
          </div>
          <div class="modal-body login-modal">
            <p></p>
            <br/>
            <div class="clearfix"></div>
            <div id='social-icons-conatainer'>
              <div class='modal-body-left'>
                <div class="form-group">
                      <input type="text" id="username" placeholder="Enter your name" value="" class="form-control login-field">
                      <i class="fa fa-user login-field-icon"></i>
                  </div>

                  <div class="form-group">
                      <input type="password" id="login-pass" placeholder="Password" value="" class="form-control login-field">
                      <i class="fa fa-lock login-field-icon"></i>
                  </div>

                  <a href="#" class="btn btn-success modal-login-btn">Login&nbsp;&nbsp;&nbsp;<i class="fa fa-sign-in"></i></a>
                  <a href="#" class="login-link text-center">Lost your password?</a>
              </div>

              <div class='modal-body-right'>
                <div class="modal-social-icons"><br>
                  <a href='#' class="btn btn-default facebook"> <i class="fa fa-facebook "></i>&nbsp; Login via Facebook </a>
                  <br><br>
                  <!--<a href='#' class="btn btn-default twitter"> <i class="fa fa-twitter modal-icons"></i> Login via Twitter </a>-->
                  <a href='#' class="btn btn-default google"> <i class="fa fa-google-plus "></i>&nbsp; Login via Google </a>
                  <!--<a href='#' class="btn btn-default linkedin"> <i class="fa fa-linkedin modal-icons"></i> Login via Linkedin </a>-->
                </div>
              </div>
              <div id='center-line'> OR </div>
            </div>
            <div class="clearfix"></div>

            <div class="form-group modal-register-btn">
              <button class="btn btn-default " id='registerbtn' data-toggle="modal" data-target="#register">
                <a style="text-decoration:none;color:#ddd;"> New User? Register Here!</a></button>

            </div>
          </div>
          <div class="clearfix"></div>
          <div class="modal-footer login_modal_footer">
          </div>
      </div>
    </div>
</div>

<div class="modal fade" id="register"  role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header login_modal_header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color
            :#fff;">&times;</button>
            <h2 class="modal-title" id="myModalLabel">Signup now ... </h2>
          </div>
          <div class="modal-body login-modal">
            <p></p>
            <br/>
            <div class="clearfix"></div>
            <div id='social-icons-conatainer'>
              <div class='modal-body-left'>
                <div class="form-group">
                      <input type="text" id="username" placeholder="Username" value="" class="form-control login-field">
                      <i class="fa fa-user login-field-icon"></i>
                  </div>

                  <div class="form-group">
                      <input type="email" id="email" placeholder="Email address" value="" class="form-control login-field">
                      <i class="fa fa-envelope login-field-icon"></i>
                  </div>

                  <div class="form-group">
                      <input type="password" id="login-pass" placeholder="Password" value="" class="form-control login-field">
                      <i class="fa fa-lock login-field-icon"></i>
                  </div>

                  <div class="form-group">
                      <input type="password" id="login-pass" placeholder="Confirm Password" value="" class="form-control login-field">
                      <i class="fa fa-lock login-field-icon"></i>
                  </div>

                  <a href="#" class="btn btn-success modal-login-btn">Signup&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>

              </div>

              <div class='modal-body-right'>
                <div class="modal-social-icons"><br><br>
                  <a href='#' class="btn btn-default facebook"> <i class="fa fa-facebook "></i>&nbsp; Signup via Facebook </a>
                  <br><br><br>
                  <!--<a href='#' class="btn btn-default twitter"> <i class="fa fa-twitter modal-icons"></i> Signup via Twitter </a>-->
                  <a href='#' class="btn btn-default google"> <i class="fa fa-google-plus "></i>&nbsp; Signup via Google </a>
                  <!--<a href='#' class="btn btn-default linkedin"> <i class="fa fa-linkedin modal-icons"></i> Signup via Linkedin </a>-->
                </div>
              </div>
              <div id='center-line'> OR </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
          <div class="modal-footer login_modal_footer">
          </div>
      </div>
    </div>
</div>

</nav>

<body>

<div class="container">
    <section class="canvas">
      <div id="map-canvas"></div>
    </section>
</div>



    <div class="container searchcont" >
      <section>

        <h2 > Find NGO's near you ... </h2> </div>
        <div class="container">
        <form class="form-inline " align="center" role="form" action="search.php" method="POST" target="_self">

          <!-- Split button -->
          <div class="btn-group ">
            <button type="button" class="btn btn-default btn-city"  name="city">    City   </button>
            <button type="button" class="btn btn-default  dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" id="dropdown-menu1" role="menu">
              <li><a href="#" data-value="Hyderabad">Hyderabad</a></li>


            </ul>
          </div><!-- Split button -->

            <!-- Split button -->
          <div class="btn-group ">
              <button type="button" class="btn btn-default btn-locality" name="locality">Locality</button>
              <button type="button" class="btn  btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
            <ul class="dropdown-menu" id="dropdown-menu2" role="menu">
              <li><a href="#" data-value="Abids">Abids</a></li>
              <li><a href="#" data-value="Dilsukhnagar">Dilsukhnagar</a></li>
              <li><a href="#" data-value="Panjagutta">Panjagutta</a></li>

             </ul>

          </div><!-- Split button -->

          <div class="form-group">
            <input  type="text" name="interest" id="interest" class="form-control "  placeholder="Area of Interest"/>
          </div>

          <div class="form-group">
            <button type="submit" href="search.php" id="searchsubmit"  value="Search" class="btn btn-md btn-default btn-block searchbutton"><a style="text-decoration:none;color:white;">Search&nbsp;&nbsp;&nbsp;<i class="fa fa-search fa-lg"></i></a></button>
          </div>
          </form>
        </div>
      </section>
    </div>

<hr>


  <div class="container ">
    <section>
     <p style="text-align:center;font-size:20px;"><span class="fa fa-map-marker" style="font-size:40px;" aria-hidden="true" > </span>&nbsp;Dilsukhnagar&nbsp;,&nbsp;Hyderabad&nbsp;.</p>
    </section>
  </div>

<hr>
<section>
  <div class="container">
  
    <div class="col-md-8">
     <a href=""><h2>Aadita - The Beginning</h2></a><p><span class="fa fa-map-marker" style="font-size:20px;" aria-hidden="true"></span>
     &nbsp;Flat No. 301, Satya Sadan, F-5, Madhura Nagar. Opp Abhiruchi Swagruha Sweets, Above United Bank Of India, Yousufguda,Hyderabad.&nbsp;&nbsp;<a href="#">Show on map</a><br></p>
     <p>The children with Autism are provided with the services required for mainstreaming. The sensory integration and school readiness skills are necessary to prepare them
      to go into the society. The prime area focused by Aadita is the social skills. The child who is integrated in regular schools learns few letters, concepts but the area 
      of prime concern is the social skills. After giving a deep thought about it Aadita is conducting social skill training which is giving excellent results.</p>
     <p><span class="bold">Contact :</span> +91 040 2373-7201, 99853-09290 / 97014-57346, 98851-40696 / 99891-37873</p> 
    </div>

    <div class="col-md-4">
    <!--<img src="img/m3.jpg" class="img-responsive img-thumbnail thumbs" alt="Responsive image">-->
    </div>
  
  </div>
</section>


<footer class="footer">
    <div class="container">
      <p> </p>

    </div>
</footer>






 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="js/bootstrap.js"></script>
 <script src="js/modernizr-2.6.2.min.js"></script>
 <script src="js/jquery-1.10.2.min.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js"></script>
 <script href="js/myjs.js"></script>

    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(17.20, 78.30),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
  </script>

<script>

$(function (){

    $("#dropdown-menu1").on('click', 'li a', function(){
      $(".btn-city:first-child").text($(this).text());
      $(".btn-city:first-child").val($(this).text());

   });

    $("#dropdown-menu2").on('click', 'li a', function(){
      $(".btn-locality:first-child").text($(this).text());
      $(".btn-locality:first-child").val($(this).text());

   });

    //$(".canvas").slideUp(0).slideDown(500);
    $(".canvas").fadeToggle(0).fadeToggle(500);
    //$(".searchcont h2").hide(0).show(500);
    //$(".searchcont h2").fadeToggle(0).fadeToggle(500);
    $(".searchcont h2").css({fontWeight:'strong'});



});


</script>



</body>

</html>
