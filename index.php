<?php
session_start();
if(!empty($_SESSION['login_user']))
{
header("Location:home.php");
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Stage Shastra | Makes Casting easier.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
      
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
          <div class="container-fluid col-sm-10 center"> <!--container fluid starts -->
            <div class="center headname">
              <img src="img/logo.png" class="logo img-fluid"/>  STAGE<b>SHASTRA</b>
            </div>
            <hr class="thick">
            </hr>
            <div id="selector">
              <div class="row">
                <div class="col-sm-6 mycontent-left" style="text-align:center; ">
                  <button  class="btn submit-btn firstcolor select-btn " onclick="show_casting()" >CD</button><br><font class="info gray marginTop">I am a Casting Director</font>
                </div>
                <div class="col-sm-6" style="text-align:center;">
                  <button  class="btn submit-btn firstcolor select-btn " onclick="show_actor()" >A</button><br><font class="info gray marginTop">I am an Actor</font>
                </div>
              </div>
            </div>
            <div id="castingdirector" class="hidden">
              <div class="row">
                <div class="col-sm-6 light-padded mycontent-left" style="text-align:left;">
                  <font class="info gray left padded"><br>Casting Directors use Stage Shastra to:<br>
                    <ul>
                      <li>Organize their data</li>
                      <li>Seamlessly contact hundreds of actors</li>
                      <li>Instantly find new faces</li>
                    </ul>
                  </font>
                </div>
                <div class="col-sm-6">
                  <div class="mycontent-right center light-padded">
                      <font class="info firstcolor center"> Log In | </font><a href="signup.html"><font class="info firstcolor center"> Sign Up! </a></font>
                      <form role="form" id="login-form" method="post" >
                      <div class="form-group">
                        <input type="text" class="form-control login" id="username" name="username" placeholder= "Username" required />
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control login" id="password" name="password" placeholder= "Password" required />
                      </div>
                      <div class="checkbox-circle">
                        <a href="forgotpassword.html">Forgot Password? </a>
                      </div>
                      <button type="submit" class="btn submit-btn firstcolor" id="btn-login" ><span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In</button>
                      <div class="alert alert-danger margin-top hidden" id="error-alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>Error! </strong>
                         Please enter a valid Username and Password
                      </div>
                    </form>
                  </div> <!---ends here mycontent-right -->
                </div>
              </div>
            </div>
            <div id="actor" class="hidden">
               <div class="col-sm-6 light-padded mycontent-left" style="text-align:left;">
                <font class="info gray left padded"><br>Actors use Stage Shastra to:<br>
                  <ul>
                    <li> Connect directly with casting directors</li>
                    <li>Create detailed profiles</li>
                    <li>Get audition notifications</li>
                  </ul>
                </font>
              </div>
              <div class="col-sm-6">
                <div class="mycontent-right center light-padded">
                    <font class="info dark-gray center"> Log In | <a href="actor/signup.php"><font class="info firstcolor center"> Sign Up! </a></font></font>
                    <form role="form" id="actor_login-form" method="post" >
                    <p class="text-danger" id="signup-error"></p>
                    <div class="form-group">
                      <input type="email" class="form-control login" id="email" name="email" placeholder= "Email" required />
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control login" id="actor_password" name="actor_password" placeholder= "Password" required />
                    </div>
                    <div class="checkbox-circle">
                      <a href="forgotpassword.html">Forgot Password? </a>
                    </div>
                    <button type="submit" class="btn submit-btn firstcolor" id="btn-login" ><span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In</button>
                    <div class="alert alert-danger margin-top hidden" id="error-alert">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      <strong>Error! </strong>
                       Please enter a valid Username and Password
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>       
   
     
        
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/login.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
