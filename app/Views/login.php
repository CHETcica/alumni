<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <H1>Login</H1>
                <hr>
                <?php if(session()->getFlashdata('msg')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg');?></div>
                <?php endif;?>

                <form action="/login/auth" metod="post">
                    <div class="mb-3">
                        <label for="inputStudentID" class="form-label">รหัสนักศึกษา</label>
                        <input type="text" name="StudentID" class="form-control" id="inputStudentID" value="<?= set_value('StudentID');?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">รหัสผ่าน</label>
                        <input type="password" name="Password" class="form-control" id="inputPassword" value="<?= set_value('Password');?>">
                    </div>
                    <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                </form>
                <hr>
                <a href="/register" class="btn btn-primary">สมัครสมาชิก</a>
            </div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>