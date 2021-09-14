

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
<?php $session = session(); ?>
<div class="view" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/91.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="rgba-gradient">
            <div class="container">
                <div class="row justify-content-md-center">
                        <!--**************************************************************  -->
                    <div class=" col-md-6 mb-5 mt-md-0 mt-5  white-text text-md-left ">
                        <h1 class="h1-responsive font-weight-bold wow fadeInLeft card-login ">
                            Sign up right now!
                        </h1>
                        <hr class="hr-light "/>
                        <h6 class="mb-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem
                            repellendus quasi fuga nesciunt dolorum nulla magnam veniam
                            sapiente, fugiat! Commodi sequi non animi ea dolor molestiae,
                            quisquam iste, maiores. Nulla.
                        </h6>
                        <a
                        class="btn btn-outline-white ">Learn more</a>
                    </div>
                        <!--**************************************************************  -->     
                    <div class="col-md-6 col-xl-5 mb-4">
                        <form action="/login/auth" metod="post">
                            <div class="card card-login wow fadeInRight" >
                                <div class="card-body ">
                                    <!--Header-->
                                    <div class="text-center">
                                        <h3 class="white-text">
                                            <i class="fas fa-user white-text"></i>Login
                                        </h3>
                                        <hr class="hr-light" />
                                    </div>
                                    <!--Body-->
                                    <div class="md-form">
                                        <i class="fas fa-user prefix white-text active"></i>
                                        <input type="text" id="form3" name="StudentID" class="white-text form-control" id="inputStudentID" value="<?= set_value('StudentID');?>">
                                        <label for="form3" class="active">Your student id</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-lock prefix white-text active"></i>
                                        <input type="password" id="form4" name="Password" class="white-text form-control" id="inputPassword" value="<?= set_value('Password');?>">
                                        <label for="form4">Your password</label>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-indigo">Sign in</button>
                                        <a href="/register" class="btn btn-outline-white">Register</a>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                
                <form action="/edit/update" metod="post">
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
                        <label for="inputProvince" class="form-label">จังหวัด</label>
                        <input type="text" name="Province" class="form-control" id="inputProvince" value="<?php echo $session->get('Province')?>">
                        </div>
                    </div>

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




</body>
</html>