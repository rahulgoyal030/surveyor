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

      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
  

</head>
<body>

<!-- navigation section code -->
<nav>
    <div class="nav-wrapper">       
      <a href="#!" class="brand-logo">Surveyor</a>
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

<!-- sections for fb googlle signin button  -->
  <div class="divider"></div>
  
  <div class="section , center ">
     <h3>Create Surveys, Get Answers</h3>
    
         <fb:login-button scope="public_profile,email" size="xlarge"   onlogin="checkLoginState();"></fb:login-button>
         <div class="g-signin2 " data-onsuccess="onSignIn"></div>
    
  
  </div>
  

  <div class="divider"></div>
  <div class="section , center">
    <h5>Survey your market target</h5>
    <p>survey monkey audience has millions of people ready to take your survey</p>
    <a class="waves-effect waves-light btn">Learn More</a>
  </div>



  <div class="divider"></div>
  <div class="section , center ">
    <h5>Want more power and multiple users ?</h5>
    <p>get our most powerful features and make smart decisions with Surveyor Enterprise</p>
    <a class="waves-effect waves-light btn">Learn More</a>
  </div>


  <div class="divider"></div>
  <div class="section , center ">
    <h5>Give your results more context</h5>
    <p>compare your survey data to organizations like yours with Surveyor Benchmarks</p>
    <a class="waves-effect waves-light btn">Learn More</a>
  </div>
 
<div id="status"></div>


 <!-- <fb:login-button scope="public_profile,email"   onlogin="checkLoginState();"></fb:login-button>
              <div class="g-signin2" data-onsuccess="onSignIn"></div>
 -->

<button onclick="logout()"> logout</button>


<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>


<!-- loading the materialize   -->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html