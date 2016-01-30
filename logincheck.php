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

        echo   $_SESSION["username"] ;
       //   header('Location: /surveyor/home.php');   // change this according to page
        

    
} 
else {
    
    $sql = " INSERT INTO `users`(`id`, `username`, `name`, `email` , `source`) VALUES (null,'$username', '$name', '$email' , '$source')";
   
    
     $_SESSION["username"] = "$username";
     $cookie_name = "login_source";
     $cookie_value = "$source";
     setcookie($cookie_name, $cookie_value, time() + (86400 * 30*15), "/");    //  this set the cookie for 15 days

        echo "new record created successfully " . $_SESSION["loginSource"] . $_SESSION["username"] ;         

if (mysqli_query($conn, $sql)) 
{
   
     // header('Location: /surveyor/home.php');
      // echo "New record created successfully";
}
else 
{ 
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//echo " database entry should be done";



}



mysqli_close($conn);
?>