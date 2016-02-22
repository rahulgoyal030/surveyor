<?php
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
   // $request = file_get_contents('php://input');
   // $input = json_decode($request,true);
   // $userID = $input['userID'];
   // $surveyID = uniqid();
   // $surveyTitle = $input['title'];
    $userID = $_GET['userID'];
    
    $query = "SELECT * FROM UserInfo WHERE userID = '$userID'";
    $result = mysql_query($query) or die("error");
    $resultArray = array();
    if(mysql_num_rows($result) > 0)
    {
        // row exists. do whatever you would like to do.
        
        while($r = mysql_fetch_assoc($result)) {
            $resultArray[] = $r;
        }
        echo json_encode($resultArray);
    
    }
    
    
    ?>