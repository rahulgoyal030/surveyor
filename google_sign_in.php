<!DOCTYPE html>
<html>
<head>
  <title>surveyor</title>
  <script src="jquery-1.12.0.min.js"></script>
  <meta name="google-signin-client_id" content="389476587833-8bkfiq7aqkgn4c96h021mbfk1qe5jppa.apps.googleusercontent.com">
</head>
<body>
  <div id="my-signin2"></div>
  <script>
    function onSuccess(googleUser) {
      //console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
      var profile = googleUser.getBasicProfile();
 		 console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
 		 console.log('Name: ' + profile.getName());
 		 console.log('Image URL: ' + profile.getImageUrl());
 		 console.log('Email: ' + profile.getEmail() );

 		 $.ajax({
                type: "post",
                url: "/surveyor/logincheck.php",
                data: {  'id' : profile.getId() ,'name' : profile.getName(), 'email':profile.getEmail()  },
                datatype : 'JSON',
               
                success: function(response){
                    console.log(response);
                    //echo what the server sent back...
                }
            });



    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'https://www.googleapis.com/auth/plus.login',
        'width': 200,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
   

  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }

  </script>
   <a href="#" onclick="signOut();">Sign out</a>
  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</body>
</html>



