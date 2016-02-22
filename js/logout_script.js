

$(document).ready( function  () {

  
    $("#logout").click(function(){
          
            
            document.cookie = "userID=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
            signOut();

            logout_fb();

            
             console.log(" scripts are called");
            window.location.replace("/Surveyor/index.php");

    });
    
    $("#logout1").click(function(){
          
            
            document.cookie = "userID=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
            signOut();

            logout_fb();

            
             console.log(" scripts are called");
            window.location.replace("/Surveyor/index.php");

    });

   

 function signOut() {
     console.log(" google scripts ");
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }




function logout_fb() {

     console.log(" fb  scripts ");
     FB.logout(function(response) {
                console.log("log out from fb");
            });
}    
   

   function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
  
    if (response.status === 'connected') {
    
      
    } else if (response.status === 'not_authorized') {
    
    } else {
      
    }
  }


window.fbAsyncInit = function() {
  FB.init({
    appId      : '1450668335251366',    // 1007893702601188
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.2' // use version 2.2
  });

 
  FB.getLoginStatus(function(response) {
     //  statusChangeCallback(response);
  });
     
  };


  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

   



});




function onLoad() {
      gapi.load('auth2', function() {
        gapi.auth2.init();
      });
    }




    



