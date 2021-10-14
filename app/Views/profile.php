
<?php $session = session();?>
    

    <?php if(session()->getFlashdata('msg')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg');?></div>
    <?php endif;?>
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
                    <div class="col-md-6 card-login">
                        <div class="card" style="width: 500px; height: 250px; border-radius: 10px;">
                            <h3 class="p-3 white-text">Profile</h3>
                            <div class="row p-3">
                                <p class="col-6 white-text"><?php echo " ชื่อ : " . $session->get('Firstname') ?></p>
                                <p class="col-6 white-text"><?php echo " นามสกุล : " . $session->get('Lastname') ?></p>
                            
                                <p class="col-6 white-text"><?php echo " เพศ : " . $session->get('Sex') ?></p>
                                <p class="col-6 white-text"><?php echo " จังหวัด : " . $session->get('Province') ?></p>
                            
                                <p class="col-6 white-text"><?php echo " รหัสนักศึกษา : " . $session->get('StudentID') ?></p>
                                <p class="col-6 white-text"><?php echo " หมู่เรียน : " . $session->get('Section') ?></p>
                            
                                <p class="col-6 white-text"><?php echo " สาขาวิชา : " . $session->get('Major') ?></p>
                                <p class="col-6 white-text"><?php echo " ปีการศึกษาแรกเข้า : " . $session->get('EducationYear') ?></p>
                            </div>    
                        </div>
                        <div class="mt-3">
                            <a href="/logout" class="btn btn-danger ">Logout</a>
                            <a href="/edit" class="btn btn-warning">Edit</a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>














  
    
