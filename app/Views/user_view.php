<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>user_view</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
      
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
            <th scope="col">รหัสนักศึกษา</th>
            <th scope="col">ชื่อ</th>
            <th scope="col">นามสกุล</th>
            <th scope="col">จังหวัด</th>
            <th scope="col">หมู่เรียน</th>
            <th scope="col">สาขาวิชา</th>
            <th scope="col">ปีการศึกษา</th>
          </tr>
       </thead>
       <tbody >
            <?php if($datauser): ?>
            <?php foreach($datauser as $user): ?>
          <tr>
            <td><?php echo $user['StudentID'] ?></td>
            <td><?php echo $user['Firstname'] ?></td>
            <td><?php echo $user['Lastname'] ?></td>
            <td><?php echo $user['Province'] ?></td>
            <td><?php echo $user['Section'] ?></td>
            <td><?php echo $user['Major'] ?></td>
            <td><?php echo $user['EducationYear']?></td>
          </tr>
            <?php endforeach; ?>
            <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
    } );
</script>
</body>
</html>