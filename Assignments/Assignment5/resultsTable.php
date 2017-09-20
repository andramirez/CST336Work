<?php
session_start(); //start or resume an existing session 

include 'db_connect.php'; 


$connection = getDatabaseConnection(); 


    $username = $_SESSION['username'];
        $sql = "SELECT UserID FROM User WHERE username='" . $username . "'";
        $ids = getDataBySQL($sql, $dbConn);
        foreach($ids as $id)
        {
            $sql2 = "SELECT COUNT(" . $id['UserID'] . ") FROM QuizResults";
            $counts = getDataBySQL($sql2, $dbConn);
            $sql3 = "SELECT AVG(QuizScore) FROM QuizResults WHERE UserID='". $id['UserID'] . "'";
            $avgScores = getDataBySQL($sql3, $dbConn);
            $sql4 = "SELECT QuizScore FROM QuizResults WHERE DateTime in (SELECT MAX(DateTime) from QuizResults WHERE UserID='". $id['UserID'] . "')";
            $lastScores = getDataBySQL($sql4, $dbConn);
            $sql5 = "SELECT MAX(DateTime) FROM QuizResults WHERE UserID='". $id['UserID'] . "'";
            $dateTimes = getDataBySQL($sql5, $dbConn);
        
                    foreach($counts as $count){
                foreach($avgScores as $avgScore){
                    foreach($lastScores as $lastScore){
                        foreach($dateTimes as $dateTime){
            $output_str ="<table id='record' align='center'><tr><th>Username:</th><th>Number of times the Quiz has been Taken:</th><th>Quiz Average:</th><th>Last Quiz Score:</th><th>Last Quiz Date/Time:</th></tr><tr><td>{$username}</td><td>{$count['COUNT(' . $id['UserID'] . ')']}</td><td>{$avgScore['AVG(QuizScore)']}</td><td>{$lastScore['QuizScore']}</td><td>{$dateTime['MAX(DateTime)']}</td></tr></table></div>";
                        }}}}}
    echo $output_str;

        ?>