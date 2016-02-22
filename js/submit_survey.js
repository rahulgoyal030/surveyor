$(document).ready(function() {
    $('select').material_select();
 });
	
$(document).ready( function () {


	$("#submit").click(function(){

 			     
 				var userid= getCookie("userID");
 				var title = $("#title").val();
 				var category = $("#category").val();
 				var date= $("#date").val();

 				var yy = date.slice(0,4);
 				var mm =  date.slice(5,7);
 				var dd = date.slice(8,10);
 				

 				var day = dd+"-"+mm+"-"+yy;
 				console.log(day  +  " " + category + " " + userid );

 				$.ajax({
                type: "post",
                url: "http://contactsyncer.com/surveyinfo.php",
                data: {  'title' : title, 'userID': userid , 'category' : category , 'date' : day  },
                datatype : 'JSON',
               
                success: function(response){
                    console.log(response);
                   
                  // console.log()

                    var res = JSON.parse(response);
                   
                   //  window.location.replace("/Surveyor/home.php");
                    //echo what the server sent back...

                    
                }
            });

	})

});




function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires   +  ";path=/;  domain=http://contactsyncer.com/ ";
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