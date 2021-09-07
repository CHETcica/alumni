
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
<?php $session = session(); ?>
<div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <H1>Edit</H1>
                <hr>
                

                <form action="/edit/change" metod="post">
                    <div class="row">
                        <div class="col-md-6">
                        <label for="inputFirstname" class="form-label">ชื่อ</label>
                        <input type="text" name="Firstname" class="form-control" id="inputFirstname" value="<?php echo $session->get('Firstname')?>">
                        </div>
                        <div class="col-md-6">
                        <label for="inputLastname" class="form-label">นามสกุล</label>
                        <input type="text" name="Lastname" class="form-control" id="inputLastname" value="<?php echo $session->get('Lastname')?>">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                        <label for="inputSex" class="form-label">เพศ</label>
                        <input type="text" name="Sex" class="form-control" id="inputSex" value="<?php echo $session->get('Sex')?>">
                        </div>
                        <div class="col-md-6">
                        <label for="inputProvince" class="form-label">จังหวัด</label>
                        <input type="text" name="Province" class="form-control" id="inputProvince" value="<?php echo $session->get('Province')?>">
                        </div>
                    </div>


                    <!-- <div class="mb-3">
                        <label for="inputStudentID" class="form-label">รหัสนักศึกษา</label>
                        <input type="text" name="StudentID" class="form-control" id="inputStudentID" disabled value="<?php echo $session->get('StudentID')?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">รหัสผ่าน</label>
                        <input type="password" name="Password" class="form-control" id="inputPassword" value="<?php echo $session->get('Lastname')?>">
                    </div> -->
                    <div class="mb-3">
                        <label for="inputSection" class="form-label">หมู่เรียน</label>
                        <input type="text" name="Section" class="form-control" id="inputSection" value="<?php echo $session->get('Section')?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputMajor" class="form-label">สาขาวิชา</label>
                        <input type="text" name="Major" class="form-control" id="inputMajor" value="<?php echo $session->get('Major')?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputEducationYear" class="form-label">ปีการศึกษา</label>
                        <input type="text" name="EducationYear" class="form-control" id="inputEducationYear" value="<?php echo $session->get('EducationYear')?>">
                    </div>
                    <button type="submit" class="btn btn-primary">แก้ไข</button>
                </form>
                
            </div>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>