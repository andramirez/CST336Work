<?php 
session_start();
include 'db_connect.php'; 

$connection = getDatabaseConnection(); 




function getScore(){
    $hopefully = "SELECT MAX(QuizNum) FROM QuizResults";
    $hopes = getDataBySQL($hopefully, $dbConn);
    $data = json_decode(stripslashes($_GET['Q41']));
    foreach($data as $ans)
    {
    $q4 .= $ans . ", ";
    }
    $q4 = substr($sql3,0,-2);
    foreach($hopes as $hope){
    $sql3= "UPDATE QuizResults SET Answer1='" . $_GET['Q1'] . "', Answer2='" . $_GET['Q2'] . "', 
    Answer3='" . $_GET['Q31'] . "', Answer4='" . $q4 . "', Answer5='" . $_GET['Q5'] . "'
    WHERE QuizNum ='" . $hope['MAX(QuizNum)'] . "'";
    getDataBySQL($sql3, $dbConn);
    
        $score = 0;
      if($_GET['Q1'] == "Sacramento"||$_GET['Q1'] == "sacramento"){
          $score++;
          $score++;
      }
      if($_GET['Q2'] == "Jerry Brown"){
          $score++;
          $score++;
      }
      
      $answer = $_GET['Q31'];  
        if ($answer == "E") {          
            $score++;
            $score++;      
        }
      
    if(!empty($data)) {
    $name = $data;
    foreach ($name as $answer){
        if ($answer == "A" ||$answer == "C")
      {
         $score++;
      }


        }
}
      
      
      if ($_GET['Q5'] == "40")
      {
         $score++;
          $score++; 
      }
      if($score < 6)
      {
          $grade = "F";
      }
      else if($score >= 6 && $score < 7)
      {
          $grade = "D";
      }
      else if($score >= 7 && $score < 8)
      {
          $grade = "C";
      }
      else if($score >= 8 && $score < 9)
      {
          $grade = "B";
      }
      else
      {
          $grade = "A";
      }
      $sql4= "UPDATE QuizResults SET QuizScore='" . $score . "', QuizGrade='" . $grade . "'
    WHERE QuizNum ='" . $hope['MAX(QuizNum)'] . "'";
    getDataBySQL($sql4, $dbConn);
    
    $_GET['data'] = $score;
    echo $_GET['data'];
    }
  }
  function Times(){
        $username = $_SESSION['username'];
        $sql = "SELECT UserID FROM User WHERE username='" . $username . "'";
            $ids = getDataBySQL($sql, $dbConn);
            
            foreach($ids as $id)
            {
                $sql2 = "INSERT INTO QuizResults (UserID, DateTime) Values ('". $id['UserID'] . "', CURRENT_TIMESTAMP)";
                $check = getDataBySQL($sql2, $dbConn);
            }
}
  if($_SERVER['REQUEST_METHOD']=="GET") {
$function = $_GET['call'];
if(function_exists($function)) {        
    call_user_func($function);
} else {
    echo 'Function Not Exists!!';
}
}
?>