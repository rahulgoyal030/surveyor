$(document).ready( function  () {
	        
			var userId = getCookie("userID");

            $.ajax({
                type: "get",
                url: " http://contactsyncer.com/profileinfo.php",
                data: {  'userID' : userId },
                datatype : 'JSON',
               
                success: function(response){
                    console.log(" userId i got  " , userId);
                    console.log(response);
                    var res = JSON.parse(response);
                    console.log( " it gives this data " , res[0].Name);
                    
                   
                    
                    
                  

                    

                    
                }
            });

});



function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires +  ";path=/;  domain=http://contactsyncer.com/ ";
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