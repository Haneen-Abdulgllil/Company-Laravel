<!DOCTYPE html>
<html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main-style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <title>about</title>
        <style>
        .map-container{
                overflow:hidden;
                padding: 40%;
                position:relative;
                height:0;
                background-color: rgb(184, 184, 184);
        }
        .map-container iframe{
                left:0;
                top:0;
                height:100%;
                width:100%;
                position:absolute;
        }
        </style>
        </head>
        <body>
        <nav class="navbar navbar-expand-lg navbar-dark "  id="mytopnav"  >
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

                        <!-- ****************************************** -->
<div class="container">

        <img src="assets/img/about_us.png" alt="" 
        style=" width: 70%; margin-left: 15%; margin-top: 5%;"  >
        
        <div class="row mt-2">
                <div class="col-lg-6 col-sm-12 p-5 mt-5" >
                        <img src="assets/img/building.jpg"  class="rounded"  alt="" style="width: 100%;">
                </div>
                <div class="col-lg-6 col-sm-12 p-5 mt-5">
                                <div class="card mb-4">
                                        <div class="card-body">
                                        <h3> Who are we?</h3> 
                                        </div>
                                </div>
                        <p>
                                We strive to provide Googlers and their loved ones with a world-class benefits experience, focused on supporting their physical, financial, and emotional wellbeing. Our benefits are based on data, and centered around our users: Googlers and their families. They’re thoughtfully designed to enhance your health and wellbeing, and generous enough to make it easy for you to take good care of yourself (now, and in the future). So we can build for everyone, together. *
                        </p>                          
                </div>
        </div>
        <!-- ***********8 -->
        <div class="row mt-5 bg-light flex-row-reverse">
                <div class="col-lg-6 col-sm-12 p-5 mt-5" >
                        <img src="assets/img/team1.jpg"  class="rounded"  alt="" style="width: 100%;">
                </div>
                <div class="col-lg-6 col-sm-12 p-5 mt-5">
                                <div class="card mb-4">
                                        <div class="card-body">
                                        <h3>Our Team</h3>
                                        </div>
                                </div>
                        <p>Together, we create access to information and build products for everyone. </p>
                        <div class="row">
                                <div class="col-6">
                                        <h4 style="color:rgb(6, 6, 179);">Engineering & Tech</h4>
                                        <p>Develop the products and tools of the future for billions of users.</p>
                                </div>
                                <div class="col-6 ">
                                        <h4 style="color:rgb(6, 6, 179);">Sales, Service & Support</h4>
                                        <p>Equip businesses with the right tools to help them grow.</p>
                                </div>
                        </div>
                        <div class="row mt-3">
                                <div class="col-6">
                                        <h4 style="color:rgb(6, 6, 179);">People</h4>
                                        <p>Find, grow, and support the people who make Google great.</p>
                                </div>
                                <div class="col-6">
                                        <h4 style="color:rgb(6, 6, 179);">Consumer Hardware</h4>
                                        <p>Make people's lives better through technology.</p>
                                </div>
                        </div>
                </div>
        </div>
        <!-- ***************** -->

        <div class="row mt-2">
                        <div class="col-lg-6 col-sm-12 p-5 mt-5" >
                                        <div id="map-container-google-1" class="z-depth-1-half map-container">
                                                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                                style="border:0" allowfullscreen></iframe>
                                        </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 p-5 mt-5">
                                        <div class="card mb-4">
                                                <div class="card-body">
                                                <h3> Our Location</h3> 
                                                </div>
                                        </div>
                                <p>Large or small, each one of our offices is designed to inspire innovation, big ideas, and community.</p>
                                <hr>
                                <div class="row">
                                        <div class="col-3">
                                                        <img src="assets/img/loc1.jpg" alt="" style="width: 100%;">

                                        </div>
                                        <div class="col-3">
                                                        <img src="assets/img/loc2.jpg" alt="" style="width: 100%;">

                                        </div>
                                        <div class="col-3">
                                                        <img src="assets/img/loc3.jpeg" alt="" style="width: 100%;">

                                        </div>
                                        <div class="col-3">
                                                        <img src="assets/img/loc4.jpg" alt="" style="width: 100%;">

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