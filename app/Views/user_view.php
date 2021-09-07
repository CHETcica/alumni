<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 CRUD App Example - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
        
        $sql = "SELECT * FROM datauser ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
?>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">StudentID</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Section</th>
      <th scope="col">Major</th>
      <th scope="col">EducationYear	</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <tr>
      <th scope="row"><?php echo $row['StudentID'] ?></th>
      <td><?php echo $row['Firstname'] ?></td>
      <td><?php echo $row['Lastname'] ?></td>
      <td><?php echo $row['Section'] ?></td>
      <td><?php echo $row['Major'] ?></td>
      <td><?php echo $row['EducationYear'] ?></td>
    </tr>
    <?php
        }
    ?>        
    
  </tbody>
</table>
</div>

</body>
</html>