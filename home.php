<!DOCTYPE html>
<html>
<head>
<title>Surveyor</title>

 <meta charset="UTF-8">
 

 <meta name="google-signin-client_id" content="389476587833-eq4mc44ed3ond4nuu6gtk359dff805st.apps.googleusercontent.com">
 
 <script src="js/jquery-1.12.0.min.js"></script>
 <script type="text/javascript" src="js/logout_script.js" async></script>
 <script type="text/javascript" src="js/google_login_script.js"></script>

 <script type="text/javascript" src="js/button_collapse.js" ></script>
 <script type="text/javascript" src="js/profile_info.js" ></script>
 
 <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
   

  <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"  media="screen,projection"/>
 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <link rel="stylesheet" type="text/css" href="css/style.css">



      <!--Let browser know website is optimized for mobile-->
      
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
 
  

</head>
<body>

<!-- navigation section code -->
<nav>
    <div class="nav-wrapper">       
      <a href="#!" class="brand-logo">Participate/\/\e</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/Surveyor/my_survey_list.php">My surveys</a></li>
        <li><a href="badges.html">Account</a></li>
        <li><a href="collapsible.html">Upgrade</a></li>
        <li><a href="mobile.html">About</a></li>
        <li><a href="mobile.html">Help</a></li>
        <li><a href="#" id="#logout1" >Logout</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="/Surveyor/my_survey_list.php">My surveys</a></li>
        <li><a href="badges.html">Account</a></li>
        <li><a href="collapsible.html">Upgrade</a></li>
        <li><a href="mobile.html">About</a></li>
        <li><a href="mobile.html">Help</a></li>
        <li><a href="#" id="logout">Logout</a></li>
      </ul>
    </div>
  </nav>

<!-- sections for fb googlle signin button  -->


  


  <div class="section , center">
    <h5>Got a Burning Question?</h5>
    <p>Create your next survey and use the insights to make better decisions.</p>
    <a class="waves-effect waves-light btn  lime darken-3 center center-text" href="/Surveyor/create_survey.php" >Create Survey</a>
  </div>

  <div class="divider"></div>
    
  <div class="row , center">
      <h4><div class="col s12">Easily create your first survey</div></h4><br><br>
      <div class="col s4"> <i class="medium material-icons">playlist_add</i></div>
      <div class="col s4"> <i class="medium material-icons">input</i></div>
      <div class="col s4"> <i class="medium material-icons">trending_up</i></div>
      <div class="col s4 , size_text">Add questions</div>
      <div class="col s4 , size_text"> Send survey</div>
      <div class="col s4 , size_text">Analyze results</div>
      
    </div>

   
     <div class="row , center">
      <form class="col s12 offset-s1">
        <div class="row">
          <div class="input-field col s10">
            
            <input placeholder="Enter a survey title" id="first_name" type="text" class="validate">
          </div>
        </div>
        
      </form>

    </div>

    <div class="row center">
      
      <a class="waves-effect waves-light btn  lime darken-3 center center-text">+ Add Questions</a><br/><br/>
    </div>

    <div class="divider"></div>

<div id="status"></div>


 <!-- <fb:login-button scope="public_profile,email"   onlogin="checkLoginState();"></fb:login-button>
              <div class="g-signin2" data-onsuccess="onSignIn"></div>
 -->


 <div class="container">
      <div class="row">
        
      </div>
        <div class="col s12 m12 l6" id="leftbox">
        <div class="row">
              <div class="col s12 m12 l12 grey white-text">
              <h5>HOW IT WORKS</h5>
              </div>
              <div class="col s12 m12 l12">
                  <div class="row">
                  <div class="col s4 m3 l3 grey-text" id="icon">
                      <i class="medium material-icons">picture_in_picture</i>
                  </div>
                  <div class="col s8 m9 l9">
                    <h5>Design Your Survey</h5>
                    <ul type="disc">
                    <li>Try our certified Question Bank questions</li>
                    <li>Choose from 15 different question types</li>
                    <li>Customize your survey's look with a theme</li>
                    </ul>
                  </div>
                  </div>
                  <hr/>
              </div>
              <div class="col s12 m12 l12">
                  <div class="row">
                  <div class="col s4 m3 l3 grey-text" id="icon">
                      <i class="medium material-icons">contacts</i>
                  </div>
                  <div class="col s8 m9 l9">
                    <h5>Send survey</h5>
                    <ul type="disc">
                    <li>send by email , weblink , or social media</li>
                    <li>embed your survey on your blog or website</li>
                    
                    
                    </ul>
                  </div>
                  </div>
                  <hr/>
              </div>
              <div class="col s12 m12 l12">
                  <div class="row">
                  <div class="col s4 m3 l3 grey-text" id="icon">
                      <i class="medium material-icons">assessment</i>
                  </div>
                  <div class="col s8 m9 l9">
                    <h5>Design Your Survey</h5>
                    <ul type="square">
                    <li>see responses come back in real-time.</li>
                    <li>filter , crosstab , and graph your results</li>
                    <li>Export your response in multiple formats</li>
                    
                    </ul>
                  </div>
                  </div>
                  <hr/>
              </div>
              
       
            
          </div> 
        </div>
      </div>
    </div>



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
            © 2015 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>


<!-- loading the materialize   -->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html