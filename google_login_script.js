    
  function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail());

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
   

  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }

