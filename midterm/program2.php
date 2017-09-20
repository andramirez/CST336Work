
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

        <title>Reports</title>
    </head>
    <body>
    <div class="back">
        <?php

function firstNamelastName(){
$servername = getenv('IP');
$dbPort = 3306;
$database = "midterm";
$username = getenv('C9_USER');
$password = "";
 
$con = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
        // our table heading
        echo "<tr>";
            echo "<th colspan = '5'>A report shows all female students ordered by last name, from A to Z</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th colspan = '5'>SQL Statement: SELECT firstName, lastName FROM m_students ORDER BY lastName ASC</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th class='textAlignLeft'>First Name</th>";
            echo "<th>Last Name</th>";
        echo "</tr>";
        
        $query = "SELECT firstName, lastName FROM m_students ORDER BY lastName ASC";
 
        $stmt = $con->prepare($query);
        $stmt->execute();
 
        $total_price=0;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
 
            echo "<tr>";
                echo "<td>{$row['firstName']}</td>";
                echo "<td>{$row['lastName']}</td>";

            echo "</tr>";
    }
    echo "</table>";
}
function lowerThan50(){
$servername = getenv('IP');
$dbPort = 3306;
$database = "midterm";
$username = getenv('C9_USER');
$password = "";
 
$con = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
        // our table heading
        echo "<tr>";
            echo "<th colspan = '5'>List of students that have assignments with a grade lower than 50";
        echo "</tr>";
        echo "<tr>";
            echo "<th colspan = '5'>SQL Statement: SELECT m_students.firstName, m_students.LastName, m_gradebook.grade FROM m_students, m_gradebook WHERE (m_students.studentId = m_gradebook.studentId) AND (m_gradebook.grade < 50) ORDER BY grade ASC</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th class='textAlignLeft'>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Grade</th>";
        echo "</tr>";
        
        $query = "SELECT m_students.firstName, m_students.LastName, m_gradebook.grade FROM m_students, m_gradebook WHERE (m_students.studentId = m_gradebook.studentId) AND (m_gradebook.grade < 50) ORDER BY grade ASC";
 
        $stmt = $con->prepare($query);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
 
            echo "<tr>";
                echo "<td>{$row['firstName']}</td>";
                echo "<td>{$row['lastName']}</td>";
                echo "<td>{$row['grade']}</td>";

            echo "</tr>";
    }
    echo "</table>";
}

function NameAndGrades(){

$servername = getenv('IP');
$dbPort = 3306;
$database = "midterm";
$username = getenv('C9_USER');
$password = "";
 
$con = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    
    echo "<table class='table table-hover table-responsive table-bordered'>";

        // our table heading
        echo "<tr>";
            echo "<th colspan = '5'>A report lists each student along with his/her average grade, ordered by average grade, from highest to lowest";
        echo "</tr>";
        echo "<tr>";
            echo "<th colspan = '5'>SELECT m_students.firstName, m_students.LastName, m_gradebook.grade FROM m_students, m_gradebook WHERE (m_students.studentId = m_gradebook.studentId) ORDER BY grade DESC";
        echo "</tr>";
        echo "<tr>";
            echo "<th class='textAlignLeft'>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Grade</th>";
        echo "</tr>";
        
        $query = "SELECT m_students.firstName, m_students.LastName, m_gradebook.grade FROM m_students, m_gradebook WHERE (m_students.studentId = m_gradebook.studentId) ORDER BY grade DESC";
 
        $stmt = $con->prepare($query);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
 
            echo "<tr>";
                echo "<td>{$row['firstName']}</td>";
                echo "<td>{$row['lastName']}</td>";
                echo "<td>{$row['grade']}</td>";
            echo "</tr>";
    }
            
    echo "</table>";
}



echo firstNamelastName();
echo lowerThan50();
echo NameAndGrades();



?>
    </div>
    </body>
</html>
