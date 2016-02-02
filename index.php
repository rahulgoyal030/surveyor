<?php
  
  session_start();
  if(isset($_SESSION['username'])&& !empty($_SESSION['username']) )
  {
    //header('location: home.php');   // to redirect it to the  home page
    echo "session is set";
  }
  


?>
<!DOCTYPE html>
<html>
<head>
<title>Surveyor</title>

 <meta charset="UTF-8">
 <meta name="google-signin-client_id" content="389476587833-8bkfiq7aqkgn4c96h021mbfk1qe5jppa.apps.googleusercontent.com">


 <script type="text/javascript" src="js/fb_login_script.js" ></script> 
 <script type="text/javascript" src="js/google_login_script.js"></script>
 <script type="text/javascript" src="js/logout_script.js"></script>
 <script src="js/jquery-1.12.0.min.js"></script>
 <script type="text/javascript" src="js/button_collapse.js" ></script>
 
 <script src="https://apis.google.com/js/platform.js" async defer></script>

 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
  

</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
 

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>



<div id="status"></div>


<div class="g-signin2" data-onsuccess="onSignIn"></div>



<button onclick="logout()"> logout</button>



<p> showing page </p>


<!-- loading the materialize   -->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html