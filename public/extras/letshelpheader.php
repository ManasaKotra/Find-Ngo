
<!DOCTYPE html>
<html lang="en">

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

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
              <a class="navbar-brand" href="home.html">LetsHelp</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">

                  <li class="dropdown" id="menuLogin">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
                    <div class="dropdown-menu" style="padding:20px;">
                      <form class="form"  id="formLogin"> 
                        <div align="center"><bold>Welcome back ... </bold></div>
                        <hr>
                        <input name="username" id="username" type="text" placeholder="Username"><br><br>
                        <input name="password" id="password" type="password" placeholder="Password"><br>
                          <div class="checkbox">
                            <label>
                            <input type="checkbox">Remember me !
                            </label>
                          </div>
                        <button type="submit" id="btnLogin" class="btn btn-sm">Login</button><br><br>
                        

                          <a href="#">Fogot password ?</a><br><br>
                        <div align="center"><bold>Or</bold></div><br>
                          <button type="button" class="btn btn-default btn-sm btn-block" style="background-color:#445C94;border:none;"><i class="fa fa-facebook"></i>&nbsp;Facebook Login</button>
                            <br>
                          <button type="button" class="btn btn-default btn-sm btn-block" style="background-color:#C74433;border:none;"><i class="fa fa-google"></i>&nbsp;Google+ Login</button>
                          <hr>
                      </form>
                  </div>
              </li>
              <li><a href="#" data-toggle="modal" data-target="#SignUp">Sign Up</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
        <!--modal-->
      <div class="modal fade" id="SignUp">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title"> <bold>Sign Up !</bold></h4>
            </div>
            <div class="modal-body">
               <form class="form-horizontal" role="form" >
        <div class="form-group">
          <label for="Username" class="col-sm-3 control-label">Username </label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="Username" id="Username" placeholder="Username">
          </div>
         </div> 
        <div class="form-group">
          <label for="Email" class="col-sm-3 control-label">Email address</label>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="Email" name="Email" placeholder="Email address">
          </div>
        </div>
        <div class="form-group">
          <label for="Password" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="Confirm" class="col-sm-3 control-label">Confirm password </label>
          <div class="col-sm-8">
            <input type="password" class="form-control" name="Confirm" id="Confirm" placeholder="Confirm Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-8">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Remember me
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-8">
            <button type="submit" name="submit" class="btn btn-default">Sign up !</button>
          </div>

        </div>
      </form>

    <div align="center"><bold>Or</bold></div><br>
          
        <div class="row">
          <div class="col-md-6 ">
            <button class="btn btn-default btn-md pull-right" style="background-color:#445C94;border:none;position:relative;"><i class="fa fa-facebook"></i>&nbsp;Join with Facebook </button><br>
          </div>
          <div class="col-md-6 ">
            <button class="btn btn-default btn-md" style="background-color:#C74433;border:none;position:relative;"><i class="fa fa-google"></i>&nbsp;Join with Google+ </button>
          </div>   
        </div>

     <hr>                 


        </div> 
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</nav>
    


     