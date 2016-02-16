

$(document).ready( function  () {

  
    $("#logout").click(function(){
           console.log(" reaching in logout script ");
            
            document.cookie = "userID=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
            signOut();

            logout_fb();

            

            window.location.replace("/Surveyor/index.php");

    });

   
   



});
function onLoad() {
      gapi.load('auth2', function() {
        gapi.auth2.init();
      });
    }


 function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }




function logout_fb() {
     FB.logout(function(response) {
                console.log("log out from fb");
            });
}    
    function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
       // fbLogoutUser();
      // Logged into your app and Facebook.
      
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
     // document.getElementById('status').innerHTML = 'Please log ' +
       // 'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
     // document.getElementById('status').innerHTML = 'Please log ' +
       // 'into Facebook.';
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

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
       statusChangeCallback(response);
  });
     
  };

 // Load the SDK asynchronously
 

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


function fbLogoutUser() {
    FB.getLoginStatus(function(response) {
        if (response && response.status === 'connected') {
            FB.logout(function(response) {
                console.log("log out from fb");
            });
        }
    });
}


    



