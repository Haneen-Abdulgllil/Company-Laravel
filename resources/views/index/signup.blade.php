@extends('include.master')
@section('pages')
<!-- ***************************************** -->
            <div class="container">
                <div class="d-flex justify-content-center h-75">
                        <div class="card">
                                <div class="card-header">
                                        <h3> Create Account</h3>
                                        <div class="d-flex justify-content-end social_icon">
                                                <span><i class="bi bi-facebook"></i></span>
                                                <span><i class="bi bi-google"></i></span>
                                                <span><i class="bi bi-twitter"></i></span>
                                        </div>
                                </div>
                                <div class="card-body">
                                        <form action="dashboard/personal.html">
                                                <div class="input-group form-group mb-3">
                                                        <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="First name">

                                                </div>

                                                <div class="input-group form-group mb-3">
                                                        <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="last name">

                                                </div>


                                                <div class="input-group form-group mb-3">
                                                        <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Email">

                                                </div>

                                                <div class="input-group form-group mb-3">
                                                        <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                                                        </div>
                                                        <input type="password" class="form-control" placeholder="Password">
                                                </div>




                                                <div class="form-group">
                                                        <a href="dashboard/personal.html"> <input type="submit" value="sign in" class="btn float-right login_btn"></a>
                                                </div>
                                        </form>
                                </div>
                                <div class="card-footer">
                                        <div class="d-flex justify-content-center">
                                                <a href="sign-up.html">Sign up</a>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>

<!-- ****************************************************************88 -->


</body>
</html>
@endsection
