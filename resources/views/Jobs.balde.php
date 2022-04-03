<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/main-style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<title>Jobs</title>
<style>
        .job_details{
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                color: purple;
        }

        @media screen and (max-width:600px){
                .job_details{
                        flex-direction: column;

                }
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
        <!-- ******************************************************** -->

        <div class="container">
                <div class="row mt-5">
                        <div class="col-lg-4 col-sm-12 p-5  border">
                                        <div class="card">
                                        <div class="card-body">
                                                What do you want to do?
                                        </div>
                                        </div>

                                        <p>
                                                <a class="btn fw-bold" data-bs-toggle="collapse" href="#job1" role="button" aria-expanded="false" aria-controls="collapseExample" >
                                                <p> Find a job  <i class="bi bi-chevron-double-down"></i></p>
                                        
                                                </a>
                                        </p>
                                        <div class="collapse" id="job1">
                                
                                                        <div class="input-group mb-3">
                                                        <label class="input-group-text" for="inputGroupSelect01">Filter</label>
                                                        <select class="form-select"  id="filter-menu" data-native-menu="false">
                                                                <option selected>ALL...</option>
                                                                <option value="Korea">Korea</option>
                                                                <option value="U.S">U.S</option>
                                                                <option value="U.K">U.K</option>
                                                                <option value="Samsung">Samsung</option>
                                                                <option value="NASA">NASA</option>
                                                                <option value="Linux">Linux</option> 
                                                                <option value="Microsoft">Microsoft</option>
                                                        </select>
                                                        </div>
                                        
                                        </div>
                                        <!-- ************ -->
                                        <p>
                                        <a class="btn fw-bold" data-bs-toggle="collapse" href="#job2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <p> Degree  <i class="bi bi-chevron-double-down"></i></p> 
                                        </a>
                                        </p>
                                        <div class="collapse" id="job2">
                                        <div class="card card-body">
                                                        <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="Bachelor">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                Bachelor's
                                                                </label>
                                                        </div>
                                                        <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="Master" >
                                                                <label class="form-check-label" for="flexCheckChecked">
                                                                                Master's
                                                                </label>
                                                        </div>
                                                        <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="Ph.D">
                                                                <label class="form-check-label" for="flexCheckChecked">
                                                                                Ph.D.
                                                                </label>
                                                        </div>
                                        </div>
                                        </div>
                                          <!-- ************ -->
                                        <p>
                                        <a class="btn fw-bold" data-bs-toggle="collapse" href="#job3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <p> Job types  <i class="bi bi-chevron-double-down"></i></p>
                                        </a>
                                        </p>
                                        <div class="collapse" id="job3">
                                        <div class="card card-body">
                                                        <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id=" Full-time">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                Full-time   </label>
                                                        </div>
                                                        <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id=" Part-time" >
                                                                <label class="form-check-label" for="flexCheckChecked">
                                                                                Part-time
                                                                </label>
                                                        </div>
                                                        <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="Temporary">
                                                                <label class="form-check-label" for="flexCheckChecked">
                                                                                Temporary
                                                                </label>
                                                        </div>
                                        </div>
                                        </div>

                                          <!-- ************ -->
                        </div>


                        <div class="col-lg-8 col-sm-12 bg-light">
                                        <div class="card mt-5 " style="width: 100%">
                                                <div class="card-body">
                                                                <div class="card-brand">
                                                                                <img src="assets/img/samsung.svg" alt="">
                                                                                <h5 class="card-title">Cloud Engineer, Machine Learning and Big Data</h5>     
                                                                </div>
                                                        <h6 class="card-subtitle mb-2 text-muted">Computer Science</h6><hr>
                                                        <p class="card-text">This role will be remote until May 2022 or when the Google office in Pune opens, (whichever is earlier).</p>
                                                        
                                                                <div class="job_details">
                                                                                <a href="Jobs-details.html" class="card-link">More</a>
                                                                                <h5>Korea <i class="bi bi-flag"></i></h5>
                                                                                <h5>Samsung <i class="bi bi-phone"></i></h5>
                                                                                <h5>Full time <i class="bi bi-watch"></i></h5>
                                                                                <h5>Bachelor <i class="bi bi-mortarboard"></i></h5>
                                                                        
                                                                </div>
                                                        
                                                        </div>
                                                
                                                
                                                
                                                        
                                                </div>
                                        
                                        <div class="card mt-5 " style="width: 100%">
                                                <div class="card-body">
                                                        <div class="card-brand">
                                                                        <img src="assets/img/nasa.png" alt="">
                                                                        <h5 class="card-title">Cloud Engineer, Machine Learning and Big Data</h5>     
                                                        </div>
                                                
                                                        <h6 class="card-subtitle mb-2 text-muted">Computer Science</h6><hr>
                                                        <p class="card-text">This role will be remote until May 2022 or when the Google office in Pune opens, (whichever is earlier).</p>
                                                        <div class="job_details">
                                                                        <a href="Jobs-details.html" class="card-link">More</a>
                                                                        <h5>U.S <i class="bi bi-flag"></i></h5>
                                                                        <h5>NASA <i class="bi bi-stars"></i></h5>
                                                                        <h5>Part time <i class="bi bi-watch"></i></h5>
                                                                        <h5>PH.D <i class="bi bi-mortarboard"></i></h5>
                                                        </div>
                                                        
                                                </div>
                                        </div>
                                        <div class="card mt-5 " style="width: 100%">
                                                <div class="card-body">
                                                                <div class="card-brand">
                                                                                <img src="assets/img/microsoft.svg" alt="">
                                                                                <h5 class="card-title">Cloud Engineer, Machine Learning and Big Data</h5>     
                                                                </div>
                                                        <h6 class="card-subtitle mb-2 text-muted">Computer Science</h6><hr>
                                                        <p class="card-text">This role will be remote until May 2022 or when the Google office in Pune opens, (whichever is earlier).</p>
                                                        <div class="job_details">
                                                                        <a href="Jobs-details.html" class="card-link">More</a>
                                                                        <h5>U.S <i class="bi bi-flag"></i></h5>
                                                                        <h5>Microsoft <i class="bi bi-pc-display-horizontal"></i></h5>
                                                                        <h5>Temporary <i class="bi bi-watch"></i></h5>
                                                                        <h5>Master <i class="bi bi-mortarboard"></i></h5>
                                                        </div>
                                                        
                                                </div>
                                        </div>
                                        <div class="card mt-5 " style="width: 100%">
                                                <div class="card-body">
                                                                <div class="card-brand">
                                                                                <img src="assets/img/linux.png" alt="">
                                                                                <h5 class="card-title">Cloud Engineer, Machine Learning and Big Data</h5>     
                                                                </div>
                                                        <h6 class="card-subtitle mb-2 text-muted">Computer Science</h6><hr>
                                                        <p class="card-text">This role will be remote until May 2022 or when the Google office in Pune opens, (whichever is earlier).</p>
                                                        <div class="job_details">
                                                                        <a href="Jobs-details.html" class="card-link">More</a>
                                                                        <h5>U.K <i class="bi bi-flag"></i></h5>
                                                                        <h5>Linux <i class="bi bi-pc-display-horizontal"></i></h5>
                                                                        <h5>Part time <i class="bi bi-watch"></i></h5>
                                                                        <h5>Bachelor <i class="bi bi-mortarboard"></i></h5>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script> 
</body>
</html>