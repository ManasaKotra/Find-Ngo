<!DOCTYPE html>
<html lang="en">

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Schoolbell' rel='stylesheet' type='text/css'>
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
              <a class="navbar-brand" href="home.html"><i class="fa fa-leaf"></i>&nbsp;LetsHelp</a>
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
                  <a href='#' class="btn btn-default facebook"> <i class="fa fa-facebook "></i> Login via Facebook </a> 
                  <br><br>
                  <!--<a href='#' class="btn btn-default twitter"> <i class="fa fa-twitter modal-icons"></i> Login via Twitter </a>-->
                  <a href='#' class="btn btn-default google"> <i class="fa fa-google-plus modal-icons"></i> Login via Google </a>
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
                  <a href='#' class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Signup via Facebook </a> 
                  <br><br><br>
                  <!--<a href='#' class="btn btn-default twitter"> <i class="fa fa-twitter modal-icons"></i> Signup via Twitter </a>-->
                  <a href='#' class="btn btn-default google"> <i class="fa fa-google-plus modal-icons"></i> Signup via Google </a>
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


  
    <div class="container" >
      <section>
        <div class="col-xs-12 col-sm-6 col-md-8">
        <h2 > Find NGO's near you ... </h2> </div>
        <form class="form-inline col-md-6 col-md-offset-3" role="form">
      
          <!-- Split button -->
          <div class="btn-group ">
            <button type="button" class="btn btn-default  ">    City   </button>
            <button type="button" class="btn btn-default  dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Hyderabad</a></li>
              <li><a href="#">Bangalore</a></li>
              <li><a href="#">Mumbai</a></li>
            </ul>
          </div><!-- Split button -->
            
            <!-- Split button -->
          <div class="btn-group ">
              <button type="button" class="btn btn-default">Locality</button>
              <button type="button" class="btn  btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Abids</a></li>
              <li><a href="#">Dilsukhnagar</a></li>
              <li><a href="#">Panjagutta</a></li>
            </ul>
          </div><!-- Split button -->
          
          <div class="form-group">
            <input type="text" class="form-control " id="example2" placeholder="Area of Interest">
          </div>
        
          <div class="form-group">
            <button type="search" href="ngo.php" target="_blank" class="btn btn-md btn-default btn-block " >Search</button>
          </div>
          </form>
      </section>
    </div>


<hr>


  <div class="container ">
    <section>
     <p style="text-align:center;font-size:20px;"><span class="glyphicon glyphicon-map-marker" aria-hidden="true" > </span>&nbsp;Dilsukhnagar&nbsp;,&nbsp;Hyderabad&nbsp;.</p>
    </section>
  </div>

<hr>


<div class="container">
  <section>
    
  </section>
</div>


<hr>

</body>




 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js"></script>
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

<footer class="footer">
    <div class="container">
      <p></p>

    </div>    
</footer>


 <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script> 
 <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js"></script>



</body>

</html>