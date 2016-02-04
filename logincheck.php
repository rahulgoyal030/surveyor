<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "surveyor";

session_start();  //  start the session 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['id'];
$source = $_POST['source'];


  

// }
//echo json_encode($str);

$sql = "SELECT email FROM users where email='$email' AND  username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
       
        $_SESSION["username"] = "$username";
        $cookie_name = "login_source";
        $cookie_value = "$source";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30*15), "/");    //  this set the cookie for 15 days
         $res = '{"userID":"'.$username.'", "status":"801"}' ;
         //echo json_encode($res);
         echo  $res;

       //   header('Location: /surveyor/home.php');   // change this according to page
        

    
} 
else {
    
    $sql = " INSERT INTO `users`(`id`, `username`, `name`, `email` , `source`) VALUES (null,'$username', '$name', '$email' , '$source')";
   
    
     $_SESSION["username"] = "$username";
     $cookie_name = "login_source";
     $cookie_value = "$source";
     setcookie($cookie_name, $cookie_value, time() + (86400 * 30*15), "/");    //  this set the cookie for 15 days

        $res = '{"userID":"'.$username.'", "status":"800"}' ;
      //  echo "new record created successfully " . $_SESSION["loginSource"] . $_SESSION["username"] ;         
        echo json_encode($res);





}



mysqli_close($conn);
?>