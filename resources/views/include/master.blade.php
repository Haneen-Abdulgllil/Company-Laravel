<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/main-style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<title>index</title>
<style>
#brand{
        border: none;
}
#brand:hover{
        opacity: 0.5;
}
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
<nav class="navbar navbar-expand-lg navbar-dark" id="mytopnav" >
        <div class="container">
                <a href="#" class="navbar-brand">
                        <img src="img/logo.svg" alt=""><sub style="color: rgb(255, 251, 251); margin:3px; position:absolute; top:40px; font-weight:600;">Directe Base</sub>
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

                        <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav w-100">
                                <a href="{{ url('/') }}" class="nav-item nav-link active  ms-5"><i class="bi bi-house-fill"></i> Home</a>
                                <a href="{{ url('/parteners') }}" class="nav-item nav-link  ms-5 " > <i class="bi bi-star-fill"></i>Companies</a>
                                <a href="{{ url('/Jobs') }}" class="nav-item nav-link  ms-5 " > <i class="bi bi-tools"></i>  Jobs</a>

                                <a href="{{ url('/Services') }}" class="nav-item nav-link  ms-5 " > <i class="bi bi-clipboard-data"></i> Services</a>
                                <a href="{{ url('/about') }}" class="nav-item nav-link  ms-5"> <i class="bi bi-question-circle-fill"></i>  About</a>
                                <a href="{{ url('/Contact-us') }}" class="nav-item nav-link  ms-5"><i class="bi bi-envelope-fill"></i> Contact Us</a>
                                <a href="{{ url('/login') }}" class="nav-item nav-link  ms-5" > <i class="bi bi-person-fill"></i>login in</a>
                                <a href="#" class="nav-item nav-link  ms-5">?????????????? <i class="bi bi-translate"></i></a>
                        </div>
                        </div>
        </div>
        </nav>




            @yield('pages')


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

        </footer>


<script src="js/bootstrap.bundle.min.js"></script>
