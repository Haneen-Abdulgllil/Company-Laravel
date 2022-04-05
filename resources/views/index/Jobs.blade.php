

@extends('include.master')
@section('pages')

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
                                                                                <img src="img/samsung.svg" alt="">
                                                                                <h5 class="card-title">Cloud Engineer, Machine Learning and Big Data</h5>
                                                                </div>
                                                        <h6 class="card-subtitle mb-2 text-muted">Computer Science</h6><hr>
                                                        <p class="card-text">This role will be remote until May 2022 or when the Google office in Pune opens, (whichever is earlier).</p>

                                                                <div class="job_details">
                                                                                <a href="/Jobs-details" class="card-link">More</a>
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
                                                                        <img src="img/nasa.png" alt="">
                                                                        <h5 class="card-title">Cloud Engineer, Machine Learning and Big Data</h5>
                                                        </div>

                                                        <h6 class="card-subtitle mb-2 text-muted">Computer Science</h6><hr>
                                                        <p class="card-text">This role will be remote until May 2022 or when the Google office in Pune opens, (whichever is earlier).</p>
                                                        <div class="job_details">
                                                                        <a href="/Jobs-details" class="card-link">More</a>
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
                                                                                <img src="img/microsoft.svg" alt="">
                                                                                <h5 class="card-title">Cloud Engineer, Machine Learning and Big Data</h5>
                                                                </div>
                                                        <h6 class="card-subtitle mb-2 text-muted">Computer Science</h6><hr>
                                                        <p class="card-text">This role will be remote until May 2022 or when the Google office in Pune opens, (whichever is earlier).</p>
                                                        <div class="job_details">
                                                                        <a href="/Jobs-details" class="card-link">More</a>
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
                                                                                <img src="img/linux.png" alt="">
                                                                                <h5 class="card-title">Cloud Engineer, Machine Learning and Big Data</h5>
                                                                </div>
                                                        <h6 class="card-subtitle mb-2 text-muted">Computer Science</h6><hr>
                                                        <p class="card-text">This role will be remote until May 2022 or when the Google office in Pune opens, (whichever is earlier).</p>
                                                        <div class="job_details">
                                                                        <a href="/Jobs-details" class="card-link">More</a>
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


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</body>
</html>

@endsection
