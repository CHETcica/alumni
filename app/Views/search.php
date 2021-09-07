
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
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
        $StudentID = 624259020;
        $sql = "SELECT * FROM datauser WHERE `StudentID`= $StudentID";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
         echo $row['StudentID'];
        
?>
    <div class="container">
        <h1>Search</h1>
        <form action="./viewsearch.php" method="GET">
            <div id="users-list_filter" class="dataTables_filter">
                <label>Search : 
                    <input type="search" name="inputSearch" class="" placeholder="" aria-controls="search">
                </label>
                <a href="./viewsearch" class="btn btn-primary">Search</a>
            </div>
        </form>
        
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>