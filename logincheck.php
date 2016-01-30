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
//echo $q . $p;
//$str =" ";
// foreach ($q as $key ) {
//   # code...
//   echo $key->name;
//   echo $key->email;
  

// }
//echo json_encode($str);

$sql = "SELECT email FROM users where email='$email' AND  username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
        $_SESSION["loginSource"] = "$source";
        $_SESSION["username"] = "$username";

        echo   $_SESSION["loginSource"] ;
       //   header('Location: /surveyor/home.php');   // change this according to page
        

    
} 
else {
    
    $sql = " INSERT INTO `users`(`id`, `username`, `name`, `email` , `source`) VALUES (null,'$username', '$name', '$email' , '$source')";
   
    $_SESSION["loginSource"] = "$source";
     $_SESSION["username"] = "$username";

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