<?php
header('Access-Control-Allow-Origin: *');
$username = 'contwzvk_honey';
$database = 'contwzvk_Survey';
$localhost = 'localhost';
$password = 'rocking_143';
//$con = mysqli_connect('localhost', $username, $password, $database);
$link = mysql_connect($localhost, $username, $password);
$db_selected = mysql_select_db($database, $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
//mysql_select_db($database) or die("unable to find database");
$name = $_GET['name'];
    $email = $_GET['email'];
$type = $_GET['type'];
$fbID = $_GET['fbID'];

//$name = 'hh';
 //   $email = 'tt1';
    //$password = $_GET['password'];
    $dob = '12-11-1988';
if($type == 'google')
    $check = "SELECT * FROM UserInfo WHERE email = '$email'";
else
$check = "SELECT * FROM UserInfo WHERE fbID = '$fbID'";

    $result = mysql_query($check);
    $resultArray = array();
    
    if(mysql_num_rows($result) > 0)
    {
        // row exists. do whatever you would like to do.
       // echo("already existed");
while($r = mysql_fetch_assoc($result)) {
    $resultArray['userID'] = $r['UserID'];
}
        $resultArray['status'] = '801';
        echo json_encode($resultArray);
       // http_response_code(409);
    }
    
    else
    {
if($type == 'google')
        $query = "INSERT INTO UserInfo VALUES ('', '$name', '$email', '$dob', '')";
else
$query = "INSERT INTO UserInfo VALUES ('', '$name', '', '$dob', '$fbID')";
        mysql_query($query) or die("error1");
        
        $resultArray['userID'] = mysql_insert_id();
$resultArray['status'] = '800';
        echo json_encode($resultArray);
        //echo("success" + $resultArray);
    }
    
    
    
    ?>