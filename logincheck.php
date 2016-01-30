<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "surveyor";
//session_start();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$id = $_POST['id'];
//echo $q . $p;
//$str =" ";
// foreach ($q as $key ) {
//   # code...
//   echo $key->name;
//   echo $key->email;
  

// }
//echo json_encode($str);

$sql = "SELECT email FROM users where email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
   


          header('Location: /surveyor/home.php');   // change this according to page
        

    
} 
else {
    
    $sql = " INSERT INTO `users`(`id`, `username`, `name`, `email`) VALUES (null,'$id', '$name', '$email')";
   
             

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//echo " database entry should be done";


}



mysqli_close($conn);
?>