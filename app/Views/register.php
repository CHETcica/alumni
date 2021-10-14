
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


    <div class="view" style=" background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/91.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="rgba-gradient">
            <div class="container ">
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

                        <form action="/register/save" metod="post">
                            <div class="card card-login" >
                                <div class="card-body ">
                                    <!--Header-->
                                    <div class="text-center">
                                        <h3 class="white-text">
                                            <i class="fas fa-user white-text"></i>Register
                                        </h3>
                                        <hr class="hr-light" />
                                    </div>
                                    <!--Body-->
                                    <div class="row">
                                        <div class="md-form col-xl-6 ">
                                            <i class="fas fa-user prefix white-text active"></i>
                                            <label for="Firstname" class="active">Your name</label>
                                            <input type="text" id="form3" name="Firstname" 
                                            class="form-control" id="inputFirstname" value="<?= set_value('Firstname');?>">
                                        </div>
                                        <div class="md-form col-xl-6 ">
                                            <i class="fas fa-lock prefix white-text active"></i>
                                            <label for="Lastname">Your lastname</label>
                                            <input type="text" id="form4" name="Lastname" 
                                            class="form-control" id="inputLastname" value="<?= set_value('Lastname');?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="md-form col-xl-6 ">
                                            <label for="inputSex" class="active">sex</label>
                                            <select type="text" name="Sex" class="form-control form-select mt-2" id="inputSex" value="<?= set_value('Sex');?>">
                                                <option value="ชาย">ชาย</option>
                                                <option value="หญิง">หญิง</option>
                                            </select>
                                            
                                        </div>
                                        <div class="md-form col-xl-6 ">
                                            <label for="inputProvince" class="white-text form-label">province</label>
                                            <input type="text" name="Province" class=" form-control" id="inputProvince" value="<?= set_value('Province');?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputStudentID" class="white-text form-label">student id</label>
                                        <input type="text" name="StudentID" class=" form-control" id="inputStudentID" value="<?= set_value('StudentID');?>">
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputPassword" class="white-text form-label">password</label>
                                        <input type="password" name="Password" class="form-control" id="inputPassword" value="<?= set_value('Password');?>">
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="inputSection" class="white-text form-label">study group</label>    
                                            <input type="text" name="Section" class="form-control" id="inputSection" value="<?= set_value('Section');?>">
                                        </div>
                                        <div class="col">
                                            <label for="inputEducationYear" class="white-text form-label">educationYear</label>
                                            <input type="text" name="EducationYear" class="form-control" id="inputEducationYear" value="<?= set_value('EducationYear');?>">
                                        </div>
                                        


                                    </div>
                                    <div class="mb-3">
                                        <label for="inputMajor" class="white-text form-label">major</label>
                                        <input type="text" name="Major" class="form-control" id="inputMajor" value="<?= set_value('Major');?>">

                                    </div>
                                    

                                    
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-indigo">Sign in</button>
                                        <a href="/login" class="btn btn-outline-white">Login</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                        
                        
                    </div>   
                </div>
            </div>
        </div>
    </div>
      
    



