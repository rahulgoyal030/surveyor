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
 <script type="text/javascript" src="fb_login_script.js" ></script> 
 <script type="text/javascript" src="google_login_script.js"></script>
 <script type="text/javascript" src="logout_script.js"></script>
 <script src="jquery-1.12.0.min.js"></script>
 
 <script src="https://apis.google.com/js/platform.js" async defer></script>
 
  <meta name="google-signin-client_id" content="389476587833-8bkfiq7aqkgn4c96h021mbfk1qe5jppa.apps.googleusercontent.com">

</head>
<body>

 

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>



<div id="status"></div>


<div class="g-signin2" data-onsuccess="onSignIn"></div>



<button onclick="logout()"> logout</button>



<p> showing page </p>


</body>
</html