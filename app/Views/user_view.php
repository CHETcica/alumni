<!-- <!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>user_view</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body> -->
  <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; } ?>
    <style>
        *{
        margin: 0;
        padding: 0;
        }

        html,
        body,
        header,
        .view {
        height: 100%;
        }

        @media (max-width: 740px) {
        html,
        body,
        header,
        .view {
            height: 1000px;
        }
        }
        @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .view {
            height: 650px;
        }
        }

        .top-nav-collapse {
        background-color: #3f51b5 !important;
        }

        .navbar:not(.top-nav-collapse) {
        background: transparent !important;
        }

        @media (max-width: 991px) {
        .navbar:not(.top-nav-collapse) {
            background: #3f51b5 !important;
        }
        }

        .rgba-gradient {
        background: -webkit-linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%); 
        background: -webkit-gradient(linear, 45deg, from(rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%));
        background: linear-gradient(to 45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
        }

        .card {
        background-color: rgba(126, 123, 215, 0.2);
        }

        .md-form label {
        color: #ffffff;
        }

        h6 {
        line-height: 1.7;
        }

        .card-login{
        margin-top: 200px;
        }

        .btn-indigo{
            color: #fff;
            background-color: #3f51b5;
        }
        .white-text{
            color: #fff;
        }
        .btn-outline-white{
            border: 2px solid #fff !important;
            background-color: transparent !important;
            color: #fff!important;
        }
    </style>
    <div class="view" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/91.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="rgba-gradient">
            <div class="container">
                <div class="row justify-content-md-center">
                  <div class="card-login">
                    <table class="mt-5" id="users-list">
                      <thead>
                          <tr class="white-text" style="border-radius: 5px;">
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
            </div>
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
<!-- </body>
</html> -->