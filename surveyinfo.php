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
    $request = file_get_contents('php://input');
    $input = json_decode($request,true);
    $userID = $input['userID'];
    $surveyID = uniqid();
    $surveyTitle = $input['title'];
$category = $input['category'];
$date = $input['date'];
    //$userID = '1';
    //$surveyID = uniqid();
    //$surveyTitle = 'C';
    
    $query = "INSERT INTO SurveyInfo VALUES ('$userID', '$surveyID', '$surveyTitle', '$category', '$date')";
    mysql_query($query) or die("error");
    $resultArray['status'] = '800';
    $resultArray['surveyID'] = $surveyID;
    echo json_encode($resultArray);
    
    
    
    
    ?>