

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
                    
                        <!--**************************************************************  -->     
                    <div class="col-md-6 col-xl-5 mb-4">
                        <form action="/edit/update" metod="post">
                            <div class="card card-login wow fadeInRight" >
                                <div class="card-body ">
                                    <!--Header-->
                                    <div class="text-center">
                                        <h3 class="white-text">
                                            <i class="fas fa-user white-text"></i>Edit
                                        </h3>
                                        <hr class="hr-light" />
                                    </div>
                                    <!--Body-->
                                    <div class="md-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="inputFirstname" class="form-label">Name</label>
                                                <input type="text" name="Firstname" class="form-control" id="inputFirstname" value="<?php echo $session->get('Firstname')?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputLastname" class="form-label white-text">Lastname</label>
                                                <input type="text" name="Lastname" class=" form-control" id="inputLastname" value="<?php echo $session->get('Lastname')?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputProvince" class="form-label white-text">Province</label>
                                            <input type="text" name="Province" class="form-control" id="inputProvince" value="<?php echo $session->get('Province')?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputSection" class="form-label white-text">Section</label>
                                        <input type="text" name="Section" class="form-control" id="inputSection" value="<?php echo $session->get('Section')?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputMajor" class="form-label white-text">Major</label>
                                        <input type="text" name="Major" class="form-control" id="inputMajor" value="<?php echo $session->get('Major')?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputEducationYear" class="form-label white-text">Educationyear</label>
                                        <input type="text" name="EducationYear" class="form-control" id="inputEducationYear" value="<?php echo $session->get('EducationYear')?>">
                                    </div>


                                    
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-indigo">Update</button>
                                        <a href="/profile" class="btn btn-outline-white">Cancel</a>
                                        
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
                
                
            </div>
        </div>
    </div>




</body>
</html>