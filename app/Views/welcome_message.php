<!-- CONTENT -->
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
		.btn-menu-main{
			margin-left: 20%;
			height: 150px;
			width: 150px;
			background-color: #fff;
			border-radius: 50%;
		}
		.text-menu-center{
			padding-top: 35%;
			text-align: center;
		}
    </style>
    <div class="view" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/91.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="rgba-gradient">
            <div class="container">
                <div class="row justify-content-md-center">
                        <!--**************************************************************  -->
                    
                        <!--**************************************************************  -->     
                    <div class="col-md-6 col-xl-5 mb-4">
                        
                            <div class="card card-login wow fadeInRight" >
                                <div class="card-body ">
                                    <!--Header-->
                                    
                                    <!--Body-->
                                    <div class="row">
										<div class="col-4">
											<a class="mt-5" href="/user_view">
												<div class="btn-menu-main">
													<H3 class="text-menu-center">Search</H3>		
												</div>	
											</a>
										</div>
										<div class="col-4">
											<a class="mt-5" href="/register">
												<div class="btn-menu-main">
													<H3 class="text-menu-center">Register</H3>		
												</div>	
											</a>
										</div>
										<div class="col-4">
											<a class="mt-5" href="/login">
												<div class="btn-menu-main">
													<H3 class="text-menu-center">Login</H3>		
												</div>	
											</a>
										</div>
									</div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-indigo">Sign in</button>
                                        <a href="/register" class="btn btn-outline-white">Register</a>
                                    </div>
                                </div>
                            </div>
                        
                    </div>   
                </div>
            </div>
        </div>
    </div>
<section>
		<div class="container">
			<div class="card card-main-menu">
				
				
			</div>
		</div>
</section>
<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

