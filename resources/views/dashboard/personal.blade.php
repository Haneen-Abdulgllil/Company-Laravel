<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Personal Data</title>
    <style>

        .header{
            display: flex;
            flex-direction:row;
            justify-content: space-around;
        }
        .header h3{
            margin-top: 40%;
            color: darkorange;
            font-family:cursive;
            font-weight: bold;
        }
        .header img:hover{
            opacity: 0.5;

        }
    </style>
</head>
<body>

    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto bg-light sticky">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                    <a href="/" class="d-block p-3 link-dark text-decoration-none" title="Directe Base" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Directe Base">
                        <img src="assets/img/logo.svg" style="width: 35px;" alt="">
                    </a>
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                        <li class="nav-item">
                            <a href="personal.html" class="nav-link py-4 px-2" title="personal data" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="personal data">
                                <i class="bi-person-fill fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="experience.html" class="nav-link py-4 px-2" title="Experience" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Experience">
                                <i class="bi-pen-fill fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="education.html" class="nav-link py-4 px-2" title=" Educational qualifications" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Educational qualifications">
                                <i class="bi bi-mortarboard-fill fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="courses.html" class="nav-link py-4 px-2" title="Courses" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Courses">
                                <i class="bi-book-fill fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="skills.html" class="nav-link py-4 px-2" title=" Skills" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Skills">
                                <i class="bi bi-bar-chart-fill fs-1"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-person-circle h2"></i>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                            <li><a class="dropdown-item" href="#">Log out</a></li>
                        
                            <li><a class="dropdown-item" href="account.html">Accounts</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-sm p-3 min-vh-100 " id="pd">

                

                <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <div class="header">
                                        <div class="profile-image">
                                                <img src="assets/img/profile.jpg" id="profileImage" alt="..." class="img-thumbnail">
                                                <!-- <i class="bi bi-pencil-fill fs-3"></i> -->
                        
                                                    <input id="imageUpload" type="file" 
                                                        name="profile_photo" placeholder="Photo" required="" capture>
                                        </div>

                                        <div class="name">
                                            <h3>Haneen Abdulglil</h3>
                                        </div>
                                        <div class="career">
                                            <h3>Web Developer</h3>
                                        </div>
                                </div>
                
                                    

                                <div class="card mt-0">
                                        <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">First Name</th>
                                                        <th scope="col">Last Name</th>
                                                        <th scope="col">Email</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Haneen</td>
                                                        <td>Abdulglil</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                </div>
                                <div class="card">
                                        <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Age</th>
                                                        <th scope="col">Nationality</th>
                                                        <th scope="col">Gender</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>28</td>
                                                        <td>Korean</td>
                                                        <td>Female</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                </div>
                                <h3>Experience</h3>
                    
                                <div class="card" >
                                        <div class="table-responsive">
                                        <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Company</th>
                                                        <th scope="col">Duration</th>
                                                        <th scope="col">Description</th>
                                                        
                                                        <th>
                                                                <div class="col-2 d-flex  justify-content-around">
                                                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal1"> <i class="bi bi-pen-fill fs-5" style="color:green;"></i></button>
                                                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal2"> <i class="bi bi-x-circle-fill fs-5 " style="color:brown;"></i></button> 
                                                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal3"> <i class="bi bi-bookmark-plus-fill fs-5"></i></button> 
                                                                </div>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Front End</td>
                                                        <td>Google</td>
                                                        <td>10 years</td>
                                                        <td>Lorem ipsum dolor sit amet.</td>
                                                    
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                </div>
                                </div>
            
                                <h3>Education</h3>
                    
                                <div class="card">
                                        <div class="table-responsive">
                                        <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">University</th>
                                                        <th scope="col">Year</th>
                                                        <th scope="col">Country</th>
                                                        <th scope="col">Degree</th>
                                                        <th scope="col">Rate</th>
                                                        
                                                        <th>
                                                                <div class="col-2 d-flex  justify-content-around">
                                                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal4"> <i class="bi bi-pen-fill fs-5" style="color:green;"></i></button>
                                                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal2"> <i class="bi bi-x-circle-fill fs-5 " style="color:brown;"></i></button> 
                                                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal5"> <i class="bi bi-bookmark-plus-fill fs-5"></i></button> 
                                                                </div>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Web Deceloper</td>
                                                        <td>Harvard</td>
                                                        <td>2018</td>
                                                        <td>U.S</td>
                                                        <td>Bachelor.</td>
                                                        <td>3.5 out of 4</td>
                                                    
                                                    </tr>
                                                    </tbody>
                                                </table>
                                        </div>
                                </div>

                                <h3>Courses</h3>
                    

                                    <div class="card">
                                            <div class="table-responsive">
                                            <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Institute</th>
                                                            <th scope="col">Year</th>
                                                            <th scope="col">Country</th>
                                                            <th scope="col">Level</th>
                                                        
                                                            
                                                            <th>
                                                                    <div class="col-2 d-flex  justify-content-around">
                                                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal6"> <i class="bi bi-pen-fill fs-5" style="color:green;"></i></button>
                                                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal2"> <i class="bi bi-x-circle-fill fs-5 " style="color:brown;"></i></button> 
                                                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal7"> <i class="bi bi-bookmark-plus-fill fs-5"></i></button> 
                                                                    </div>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                                <tr>
                                                                        <th scope="row">1</th>
                                                                        <td> UIUX</td>
                                                                        <td>Harvard</td>
                                                                        <td>2019</td>
                                                                        <td>U.S</td>
                                                                        <td>Exellent</td>
                                                                    
                                                                    
                                                                    
                                                                    </tr>
                                                        </tbody>

                                                
                                                    </table>
                                            </div>
                                    </div>


                                    <h3>Skills</h3>
                    
                                    <div class="card">
                                        
                                            <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Level</th>
                                                            
                                                            
                                                            <th>
                                                                    <div class="col-2 d-flex  justify-content-around">
                                                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal8"> <i class="bi bi-pen-fill fs-5" style="color:green;"></i></button>
                                                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal2"> <i class="bi bi-x-circle-fill fs-5 " style="color:brown;"></i></button> 
                                                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal9"> <i class="bi bi-bookmark-plus-fill fs-5"></i></button> 
                                                                    </div>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td> English</td>
                                                            <td>Exellent</td>
                                                        
                                                        
                                                        
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                            
                                    </div>

                            </div>
                        </div>
                    </div>
                    

                
            </div>

    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Do you want to delete?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yes</button>
            <button type="button" class="btn btn-primary">No</button>
            </div>
        </div>
        </div>
    </div>



     
    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                
            <div class="modal-content p-5">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit..</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="name" aria-label="name" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="cpmpany" aria-label="cpmpany" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 ">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="duration" aria-label="duration" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 ">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="description" aria-label="description" aria-describedby="basic-addon1">
                        </div>
    
                        <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                                <button type="button" class="btn btn-primary">save</button>
                        </div>
    
            </div>
        </div>
    </div>
    
    
        
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                
            <div class="modal-content p-5">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add..</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="name" aria-label="name" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="cpmpany" aria-label="cpmpany" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 ">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="duration" aria-label="duration" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 ">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="description" aria-label="description" aria-describedby="basic-addon1">
                        </div>
    
                        <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                                <button type="button" class="btn btn-primary">save</button>
                        </div>
    
            </div>
        </div>
    </div> 
    


    
 
     
    <!-- Modal -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                
            <div class="modal-content p-5">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit..</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="name" aria-label="name" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="University" aria-label="University" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 ">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="year" aria-label="year" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 ">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="country" aria-label="country" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 ">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="degree" aria-label="degree" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 ">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="rate" aria-label="reat" aria-describedby="basic-addon1">
                        </div>
    
                        <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                                <button type="button" class="btn btn-primary">save</button>
                        </div>
    
            </div>
        </div>
    </div>
    
    
        
        
    <!-- Modal -->
    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                
            <div class="modal-content p-5">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add..</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="name" aria-label="name" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="University" aria-label="University" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 ">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="year" aria-label="year" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 ">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="country" aria-label="country" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 ">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="degree" aria-label="degree" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 ">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="rate" aria-label="reat" aria-describedby="basic-addon1">
                        </div>
    
                        <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                                <button type="button" class="btn btn-primary">save</button>
                        </div>
    
            </div>
        </div>
    </div>





        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            
        <div class="modal-content p-5">
                <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit..</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" placeholder="name" aria-label="name" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3 ">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" placeholder="Inistitute" aria-label="Inistitute" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="year" aria-label="year" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="country" aria-label="country" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="Level" aria-label="Level" aria-describedby="basic-addon1">
                    </div>

                    <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                            <button type="button" class="btn btn-primary">save</button>
                    </div>

        </div>
    </div>
</div>


    
    
<!-- Modal -->
<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            
        <div class="modal-content p-5">
                <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add..</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" placeholder="name" aria-label="name" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3 ">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" placeholder="Institute" aria-label="Institute" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="year" aria-label="year" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="country" aria-label="country" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="Level" aria-label="Level" aria-describedby="basic-addon1">
                    </div>
                    

                    <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                            <button type="button" class="btn btn-primary">save</button>
                    </div>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            
        <div class="modal-content p-5">
                <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit..</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" placeholder="name" aria-label="name" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3 ">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" placeholder="Level" aria-label="Level" aria-describedby="basic-addon1">
                    </div>

        </div>
    </div>
</div>


    
    
<!-- Modal -->
<div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            
        <div class="modal-content p-5">
                <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add..</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" placeholder="name" aria-label="name" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3 ">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" placeholder="Level" aria-label="Level" aria-describedby="basic-addon1">
                    </div>
                    

                    <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                            <button type="button" class="btn btn-primary">save</button>
                    </div>

        </div>
    </div>
</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
            $("#profileImage").click(function(e) {
        $("#imageUpload").click();
    });
    
    function fasterPreview( uploader ) {
        if ( uploader.files && uploader.files[0] ){
                $('#profileImage').attr('src', 
                    window.URL.createObjectURL(uploader.files[0]) );
        }
    }
    
    $("#imageUpload").change(function(){
        fasterPreview( this );
    });

    </script>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>