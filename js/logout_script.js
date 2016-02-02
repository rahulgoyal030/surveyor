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





function logout(){

	
	var value =  getCookie('login_source');
                      
    console.log(" value is " + value);

    if(value=="google")
    {
    	signOut();
    }
    else if(value=="fb")
    {
    		fbLogoutUser();
    }

    $.ajax({
                type: "post",
                url: "/surveyor/logout_session.php",
               
                success: function(response){
                    console.log(response);
                   
                }
            });


    
   




}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }

   function fbLogoutUser() {
    FB.getLoginStatus(function(response) {
        if (response && response.status === 'connected') {
            FB.logout(function(response) {
                console.log("log out from fb");
            });
        }
    });
}
