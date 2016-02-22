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
  //  $surveyID = '1';
  //  $qID = '2';
   // $qTitle = 'How is my pic';
   // $maxOptions = '4';
    
    $request = file_get_contents('php://input');
    $input = json_decode($request,true);
    $surveyID = $input['surveyID'];
    $qID = $input['qID'];
    $qTitle = $input['qTitle'];
    $options = $input['options'];
    $maxOptions = $input['maxOptions'];
    
    
    $query = "INSERT INTO QuestionInfo VALUES ('$surveyID', '$qID', '$qTitle', '', '$maxOptions')";
    mysql_query($query) or die("error");
    //$resultArray['status'] = '800';
    
    for ($x = 0; $x < sizeof($options); $x++) {
        $query = "INSERT INTO OptionsInfo VALUES ('$surveyID', '$qID', '$options[$x]', '$x + 1', '')";
        mysql_query($query) or die("error");
        $resultArray['status'] = '800';
    }
    //$resultArray['surveyID'] = $surveyID;
    echo json_encode($resultArray);
    
    
    
    
    ?>