    
  function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail());

  $.ajax({
                type: "post",
                url: "/surveyor/logincheck.php",
                data: {  'id' : profile.getId() ,'name' : profile.getName(), 'email':profile.getEmail() , 'source' :'google'  },
                datatype : 'JSON',
               
                success: function(response){
                    console.log(response);
                   //  window.location.replace("/surveyor/home.php");
                    //echo what the server sent back...

                    var x= document.cookie;
                    console.log(" cookies are set " + x );

                    
                }
            });

}
   

  
// this function is to get cookie value

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

