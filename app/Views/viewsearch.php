<?php
        $serverName = "localhost";
        $dbName = "alumni";
        $userName = "root";
        $userPassword = "";
    
        try {
            $conn = new PDO("mysql:host=$serverName;dbname=$dbName;", $userName, $userPassword);
            echo "<pre>" . "" . "</pre>";
        } catch (PDOException $e) {
            echo "Sorry! You cannot connect to database";
        }
        // require('../Models/connect.php');
        // $StudentID = 624259020;
        // $StudentID = $GET['id'];
        $sql = "SELECT * FROM datauser WHERE `StudentID`= $StudentID";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
         echo $row['StudentID'];
            // $StudentID = $GET['inputSearch'];
            // $StudentID = 624259008;
            // $sql = "SELECT * FROM datauser WHERE StudentID = $StudentID";
            // $stmt = $conn->prepare($sql);
            // $stmt->execute();
            // $row = $stmt->fetch(PDO::FETCH_ASSOC);
            // echo $row;
        
?>
        