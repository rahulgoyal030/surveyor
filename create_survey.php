<!DOCTYPE html>
<head>
<title>Surveyor</title>

 <meta charset="UTF-8">
 

 <meta name="google-signin-client_id" content="389476587833-eq4mc44ed3ond4nuu6gtk359dff805st.apps.googleusercontent.com">
 
 <script src="js/jquery-1.12.0.min.js"></script>
 <script type="text/javascript" src="js/logout_script.js"></script>
 <script type="text/javascript" src="js/google_login_script.js"></script>

 <script type="text/javascript" src="js/button_collapse.js" ></script>
 <script type="text/javascript" src="js/profile_info.js" ></script>
 <script type="text/javascript" src="js/submit_survey.js"></script>
 
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
        <li><a href="sass.html">My surveys</a></li>
        <li><a href="badges.html">Account</a></li>
        <li><a href="collapsible.html">Upgrade</a></li>
        <li><a href="mobile.html">About</a></li>
        <li><a href="mobile.html">Help</a></li>
        <li><a href="#" id="#logout" >Logout</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">My surveys</a></li>
        <li><a href="badges.html">Account</a></li>
        <li><a href="collapsible.html">Upgrade</a></li>
        <li><a href="mobile.html">About</a></li>
        <li><a href="mobile.html">Help</a></li>
        <li><a href="#" id="logout">Logout</a></li>
      </ul>
    </div>
  </nav>



<div class="section , center">
    <h2>Create Survey</h2>
</div>

  


<div class="row center">
    <div class="input-field col s12 l6">
      <input  id="title" type="text" placeholder="Enter Survey Title" class="validate" required>
      
    </div>
</div>

<!-- <div class="row  center">
    <div class="input-field col s12 l6">
      <input  id="category" type="text" placeholder="Category" class="validate" required>
      
    </div>
</div> -->

<div class="row  center">
   <div class="input-field col s12">
    <select  id="category" >
      <option value=""  disabled selected>Choose the category</option>
      <option value="community">Community</option>
      <option value="education">Education</option>
      <option value="events">Events</option>
      <option value="healthcare">Healthcare</option>
      <option value="human_resources">Human Resources</option>
      <option value="just_for_fun">Just For Fun</option>
      <option value="market_research">Market Research</option>
      <option value="customer_satisfaction">Customer Satisfaction</option>
      <option value="non-profit">Non-Profit</option>
      <option value="political">Political</option>
    </select>
    
  </div>
</div>


  
<div class="row  center">
    <div class="input-field col s12 l6">
    
      <input id="date" type="date"  name="bday" class="validate" required>
    </div>
</div>


 <div class="row center">
      
      <a class="waves-effect waves-light btn  lime darken-3 center center-text btn-large" id="submit">Submit</a><br/><br/>
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