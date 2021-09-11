<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลส่วนตัว</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
</head>
<body> -->
<?php $session = session();?>
    
    <div class="container my-4">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card" style="width: 500px; height: 250px; border-radius: 10px;">
                    <h3 class="p-3">ข้อมูลส่วนตัว</h3>
                    <div class="row p-3">
                        <p class="col-6"><?php echo " ชื่อ : " . $session->get('Firstname') ?></p>
                        <p class="col-6"><?php echo " นามสกุล : " . $session->get('Lastname') ?></p>
                    
                        <p class="col-6"><?php echo " เพศ : " . $session->get('Sex') ?></p>
                        <p class="col-6"><?php echo " จังหวัด : " . $session->get('Province') ?></p>
                    
                        <p class="col-6"><?php echo " รหัสนักศึกษา : " . $session->get('StudentID') ?></p>
                        <p class="col-6"><?php echo " หมู่เรียน : " . $session->get('Section') ?></p>
                    
                        <p class="col-6"><?php echo " สาขาวิชา : " . $session->get('Major') ?></p>
                        <p class="col-6"><?php echo " ปีการศึกษาแรกเข้า : " . $session->get('EducationYear') ?></p>
                    </div>    
                </div>
                <div class="mt-3">
                    <a href="/logout" class="btn btn-danger ">Logout</a>
                    <a href="/edit" class="btn btn-warning">Edit</a>
                </div>    
                
                
            </div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!-- </body>
</html> -->