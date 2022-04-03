<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Contact Us</title>
    <style>
    html,body{
    background-image: url('assets/img/cover.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    font-family: 'Numans', sans-serif;
    }
    .row{
        background-color: rgba(0,0,0,0.5) !important;
        padding: 10px;
    }
    .control-label {
        color: white;
    }
    .col-md-3{
        color:  rgb(228, 128, 5);
    }
    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark"  id="mytopnav"  >
                <div class="container">
                        <a href="#" class="navbar-brand">
                                <img src="assets/img/logo.svg" alt="">
                                <sub style="color: rgb(255, 251, 251); margin:3px; position:absolute; top:40px; font-weight:600;">Directe Base</sub>
                            </a>
                            <div class="input-group w-50">
                                <input type="text" class="form-control rounded-pill  fs-6" placeholder="Find a job " >

                                    <button class="btn btn-outline-light rounded-pill fs-6 ms-3" type="button" id="button-addon2">Search</button>
                                </div>

                </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
                <div class="container" >
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                    
                            <div class="collapse navbar-collapse" id="navbarCollapse" >
                                <div class="navbar-nav w-100" >
                                    <a href="index.html" class="nav-item nav-link active  ms-5"><i class="bi bi-house-fill"></i> Home</a>
                                    <a href="companies.html" class="nav-item nav-link  ms-5 " > <i class="bi bi-star-fill"></i>Companies</a>
                                    <a href="Jobs.html" class="nav-item nav-link  ms-5 " > <i class="bi bi-tools"></i>  Jobs</a>


                                    <a href="Services.html" class="nav-item nav-link  ms-5 " > <i class="bi bi-clipboard-data"></i> Services</a>
                                    <a href="about.html" class="nav-item nav-link  ms-5"> <i class="bi bi-question-circle-fill"></i>  About</a>
                                    <a href="Contact-us.html" class="nav-item nav-link  ms-5"><i class="bi bi-envelope-fill"></i> Contact Us</a>
                                    <a href="sign-up.html" class="nav-item nav-link  ms-5" > <i class="bi bi-person-fill"></i>Sign in</a>
                                    <a href="#" class="nav-item nav-link  ms-5">العربية <i class="bi bi-translate"></i></a>
                                </div>
                            </div>
                </div>
            </nav>


            <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="contact-info">
                                <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                                <h2>Contact Us </h2>
                                <h4>we would like to hear from you</h4>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="contact-form ">
                                <div class="form-group">
                                    <label class="control-label  fw-bold p-2 col-sm-2" for="fname">First name:</label>
                                    <div class="col-sm-10">          
                                        <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label fw-bold p-2 col-sm-2" for="lname">Last name:</label>
                                    <div class="col-sm-10">          
                                        <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label fw-bold p-2 col-sm-2" for="email">Email:</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" placeholder=" Enter your email" name="email">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label fw-bold p-2 col-sm-2" for="comment">Comments:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                    </div>
                                    <div class="form-group">        
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default mt-3 ms-5" style="background-color: rgb(228, 128, 5); color: white">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                


                <footer>
                        <div class="text-center text-white mt-5 w-100" style="background-color: #f1f1f1;">
                        
                                <section class="mb-4">
                                        <a
                                        class="btn btn-link btn-floating btn-lg text-dark m-1"
                                        href="#!"
                                        role="button"
                                        data-mdb-ripple-color="dark">
                                        <i class="bi bi-facebook"></i>
                                        </a>
                                
                                        <!-- Twitter -->
                                        <a
                                        class="btn btn-link btn-floating btn-lg text-dark m-1"
                                        href="#!"
                                        role="button"
                                        data-mdb-ripple-color="dark">
                                        <i class="bi bi-twitter"></i>
                                        </a>
                                
                                        <!-- Google -->
                                        <a
                                        class="btn btn-link btn-floating btn-lg text-dark m-1"
                                        href="#!"
                                        role="button"
                                        data-mdb-ripple-color="dark" >
                                        <i class="bi bi-google"></i>
                                        </a>
                                
                                        <!-- Instagram -->
                                        <a
                                        class="btn btn-link btn-floating btn-lg text-dark m-1"
                                        href="#!"
                                        role="button"
                                        data-mdb-ripple-color="dark">
                                        <i class="bi bi-instagram"></i>
                                        </a>
                                
                                        <!-- Linkedin -->
                                        <a
                                        class="btn btn-link btn-floating btn-lg text-dark m-1"
                                        href="#!"
                                        role="button"
                                        data-mdb-ripple-color="dark">
                                        <i class="bi bi-linkedin"></i>
                                        </a>
                                        <!-- Github -->
                                        <a
                                        class="btn btn-link btn-floating btn-lg text-dark m-1"
                                        href="#!"
                                        role="button"
                                        data-mdb-ripple-color="dark">
                                        <i class="bi bi-github"></i>
                                        </a>
        
                                </section>
        
                        <section>
                                <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                                    2022 Copyright:   &copy
                                        <a class="text-dark" href="https://haneen.com/">Haneen</a>
                                        </div>
                                        <!-- Copyright -->
                        
                        </section>
                                
                            </div>
                            </div>
        
                        
                    </footer>
    
                <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>